<?php 
include('connection.php');
$selectid = $_GET['id'];
$select_query = "SELECT * FROM `tbl_user` WHERE `id` = '$selectid'";
$query_run = mysqli_query($con , $select_query);
$data = mysqli_fetch_array($query_run);

if(isset($_POST['submitbtn'])){
  $username = $_POST['username'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $image = $_FILES['pic']['name'];
  $image_file_tmp = $_FILES['pic']['tmp_name'];
  $file_path = './profilepic/' .  $image;
  move_uploaded_file($image_file_tmp,$file_path);

  $update_query = "UPDATE `tbl_user` SET `uname`='$username',`lastname`='$lastname',`email`='$email',`password`='$password',`p_pic`='$file_path' WHERE `id` = '$selectid'";
  $query_run = mysqli_query($con , $update_query);
  if($query_run){
    header('location:login.php');
  }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Profile</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="./img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <style>
        .form-cont{
           margin-top:15%;
           
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


</head>
<body class="back">
<div class="container col-lg-8 form-cont">
        <div class="card o-hidden border-0 shadow-lg my-5 ">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5 column">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Profile!</h1>
                            </div>
                            <form method="post"  enctype="multipart/form-data">
                                <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Username</label>
                                        <input type="text" class="form-control form-control-user input"  name="username" value="<?php echo $data['uname']?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Lastname</label>
                                        <input type="text" class="form-control form-control-user input"  name="lname" value="<?php echo $data['lastname']?>" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                <label>Email address</label>
                                    <input type="email" class="form-control form-control-user input" required
                                    name="email" value="<?php echo $data['email']?>">
                                </div><br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Password</label>
                                        <input type="text" class="form-control form-control-user input"
                                        name="pass" value="<?php echo $data['password']?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Profile Pic</label>
                                        <input type="file" class="form-control form-control-user input"
                                        name="pic" value="<?php echo $data['p_pic']?>">
                                    </div>
                                </div><br>
                                <center>
                                <input type="submit" name="submitbtn" class="btn poca-btn m-2 ml-0 active text-center" value="Update Profile">
                                </center>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





</body>
</html>