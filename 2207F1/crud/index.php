<?php
include('connection.php');
session_start();

if(isset($_POST['btn_submit'])){
    $u_name = $_POST['user_name'];
    $u_email = $_POST['user_email'];
    $user_img = $_FILES['user_img'];
    $img_name = $_FILES['user_img']['name'];
    $temp_name = $_FILES['user_img']['tmp_name'];
   $image = 'img/' . $img_name;
    move_uploaded_file($temp_name,$image);

   $_SESSION['username'] = $u_name;
// session_unset();
// session_destroy();
    $insert_query = "INSERT INTO `tbl_user`(`u_name`, `u_email`,`u_img`) VALUES ('$u_name','$u_email','$image')";
    $run_query = mysqli_query($conn,$insert_query);
    if($run_query){
        echo "<script>alert('data inserted') </script>";
        header('location:list.php');
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <?php
include('navbar.php');
    ?>

    <div class="container">
        <br>
        <br>
<?php
print_r($_SESSION['username']);

?>
        <form method="POST" action="" enctype="multipart/form-data">
            <h2>Maintain Form</h2>
            <div class="mb-3">
                <label for="">User Name</label>
                <input type="text" class="" name="user_name">
            </div>
            <div>
                <label for="">User Email</label>
                <input type="text" class="" name="user_email">
            </div>
            <br>
            <div>
                <label for="">Upload image</label>
                <input type="file" class="" name="user_img">
            </div>
            <input type="submit" value="save" class="btn btn-success" name="btn_submit">
        </form>
    </div>
</body>

</html>