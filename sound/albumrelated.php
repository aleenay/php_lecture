<?php
session_start();
include('connection.php');
$album_id = $_GET['album_id'];
$select_songs_albums = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON (tbl_music.artistname = tbl_artist.id) WHERE tbl_music.album='$album_id'";
$select_songs_albums_run = mysqli_query($con,$select_songs_albums);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="./img/core-img/favicon.ico">

  <link rel="stylesheet" href="style.css">
    <title>Albums</title>
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
    $select_songs_albums2 = "SELECT * FROM `tbl_album` WHERE album_id='$album_id'";
    $select_songs_albums_run2 = mysqli_query($con,$select_songs_albums2);
    $fetch_for_carousel2 = mysqli_fetch_array($select_songs_albums_run2);
    ?>
<h2 class="title mt-70"><?php echo $fetch_for_carousel2['album'] ?></h2>
</div>
</div>
</div>
</div>
<div class="breadcumb--con">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Related Songs</li>
</ol>
</nav>
</div>
</div>
</div>




  <section class="" style="margin-top:8rem;" >
<div class="container">
    <?php if(mysqli_num_rows($select_songs_albums_run) > 0 ){
    while($rel_songs = mysqli_fetch_array($select_songs_albums_run)){ ?>
        <div class="poca-featured-music-area mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="poca-music-area box-shadow d-flex align-items-center flex-wrap border" data-animation="fadeInUp" data-delay="900ms">
                            <div class="poca-music-thumbnail">
                                <img src="./admin/<?php echo $rel_songs['music_banner'] ?> " alt="">
</div>
<div class="poca-music-content">
<span class="music-published-date"><?php echo $rel_songs['date'];?></span>
<h2><?php echo $rel_songs['music_title'];?></h2>
<div class="music-meta-data">
<p>By <a href="#" class="music-author"><?php echo $rel_songs['artist_name'] ?></a> | <a href="#" class="music-catagory"><?php echo $rel_songs['artist_category']?></a> </p>
</div>

<div class="poca-music-player">
<audio preload="auto" controls>
<source src="./admin/<?php echo $rel_songs['music_file'] ?>">
</audio>
</div>

<div class="likes-share-download d-flex align-items-center justify-content-between">
<?php
    if(isset($_SESSION['first_id'])){
 
    ?>
       <form action="favourites.php" method="post"><button onclick="return confirm('this song is added to your favourites')"  class="likebtn" type="submit" name="fav_btn"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
       <input type="hidden" name="id" value="<?php echo $rel_songs['id'] ?>">
       <input type="hidden" name="music_file" value="<?php echo $rel_songs['music_file'] ?>">
       <input type="hidden" name="music_name" value="<?php echo $rel_songs['music_title'] ?>">
       </form>
      <?php }else{?>
        <button class="likebtn" type="submit" onclick="return confirm('PLease Login To Get Favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
         <?php }?>
          <div>
<a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
<?php if(isset($_SESSION['first_id'])){ ?>
            <a style="cursor:pointer"  href="download.php?path=./admin/<?php echo $rel_songs['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <?php }else{ ?>
              <a style="cursor:pointer"  onclick="return confirm('Please login to download')"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<?php } ?></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php }}else{?>
  <h2 class="fw-bold text-center" style="margin-top:-50px;">No songs in this album.........!</h2>
<?php } ?>
</div>
</section>




<div class="mt-5" ></div>
<?php include('footer.php') ?>


<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/poca.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b18a19804d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>