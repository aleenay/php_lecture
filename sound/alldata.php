<?php
session_start();
include('connection.php');

if(isset($_POST['fetch_data'])){
  $selectAllData = "SELECT * FROM `tbl_music` INNER JOIN `tbl_artist` ON (tbl_music.artistname = tbl_artist.id)";
  $FetchAllData = mysqli_query($con , $selectAllData);
}


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


<div class="row">
       


  
       <?php   while ($alldata = mysqli_fetch_array($FetchAllData)) { ?>
        <div class="col-lg-4">

      
    <div class="poca-music-area style-2 d-flex align-items-center flex-wrap " >
      <div class="poca-music-thumbnail">
        <a href="details.php?artist_id=<?php echo $alldata['id'] ?>&&music_name=<?php echo $alldata['music_title'] ?>"><img width="700" src="<?php echo './admin/' . $alldata['music_banner'] ?>" style="height:400px;" alt=""></a>
      </div>
      <div class="poca-music-content text-center">
        <span class="music-published-date mb-2"><?php echo $alldata['date'] ?></span>
        <h2><?php echo $alldata['music_title'] ?></h2>
        <div class="music-meta-data">
          <p>By <a href="#" class="music-author"><?php echo $alldata['artist_name'] ?></a> | <a href="#" class="music-catagory"><?php echo $alldata['artist_category'] ?></a></p>
        </div>

        <div class="poca-music-player ">
          <audio preload="auto" class="playback" controls>
            <source src="<?php echo './admin/' . $alldata['music_file'] ?>">
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
            <a style="cursor:pointer"  href="download.php?path=./admin/<?php echo $alldata['music_file'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
            <?php }else{ ?>
              <a style="cursor:pointer" onclick="return confirm('Please login to download')"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
<?php } ?>
          </div>
        </div>
      </div>
    </div>
      </div>
  <?php } ?>

        </div>