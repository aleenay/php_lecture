<?php
include('connection.php');
     session_start(); 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

     $p_id = $_POST['p_id'];
         $p_name = $_POST['hidden_pname'];
         $p_price = $_POST['hidden_pprice'];
         $p_qty = $_POST['qty'];
    
         if(isset($_POST['add_to_cart'])){
            if(isset($_SESSION['cart_pro'])){

          
        $check_product = array_column($_SESSION['cart_pro'],'p_id'); //return true and false
        if(in_array($p_id , $check_product)){ //if exists product id in session 
            echo "<script>alert('product already added');
            window.location.href ='shop.php';
            </script>";
            $p_qty;
        }
       else{
        $_SESSION['cart_pro'][] = array(
            'p_id' => $p_id,
            'p_name' => $p_name,
            'p_price' => $p_price,
            'p_qty' =>   $p_qty

        );
        
        header('location:viewcart.php');
        // print_r($_SESSION['cart_pro']);
       }  
    }
    else{
        $_SESSION['cart_pro'][] = array(
            'p_id' => $p_id,
            'p_name' => $p_name,
            'p_price' => $p_price,
            'p_qty' =>   $p_qty

        );
        
        header('location:viewcart.php');
    }
        
    }
}

// session_destroy();

    ?>