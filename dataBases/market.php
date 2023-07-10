<?php

if(isset($_GET['create_table'])){
    create_table();
}

if(isset($_POST['title']) && isset($_GET['new'])){
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $author = $_SESSION['user_id'];
    if(insert_into_market($title,$author,$amount,$price)){
        return true;
    }
    return false;
}

if(isset($_POST) && isset($_GET['edit'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    if(update_market_item($id,$title,$amount,$price,$status)){
        return true;
    }
    return false;
}
/* 
 * market table structure
    * id (internal identity)
    * title (the title of the market item eg. 1000 points for 10$)
    * user_id (the user who created the market item)
    * amount (the amount of points to be sold)
    * price (the price of the market item)
    * date (the date the market item was created)
    * status (pending, approved, rejected, sold, deleted)
 */

global $conn;
require_once 'conn.php';


    function create_table(){
        global $conn;
        mysqli_query($conn,"CREATE TABLE market IF NOT EXISTS (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            user_id INT(6) NOT NULL,
            amount INT(6) NOT NULL,
            price INT(6) NOT NULL,
            date VARCHAR(30) NOT NULL,
            status VARCHAR(30) NOT NULL)"
        );
    }

    function insert_into_market($title,$author,$amount,$price){
        global $conn;
        $date = date('Y-m-d H:i:s');
        $query = mysqli_query($conn,"INSERT INTO market (title,user_id,amount,price,date,status) VALUES ('$title',$author,'$amount','$price','$date', 'pending')");
        if($query){
            return true;
        }
        return false;
    }

    function update_market_item($id,$title,$amount,$price,$status){
        global $conn;
        $query = mysqli_query($conn,"UPDATE market SET title = '$title', amount = '$amount', price = '$price' , status = '$status' WHERE id = '$id'");
        if($query){
            return true;
        }
        return false;
    }

    function delete_market_item($id){
        global $conn;
        $market_item = get_market_item($id);
        $amount = $market_item->amount;
        $query = mysqli_query($conn,"DELETE FROM market WHERE id = '$id'");
        if($query){
            
            return true;
        }
        return $amount;
    }

    function get_market_item($id){
        global $conn;
        $item = mysqli_query($conn,"SELECT * FROM market WHERE id = '$id'");
        return $item->fetch_object();
    }

    function get_market_items($key='status',$value='approved',$per_page=10,$page=1){
        global $conn;
        $items = mysqli_query($conn,"SELECT * FROM market WHERE $key LIKE '$value' ORDER BY date DESC");
        if(! $items){
            return false;
        }
        return $items->fetch_all(MYSQLI_ASSOC);
    }
    function item_sold($id){
        global $conn;
        $query = mysqli_query($conn,"UPDATE market SET status = 'sold' WHERE id = '$id'");
        if($query){
            return true;
        }
        return false;
    }
    function get_market_items_count($key='status',$value='approved'){
        global $conn;
        $items = mysqli_query($conn,"SELECT * FROM market WHERE $key LIKE '$value'");
        if(! $items){
            return false;
        }
        return $items->num_rows;
    }
    function get_market_items_statuses(){
        return array('pending','approved','rejected','sold','deleted');
    }