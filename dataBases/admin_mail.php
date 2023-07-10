<?php

require_once 'conn.php';

function create_table(){
    global $conn;
    mysqli_query($conn,"CREATE TABLE admin_mail IF NOT EXISTS (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(6) NOT NULL,
        title VARCHAR(255) NOT NULL,
        message VARCHAR(255) NOT NULL,
        date VARCHAR(30) NOT NULL,
        status VARCHAR(30) NOT NULL)"
    );
}

function send_email($to_email,$title,$message){
    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $url = get_options('admin_email');
    $headers[] = 'From: Admin <'.$url.'>';
    $mail = mail($to_email,$title,$message,implode("\r\n", $headers));
    if($mail){
        global $conn;
        $date = date('Y-m-d H:i:s');
        $query = mysqli_query($conn,"INSERT INTO admin_mail (user_id,title,message,date,status) VALUES (0,'$title','$message','$date','sent')");
        if($query){
            return true;
        }
        $query = mysqli_query($conn,"INSERT INTO admin_mail (user_id,title,message,date,status) VALUES (0,'$title','$message','$date','failed')");
        return true;
    }
    return false;
}
function get_mail($id = 0){
    global $conn;
    if($id == 0){
        $mail = mysqli_query($conn,"SELECT * FROM admin_mail");
        return $mail->fetch_object();
    }
    $item = mysqli_query($conn,"SELECT * FROM admin_mail WHERE id = '$id'");
    return $item->fetch_object();
}
?>