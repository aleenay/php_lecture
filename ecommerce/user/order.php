<?php
session_start();

include('connection.php');
print_r($_SESSION['cart_pro']);
if(isset($_SESSION['cart_pro'])){
    // echo $p_name . $p_price . $p_price ;
    date_default_timezone_set("Asia/Karachi");
    $time = date("h:i:sa");
    $query_i_order = "INSERT INTO `tbl_order`(`order_time`, `user_id`) VALUES ($time,'1')";
    $query_i_order_run = mysqli_query($con,$query_i_order);
$last_row = mysqli_insert_id($con);
      echo $last_row;
    foreach($_SESSION['cart_pro'] as $value){
     $p_name =   $value['p_name'];
     $p_price =   $value['p_price'];
    // $is_
    $query_i_items = "INSERT INTO `tbl_items_cart`( `item_name`, `item_price`, `o_id`) VALUES ('$p_name','$p_price','$last_row')";
    $query_i_items_run = mysqli_query($con,$query_i_items);

    }
  

    
}


?>