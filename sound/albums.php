<?php
session_start();
include('connection.php');
$select_query = "SELECT * FROM `tbl_album` INNER JOIN `tbl_artist` ON (tbl_album.artistname = tbl_artist.id)";
$query_run = mysqli_query($con , $select_query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Poca - Podcast &amp; Audio Template">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<title>Poca - Podcast &amp; Audio Template</title>
<link rel="icon" href="./img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">
<style>
   

.height{
margin-bottom:4rem;
}


.search{
position: relative;
box-shadow: 0 0 40px rgba(51, 51, 51, .1);
  
}

.search input{

 height: 60px;
 line-height:18px 50px;
 text-indent: 15px;
 border: 2px solid #d6d4d4;
padding:1.8rem  19rem;

}


.search input:focus{

 box-shadow: none;
 border: 2px solid pink;


}

.search .fa-search{

 position: absolute;
 top: 20px;
 left: 16px;

}

.search button{

 position: absolute;
 top: 5px;
 right: 5px;
 height: 50px;
 width: 110px;
 background: pink;

}
</style>
</head>
<body>
<!-- <div id="preloader">
<div class="preloader-thumbnail">
<img src="./img/core-img/preloader.png" alt="">
</div>
</div> -->

  <header class="header-area">

    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
<?php include('nav.php');?>

      </div>
    </div>
  </header>
<div id="preloader">
<div class="preloader-thumbnail">
<img src="./img/core-img/preloader.png" alt="">
</div>
</div>




<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
<h2 class="title mt-70">ALBUMS</h2>
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
<li class="breadcrumb-item active" aria-current="page">Albums</li>
</ol>
</nav>
</div>
</div>
</div>
</div>



<section class="poca-latest-epiosodes section-padding-80" style="margin-top:-100px">
<div class="container">
<div class="row">

<div class="col-12">
<div class="section-heading text-center">
<h2>Search Albums</h2>
<div class="line"></div>
</div>
</div>
</div>
</div>

<div class="container">
                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">
                        <div class="search">
                          <input onkeyup="search()" id="for_search" type="saerch" class="form-control" placeholder="search your favourites" required>
                        
                          <button onclick="search()" class="btn btn-primary">Search</button>
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
                    <!-- <button type="button" id="show" onclick="show()" >go back</button> -->
                    <div class="container">
                    <div class=" poca-portfolio" id="fetch_search_data">
                    </div>
                    </div>







<section id="hide"> 
  
  
  
  
  <div class="container" >
    <!-- <div class="section-heading text-center mb-4" >
      <h2>Latest Albums</h2>
      <div class="line"></div>
    </div> -->
<div class="row poca-portfolio">
<?php while($row = mysqli_fetch_array($query_run)){?>
<div class="col-lg-6 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">

<div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
<div class="poca-music-thumbnail">
<a href="albumrelated.php?album_id=<?php echo $row['album_id']?>"><img src="<?php echo $row['album_pic'];?>" alt="" style="height:300px;width:700px;">
</div>
<div class="poca-music-content text-center">

<h2><?php echo $row['album'];?></h2>
<div class="music-meta-data">
<p>By <a href="#" class="music-author"><?php echo $row['artist_name'];?></a></p>
</div>
</a>
</div>
</div>
</div>
<?php } ?>
</div>

</div> 
</section> 









<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/poca.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
      function search() {
        $("#hide").hide();
       var word =  $("#for_search").val();
      $.ajax({
        url: "searchalbum.php",
        type: "POST",
        data: {
          search_word: word,
        },
        // cache: false,
        success: function(Result) {


          $("#fetch_search_data").html(Result);


        }
      });

    }
  
</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b18fa8ab4d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>