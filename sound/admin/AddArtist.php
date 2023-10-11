<?php
include('../connection.php');
if(isset($_POST['submitbtn'])){
    $artist_name  = $_POST['artist_name'];
    $artist_cat = $_POST['artist_cat'];
    $artist_pic = $_FILES['artist_pic']['name'];
    $artist_pic_tmp = $_FILES['artist_pic']['tmp_name'];
    $pic_path = './artistpics/' .  $artist_pic;
    move_uploaded_file($artist_pic_tmp,$pic_path);
    $insert_artist = "INSERT INTO `tbl_artist`( `artist_name`, `artist_category` ,`artistpics`) VALUES ('$artist_name','$artist_cat','$pic_path')";
    $insert_run = mysqli_query($con,$insert_artist);
    if($insert_run){
        echo "<script>alert('artist inserted')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
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
include('../connection.php');
 include('sidebar.html');?>




    <section class="main_content dashboard_part" style="margin-top:-50px;"  >

    <?php include('navbar.html');?>

        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h1 class="">Add Artist</h1>
                                </div>
                            </div>
                          <form method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                
                              <input class="form-control" type="text" name="artist_name" placeholder="Enter Artist Name" required>
                            </div>
                            <div class="input-group mb-3">
                              <input class="form-control" type="text" name="artist_cat"  placeholder="Enter Artist Category" required>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text">Add Artist Picture</label>
                              <input class="form-control" type="file" name="artist_pic"  placeholder="Enter Artist Picture" required>
                            </div>
                            <div class="input-group">
                              <input type="submit"  class='btn btn-dark px-5' name='submitbtn'>
                            </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer_part">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="footer_iner text-center">
                                <p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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