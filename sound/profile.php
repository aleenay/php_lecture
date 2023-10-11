<?php
session_start();
include('connection.php');

    $getid = $_SESSION['id'];

if(isset($_POST['submit_btn'])){
    $image = $_FILES['pic']['name'];
    $image_file_tmp = $_FILES['pic']['tmp_name'];
    $file_path = './profilepic/' .  $image;
    move_uploaded_file($image_file_tmp,$file_path);
    $insert_query = "UPDATE `tbl_user` SET `p_pic`='$file_path' WHERE `id` = '$getid'";
    $queryrun = mysqli_query($con , $insert_query);
    if($queryrun){
        header('location:login.php');
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set Profile Picture</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./img/core-img/favicon.ico">

    <style>
        .form-cont{
           margin-top:20%;
           
        }
        .column{
            /* background-color:#8080802e; */
            background-color:transparent;


        }
        .input{
            border:0;
            border-bottom:2px solid #f55656;
            background:transparent;
        }
        .small:hover{
              color:#f55656;
            border-bottom:2px solid #f55656;

        }
        .back{
            background-image: url(img/bg-img/1.jpg);
            background-position: cover;
            background-repeat: no-repeat;
 
        }
    </style>
<body class="back">


    <div class="container col-lg-8">
        <div class="row justify-content-center align-items-center form-cont">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="p-5 column">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Enter your Profile Picture !</h1>
                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="file" name="pic" class="form-control form-control-user input" placeholder="Enter Your Profile Picture" required>
                                        </div><br>

                                        <center>
                                        <input value="Set Image" type="submit" name="submit_btn"  class="btn poca-btn m-2 ml-0 active text-center">
                                        <a href="login.php" class="btn poca-btn m-2 ml-0 active text-center">Skip for now</a>
                                        </center>
                                        
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>