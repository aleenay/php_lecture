<?php
session_start();


session_unset();


session_destroy();
if(!isset($_SESSION['user_email'])){
    header('Location:login.php');
}




?>