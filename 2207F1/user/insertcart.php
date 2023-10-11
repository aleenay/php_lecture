<?php
include('connection.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    

    if(isset($_POST['add_to_cart'])){
        $p_id = $_POST['p_id'];
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];

        $_SESSION['cart_bag'][] = array(
            'pro_id' => $p_id,
            'pro_name' => $p_name,
            'pro_price' => $p_price,

        );
        echo '<pre>';
        print_r($_SESSION['cart_bag']);
        echo '</pre>';
    
    }
}



?>