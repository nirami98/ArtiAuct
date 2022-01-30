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

<!-- Mirrored from demo.enpek.com/html-templates/dye/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 12:25:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Dye - Multipurpose Creative Shop Art & Photography HTML Template">
    <meta name="author" content="ThemeTidy">
    <link rel="shortcut icon" href="assets/images/logo - 1.png" type="image/png" />
    <title>ArtiAuct - Register</title>
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
    
    <style type="text/css">
        button, input {
    -webkit-appearance: auto !important;
    outline: 0 !important;
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--=================== Main Content Container ===================-->
    <main class="register-page">
        <!--=================== Breadcrumb Section ===================-->
        <section class="breadcrumb-container paira-margin-bottom-3">
            <div class="breadcrumb">
                <div class="container-fluid padding-fix">
                    <ul class="list-inline">
                        <li><a href="home2.php">Home</a></li>
                        <li>-</li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="register-content paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Register</span></h2>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="form-contact">
                            <div class="row">
                                <form accept-charset="UTF-8" class="contact-form" method="POST" action="insertion.php" enctype="multipart/form-data">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <input name="form_type" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="✓">
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">First Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="firstname">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon16">Last Name</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="lastname">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Username</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="username">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon15">Profile Picture</span>
                                            <input type="file" name="fileToUpload">
                                        </div>
                                    
                                        <br>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon13">Email-ID</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="email">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Password</span>
                                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="password">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Confirm Password</span>
                                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="confirmpassword">
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Mobile Number</span>
                                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="mobilenumber">
                                        </div>
                                          <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon" id="basic-addon14">Gender</span>
                                            <table>
                                                <tr>
                                                    <td style="padding-left: 40px">Male</td>
                                                    <td><input type="radio"  name="gender" value="Male" class="basic-addon3"></td></tr>
                                                    <tr>
                                                    <td style="padding-left: 40px">Female</td>
                                                    <td><input type="radio" name="gender" value="Female"></td>
                                                </tr>

                                            </table>
                                            
                                            
                                        </div>
                                        
                                        <div class="for-pass full-width">
                                            <input type="submit" name="submit" value="Create An Account" class="btn btn-lg btn-success margin-top-15">
    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-6 col-xs-12 col-sm-6 margin-top-30">
                        <div class="creat-account">
                            <h4 class="margin-clear">Already have a account?</h4>
                            <a href="login.php" class="btn btn-lg btn-success margin-top-15">Login</a>
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
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                
                                <li><a href="login.php">Log In</a></li>
                                
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
<script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>

<!-- Mirrored from demo.enpek.com/html-templates/dye/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 12:25:11 GMT -->
</html>