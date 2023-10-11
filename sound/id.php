<?php
session_start();
include('connection.php');
$id = $_GET['id'];
$select_profile_data = "SELECT * FROM `tbl_user` WHERE `id` = '$id' ";
$select_profile_data_run = mysqli_query($con , $select_profile_data);
$fetch_profile = mysqli_fetch_array($select_profile_data_run);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
        <meta name="description" content="Poca - Podcast &amp; Audio Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Poca - Podcast &amp; Audio Template</title>
        <link rel="icon" href="./img/core-img/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
      

    <style>
        .back{
            background-image: url(img/bg-img/1.jpg);
            background-position: cover;
            background-repeat: no-repeat;
 
        }
        .column{
          background-color:#80808042;
          }
          .cont{
           
            border-radius:6px;
          } 
    </style>

</head>

<body class="back">

<section>
  <div class="container py-5 mt-5 cont">


    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 column text-light">
          <div class="card-body text-center">
            <img src="./profilepic/<?php echo $fetch_profile['p_pic'];?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-1"><?php echo $fetch_profile['uname'] ." ". $fetch_profile['lastname'];?></h5>
            <p class="mb-2 "><?php echo $fetch_profile['email'];?></p>
            <div class="d-flex justify-content-center mb-2">
              <a href="updateprofile.php?id=<?php echo $id;?>" class="btn btn-dark">Edit Profile  <i class="fa-solid fa-pencil"></i></a>
              <a href="index.php" class="btn btn-dark ms-1">Back To Home</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
       
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4  column text-light">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">First Name</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0"><?php echo $fetch_profile['uname'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Lastname</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0"><?php echo $fetch_profile['lastname'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0"><?php echo $fetch_profile['email'];?></p>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4 mb-md-0 column text-light">
              <?php
              $ses_id = $_SESSION['first_id'];
              $select_fav = "SELECT * FROM `tbl_favourites` WHERE `user_id` = '$id'";
              $select_fav_run = mysqli_query($con , $select_fav);
              ?>


<h2 class="fw-bold p-2" >Your Favourites</h2>
            <table class="table text-light">
  <thead>

  </thead>

    <?php while($fav = mysqli_fetch_array($select_fav_run)){ ?>
    <tr>
        <td><?php echo $fav['music_title'] ?></td>
      <td>   
<audio preload="" controls class="text-dark">
<source src="<?php echo "./admin/" . $fav['saved_songs'] ?>">
</audio>
</td>
</tr>
<?php } ?> 
    

</table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>