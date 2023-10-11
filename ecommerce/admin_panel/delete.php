<?php 
include('connection.php');
$id = $_GET['id'];
$delete_query = "DELETE FROM `tbl_product` WHERE p_id='$id'";
$run_query = mysqli_query($con, $delete_query);
if($run_query){
    header("location:viewproduct.php");
}
else {
    echo "not deleted";
}

?>