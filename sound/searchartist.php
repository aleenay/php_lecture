
<?php
include('connection.php');
    $search = $_POST['search_word'];
    $like_query = "SELECT * FROM tbl_artist WHERE `artist_name` LIKE '%$search%'  or `artist_category` LIKE '%$search%' ";
    $like_query_run = mysqli_query($con,$like_query);


?>




<div class="container">
    <div class="row">
        <?php
        while($artists = mysqli_fetch_array($like_query_run)){
        ?>
<div class="col-lg-4 d-flex justify-content-center" style="margin-bottom:35px;">
<a href="artistrelated.php?id=<?php echo $artists['id'] ?>">
<div class="card" style="width:13rem;">
  <img class="card-img-top" width="250px" src="<?php echo $artists['artistpics'] ?>" alt="Card image cap" style="border-radius:50%;height:250px">
  <div class="card-body " style="margin-top:25px;">
    <h5 class="card-title text-center"><b><?php echo $artists['artist_name'] ?></b></h5>
    <p class="card-text text-center"><?php echo $artists['artist_category'] ?></p>
  </div>
</div>
</div>
</a>
<?php }?>
</div>
</div>



