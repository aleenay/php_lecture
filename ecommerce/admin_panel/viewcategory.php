<?php
include("connection.php");
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>
img{
    width:100px
}
table tr th,td {
    vertical-align:middle;
    text-align:center;
}
</style>
</head>
<body>
<div id="wrapper">

<!-- Sidebar -->
<?php include('header.php'); ?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
<?php include('topbar.php'); ?>
       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
                <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" >
  <thead>

    <tr>
      <th scope="col">Category ID</th>
      <th scope="col">Category Name</th>
   

      <!-- <th scope="col" colspan="2">Action</th> -->
    </tr>
  </thead>
  <tbody>  
  <?php while ($row = mysqli_fetch_array($run_query)) {?>
    <tr>
      
      <td> <?php echo $row['cat_id']?> </td>
      <td><?php echo $row['cat_name']?></td>
     
      <!-- <td colspan="2">
      <a class="btn btn-success" href="updateproduct.php?id=<?php echo $row['p_id'] ?>">Edit</a>
      <a class="btn btn-danger" onclick="return confirm('are you sure? you want to delete')" href="delete.php?id=<?php echo $row['p_id'] ?>">Delete</a>

      </td> -->

    </tr>
  <?php    } ?>
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
   <?php include('footer.php'); ?>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<div class="container-fluid">


<br>


</div>
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>