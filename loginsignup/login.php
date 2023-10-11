<?php
include('connection.php');
session_start();

if(isset($_POST['login'])){
  $uname = $_POST['username'];
  $pwd = $_POST['password'];
  $authanticate = "SELECT * FROM `tbl_user` WHERE `user_name` ='$uname' AND `user_password` = '$pwd'";
  $run = mysqli_query($conn , $authanticate);
  if(mysqli_num_rows($run)>0){
    $_SESSION['username'] = $uname;
    $_SESSION['password'] = $pwd;
    header("location:index.php");

  }
  else{
    echo '<script>alert("invalid username or password")</script>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form class="container" method="post" action="">
    <br>
    <h2>login form</h2>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" >
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="login" class="btn btn-primary">login</button>
      </form>
      
</body>
</html>