<?php
session_start();
 if(isset($_POST['update_cart'])){

    $id= $_POST['p_id'];
    
    $update_qty = $_POST['update_qty'];
    foreach($_SESSION['cart_pro'] as  $value){
        $_SESSION['cart_pro']['p_qty'] = array(
            $value['p_qty'] = $update_qty 
    
        );
    // if($id == $value['p_id'])
    // 	{
    // 		$value['p_qty'] = $update_qty;
    // 	}
        print_r($value['p_qty']);
    }
    // echo $update_qty ;
    // echo $id ;
    
    
    //     foreach($_SESSION['cart_pro'] as $key => $value){
    //     $_SESSION['cart_pro'][$key] = array(
            // $value['p_qty'] = $update_qty ;
    
        // );
          
        
     }


?>