<?php
session_start();
include('connection.php');
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
        <link rel="stylesheet" href="style.css">
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b18a19804d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
          
            .img{
              height:100%;
              width:100%;
            }
            .back{
            background-image: url(img/bg-img/1.jpg);
            background-position: cover;
            background-repeat: no-repeat;
 
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

<h2 class="title mt-70">Search Results</h2>
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

    <?php

if(isset($_POST['submit'])){
    $search = $_POST['search'];
    $search_query = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON (tbl_music.artistname = tbl_artist.id) WHERE music_title LIKE  '%$search%' or tbl_artist.artist_name LIKE '%$search%' or tbl_artist.artist_category LIKE  '%$search%' ";
    $result = mysqli_query($con , $search_query);
    if($result){
       if(mysqli_num_rows($result) > 0){
        echo '<div class="container">';
        while($card = mysqli_fetch_assoc($result)){
      echo '    <div class="container cont-music" style="margin-top:-120px;">
      <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
          <div class="poca-music-thumbnail">
             <img src= "./admin/'.  $card['music_banner']  .'" alt="img" class="img">
          </div>
          <div class="poca-music-content">
             <span class="music-published-date">'.  $card['date'].'</span>
              <h2>'.  $card['music_title'] .'</h2>
              <div class="music-meta-data">
                  <p>By <a href="#" class="music-author">'.  $card['artist_name'] .'</a> | 
                  <a href="#" class="music-duration">'.  $card['artist_category'] .'</a></p>
              </div>
          
              <div class="poca-music-player">
                <audio preload="auto" controls>
                   <source src=" ./admin/'.  $card['music_file'] .'">
                </audio>
              </div>
              <div class="likes-share-download d-flex align-items-center justify-content-between">
          ';?>

<?php
    if(isset($_SESSION['first_id'])){
 
    ?>
       <form action="favourites.php" method="post"><button onclick="return confirm('this song is added to your favourites')"  class="likebtn" type="submit" name="fav_btn"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
       <input type="hidden" name="id" value="<?php echo $card['id'] ?>">
       <input type="hidden" name="music_file" value="<?php echo $card['music_file'] ?>">
       <input type="hidden" name="music_name" value="<?php echo $card['music_title'] ?>">
       </form>
      <?php }else{?>
        <button class="likebtn" type="submit" onclick="return confirm('PLease Login To Get Favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
         <?php }?>
          
          <?php if(isset($_SESSION['first_id'])){ ?>
            <a style="cursor:pointer"  href="download.php?path=./admin/<?php echo $card['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <?php }else{ ?>
              <a style="cursor:pointer"  onclick="return confirm('Please login to download')"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<?php } ?> 
                <?php
                        echo '   
               </div>
               </div>
             </div>
          </div>
      </div>
     
      </div>';}
      
       }    
       else{
       ?>
       <h1 class="fw-bolder text-center" >No Results For "<?php echo $search ?>"</h1>
       <?php
      }
      }

    }




?>


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

</body>
</html>