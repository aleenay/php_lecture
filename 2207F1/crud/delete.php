<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$delete_query = "DELETE FROM `tbl_user` WHERE `u_id` = '$id'";
$run_q = mysqli_query($conn,$delete_query);
if($run_q){
    
    header('location:list.php');
   
}

?>