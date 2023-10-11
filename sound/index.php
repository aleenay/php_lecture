<?php
session_start();
include('connection.php');
// if(isset($_POST['btnAll'])){
//   $selectAllData = "SELECT * FROM `tbl_music`";
//   $FetchAllData = mysqli_query($con , $selectAllData);
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Poca - Podcast &amp; Audio Template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="./img/core-img/favicon.ico">

  <link rel="stylesheet" href="style.css">
  <style>
    .rounded {
      border-radius: 100%;
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

   





  <section class="welcome-area">

    <div class="welcome-slides owl-carousel">

      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">

              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">JOIN IN OUR MUSIC WORLD</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="signup.php" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Join Us</a>
                  <!-- <a href="#" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a> -->
                </div>
              </div>

              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">December 9, 2018</span>
                  <h2>Episode 203 - The Last Blockbuster</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>

                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="">
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
          </div>
        </div>
      </div>

      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">

              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Listen Now</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with iTunes</a>
                  <a href="#" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a>
                </div>
              </div>

              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">December 8, 2018</span>
                  <h2>Episode 202 - The Last Blockbuster</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>

                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
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
          </div>
        </div>
      </div>

      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">

              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Discover Today</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with iTunes</a>
                  <a href="#" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a>
                </div>
              </div>

              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">December 7, 2018</span>
                  <h2>Episode 201 - The Last Blockbuster</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>

                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
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
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="poca-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest Songs</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="poca-projects-menu mb-30" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">

          <?php
          include('connection.php');
          $select = "SELECT * FROM `tbl_artist` LIMIT 5";
          $result = mysqli_query($con, $select);
          ?>

          <div class="d-flex justify-content-center" id="category">

            <button class="btn active" data-filter="*" name="btnAll" id="ID_All" type="button">All</button>


            <?php while ($row = mysqli_fetch_array($result)) { ?>
              
              <button class="btn" type="button" onclick="btnCat(<?php echo $row['id'] ?>)" id="<?php echo $row['id'] ?>"><?php echo $row["artist_category"]; ?></button> 
              
              <?php } ?>
            </div>
            
            
          </div>
        </div>
    </div>
    
    <div class="container">
      <!-- miss aleena edit work -->

      <div id="Div_ID_All" style="display:block;">
        
      </div>
      
      <!-- end edit work -->
      <div id="sub_category" class=" single_gallery_item entre " data-wow-delay="0.2s">

        </div>
      </div>
      
      
    
      
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a href="allpagedata.php" class="btn poca-btn mt-70">Load More</a>
          </div>
        </div>
      </div>
    </section>
  
  <section class="featured-guests-area">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Featured Guests</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-around">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/25.jpg" alt="">
            <div class="guest-info">
              <h5>Alfred Day</h5>
              <span>PRODUCER</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/26.jpg" alt="">
            <div class="guest-info">
              <h5>Jayden White</h5>
              <span>DRUMMER</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/27.jpg" alt="">
            <div class="guest-info">
              <h5>Vincent Reid</h5>
              <span>ENTREPRENEUR</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-12 col-lg-6">
          <div class="newsletter-content mb-50">
            <h2>Sign Up To Newsletter</h2>
            <h6>Subscribe to receive info on our latest news and episodes</h6>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="newsletter-form mb-50">
            <form action="#" method="post">
              <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
              <button type="submit" class="btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php include('footer.php')?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    AllCategoryDataF();

    function btnCat(id) {
      var category_id = id;

      $.ajax({
        url: "category.php",
        type: "POST",
        data: {
          category_id: category_id
        },
        // cache: false,
        success: function(dataResult) {


          $("#sub_category").html(dataResult);


        }
      });

    }
    function AllCategoryDataF() {
      $.ajax({
        url: "alldata.php",
        type: "POST",
        data: {
          fetch_data: "btnAll"
        },
        // cache: false,
        success: function(data) {


          $("#sub_category").html(data);

        }
        //  

      });
    }
    $(document).ready(function() {

      $('#ID_All').click(function() {
        AllCategoryDataF();


      });

    });
  </script>

  <script src="js/jquery.min.js"></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/poca.bundle.js"></script>

  <script src="js/default-assets/active.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
$(function(){
    $("audio").on("play", function() {
        $("audio").not(this).each(function(index, audio) {
            audio.pause();
        });
    });
});
</script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bd7b18a19804d87","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

</html>