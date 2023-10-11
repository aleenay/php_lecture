<?php 
include('connection.php');
$id = $_GET['id'];
$delete_query = "DELETE FROM `tbl_school` WHERE id='$id'";
$run_query = mysqli_query($conn, $delete_query);
if($run_query){
    header("location:table.php");
}
else {
    echo "not deleted";
}

?>