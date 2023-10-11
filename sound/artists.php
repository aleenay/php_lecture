<?php
session_start();
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
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
 top: 6px;


}

.search button{

 position: absolute;
 top: 5px;
 right: 5px;
 height: 50px;
 width: 110px;
 

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
<h2 class="title mt-70">ARTISTS</h2>
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



<div class="container" style="margin-bottom:100px;">
                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">
                        <div class="search">
                          <input onkeyup="search_artist()" id="for_search" type="saerch" class="form-control" placeholder="search your favourites" required>
                        
                          <button onclick="search_artist()" class="btn btn-primary fa fa-search"></button>
                        </div>
                        
                      </div>
                      
                    </div> </div>
              



<div id="fetch_search_data">

</div>



<section id="hide">
<div class="container">
    <div class="row">
        <?php
      $select_artists = "SELECT * FROM `tbl_artist`";
      $select_artists_run = mysqli_query($con,$select_artists);
        while($artists = mysqli_fetch_array($select_artists_run)){
        ?>
<div class="col-lg-4 d-flex justify-content-center" style="margin-bottom:35px;">
<a href="artistrelated.php?id=<?php echo $artists['id'] ?>">
<div class="card" style="width:13rem;">
  <img class="card-img-top" width="250px" src="<?php echo $artists['artistpics'] ?>" alt="Card image cap" style="border-radius:100%;height:250px">
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
</section>







<?php include('footer.php') ?>


<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/poca.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
      function search_artist() {
        $("#hide").hide();
       var word =  $("#for_search").val();
      $.ajax({
        url: "searchartist.php",
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
</body>
</html>