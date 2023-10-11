<?php
include('connection.php');
if (isset($_POST['submit'])){
    $username =  $_POST['username'] ;
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
   
    
 
 $insert = "INSERT INTO `tbl_users`(`user_name`, `user_password`, `user_phone`, `user_email`) VALUES ('$username','$password','$phoneno','$email')";
 
 $run = mysqli_query($con, $insert);
 
 if($run){
 header("location:shop.php");
 }
 }

?>