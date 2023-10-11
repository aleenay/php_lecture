<?php
include('connection.php');
if(isset($_POST['btnSubmit'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $insert_query = "INSERT INTO `tbl_product`( `p_name`, `p_price`) VALUES ('$p_name','$p_price')";
    $runquery = mysqli_query($conn,$insert_query);
    if($runquery){
        header('location:viewproduct.php');
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
include('header.php');

?>
<div class="container mt-5">


<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" name="p_name" class="form-control" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Product Price</label>
    <input type="text" name="p_price" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>