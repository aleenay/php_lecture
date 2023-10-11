<?php
include('connection.php');
    $search = $_POST['search_word'];
    $like_query = "SELECT *
    FROM tbl_album INNER JOIN `tbl_artist` ON tbl_album.artistname = tbl_artist.id
    WHERE tbl_album.album LIKE '%$search%'  or tbl_artist.artist_name LIKE '%$search%' ";
    $like_query_run = mysqli_query($con,$like_query);


?>

<div class="section-heading text-center mb-4" >
<h2>Search Results</h2>
<div class="line"></div>
</div>


<div class="row">
  <?php
  while ($card = mysqli_fetch_array($like_query_run)) { ?>
   <div class="col-lg-6">

    <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
    <div class="poca-music-thumbnail">
        <a href="albumrelated.php?album_id=<?php echo $card['album_id']?>"><img width="700" src="<?php echo $card['album_pic']?>" style="height:300px;" alt=""></a>
      </div>
      <div class="poca-music-content text-center">
        <h2> <?php echo $card['album'] ?></h2>
        <div class="music-meta-data">
          <p>By <a href="#" class="music-author"><?php echo $card['artist_name'] ?></a> </p>
        </div>




      </div>
    </div>
    </div>
  <?php } ?>
  </div>




    