<?php
include('../connection.php');
$getid = $_GET['id'];

$delete_query = "DELETE FROM `tbl_video` WHERE `id` = '$getid'";
$delete_query_run = mysqli_query($con,$delete_query);

if($delete_query_run){ 
    header('location:showvideo.php');
}


?>