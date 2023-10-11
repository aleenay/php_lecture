<?php
session_start();
include('connection.php');
$artist_cat = isset($_GET['artist_id']);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All music</title>

</head>
<body>
     
<header class="header-area">

<div class="main-header-area">
  <div class="classy-nav-container breakpoint-off">
  <?php include('nav.php');?>

  </div>
</div>
</header>



<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
<?php 
if($artist_cat != null ) {
  $artist_cat = $_GET['artist_id'];
  $select_heading = "SELECT * FROM `tbl_artist` WHERE `id` = '$artist_cat'";
  $select_heading_run = mysqli_query($con,$select_heading);
  $fetch_heading = mysqli_fetch_array($select_heading_run);
  ?>
<h2 class="title mt-70"><?php echo $fetch_heading['artist_category'];?></h2>
<?php }
elseif(empty($artist_cat)) {?>
<h2 class="title mt-70">ALL CATEGORES</h2>
<?php }?>



</div>
</div>
</div>
</div>
<div class="breadcumb--con">
<div class="container" id="cat">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Albums</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<?php 
$select_artist_cat = "SELECT * FROM `tbl_artist`";
$select_artist_cat_run = mysqli_query($con,$select_artist_cat);

?>
<div class="container" >
<div class="dropdown">
  <button type="button" class="btn poca-btn dropdown-toggle" data-toggle="dropdown">
CATEGORIES  </button>
  <div class="dropdown-menu">

  <li><a class="dropdown-item" href="allpagedata.php">All</a></li>
  <?php while($drop_cat = mysqli_fetch_array($select_artist_cat_run)){ ?>

    <li><a class="dropdown-item" href="allpagedata.php?artist_id=<?php echo $drop_cat['id'] ?>#cat"><?php echo $drop_cat['artist_category']?></a></li>
   <?php }?>
   </div>
</div>
</div>
</div>

    

<div class="container mt-5" >
 <div class=" single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
<div class="row">

<?php 



if($artist_cat){
  $artist_cat = $_GET['artist_id'];
$select_query_for_cat_one = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON (tbl_music.artist_category=tbl_artist.id)  WHERE tbl_music.artist_category = '$artist_cat'";
$select_query_for_cat_run_one = mysqli_query($con,$select_query_for_cat_one);
while ($card = mysqli_fetch_array($select_query_for_cat_run_one)) { ?>
   <div class="col-lg-4">

    <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
      <div class="poca-music-thumbnail">
        <a href="details.php?artist_id=<?php echo $card['id']?>&&music_name=<?php echo $card['music_title'] ?>"><img width="700" src="<?php echo './admin/' . $card['music_banner'] ?>" style="height:400px;" alt=""></a>
      </div>
      <div class="poca-music-content text-center">
        <span class="music-published-date mb-2"><?php echo $card['date'] ?></span>
        <h2><?php echo $card['music_title'] ?></h2>
        <div class="music-meta-data">
          <p>By <a href="#" class="music-author"><?php echo $card['artist_name'] ?></a> | <a href="#" class="music-catagory"><?php echo $card['artist_category'] ?></a> </p>
        </div>

        <div class="poca-music-player ">
          <audio preload="auto" class="playback" controls>
            <source src="<?php echo './admin/' . $card['music_file'] ?>">
          </audio>
        </div>

        <div class="likes-share-download d-flex align-items-center justify-content-between">
        <?php
    if(isset($_SESSION['first_id'])){
 
    ?>
       <form action="favourites.php" method="post"><button onclick="return confirm('this song is added to your favourites')"  class="likebtn" type="submit" name="fav_btn"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
       <input type="hidden" name="id" value="<?php echo $alldata['id'] ?>">
       <input type="hidden" name="music_file" value="<?php echo $alldata['music_file'] ?>">
       <input type="hidden" name="music_name" value="<?php echo $alldata['music_title'] ?>">
       </form>
      <?php }else{?>
        <button class="likebtn" type="submit" onclick="return confirm('PLease Login To Get Favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
         <?php }?>
          <div>
            <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
            <?php if(isset($_SESSION['first_id'])){ ?>
            <a href="download.php?path=./admin/<?php echo $card['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <?php }else{ ?>
              <a onclick="return confirm('Please login to download')"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<?php } ?>          </div>
        </div>
      </div>
    </div>
    </div>
    
    <?php } } if(empty($artist_cat)) {

      $select_query_for_cat2 = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON (tbl_music.artist_category=tbl_artist.id) ";
      $select_query_for_cat_run2 = mysqli_query($con,$select_query_for_cat2);
     
  ?>
  
      


    <?php while ($cards = mysqli_fetch_array($select_query_for_cat_run2)) { ?>
   <div class="col-lg-4">

    <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
      <div class="poca-music-thumbnail">
        <a href="details.php?artist_id=<?php echo $cards['id']?>&&music_name=<?php echo $cards['music_title'] ?>"><img width="700" src="<?php echo './admin/' . $cards['music_banner'] ?>" style="height:400px;" alt=""></a>
      </div>
      <div class="poca-music-content text-center">
        <span class="music-published-date mb-2"><?php echo $cards['date'] ?></span>
        <h2><?php echo $cards['music_title'] ?></h2>
        <div class="music-meta-data">
          <p>By <a href="#" class="music-author"><?php echo $cards['artist_name'] ?></a> | <a href="#" class="music-catagory"><?php echo $cards['artist_category'] ?></a> </p>
        </div>

        <div class="poca-music-player ">
          <audio preload="auto" class="playback" controls>
            <source src="<?php echo './admin/' . $cards['music_file'] ?>">
          </audio>
        </div>

        <div class="likes-share-download d-flex align-items-center justify-content-between">
        <?php
    if(isset($_SESSION['first_id'])){
 
    ?>
       <form action="favourites.php" method="post"><button onclick="return confirm('this song is added to your favourites')"  class="likebtn" type="submit" name="fav_btn"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
       <input type="hidden" name="id" value="<?php echo $cards['id'] ?>">
       <input type="hidden" name="music_file" value="<?php echo $cards['music_file'] ?>">
       <input type="hidden" name="music_name" value="<?php echo $cards['music_title'] ?>">
       </form>
      <?php }else{?>
        <button class="likebtn" type="submit" onclick="return confirm('PLease Login To Get Favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
         <?php }?>
          <div>
            <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
            <?php if(isset($_SESSION['first_id'])){ ?>
            <a href="download.php?path=./admin/<?php echo $cards['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <?php }else{ ?>
              <a onclick="return confirm('Please login to download')"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<?php } ?>          </div>
        </div>
      </div>
    </div>
    </div>
    
    <?php }}  ?>
</div>
</div>
</div>



<footer class="footer-area section-padding-80-0">
<div class="container">
<div class="row">

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-footer-widget mb-80">

<h4 class="widget-title">About Us</h4>
<p>Your ultimate destination for all things music, where we inspire exploration, and celebrate the artistry that moves us.</p>
<div class="copywrite-content">
<p>&copy;

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Beat Street team
</p>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-footer-widget mb-80">

<h4 class="widget-title">Pages</h4>

<nav>
<ul class="catagories-nav">
<li><a href="index.php">Home</a></li>
<li><a href="artist.php">Artists</a></li>
<li><a href="albums.php">Albums</a></li>
<li><a href="allpagedata.php">Genres</a></li>
</ul>
</nav>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-footer-widget mb-80">

<h4 class="widget-title">Developers of Beat Street</h4>
<?php ?>
<div class="single-latest-episodes">
Muhammad Sarim 
</div>

<div class="single-latest-episodes">
Abdul Rafay Khan
</div>

<div class="single-latest-episodes">
Muhammad Huzaifa
</div>

</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-footer-widget mb-80">

<h4 class="widget-title">Follow Us</h4>

<div class="footer-social-info">
<a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" style="margin-top:12px;"></i></a>
<a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" style="margin-top:12px;"></i></a>
<a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" style="margin-top:12px;"></i></a>
<a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" style="margin-top:12px;"></i></a>
<a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play" style="margin-top:12px;"></i></a>
</div>

<div class="app-download-button mt-30">
<a href="#"><img src="./img/core-img/app-store.png" alt=""></a>
<a href="#"><img src="./img/core-img/google-play.png" alt=""></a>
</div>
</div>
</div>
</div>
</div>
</footer>


<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/poca.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b18a19804d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>