<?php


require_once 'conn.php';

function create_tables(){
    global $conn;
    mysqli_query($conn,"CREATE TABLE users IF NOT EXISTS (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        status INT(6) NOT NULL,
        role VARCHAR(30) NOT NULL,
        status VARCHAR(30) NOT NULL)"
    );
    mysqli_query($conn,'CREATE TABLE usermeta IF NOT EXISTS (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(6) NOT NULL,
        meta_key VARCHAR(255) NOT NULL,
        meta_value VARCHAR(255) NOT NULL)'
    );
}

function login($username,$password){
    global $conn;
    $query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' or email = '$username'");
    if(mysqli_num_rows($query) > 0){
        $user = $query->fetch_object();
        $passwrod = md5($password);
        $user_password =  $user->password;
        $login = $passwrod == $user_password ? true : false;
        
        if($login){
            $token = md5(random_int(0,1000000000));
            update_user_meta($user->id,'token',$token);
            $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
            update_user_meta($user->id,'ip',$ip);
            setcookie('token',$token,time() + 3600 * 24 * 30,'/');
            return true;
        }
    }
    return false;
}
function logout(){
    global $conn;
    $token = isset($_COOKIE['token']) ? $_COOKIE['token'] : false;
    if($token){
        $user = mysqli_query($conn,"SELECT * FROM usermeta WHERE meta_key = 'token' AND meta_value = '$token'");
        $user = $user->fetch_object();
        if($user){
            update_user_meta($user->user_id,'token','');
            setcookie('token','',time() - 3600 * 24 * 30,'/');
            return true;
        }
    }
    return false;
}
function register($username,$mobile,$email,$password){
    global $conn;
    $password = md5($password);
    $query = mysqli_query($conn,"INSERT INTO users (username,password,email,status,role) VALUES ('$username','$password','$email','0','user')");
    if($query){
        $user_id = mysqli_insert_id($conn);
        update_user_meta($user_id,'mobile',$mobile);
        $token = md5(random_int(0,1000000000));
        update_user_meta($user_id,'activation_key',$token);
        require_once 'admin_mail.php';
        require_once 'options.php';
        $url = get_options('url');
        $login_message = get_options('activation_message');
        $mail = send_email($email,'Activation Key',"<p> $login_message</p><a href=http://$url/user/activate.php?key=$token>activate your account</a>");
        return true;
    }
    return false;
}

function get_user_meta($user_id,$meta = null){
    global $conn;
    if($meta != null){
        $user = mysqli_query($conn,"SELECT * FROM usermeta WHERE user_id = '$user_id' AND meta_key = '$meta'");
        $user = $user->fetch_object();
        if($user){
        return $user->meta_value;
        }else{
            return false;
        }
    }
        $user = mysqli_query($conn,"SELECT * FROM usermeta WHERE user_id = '$user_id'");
        return $user->fetch_all(MYSQLI_ASSOC);
}
function update_user_meta($user_id,$meta,$value){
    global $conn;
    $num_rows = mysqli_query($conn,"SELECT * FROM usermeta WHERE user_id = '$user_id' AND meta_key = '$meta'");
    if($num_rows){
        $num_rows = $num_rows->num_rows;
        $exist =  $num_rows > 0 ? true : false;
    }
    $exist = isset($exist) ? $exist : false;
    if($exist){
        $query = mysqli_query($conn,"UPDATE usermeta SET meta_value='$value' WHERE user_id='$user_id' AND meta_key='$meta'");
        return $query;
    }
    $query = mysqli_query($conn,"INSERT INTO usermeta (user_id , meta_key, meta_value) VALUES ('$user_id','$meta','$value')");
    return $query;
}
function delete_user_meta($user_id,$meta){
    global $conn;
    $query = mysqli_query($conn,"DELETE FROM usermeta WHERE user_id = '$user_id' AND meta_key = '$meta'");
    return $query;
}
function current_user(){
    $token = isset($_COOKIE['token']) ? $_COOKIE['token'] : false;
    if(!$token){
        return false;
    }
    global $conn;
    $user = mysqli_query($conn,"SELECT * FROM usermeta WHERE meta_key = 'token' AND meta_value = '$token'");
    $user = $user->fetch_object();
    if($user){
        $user_id = $user->user_id;
        $user = mysqli_query($conn,"SELECT * FROM users WHERE id = '$user_id'");
        $user = $user->fetch_object();
        return $user;
    }
    return false;
}