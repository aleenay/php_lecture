<?php 
include('connection.php');
 $id=$_GET['id'];
$select_query = "SELECT * FROM tbl_product WHERE p_id= '$id' " ;
$run_query = mysqli_query($con,$select_query);
$fetch_data = mysqli_fetch_array($run_query);

$fetch_query = "SELECT * from tbl_category";
$run_query= mysqli_query($con,$fetch_query);
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
    <form class="container" method="post" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input value="<?php echo $fetch_data['p_name']?>" type="text" name="p_name" class="form-control" >
        </div>
     <div class="mb-3 col-lg-6">
        <label  class="form-label">Product Descrption</label>
        <input type="text"  value="<?php echo $fetch_data['p_des']?>" class="form-control" name="p_des">
    </div>
    <div class="mb-3 col-lg-6">
        <label  class="form-label">Product Price</label>
        <input type="number"  value="<?php echo $fetch_data['p_price']?>" class="form-control" name="p_price">
    </div>
    <div class="mb-3 col-lg-6">
        <label  class="form-label">Product Image</label>
       
        <input type="file" value="<?php echo $fetch_data['p_img']?>" class="form-control" name="p_img">
    </div>
    <div class="mb-3 col-lg-6">
    <label  class="form-label">Select Category</label>
    <select class="form-select" name="p_cat" >
    <?php while($dataFetch = mysqli_fetch_array($run_query)){ ?>
  <option value="<?php echo $dataFetch['cat_id'];?>" <?php if($dataFetch['cat_id'] ==  $fetch_data['cat_id']) echo 'selected'; ?> > <?php echo $dataFetch['cat_name'] ;?></option>
    <?php } ?>
</select>
  </div>
        <button type="submit" name="update" class="btn btn-primary">Submit</button>
      </form>
      <?php
      if (isset($_POST['update'])){
        $p_name =  $_POST['p_name'] ;
   $p_des = $_POST['p_des'];
   $p_price = $_POST['p_price'];
   $p_cat = $_POST['p_cat'];
   $p_img = $_FILES['p_img'];
   $file_name = $_FILES['p_img']['name'];
   $temp_name = $_FILES['p_img']['tmp_name'];
    $image = 'img/'.$file_name;
   move_uploaded_file($temp_name,$image);
      
  
      if($file_name != ""  ){
        $update = "UPDATE `tbl_product` SET `p_name`='$p_name',`p_des`='$p_des',`p_price`='$p_price',`p_img`='$image',`cat_id`='$p_cat' WHERE  p_id= '$id'";
        $run = mysqli_query($con, $update);
        header("location:viewproduct.php");
      }
      else{
        $fileimg = $fetch_data['p_img'];
        $update = "UPDATE `tbl_product` SET `p_name`='$p_name',`p_des`='$p_des',`p_price`='$p_price',`p_img`='$fileimg',`cat_id`='$p_cat' WHERE  p_id= '$id'";
        $run = mysqli_query($con, $update);
        header("location:viewproduct.php");
      }
  }
      
      ?>
</body>
</html>