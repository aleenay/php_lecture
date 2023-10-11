<?php 
$conn = mysqli_connect("localhost","root","","db_batch2207f1") or die('connection fail'); 
if(isset($_POST['u_id'])){
$u_id = $_POST['u_id'];
    $del_query = "DELETE FROM `tbl_user` WHERE `user_id` ='$u_id' ";
  

    $run = mysqli_query($conn,$del_query);
    if($run){
        echo 1;
        exit();
    }
}




?>