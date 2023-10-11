<?php 
include('connection.php');
if(isset($_POST['submit'])){
$username = $_POST['uname'];
$useremail = $_POST['uemail'];
$insert_query = "INSERT INTO `tbl_user`(`name`, `email`) VALUES ('$username','$useremail')";
$run_query = mysqli_query($con,$insert_query);
if($run_query){
    echo '<script>alert("successfully uploaded")</script> ';
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<br>
<br>
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" class="form-control" name="uname" >
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Email</label>
    <input type="text" name="uemail" class="form-control" >
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  ></script>
</body>
</html>