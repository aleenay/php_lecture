<?php
include('C:\xampp\htdocs\final sound\sound\connection.php');
$query = "SELECT * FROM `tbl_music` INNER JOIN `tbl_album` ON tbl_music.album=tbl_album.album_id
  INNER JOIN `tbl_artist` ON tbl_music.artistname=tbl_artist.id ";
$query_run = mysqli_query($con , $query);

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



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="img/logo.png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">

                    <img src="img/menu-icon/1.svg" alt>
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a href="index.html">Classic</a></li>
                    <li><a href="index_2.html">Minimal</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/2.svg" alt>
                    <span>Pages</span>
                </a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="resister.html">Register</a></li>
                    <li><a href="forgot_pass.html">Forgot Password</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/3.svg" alt>
                    <span>Applications</span>
                </a>
                <ul>
                    <li><a href="mail_box.html">Mail Box</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/4.svg" alt>
                    <span>UI Component</span>
                </a>
                <ul>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="dropdown.html">Dropdowns</a></li>
                            <li><a href="Badges.html">Badges</a></li>
                            <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Components</a>
                        <ul>
                            <li><a href="notification.html">Notifications</a></li>
                            <li><a href="progress.html">Progress Bar</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="cards.html">cards</a></li>
                            <li><a href="Pagination.html">Pagination</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/5.svg" alt>
                    <span>Widgets</span>
                </a>
                <ul>
                    <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                    <li><a href="profilebox.html">Profile Box</a></li>
                </ul>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/6.svg" alt>
                    <span>Forms</span>
                </a>
                <ul>
                    <li class="mm-active"><a href="#">Elements</a>
                        <ul>
                            <li><a class="active" href="data_table.html">Data Tables</a></li>
                            <li><a href="bootstrap_table.html">Grid Tables</a></li>
                            <li><a href="datepicker.html">Date Picker</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Widgets</a>
                        <ul>
                            <li><a href="Input_Selects.html">Input Selects</a></li>
                            <li><a href="Input_Mask.html">Input Mask</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/7.svg" alt>
                    <span>Charts</span>
                </a>
                <ul>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="apex_chart.html">Apex Charts</a></li>
                    <li><a href="chart_sparkline.html">chart sparkline</a></li>
                </ul>
            </li>
        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                       
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                            
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($query_run)){ ?>
                                        <tr>
                                            <td><img src="<?php echo $row['music_banner']?>" alt=""></td>
                                            <td><?php echo $row['music_title']  ?></td>
                                            <td><?php echo $row['artist_name']  ?></td>
                                            <td><?php echo $row['artist_category']  ?></td>
                                            <td><?php echo $row['album']  ?></td>
                                            <td><?php echo $row['date']  ?></td>
                                            <td><audio src="<?php echo $row['music_file']  ?>"></audio></td>
                                            <td><a href="#" class="status_btn">Active</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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