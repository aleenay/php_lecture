<?php    
session_start();
include('connection.php');
if(isset($_POST['recover_btn'])){
    $mail = $_POST['mail'];
    $match_mail = "SELECT * FROM `tbl_user` WHERE `email`='$mail'";
    $match_mail_run = mysqli_query($con,$match_mail);
    if($match_mail_run){
        $code = rand(1000000,9999999);
        $_SESSION['code_to_match'] = $code;
        $tomail = "$mail";
        $subject = "your verification code";
        $body = "$code";
        $headers = "From:worldoftech335@gmail.com";  
        if(mail($tomail , $subject , $body , $headers)){
            // echo "<script>alert('$code')</script>";
            header('location:verification.php');

        }
        else{
            echo "<script>alert('Not Send')</script>";
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
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

</head>
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
                                        <h1 class="h4 text-gray-900 mb-4">Recover Account!</h1>
                                    </div>
                                    <form method="POST">
                                        <div class="form-group">
                                            <input type="text" name="mail" class="form-control form-control-user input"
                                                placeholder="Enter Email Address" required>
                                        </div><br>

                                        <center>
                                        <input value="SEND MAIL" type="submit" name="recover_btn"  class="btn poca-btn m-2 ml-0 active text-center">
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