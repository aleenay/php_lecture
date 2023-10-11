<?php 
include('connection.php');
$id = $_GET['id'];
$query_delete = "DELETE FROM `tbl_user` WHERE id = '$id'";
$run = mysqli_query($con,$query_delete);
if($run){
    header('location:list.php');
}



?>