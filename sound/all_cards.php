<?php 
include('connection.php');
?>

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


    
<!-- all cards -->
<?php if(isset($_POST['categories'])){$select_query = "SELECT * FROM `tbl_music`";
	$select_query_run = mysqli_query($con,$select_query);
	while($cards = mysqli_fetch_array($select_query_run)) {
?>
<div class="row poca-portfolio">
<div class="col-lg-6 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">

<div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
<div class="poca-music-thumbnail">
<a href="details.php?id=<?php echo $cards['artistname'] ?>"><img width="700"  src="<?php echo $cards['music_banner']?>" style="height:400px;" alt=""></a>
</div>
<div class="poca-music-content text-center">
<span class="music-published-date mb-2"><?php echo $cards['date'] ?></span>
<h2><?php echo $cards['music_title'] ?></h2>
<div class="music-meta-data">
<p>By <a href="#" class="music-author"><?php echo $cards['artistname'] ?></a> | <a href="#" class="music-catagory"></a> | <a href="#" class="music-duration">00:02:56</a></p>
</div>

<div class="poca-music-player">
<audio preload="auto" controls>
<source src="<?php echo $cards['music_file']?>">
</audio>
</div>

<form action="favourites.php" method="post">
            <button type="submit" class="likebutton" onclick="return confirm('This songs is added to your favourites')"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
            <input type="hidden" name="id" value="<?php echo $card['id'] ?>">
            <input type="hidden" name="music_file" value="<?php echo $card['music_file'] ?>">
            <input type="hidden" name="music_name" value="<?php echo $card['music_title'] ?>">

</form>
<div>
<a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
<a href="download.php?path=<?php echo $cards['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
</div>
</div>
</div>
</div>
</div>
<?php }}?>
