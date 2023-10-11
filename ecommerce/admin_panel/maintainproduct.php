<?php
include('connection.php');
$fetch_query = "SELECT * from tbl_category";
$run_query= mysqli_query($con,$fetch_query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
 <!-- Custom fonts for this template -->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  </head>
<body>

    <div id="wrapper">
<!-- Content Wrapper -->
<?php 
include('header.php');
?>
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
<?php 
               include('topbar.php');
               ?>
  <div class="container-fluid">
   
   <!-- DataTales Example -->
    <div class="card shadow mb-4">
          <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Maintain Products</h6>
          </div>
        <div class="card-body">
        <div class="container-fluid">
      

      <form class="row" method="post" enctype="multipart/form-data">
          <div class="mb-3 col-lg-6">
            <label  class="form-label">Products Name</label>
            <input type="text" class="form-control" name="p_name" >
          </div>
          <div class="mb-3 col-lg-6">
            <label  class="form-label">Product Descrption</label>
            <input type="text" class="form-control" name="p_des">
          </div>
          <div class="mb-3 col-lg-6">
            <label  class="form-label">Product Price</label>
            <input type="number" class="form-control" name="p_price">
          </div>
          <div class="mb-3 col-lg-6">
            <label  class="form-label">Product Image</label>
            <input type="file" class="form-control" name="p_img">
          </div>
          <div class="mb-3 col-lg-12">
            <label  class="form-label">Select Category</label>
            <select class="form-select" name="p_cat">
            <?php while($dataFetch = mysqli_fetch_array($run_query)){ ?>
          <option value="<?php echo $dataFetch['cat_id'] ?>"> <?php echo $dataFetch['cat_name'] ?></option>
            <?php } ?>
        </select>
          </div>
          <div class="row">
          <div class="col-lg-12">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
          </div>
      </form>
    </div>
    </div>
  </div>
</div>
      
    </div>
    </div>
    <div>
    <?php
if (isset($_POST['submit'])){
   $p_name =  $_POST['p_name'] ;
   $p_des = $_POST['p_des'];
   $p_price = $_POST['p_price'];
   $p_cat = $_POST['p_cat'];
   $p_img = $_FILES['p_img'];
   $file_name = $_FILES['p_img']['name'];
   $temp_name = $_FILES['p_img']['tmp_name'];
    $image = 'img/'.$file_name;
   move_uploaded_file($temp_name,$image);

$insert = "INSERT INTO `tbl_product`( `p_name`, `p_des`, `p_price`, `p_img`, `cat_id`) VALUES ('$p_name','$p_des','$p_price','$image','$p_cat')";

$run = mysqli_query($con, $insert);

if($run){
header("location:maintainproduct.php");
}
}

?>

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>