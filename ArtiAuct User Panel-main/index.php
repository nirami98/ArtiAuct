<?php 
  session_start();
  if (isset($_SESSION['first']))
  {
    header("location:home2.php");
  }
  if(isset($_COOKIE['email']))
  {
    $email = $_COOKIE['email_u'];
    $password = $_COOKIE['password_u'];
  }
  else
  {
    $email = "";
    $password = "";
  }
?>




<!DOCTYPE html>
 <html class="no-js" lang="en"> 


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="ThemeTidy">
    <link rel="shortcut icon" href="assets/images/logo - 1.png" type="image/png" />
    <title>ArtiAuct - Home</title>
    <!--=================== Bootstrap core CSS ===================-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Animate CSS ===================-->
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Main CSS ===================-->
    <link href="assets/css/paira.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Font and Color CSS ===================-->
    <link href="assets/css/paira-color-font.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Paira Framework Main Responsive CSS ===================-->
    <link href="assets/css/paira-responsive.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Font Awesome ===================-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!--=================== Google Fonts ===================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
</head>


<body>
<!--=================== Main Body Content Container ===================-->
<div class="paira-container">
    <!--=================== Header Container ===================-->
    <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container-fluid padding-fix">
                <div class="row">
                    <div class="pull-left logo col-md-4 col-sm-4 col-xs-5">
                        <a href="index.php"><img src="assets/images/logo - 1.png" alt="" class="pull-left"></a>
                    </div>
                    <div class="text-center col-md-6 col-sm-6 col-xs-4">
                        <a href="#" class="menu-pops"><img src="assets/images/menu-plus.png" alt="" class="margin-right-10 img-hover"><img src="assets/images/menu-plus-hover.png" alt="" class="margin-right-10 img-hovers"><span class="text-uppercase">MENU</span></a>
                    </div>
                    <div class="pull-right col-md-3 col-sm-3 col-xs-4">
                        <div class="account-ajax-cart pull-right">
                            <ul class="list-inline pull-right">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Main Slider Section ===================-->
        <section class="header-middle paira-margin-bottom-2">
            <div class="main-slider paira-animation-container" align="Center">
                <div id="Carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="First slide" src="assets/images/slider/slider-1.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption1">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">Unique Art</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">& Paint For Sale</h1>
                                    <a href="register.php" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="assets/images/slider/slider-2.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption3">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Unique Art</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">& Paint For Sale</h1>
                                    <a href="register.php" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="assets/images/slider/slider-3.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption2">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation"
                                        data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Unique Art
                                    </h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation"
                                        data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">& Paint For Sale
                                    </h1>
                                    <a href="register.php" class="btn btn-primary btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">Show Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control paira-animation" href="#Carousel" data-slide="prev" data-paira-animation="fadeIn" data-paira-animation-delay="0.0ms"><span>PR<br>EV</span></a>
                    <a class="right carousel-control paira-animation" href="#Carousel" data-slide="next" data-paira-animation="fadeIn" data-paira-animation-delay="0.10ms"><span>NE<br>XT</span></a>
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active">01</li>
                        <li data-target="#Carousel" data-slide-to="1">02</li>
                        <li data-target="#Carousel" data-slide-to="2">03</li>
                    </ol>
                    <span class="carousel-indicators-total"></span>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="home-page">
        
        
        <!--=================== latest Collection Section ===================-->
        <section class="latest-collection paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear"><span>Our Latest Posts</span></h2>
                    </div>
                    <div class="product-widget text-center">
                        <div class="col-sm-8 col-md-8 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear"></h2>
                                    <a href="register.php" class="margin-top-10">- See all Products -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear"></h2>
                                    <a href="register.php" class="margin-top-10">- See all Products -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="margin-clear"></h2>
                                    <a href="register.php" class="margin-top-10">- See all Products -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/product/product-4.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product-hover">
                                    <h2 class="" ss="margin-clear"></h2>
                                    <a href="register.php" class="margin-top-10">- See all Products -</a>
                                </div>
                            </div>
                        </div>
                        <a href="register.php" class="btn-primary btn btn-lg margin-top-30">View More</a>
                    </div>
                </div>
            </div>
        </section>
       
        <!--=================== Gallery Section ===================-->
        <section class="gallery paira-margin-bottom-2">
            <div class="gallery-background margin-top-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-title">
                            <h2 class="text-capitalize margin-clear"><span>More Posts</span></h2>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram-desc text-left">
                                <h4 class="margin-top-0 margin-bottom-10">Artpieces</h4>
                                <!-- <a href="#" class="margin-bottom-10">@ lensation_20</a> -->
                                <p class="margin-bottom-15">You will find the best of our artpieces on account, which may conclude the following content.</p>

                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="register.php" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="register.php" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6 margin-top-30">
                            <div class="instragram">
                                <div class="instragram-image position-r">
                                    <a href="#">
                                        <div class="background-overlay"></div>
                                        <img src="assets/images/banner/banner-small-1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="instragram-hover">
                                    <a href="register.php" class="margin-top-10">- See Gallery -</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Banner Section ===================-->
        <section class="banner paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="product-widget text-center">
                        <div class="col-sm-8 col-md-6 col-xs-12 overs padding-right-0">
                            <div class="banners text-center">
                                <div class="banner-img position-r">
                            
                         <div class="col-sm-8 col-md-6 col-xs-12 overs padding-left-0">
                            <div class="banners text-center">
                                <div class="banner-img position-r">
                                </div>
                                <div class="banner-hover">
                                    <a href="collection.php" class="margin-top-10">- Shop Now -</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--=================== Footer Container ===================-->
    <footer>
        
        <!--=================== Footer Bottom Section ===================-->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Important Link</h4>
                            <ul class="list-unstyled">
                                
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="about.php">About Us</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Support</h4>
                            <ul class="list-unstyled">
                                
                                <li><a href="terms&conditions.php">Terms & Conditions </a></li>
                                <li><a href="privacypolicy.php">Privacy Policy</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="paira-widget paira-social">
                            <h4>Follow Us</h4>
                            <ul class="list-inline list-unstyled">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="paira-widget paira-copyright">
                            <p class="margin-clear" align="Center"><br><br>© ArtiAuct. Artist Oriented Web Network. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
<!--=================== Menu Dialog ===================-->
<div class="modal fade paira-menu-popup" id="paira-menu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg text-center">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-12 margin-top-15">
                        <div class="menus">
                            <h3>MAIN MENU</h3>
                            <ul class="list-unstyled margin-top-20">
                                <li><a href="index.php">Home</a></li>
                                
                                <li><a href="login.php">Log In</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                            <hr>
                            <ul class="social-links list-inline">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>


</html>