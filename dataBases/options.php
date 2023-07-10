<?php


require_once 'conn.php';

function get_options($key){
    global $conn;
    $options = mysqli_query($conn,"SELECT * FROM options WHERE `key` = '$key'");
    if(! $options || $options->num_rows == 0){
        return '';
    }
    return $options->fetch_object()->value;
}

function set_option($key,$value){
    global $conn;
    $value = str_replace("'","\'",$value);
    $value = str_replace('"','\"',$value);
    $options = mysqli_query($conn,"SELECT * FROM options WHERE `key` = '$key'");
    if($options->num_rows > 0){
        mysqli_query($conn,"UPDATE options SET value = '$value' WHERE `key` = '$key'");
        return true;
    }else{
        mysqli_query($conn,"INSERT INTO options (`key`,value) VALUES ('$key','$value')");
        return true;
    }
    return false;
}