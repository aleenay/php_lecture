<?php
include('connection.php');
$select_query = "SELECT * FROM `tbl_music`";
$query_run = mysqli_query($con , $select_query);






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
            /* .cont-music{
                display: flex;
                justify-content: center;
                align-items: center;
                
                 width: 90%;
            } */
            .img{
              height:100%;
              width:100%;
            }
        </style>
        </head>

<body>
<div id="preloader">
<div class="preloader-thumbnail">
<img src="./img/core-img/preloader.png" alt="">
</div>
</div>

  <header class="header-area">

    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
<?php include('nav.php');?>

      </div>
    </div>
  </header>
  <div class="container">
<?php while($card = mysqli_fetch_array($query_run)){?>

    <div class="container cont-music">
    <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
        <div class="poca-music-thumbnail">
           <img src="<?php echo $card['music_banner'];?>" alt="img" class="img">
        </div>
        <div class="poca-music-content">
           <span class="music-published-date"><?php echo $card['date'];?></span>
            <h2><?php echo $card['music_title'];?></h2>
            <div class="music-meta-data">
                <p>By <a href="#" class="music-author"><?php echo $card['artistname'];?></a> | 
                <a href="#" class="music-catagory"><?php echo $card['album'];?></a> | 
                <a href="#" class="music-duration">00:02:56</a></p>
            </div>
        
            <div class="poca-music-player">
              <audio preload="auto" controls>
                 <source src="<?php echo $card['music_file'];?>">
              </audio>
            </div>
        
           <div class="likes-share-download d-flex align-items-center justify-content-between">
              <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
             <div>
                     <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
             </div>
           </div>
        </div>
    </div>
   
    </div>   
    <?php }?>
    </div>









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