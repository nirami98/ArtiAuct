<?php 

  session_start();
  //var_dump($_SESSION);
  if (!isset($_SESSION['first']))
  {
    header("location:index.php");
    exit();
  }
  $user=$_SESSION["first"];
  //echo "Welcome " . $user;
?>

<!DOCTYPE html>
 <html class="no-js" lang="en"> 

<!-- Mirrored from demo.enpek.com/html-templates/dye/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 12:21:54 GMT -->
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
                        <a href="home2.php"><img src="assets/images/logo - 1.png" alt="" class="pull-left"></a>
                    </div>
                    <div class="text-center col-md-6 col-sm-6 col-xs-4">
                        <a href="#" class="menu-pops"><img src="assets/images/menu-plus.png" alt="" class="margin-right-10 img-hover"><img src="assets/images/menu-plus-hover.png" alt="" class="margin-right-10 img-hovers"><span class="text-uppercase">MENU</span></a>
                    </div>
                    <div class="pull-right col-md-3 col-sm-3 col-xs-4">
                        <div class="account-ajax-cart pull-right">
                            <ul class="list-inline pull-right">
                                <li><a href="profile.php"><img src="assets/images/prflogo.png" alt="Not Supported" width="30" height="30"></a></li>
                                <li class="dropdown cart-menu-body">
                                    <a href="cart.php"><img src="assets/images/shopping-bag.png" alt="" class="position-r" width="30" height="30"><span class="span"></span></a>
                                </li>
                                
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
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">Welcome To ArtiAuct !</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s"><?php echo $user ?></h1>
    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="assets/images/slider/slider-2.jpg">
                            <div class="container">
                                <div class="carousel-caption carousel-caption3">
                                    <h1 class="text-capitalize margin-bottom-20 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Home To Your</h1>
                                    <h1 class="text-capitalize margin-bottom-20 margin-top-0 paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">Artistry</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control paira-animation" href="#Carousel" data-slide="prev" data-paira-animation="fadeIn" data-paira-animation-delay="0.0ms"><span>PR<br>EV</span></a>
                    <a class="right carousel-control paira-animation" href="#Carousel" data-slide="next" data-paira-animation="fadeIn" data-paira-animation-delay="0.10ms"><span>NE<br>XT</span></a>
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active">01</li>
                        <li data-target="#Carousel" data-slide-to="1">02</li>

                    </ol>
                    <span class="carousel-indicators-total"></span>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="home-page">
<section class="latest-blog paira-margin-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear pull-left"><span>Our Latest Post</span></h2>
                        <a href="blog.php" class="text-uppercase pull-right margin-top-10">View All</a>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                        <div class="blog">
                            <div class="blog-image position-r">
                                <a href="blog.php">
                                    <!-- <div class="background-overlay">View all Posts</div> -->
                                    <img src="assets/images/blog/blog-7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                        <div class="blog">
                            <div class="blog-image position-r">
                                <a href="blog.php">
                                    <!-- <div class="background-overlay">View all Posts</div> -->
                                    <img src="assets/images/blog/blog-8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 margin-top-30">
                        <div class="blog">
                            <div class="blog-image position-r">
                                <a href="blog.php">
                                    <!-- <div class="background-overlay">View all Posts</div> -->
                                    <img src="assets/images/blog/blog-9.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== latest Picture Section ===================-->
        <section class="latest-picture paira-margin-bottom-2">
            <div class="picture-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-title">
                            <h2 class="text-capitalize margin-clear pull-left"><span>Our Latest Product</span></h2>
                            <a href="collection-list-view.php" class="text-uppercase pull-right margin-top-10">View All</a>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="collection-list-view.php">
                                        <!-- <div class="background-overlay"></div> -->
                                        <img src="assets/images/product/product-5.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <!-- <div class="product-hover">
                                    <h4 class="margin-clear"><a href="collection.php"></a></h4>
                                    <div class="text-center prices">
                                        <h3 class="pull-left margin-right-5 del"><del><span class="money"></span></del></h3>
                                        <h3 class="pull-left margin-left-5"><span class="money"></span></h3>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="collection-list-view.php">
                                        <!-- <div class="background-overlay"></div> -->
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <!-- <div class="product-hover">
                                    <h4 class="margin-clear"><a href="collection.php"></a></h4>
                                    <div class="text-center prices">
                                        <h3 class="pull-left margin-right-5 del"><del><span class="money"></span></del></h3>
                                        <h3 class="pull-left margin-left-5"><span class="money"></span></h3>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-12 margin-top-30">
                            <div class="product text-center">
                                <div class="product-image position-r">
                                    <a href="collection-list-view.php">
                                        <!-- <div class="background-overlay"></div> -->
                                        <img src="assets/images/product/product-7.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <!-- <div class="product-hover">
                                    <h4 class="margin-clear"><a href="collection.php"></a></h4>
                                    <div class="text-center prices">
                                        <h3 class="pull-left margin-right-5 del"><del><span class="money"></span></del></h3>
                                        <h3 class="pull-left margin-left-5"><span class="money"></span></h3>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-container"></div>
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
                                <li><a href="complain.php">Complain</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Support</h4>
                            <ul class="list-unstyled">
                                <li><a href="terms&conditions.php">Terms & Conditions </a></li>
                                <li><a href="privacypolicy.php">Privacy Policy</a></li>
                                <li><a href="feedback.php">Feedback</a></li>                                
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
</div>

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
                                <li><a href="home2.php">Home</a></li>
                                <li><a href="collection-list-view.php">Shop</a></li>
                                <li><a href="post.php">Add Post</a></li>
                                <li><a href="blog.php">View Post</a></li>
                                <li><a href="challenge.php">View Challenge</li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="reset-password.php">Reset Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
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
