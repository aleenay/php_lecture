<?php
session_start();
include('connection.php');

$category_id = $_POST["category_id"];
$select = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON (tbl_music.artistname = tbl_artist.id) WHERE tbl_music.artist_category ='$category_id' LIMIT 10";
$result = mysqli_query($con, $select);
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body> -->

<style>
    .likebutton{
    color:#A6A6A6;
   background-color:transparent;
    border: none;
  }
  .likebutton:hover{
    color:#f55656;
   background-color:transparent;
    border: none;
  }
</style>
<div class="row">


  <?php
  while ($card = mysqli_fetch_array($result)) { ?>
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
    $music_file = $card['music_file'];
    $music_name = $card['music_title'];
    $music_id = $card['id'];
    $user_id = $_SESSION['first_id'];
    $insert_fav = "INSERT INTO `tbl_favourites`(`user_id`, `saved_songs`, `music_id`, `music_title`) VALUES ('$user_id','$music_file','$music_id','$music_name')";
    $insert_fav_run = mysqli_query($con , $insert_fav);
    if($insert_fav_run){
        header("location:id.php?id=$user_id");
    }

 
    ?>
        <button class="likebtn" type="submit" onclick="return confirm('This songs is added to your favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
       
      <?php }else{?>
        <button class="likebtn" type="submit" onclick="return confirm('PLease Login To Get Favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
         <?php }?>
          <div>
            <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
            <?php if(isset($_SESSION['first_id'])){ ?>
            <a style="cursor:pointer"  href="download.php?path=./admin/<?php echo $card['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <?php }else{ ?>
              <a style="cursor:pointer" onclick="return confirm('Please login to download')"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<?php } ?>          </div>
        </div>
      </div>
    </div>
    </div>
  <?php } ?>
  </div>






  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/poca.bundle.js"></script>
  <script src="js/default-assets/active.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

