<?php

require_once 'conn.php';

function create_table(){
    global $conn;
    mysqli_query($conn,"CREATE TABLE wallet IF NOT EXISTS (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(6) NOT NULL,
        currency VARCHAR(255) NOT NULL,
        amount INT(6) NOT NULL,
        date VARCHAR(30) NOT NULL)"
    );
    require_once 'options.php';
    $currencies = set_option('currencies','points,dollar');
    return $currencies;
}

function currencies(){
    require_once 'options.php';
    $currencies = get_options('currencies');
    $currencies = explode(',',$currencies);
    return $currencies;
}

function insert_currencies($currency,$del_old = false){
    require_once 'options.php';
    $currencies = get_options('currencies');
    if($del_old){
        $currencies = $currency;
    }
    else{
        $currencies .= ','.$currency;
    }
    return set_option('currencies',$currencies); 
}


function insert_into_wallet($user_id,$currency,$amount){
    global $conn;
    $date = date('Y-m-d H:i:s');
    $query = mysqli_query($conn,"INSERT INTO wallet (user_id,currency,amount,date) VALUES ('$user_id','$currency','$amount','$date')");
    if($query){
        return true;
    }
    return false;
}

function get_transactions($user_id,$currency = '',$limit = 10,$offset = 0){
    global $conn;
    if($currency == ''){
        $transactions = mysqli_query($conn,"SELECT * FROM wallet WHERE user_id = '$user_id' LIMIT $limit OFFSET $offset");
    }
    else{
        $transactions = mysqli_query($conn,"SELECT * FROM wallet WHERE user_id = '$user_id' AND currency = '$currency' LIMIT $limit OFFSET $offset");
    }
    return $transactions;
}

function get_transactions_count($user_id,$currency = ''){
    global $conn;
    if($currency == ''){
        $transactions = mysqli_query($conn,"SELECT * FROM wallet WHERE user_id = '$user_id'");
    }
    else{
        $transactions = mysqli_query($conn,"SELECT * FROM wallet WHERE user_id = '$user_id' AND currency = '$currency'");
    }
    return $transactions->num_rows;
}

function total_in_wallet($user_id,$currency){
    global $conn;
    $transactions = mysqli_query($conn,"SELECT * FROM wallet WHERE user_id = '$user_id' AND currency = '$currency'");
    $total = 0;
    while($transaction = $transactions->fetch_object()){
        $total += $transaction->amount;
    }
    return $total;
}
?>