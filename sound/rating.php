<?php
session_start();
include('connection.php');
// if(isset($_POST['ratings'])){
$rating_value = $_POST['hidden_id']; 
$selectquery = "SELECT * FROM `tbl_reviews` WHERE `id` = '$rating_value'";
$run_q = mysqli_query($con,$selectquery);
$fetch_data = mysqli_fetch_array($run_q);
$_SESSION['rating'] = $rating_value;
// echo $_SESSION['rating'];
// }
//  $_POST['edit'] = 1; 
if(isset($_POST['edit'])){

    // $hidden_id = $_POST['reviews_ids'];  
    $message = $_POST['message'];
    $star = $_POST['star'];
    // $rating = $_SESSION['rating']; 
    $date = date('Y-m-d');
    // $insertquery ="UPDATE `tbl_reviews` SET `date`='$date',`message`='$message',`rating`='$star' WHERE `id` = '$rating_value'";   \
    $update_q = "UPDATE `tbl_reviews` SET `date`='$date',`message`='$message',`rating`='$star' WHERE `id` = '$rating_value'";
    $insertquery_run = mysqli_query($con,$update_q);
    if($insertquery_run){
       $music_name = $_SESSION['music_names'];
       $artist_name = $_SESSION['artists_id'];
        header("location:details.php?music_name=$music_name&&artist_id=$artist_name#contact-form");
    }
}
?>