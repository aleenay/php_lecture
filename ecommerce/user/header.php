<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
?>
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">

        <nav class="classy-navbar" id="essenceNav">

            <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <div class="classy-menu">

                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <div class="classynav">
                    <ul>
                        <li><a href="#">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Women's Collection</li>
                                    <li><a href="shop.php">Dresses</a></li>
                                    <li><a href="shop.php">Blouses &amp; Shirts</a></li>
                                    <li><a href="shop.php">T-shirts</a></li>
                                    <li><a href="shop.php">Rompers</a></li>
                                    <li><a href="shop.php">Bras &amp; Panties</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Men's Collection</li>
                                    <li><a href="shop.php">T-Shirts</a></li>
                                    <li><a href="shop.php">Polo</a></li>
                                    <li><a href="shop.php">Shirts</a></li>
                                    <li><a href="shop.php">Jackets</a></li>
                                    <li><a href="shop.php">Trench</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Kid's Collection</li>
                                    <li><a href="shop.php">Dresses</a></li>
                                    <li><a href="shop.php">Shirts</a></li>
                                    <li><a href="shop.php">T-shirts</a></li>
                                    <li><a href="shop.php">Jackets</a></li>
                                    <li><a href="shop.php">Trench</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="single-product-details.html">Product Details</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="regular-page.html">Regular Page</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="shop.php">Product</a></li>

                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="header-meta d-flex clearfix justify-content-end">

            <div class="search-area">

                <?php
               
                if(isset($_SESSION['Uname'])){
                    $uname =  $_SESSION['Uname'];
                   print_r($_SESSION['Uname']) ;
                }
                
                ?>
                <!-- <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form> -->
            </div>

            <div class="favourite-area">
                <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
            </div>

            <div class="user-login-info">
                <a href="#"><img src="img/core-img/user.svg" data-bs-toggle="modal" data-bs-target="#SignUpModal"
                        alt=""></a>
            </div>

            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
            </div>
        </div>
    </div>
</header>


<!-- Modal -->
<div class="modal fade" id="SignUpModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="signup.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="SignUpLabel">Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1">

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone no</label>
                                <input type="number" name="phoneno" class="form-control" id="exampleInputEmail1">

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>

                    </div>






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-success" value="sign up">
                </div>

            </form>
        </div>
    </div>
</div>