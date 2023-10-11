<?php
session_start();
include('connection.php');
if(isset($_POST["submitbtn"])){
    $name = $_POST['Name'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $rep_password = $_POST['rep_pass'];
    $query = mysqli_query($con , "SELECT * FROM `tbl_user` WHERE uname = '$name' OR email = '$email'");
    if(mysqli_num_rows($query) > 0){
        echo "<script> alert('Username or Email has already been taken')</script>";
    }
    else{
        if($password == $rep_password){
            
            $queryinsert = "INSERT INTO `tbl_user`(`uname`, `lastname`, `email`, `password`) VALUES ('$name','$lname','$email','$password')";
            $query = mysqli_query($con , $queryinsert);
            if($query){
                $select_query = "SELECT * FROM `tbl_user` WHERE `password` = '$rep_password'";
                $queryrun = mysqli_query($con , $select_query);
                $array = mysqli_fetch_array($queryrun);
                $id = $array['id'];
                 $_SESSION['id'] = $id;
                 $_SESSION['email'] = $email;
                 $_SESSION['password'] = $password;

            }
            header('location:profile.php');
        }
        else{
            echo "<script> alert('Password not Matched')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
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
    <div class="container col-lg-8 form-cont" style="margin-top:140px;">
        <div class="card o-hidden border-0 shadow-lg my-5 ">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5 column">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user input" placeholder="First Name"
                                            name="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user input" name="lastname"
                                            placeholder="Last Name" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user input" required
                                    name="email" placeholder="Email Address">
                                </div><br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user input"
                                           name="pass" required placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user input"
                                        name="rep_pass" required  placeholder="Repeat Password">
                                    </div>
                                </div><br>
                                <center>
                                <input type="submit" name="submitbtn" class="btn poca-btn m-2 ml-0 active text-center" value="Register Account">
                                </center>
                            <div class="text-center">
                                <a class="small fs-6" href="login.php">Already have an account? Login!</a>
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