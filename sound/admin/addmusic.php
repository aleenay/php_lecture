<?php
include('../connection.php');
$select_artist = "SELECT * FROM `tbl_artist`";
$select_artist_run = mysqli_query($con,$select_artist);
$select_artist_category = "SELECT * FROM `tbl_artist`";
$select_artist_category_run = mysqli_query($con,$select_artist_category);
$select_album = "SELECT * FROM `tbl_album`";
$select_album_run = mysqli_query($con,$select_album);
if(isset($_POST['submitbtn'])){
    $artist_name = $_POST['artist'];
    $title = $_POST['title'];
    $music_banner = $_FILES['music_banner']['name'];
    $music_banner_tmp = $_FILES['music_banner']['tmp_name'];
    $banner_path = './musicbanner/' .  $music_banner;
    move_uploaded_file($music_banner_tmp,$banner_path);
    $music_file = $_FILES['music_file']['name'];
    $music_file_tmp = $_FILES['music_file']['tmp_name'];
    $file_path = './musicfiles/' .  $music_file;
    move_uploaded_file($music_file_tmp,$file_path);
    $video_file = $_FILES['video_file']['name'];
    $video_file_tmp = $_FILES['video_file']['tmp_name'];
    $video_path = './musicvideo/' .  $video_file;
    move_uploaded_file($video_file_tmp,$video_path);
    $date = $_POST['date'];
    $insert_query = "INSERT INTO `tbl_music`( `music_title`, `artistname`, `music_banner`, `music_file`, `date`, `artist_category`) VALUES ('$title','$artist_name','$banner_path','$file_path','$date','$artist_name');
    INSERT INTO `tbl_video`(`date`,`music_name`, `video_file`, `artistname`) VALUES ('$date','$title','$video_path','$artist_name')";
    $insert_query_run = mysqli_multi_query($con , $insert_query);
    if($insert_query_run){
        echo "<script>alert('Music inserted')</script>";
    }
}




?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
<?php
 include('sidebar.html');?>




    <section onclick="hideandshow()" class="main_content dashboard_part" style="margin-top:-50px;"  >

    <?php include('navbar.html');?>

        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header">
                                <div class="main-title">
                                    <h1 class="">Add Music</h1>
                                    <div class="input-group ">
                              <a href="addsongtoalbum.php" class=' btn btn-dark px-5' name='submitbtn'>Add Song to existing Album</a>
                            </div>
                                </div>
                            </div>
                          <form method="post" enctype="multipart/form-data">
                          <div class="input-group mb-3">
                              <input class="form-control" type="text" name="title"  placeholder="Music Name" required>
                            </div>
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="">Select Artist</label>
                            <select name="artist" class="form-control">
            <?php while($artist = mysqli_fetch_array($select_artist_run)){ ?>
            <option value="<?php echo $artist['id'] ?>"><?php echo $artist['artist_name'] ?> (<?php echo $artist['artist_category'] ?>)</option>
           <?php } ?>
        </select><br>
                            </div>
                           
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="">Insert Music Banner</label>
                              <input class="form-control" type="file" name="music_banner"  placeholder="Enter Artist Picture" required>
                            </div>
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="">Insert Music File</label>
                              <input class="form-control" type="file" name="music_file"  placeholder="Enter Artist Picture" required>
                            </div>
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="">Insert Video File</label>
                              <input class="form-control" type="file" name="video_file"  placeholder="Enter Artist Picture" required>
                            </div>
               
                            
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="">Insert Date </label>
                              <input class="form-control" type="date" name="date"  placeholder="Enter Relaese Date" required>
                            </div>
                            <div class="input-group">
                              <input type="submit"  class='btn btn-dark px-5' name='submitbtn'>
                            </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

     <hr>
    </section>

         



    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/gijgo/gijgo.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>
    <script src="js/chart.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/apex_chart/apexcharts.js"></script>

    <script src="js/custom.js"></script>


    <script src="js/active_chart.js"></script>
    <script src="vendors/apex_chart/radial_active.js"></script>
    <script src="vendors/apex_chart/stackbar.js"></script>
    <script src="vendors/apex_chart/area_chart.js"></script>
    <script src="vendors/apex_chart/bar_active_1.js"></script>
    <script src="vendors/chartjs/chartjs_active.js"></script>

</body>

</html>









