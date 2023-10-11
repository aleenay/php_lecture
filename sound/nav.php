
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="./img/core-img/favicon.ico">
<link rel="stylesheet" href="style.css">
<style>
    .likebtn{
    color:#A6A6A6;
   background-color:transparent;
    border: none;
  }
  .likebtn:hover{
    color:#f55656;
   background-color:transparent;
    border: none;
  }
</style>
</head>




<nav class="classy-navbar justify-content-center" id="pocaNav">

<a class="nav-brand" href="index.html"><img src="BEAT_STREETS-removebg-preview.png" width="140px" alt=""></a>

<div class="classy-navbar-toggler">
<span class="navbarToggler"><span></span><span></span><span></span></span>
</div>

<div class="classy-menu">

<div class="classycloseIcon">
<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
</div>

<div class="classynav">
<ul id="nav">
<li <?php if(isset($_GET['index'])){?> class="current-item" <?php }?>><a href="index.php?index=<?php echo "index" ?>">Home</a></li>
<li <?php if(isset($_GET['allpage'])){?> class="current-item" <?php }?>><a  href="allpagedata.php?allpage=<?php echo "allpagedata" ?>">Genres</a></li>
<li <?php if(isset($_GET['albums'])){?> class="current-item" <?php }?>><a href="albums.php?albums=<?php echo "albums" ?>">Albums</a></li>
<li <?php if(isset($_GET['artists'])){?> class="current-item" <?php }?>><a href="artists.php?artists=<?php echo "artist" ?>">Artists</a></li>

</ul>


<div class="top-search-area">
<form action="search.php" method="post">
<input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
<button name="submit"> <i class="fa fa-search" ></i> </button>
</form>
</div>

<div class="top-social-area">
  <?php include('connection.php');
  

if(!isset($_SESSION['first_id'])){ ?>
<div class="welcome-btn-group">

  <a href="login.php" class="btn poca-btn active" data-animation="fadeInUp" data-delay="500ms" style="color:#fff !important;">LOG IN</a>
</div>
<?php
}
else{
  $id = $_SESSION['first_id'];
  $select_query = "SELECT * FROM `tbl_user` WHERE `id` = '$id'";  
  $select_query_run = mysqli_query($con , $select_query);
  $array = mysqli_fetch_array($select_query_run);
   ?>
<a href="id.php?id=<?php echo $array['id'] ?>" class="text-decoration-none" aria-hidden="true"><img class="rounded" width="50" src="<?php echo './profilepic/'.$array['p_pic'] ?>" alt=""></a>
<a href="id.php?id=<?php echo $array['id'] ?>" class="text-decoration-none fs-5" aria-hidden="true"><?php echo $array['uname']  ?></a>
<a href="logout.php?id=<?php echo $array['id']; ?>" class="btn poca-btn active"  style="color:#fff !important;">LOG OUT</a>
<?php } ?>
</div>
</div>

</div>
</nav>

