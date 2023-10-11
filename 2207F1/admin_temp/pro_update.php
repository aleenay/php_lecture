<?php
include('connection.php');
$fetch_query = "SELECT * FROM `tbl_category`";
$run_q = mysqli_query($conn,$fetch_query);
$id=$_GET['id'];
$select_query = "SELECT * FROM tbl_product WHERE p_id= '$id'";
$run_query = mysqli_query($conn,$select_query);
$fetch_data = mysqli_fetch_array($run_query);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include('sidebar.php');

        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
        include('topbar.php');

        ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Update Product <a href="viewproducts.php"
                            class="btn btn-primary">View Product</a></h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update products</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" value="<?php echo $fetch_data['p_name']?>" name="p_name"
                                        class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="text" name="p_price" value="<?php echo $fetch_data['p_price']?>"
                                        class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product description</label>
                                    <input type="text" name="p_des" value="<?php echo $fetch_data['p_description']?>"
                                        class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Image</label>
                                    <input type="file" name="p_img" value="<?php echo $fetch_data['p_img']?>" class="form-control">

                                </div>
                                <div>
                                <img src="<?php echo $fetch_data['p_img'];  ?>" alt="" style="width:100px;"> 
                                    </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Category</label>
                                    <select name="p_cat"  id=""
                                        class="form-control">
                                        <?php
                                    while($data = mysqli_fetch_array($run_q)){
                                        ?>

                                        <option value="<?php echo $data['c_id'] ?>"
                                         <?php if($data['c_id'] == $fetch_data['cat_id']) echo "selected"; ?> > 
                                        <?php echo $data['c_name'] ?>
                                        </option>
                                        <?php
                                                }
                                                    ?>
                                    </select>

                                </div>
                                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <?php
      if (isset($_POST['update'])){
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_des = $_POST['p_des'];
        $p_cat = $_POST['p_cat'];
  
  $update = "UPDATE `tbl_product` SET `p_name`='$p_name',`p_price`='$p_price',`p_description`='$p_des',`cat_id`='$p_cat' WHERE `p_id`= '$id'";
  
  $run = mysqli_query($conn, $update);
      
  if($run){
   header("location:viewproducts.php");
  }
  }
      
      ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>