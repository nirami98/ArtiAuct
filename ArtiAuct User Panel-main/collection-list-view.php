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


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="ThemeTidy">
    <link rel="shortcut icon" href="assets/images/logo - 1.png" type="image/png" />
    <title>ArtiAuct - Collection</title>
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

    <style type="text/css">
        .immg{
            width: 250px !important;
            height: 250px !important;
        }
    </style>
</head>
<body>
<!--=================== Main Body Content Container ===================-->
<div class="paira-container pages-container">
    <!--=================== Header Container ===================-->
    <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container-fluid padding-fix">
                <div class="row">
                    <div class="pull-left logo col-md-3 col-sm-3 col-xs-4">
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
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="collection-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="home2.php">Home <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="collection-list-view"> Collection</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Picture Section ===================-->
        <section class="latest-picture paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Collection</span></h2>
                    </div>
                </div>
            </div>
            <br><br><br>

<?php
    require 'dbconnect.php'; 
    $qry = "SELECT * from product_tbl where isactive=1";
    $rs=mysqli_query($conn, $qry);
?>

            <div class="list-view">
                <div class="margin-bottom-30">
                    <div class="container">
                        <div class="row">


<?php 
    if (mysqli_num_rows($rs)>0)
    {
        while ($row=mysqli_fetch_assoc($rs))
        {
            
            $productid = $row['postid'];
            $qry2 = "SELECT * from post_tbl where isactive=1 AND id=$productid";
            $rs2=mysqli_query($conn, $qry2);
            $row2=mysqli_fetch_assoc($rs2);
?>

                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <div class="product text-center">
                                    <div class="product-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="<?php echo $row2['postpicture']; ?>" alt="" class="immg">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <h3 class="margin-clear"><a href="collection.php"><?php echo $row2['postname']; ?></a></h3>
                                        <div class="text-center prices margin-top-15 margin-bottom-10">
                                            <h4 class="pull-left margin-clear margin-left-5"><span class="money">$<?php echo $row['productprice']; ?></span></h4>
                                        </div>
                                        <div><p class="margin-bottom-15"><?php echo $row2['postdescription']; ?></p></div>
                                        <div class="paira-wish-compare-con wish-compare-view-cart">
                                            <a href="addtocart.php?pid=<?php echo $row['postid']; ?>" class="product-cart-con btn btn-success"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

<?php 
                              
        }
    }
?>
                                  
                        </div>
                    </div>
                    <div class="product-container"></div>
                </div>
            </div>
        </section>
    </main>
    <!--=================== Footer Container ===================-->
    <footer>
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
                                <li><a href="home2.php">Home</a></li>
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
<!--=================== Loading Image ===================-->
<div class="paira-loading ajax-loading margin-clear text-center">
    <img src="assets/images/AjaxLoader.gif" alt="" class="padding-clear margin-top-10">
    <p><b>Loading...</b></p>
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
<!--=================== Search Dialog ===================-->
<div class="modal fade paira-search-popup search-pops" id="paira-search" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="row">
                    <div class="col-md-12 paira-margin-top-1">
                        <form class="popup-search-form">
                            <input type="text" class="form-control padding-clear text-capitalize pop-light" name="q" value="" placeholder="Search here..."/>
                            <button class="search"><i class="fa fa-search fa-2x"></i></button>
                            <button class="btn btn-success btn-lg text-uppercase pull-right margin-top-15">GO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>


</html>