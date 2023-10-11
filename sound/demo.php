<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$select_music = "SELECT * FROM `tbl_music`";
$select_music_run = mysqli_query($con,$select_music);
?>
<div id="all_category">
	<?php
while($card = mysqli_fetch_array($select_music_run)){?>  
  
  <div class="col-lg-6 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s" >
<div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
<div class="poca-music-thumbnail">
<a href="details.php?artist_id=<?php echo $card['artistname'] ?>"><img width="700"  src="<?php echo './admin/'.$card['music_banner']?>" style="height:400px;" alt=""></a>
</div>
<div class="poca-music-content text-center">
<span class="music-published-date mb-2"><?php echo $card['date'] ?></span>
<h2><?php echo $card['music_title'] ?></h2>
<div class="music-meta-data">
<p>By <a href="#" class="music-author"><?php echo $card['artistname'] ?></a> | <a href="#" class="music-catagory"></a> | <a href="#" class="music-duration">00:02:56</a></p>
</div>

<div class="poca-music-player ">
<audio preload="auto" class="playback" controls>
<source src="<?php echo './admin/'.$card['music_file']?>">
</audio>
</div>

<div class="likes-share-download d-flex align-items-center justify-content-between">
  <form action="favourites.php" method="post">
<button type="submit" onclick="return confirm('This songs is added to your favourites')" ><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
<input type="hidden" name="id" value="<?php echo $card['id'] ?>">
<input type="hidden" name="music_file" value="<?php echo $card['music_file'] ?>">
<input type="hidden" name="music_name" value="<?php echo $card['music_title'] ?>">

</form>
<div>
<a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
<a href="download.php?path=<?php echo $card['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
	</div>

</body>
</html>