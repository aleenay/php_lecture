<?php
session_start();
include('connection.php');
if(isset($_POST['id'])){
$user_id = $_SESSION['first_id']; 
$music_file = $_POST['music_file'];
$music_name = $_POST['music_name'];
$music_id = $_POST['id'];
$user_id = $_SESSION['first_id'];
$insert_fav = "INSERT INTO `tbl_favourites`(`user_id`, `saved_songs`, `music_id`, `music_title`) VALUES ('$user_id','$music_file','$music_id','$music_name')";
$insert_fav_run = mysqli_query($con , $insert_fav);
if($insert_fav_run){
    header("location:id.php?id=$user_id");
}
else {
    header("location:id.php?id=$user_id");
}
}





?>