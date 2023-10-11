<?php 
include('connection.php');
 $id=$_GET['id'];
$select_query = "SELECT * FROM tbl_school WHERE id= '$id'";
$run_query = mysqli_query($conn,$select_query);
$fetch_data = mysqli_fetch_array($run_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form class="container" method="post" action="">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input value="<?php echo $fetch_data['name']?>" type="text" name="fname" class="form-control" >
        </div>
        <div class="mb-3">
          <label  class="form-label">Address</label>
          <input type="text" class="form-control" value="<?php echo $fetch_data['email']?>" name="address" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="update" class="btn btn-primary">Submit</button>
      </form>
      <?php
      if (isset($_POST['update'])){
        $fname =  $_POST['fname'] ;
         $address = $_POST['address'];
  
  $update = "UPDATE `tbl_school` SET `name`='$fname',`email`='$address' WHERE id='$id'";
  
  $run = mysqli_query($conn, $update);
      
  if($run){
   header("location:table.php");
  }
  }
      
      ?>
</body>
</html>