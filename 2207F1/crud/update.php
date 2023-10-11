<?php
include('connection.php');
$id = $_GET['id'];
$selected_data = "SELECT * FROM `tbl_user` WHERE `u_id` = '$id'";
$run_q = mysqli_query($conn,$selected_data);
$data = mysqli_fetch_array($run_q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <label for="">User Name</label>
    <input value="<?php echo $data['u_name']; ?>" type="text" class="" name="user_name"> <br>
    <label for="">User Email</label>
    <input  value="<?php echo $data['u_email']; ?>" type="text" class="" name="user_email">
    <input type="submit" value="update" name="btn_update">
    </form>
    <?php
if(isset($_POST['btn_update'])){
    $u_name = $_POST['user_name'];
    $u_email = $_POST['user_email'];
    $update_query = "UPDATE `tbl_user` SET `u_name`='$u_name',`u_email`='$u_email' WHERE `u_id` = '$id'";
    $run_query = mysqli_query($conn,$update_query);
    if($run_query){
        echo "<script>alert('updated data inserted') </script>";
        header('location:list.php');
    }
}
?>
</body>
</html>