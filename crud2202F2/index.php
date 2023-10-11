<?php 
include('connection.php');
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
$query_insert = "INSERT INTO `tbl_school`( `name`, `email`) VALUES ('$fname','$email')";
$run = mysqli_query($con,$query_insert);
if($run){
    header("location:list.php");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<form class="container mt-5" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="fname" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control"  name="email">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>