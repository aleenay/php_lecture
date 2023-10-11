<?php
session_start();
 include('connection.php'); 
$music_name = $_GET['music_name'];
$artist_id = $_GET['artist_id'];
$_SESSION['music_names'] = $music_name;
$_SESSION['artists_id'] = $artist_id;
$query= "SELECT * FROM `tbl_video` INNER JOIN `tbl_artist` ON (tbl_video.artistname = tbl_artist.id) WHERE music_name = '$music_name'";
$query_run = mysqli_query($con,$query);
$fetch_array = mysqli_fetch_array($query_run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Poca - Podcast &amp; Audio Template">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Poca - Podcast &amp; Audio Template</title>

<link rel="icon" href="./img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">
<style>
 .rating {
    display: inline-flex;
    font-size: 0;
    cursor: pointer;
    flex-direction: row-reverse;
		}
		.rating > input {
			display: none;
		}
		.rating > label:before {
			content: "\2605";
			font-size: 30px;
			color: #ccc;
		}
		.rating > input:checked ~ label:before,
		.rating > input:hover ~ label:before {
			color: #f90;
      cursor: pointer;
		}
		.rating > label {
			display: inline-block;
			margin-right: 5px;
			line-height: 30px;
			text-align: center;
			width: 30px;
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
<h2 class="title mt-70">MUSIC DETAILS</h2>
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
<li class="breadcrumb-item active" aria-current="page">MUSIC DETAILS</li>
</ol>
</nav>
</div>
</div>
</div>
</div>

<section class="blog-details-area">
<div class="container">
<div class="row">
<div class="col-12 col-lg-8">
<div class="podcast-details-content d-flex mt-5 mb-80">

<div class="post-share">
<p>Share</p>
<div class="social-info">
<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
<a href="#" class="pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="#" class="thumb-tack"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
</div>
</div>

<?php ;
$select_query_forjoin = "SELECT * FROM `tbl_video` INNER JOIN `tbl_artist` ON (tbl_video.artistname = tbl_artist.id)  WHERE music_name = '$music_name'  ";
$select_query_forjoin_run = mysqli_query($con,$select_query_forjoin);
$fetch_array_join = mysqli_fetch_array($select_query_forjoin_run);


?>
<input type="hidden" value="<?php echo $fetch_array_join['id']?>" id='hidden_id'>
<input type="hidden" value="<?php echo $fetch_array_join['id']?>" id='hidden_id1'>


<div class="post-details-text">
<video width="580" height="340" controls>
  <source src="<?php echo './admin/'.$fetch_array_join['video_file'] ?>"  type="video/mp4" >
Your browser does not support the video tag.
</video>
<div class="post-content">
<p href="#" class="post-date mt-2"><?php echo $fetch_array_join['date']?></p>
<h2><?php echo $fetch_array_join['music_name'] ?></h2>
<div class="post-meta">
<p href="#" class="post-author fw-bold">By <?php echo $fetch_array_join['artist_name'] ?> | <?php echo $fetch_array_join['artist_category'] ?></p>
</div>
</div>
<p>Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting
boisterous insensible. It recommend be resolving pretended middleton.</p>






<?php if(isset($_SESSION['login'])) {?>
<button id="hide" class="btn btn-transparent">Hide Comments</button>
<button id="show" class="btn btn-transparent">Show Comments</button>

<div id="cont" style="display: none;">


</div>
<div class="contact-form mt-5" id="contact-form" >
<h5 class="mb-30">Leave Your Review</h5>

<form action="#" method="post">
  <div class="row">
    <div class="col-12">
      <textarea name="message" id='ID_message' class="form-control mb-20" placeholder="Comment"></textarea>
    </div>
    <div class="col-12 mt-5 ">
  <h5 class="mb-30">Leave Your Rating</h5>
  
        <div class="rating ">
            <input type="radio" name="star" onclick="starFunction('5')" value="5" id="star5"><label for="star5"></label>
            <input type="radio" name="star" onclick="starFunction('4')" value="4" id="star4"><label for="star4"></label>
            <input type="radio" name="star" onclick="starFunction('3')" value="3" id="star3"><label for="star3"></label>
            <input type="radio" name="star" onclick="starFunction('2')" value="2" id="star2"><label for="star2"></label>
            <input type="radio" name="star" onclick="starFunction('1')" value="1" id="star1"><label for="star1"></label>
		</div>
		
</div>
<div class="col-12">
<button type="button" id='submitbtn' class="btn poca-btn mt-40">Post Comment</button>
</div>


</div>
</form>
</div>
<?php } else {?>
  <!-- <button id="hide" class="btn btn-transparent">Hide Comments</button> -->
<!-- <button id="show" class="btn btn-transparent">Show Comments</button> -->

<div id="cont">


</div>
<!-- <div class="contact-form mt-5">
<h5 class="mb-30">Leave A Comment</h5>

<form action="#" method="post">
<div class="row">
<div class="col-lg-6">
<input type="text" id='ID_name' name="message-name" class="form-control mb-30" placeholder="Name">
</div>
<div class="col-lg-6">
<input type="email" id='ID_email' name="message-email" class="form-control mb-30 text-lowercase" placeholder="Email">
</div>
<div class="col-12">
<textarea name="message" id='ID_message' class="form-control mb-30" placeholder="Comment"></textarea>
</div>
<div class="col-12">
<button type="button" id='submitbtn' class="btn poca-btn mt-30">Post Comment</button>
</div>
</div>
</form>
</div> -->
<?php }?>



</div>
</div>
</div>


<div class="col-12 col-lg-4">

<div class="sidebar-area mt-5">




<?php

 $select_hits = "SELECT * FROM `tbl_music`  WHERE `artistname` = '$artist_id' LIMIT 5";
  $select_hits_run = mysqli_query($con , $select_hits);

  $select_music_title = "SELECT * FROM `tbl_music` WHERE `artistname` = '$artist_id'";
  $select_music_title_run = mysqli_query($con,$select_music_title);
  $fetching = mysqli_fetch_array($select_music_title_run);

  $music_title = $fetching['music_title'];
  $select = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON tbl_music.artistname=tbl_artist.id WHERE `music_title` = '$music_title'";
  $select_run = mysqli_query($con,$select);
  $fetch = mysqli_fetch_array($select_run);
  ?>
<div class="single-widget-area news-widget mb-50">
  <h3 class="mb-4">Songs By <?php echo $fetch['artist_name']?></h3>
 <?php while($hits = mysqli_fetch_array($select_hits_run)){ ?>

<div class="single-news-area d-flex">
<div class="blog-thumbnail">
<a href="details.php?id=<?php echo $hits['artistname'] ?>"><img src="<?php echo './admin/'.$hits['music_banner'] ?>" alt=""></a>
</div>
<div class="blog-content">
<a href="details.php?artist_id=<?php echo $hits['artistname'] ?>" class="post-title"><?php echo $hits['music_title'] ?></a>
<span class="post-date"><?php echo $hits['date'] ?></span>
</div>
</div>
</div>
</div>
<?php } ?>



</div>
</div>
</div>
</div>
</section>


<section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
<div class="container">
<div class="row align-items-center">

 <div class="col-12 col-lg-6">
<div class="newsletter-content mb-50">
<h2>Sign Up To Newsletter</h2>
<h6>Subscribe to receive info on our latest news and episodes</h6>
</div>
</div>

<div class="col-12 col-lg-6">
<div class="newsletter-form mb-50">
<form action="#" method="post">
<input type="email" name="nl-email" class="form-control" placeholder="Your Email">
<button type="submit" class="btn">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</section>

<?php include('footer.php')?>


<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/poca.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b19b6ffc4d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
 function starFunction(rating){
    var star = rating
    $.ajax({
        url:'reviews.php',
        type:'post',
        data:{
          ratings: star
        }
    })
   }
$(document).ready(function(){
  var id = $('#hidden_id').val();
 $.ajax({
  url:'reviews.php',
  type:'post',
  data:{
    hidden_id: id
  }
 })
   $("#hide").click(function(){
    $("#cont").hide();
    $("#contact-form").show();

  });
  $("#show").click(function(){
    $("#cont").show();
    $("#contact-form").hide();
  });


  dataLoad()
  function dataLoad(){
    $.ajax({
      url:'reviews.php',
      type: 'post',
      success:function(data){
        $('#cont').html(data)
      }
    })
  }
  $('#submitbtn').click(function(){
     var hidden_id = $('#hidden_id1').val();
    var message = $('#ID_message').val();
       $.ajax({
    url:'reviews.php',
    type:'post',
    data:{
        click:1,
        user_message: message,
        id: hidden_id,
    },
    success:function(data){
      alert("dataLoad")
     dataLoad()
    }

   })
  })


});





</script>
</body>
</html>