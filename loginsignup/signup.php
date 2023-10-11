<?php
include('connection.php');
if(isset($_POST['signup'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
$user_insert_data = "INSERT INTO `tbl_user`( `user_name`, `user_email`, `user_password`) VALUES ('$name','$email','$password')";
$run = mysqli_query($conn,$user_insert_data);
if($run){
header('location:login.php');
}
else{
  die();
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form class="container" method="post" action="">
    <br>
    <h2>login form</h2>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
          <label  class="form-label">email</label>
          <input type="text" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="signup" class="btn btn-primary">sign up</button>
      </form>
      
</body>
</html>