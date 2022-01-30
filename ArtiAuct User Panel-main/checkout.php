<?php 
  session_start();
  //var_dump($_SESSION);
  if (!isset($_SESSION['first']))
  {
    header("location:home.php");
    exit();
  }
  $user=$_SESSION["first"];
  //echo "Welcome " . $user;
?>




<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/dye/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 12:24:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="ThemeTidy">
    <link rel="shortcut icon" href="assets/images/logo - 1.png" type="image/png" />
    <title>ArtiAuct - Checkout</title>
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
    <!--=================== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ===================-->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="assets/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <!--=================== Google Fonts ===================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
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
                        <a href="index.php"><img src="assets/images/logo - 1.png" alt="" class="pull-left"></a>
                    </div>
                    <div class="text-center col-md-6 col-sm-6 col-xs-4">
                        <a href="#" class="menu-pops"><img src="assets/images/menu-plus.png" alt="" class="margin-right-10 img-hover"><img src="assets/images/menu-plus-hover.png" alt="" class="margin-right-10 img-hovers"><span class="text-uppercase">MENU</span></a>
                    </div>
                    <div class="pull-right col-md-3 col-sm-3 col-xs-4">
                        <div class="account-ajax-cart pull-right">
                            <ul class="list-inline pull-right">
                                <!-- <li>
                                    <a href="#" class="search-popup"><img src="assets/images/search.png" alt="" class="" width="28" height="28"></a>
                                </li> -->
                                <li><a href="profile.php"><img src="assets/images/prflogo.png" alt="Not Supported" width="30" height="30"></a></li>
                                <!-- <li class="dropdown cart-menu-body">
                                    <a href="cart.php"><img src="assets/images/shopping-bag.png" alt="" class="position-r" width="30" height="30"><span class="span"></span></a>
                                </li> -->
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="blog-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>-</li>
                        <li><a href="checkout.php">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Checkout </span></h2>
                    </div><br><br>
                    
                    <div class="col-lg-12">
                        <div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Review Your Order & Complete Checkout
                    </h2>
                    <!-- <hr/> -->
                    <!-- <a href="#" class="btn btn-info" style="width: 100%;">Add More Products & Services</a> -->
                    <hr/>

<?php
    require 'dbconnect.php'; 
    $qry = "SELECT * from cart_tbl where isactive=1";
    $rs=mysqli_query($conn, $qry);
    if (mysqli_num_rows($rs)>0)
    {
        while ($row=mysqli_fetch_assoc($rs))
        {
            $productid = $row['productid'];
            $qry2 = "SELECT * from post_tbl where isactive=1 AND id=$productid";
            $rs2=mysqli_query($conn, $qry2);
            $row2=mysqli_fetch_assoc($rs2);
            $qry3 = "SELECT * from product_tbl where isactive=1 AND postid=$productid";
            $rs3=mysqli_query($conn, $qry3);
            $row3=mysqli_fetch_assoc($rs3);
?>




                    <div class="shopping_cart">
                        <form class="form-horizontal" action="addtoinvoice.php" method="post" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <tr><br><br></tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <a class="btn btn-warning btn-sm pull-right"
                                                                   href="deletefromcart.php?did=<?php echo $row['id']; ?>"
                                                                   title="Remove Item">X</a>
                                                                <b>
                                                                    Remove From Cart</b></td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>One Job Posting Credit</li>
                                                                    <li>Job Distribution*</li>
                                                                    <li>Social Media Distribution</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>$147.00</b>
                                                            </td>
                                                        </tr> -->
                                                    </table>
                                                </div>






                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">$<?php echo $row3['productprice']; ?>.00</span></h3>
                                                    </div>
                                                </div>

<?php 
                              
        }
    }
?>


                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;">
                                            <a style="width:100%;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class=" btn btn-success" onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continue to Billing Information » </a></div>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact
                                            and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <b>Help us keep your account safe and secure, please verify your billing
                                            information.</b>
                                        <br/><br/>
                                        <table class="table table-striped" style="font-weight: bold;">
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_email">Best Email:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_email" name="email" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">First name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_first_name" name="firstname" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_last_name">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_last_name" name="lastname" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_1">Address:</label></td>
                                                <td>
                                                    
                                                    <textarea class="form-control" id="id_address_line_1"
                                                           name="address" required="required"></textarea>
                                                </td>
                                            </tr>                                           

                                           <tr>
                                               <td>
                                                    <input type="submit" class="btn btn-success btn-lg" style="width: 100%" name="submit" value="Download Receipt">
                                               </td>
                                           </tr>

                                        </table>


                                            <div style="text-align: left;"><br/>
                                                By submiting this order you are agreeing to our universal
                                                    billing agreement, and <a href="terms&conditions.php">terms of service</a>.
                                                If you have any questions about the products please contact the seller
                                                before placing this order.
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center;"><a data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapseThree"
                                                                            class=" btn   btn-success" id="payInfo"
                                                                            style="width:100%;display: none;" onclick="$(this).fadeOut();  
                   document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information »</a>
                                        </div>
                                    </h4>
                                </div>
                            </div> -->
                                <!-- <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <b>Payment Information</b>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <span class='payment-errors'></span>
                                            <fieldset>
                                                <legend>What method would you like to pay with today?</legend>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="card-holder-name">CAsh on Delivery</label>
                                                    <div class="col-sm-9">
                                                        <input type="checkbox" class="form-control" stripe-data="name"
                                                               id="name-on-card" placeholder="Card Holder's Name">
                                                    </div>
                                                </div>
                                                                                        </fieldset>
                                            <button type="submit" class="btn btn-success btn-lg" style="width:100%;">Download Reeipt
                                            </button>
                                            <br/>
                                            <div style="text-align: left;"><br/>
                                                By submiting this order you are agreeing to our <a href="/legal/billing/">universal
                                                    billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
                                                If you have any questions about our products or services please contact us
                                                before placing this order.
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                </div>
                </form>
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
        <!--=================== Footer Top Section ===================-->
        <!-- <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="paira-widget paira-subscribe">
                            <h3 class="text-center margin-clear text-uppercase">Sign up for the newsletter</h3>
                            <hr class="margin-bottom-40 margin-top-15">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">SUBSCRIBE</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--=================== Footer Bottom Section ===================-->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="paira-widget paira-menu">
                            <h4>Important Link</h4>
                            <ul class="list-unstyled">
                                <!-- <li><a href="#">Help Center</a></li>
                                <li><a href="#">Market Place</a></li>
                                <li><a href="#">Author Terms</a></li>
                                <li><a href="#">Licenses</a></li>-->
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
                                <li><a href="index.php">Home</a></li>
                                <!-- <li><a href="#">Forums</a></li>
                                <li><a href="#">AutThemetidy Blog</a></li>
                                <li><a href="#">Faqs</a></li> -->
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
                                <li><a href="https://www.facebook.com/themetidy" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/+Themetidy-Official-Page" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.instragram.com/themetidy" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <!-- <li><a href="https://twitter.com/themetidy" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/themetidy" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/themetidy/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="https://www.behance.net/themetidy" target="_blank"><i class="fa fa-behance"></i></a></li> -->
                            </ul>
                        </div>
                        <!-- <div class="paira-widget paira-payment">
                            <h4>Payment Methode</h4>
                            <img src="assets/images/footer/payment-icon.png" alt="">
                        </div> -->
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
<!--=================== Ajax Cart Dialog ===================-->

<!--=================== Login Dialog ===================-->

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
                              <!--   <li class="dropdown">
                                    <a class="dropdown-toggle plus" data-toggle="dropdown" href="#">Collection<i class="fa fa-plus margin-left-5"></i><i class="fa fa-minus minus-fa"></i></a>
                                    <ul class="dropdown-menu sub">
                                        <li><a href="list-collections.php">List Collection</a></li>
                                        <li><a href="collection.php">Collection</a></li>
                                        <li><a href="collection-list-view.php">Collection List View</a></li>
                                    </ul>
                                </li> -->
                                
                                <li><a href="post.php">Add Post</a></li>
                                <li><a href="blog.php">View Post</a></li>
                                <li><a href="challenge.php">View Challenge</li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="reset-password.php">Reset Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                <!-- <li class="dropdown">
                                    <a class="dropdown-toggle plus" data-toggle="dropdown" href="#">Pages<i class="fa fa-plus margin-left-5"></i><i class="fa fa-minus minus-fa"></i></a>
                                    <ul class="dropdown-menu sub">
                                        <li><a href="article.php">article</a></li>
                                        <li><a href="login.php">login</a></li>
                                        <li><a href="register.php">register</a></li>
                                        <li><a href="reset-password.php">reset-password</a></li>
                                        <li><a href="search.php">search</a></li>
                                        <li><a href="404.php">404</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                            <hr>
                            <ul class="social-links list-inline">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                               <!--  <li><a href="https://twitter.com/themetidy" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/themetidy" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/themetidy/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="https://www.behance.net/themetidy" target="_blank"><i class="fa fa-behance"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================== Search Dialog ===================-->

<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>

<!-- Mirrored from demo.enpek.com/html-templates/dye/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 12:24:38 GMT -->
</html>