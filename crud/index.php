<?php 
include('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST['fname'])){
  $fname_error = "Please Enter user name";
}
else if(empty($_POST['address'])){
  $address_error = "Please Enter address name";
}
else if(empty($_FILES['img']['name'])){
  $img_error = "Please Enter user name";
}
else{


if (isset($_POST['submit'])){
      $fname =  $_POST['fname'] ;
       $address = $_POST['address'];
    $img = $_FILES['img'];
    $file_name = $_FILES['img']['name'];

    $full_path = $_FILES['img']['full_path'];
    $type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];

    $image = 'img/'.$file_name;
  move_uploaded_file($tmp_name,$image);

   

$insert = "INSERT INTO `tbl_school`(`name`, `email`,`image`) VALUES ('$fname','$address','$image')";

$run = mysqli_query($conn, $insert);
	
if($run){
 header("location:table.php");
}
}
}
}
?>







<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
// include('header.php');
  ?>
    <br>

    <form class="container" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="fname" class="form-control">
            <span><?php echo $fname_error; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
            <span><?php echo $address_error; ?></span>

        </div>
        <div class="mb-3">
            <label class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="img">
            <span><?php echo $img_error; ?></span>

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>