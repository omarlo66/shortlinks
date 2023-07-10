<?php


require_once '../databases/user.php';

if(! current_user()){
    header('location: /');
    exit();
}

$user = current_user()['id'];
$user = get_user($user);
if($user->active != 'active'){
    header('location: /actvate.php');
    exit();
}
