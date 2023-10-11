<?php
$conn = mysqli_connect("localhost","root","","db_batch2207f1") or die('connection fail'); 


if(isset($_POST['update'])){
    $u__id = $_POST['uid'];
    $fet_query = "SELECT * FROM `tbl_user` WHERE user_id ='$u__id'";
    $run_Q = mysqli_query($conn,$fet_query);
    $phpvar = mysqli_fetch_array($run_Q);
   
    $data = json_encode($phpvar); 
    print_r($data);
    }
?>