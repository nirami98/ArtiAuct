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
    <title>ArtiAuct - Invoice</title>
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
    <style type="text/css">
        .invoice {
    position: relative;
    background: #fff;
    border: 1px solid #f4f4f4;
    padding: 20px;
    margin: 10px 25px;
}
.page-header {
    margin: 10px 0 20px 0;
    font-size: 22px;
}
    </style>
    <script>
function myFunction() {
  window.print();
}
</script>
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
                                <!-- <li><a href="profile.php"><img src="assets/images/prflogo.png" alt="Not Supported" width="30" height="30"></a></li> -->
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
                        <li><a href="invoice.php">Invoice</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=================== latest Collection Section ===================-->
        <section class="latest-blog paira-margin-bottom-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title">
                        <h2 class="text-capitalize margin-clear text-center"><span>Download invoice</span></h2>
                    </div><br><br>
                    <div class="col-lg-12">
                        <section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> ArtiAuct 
                                    <small class="pull-right">Date: 
                                        <?php 
                                            require 'dbconnect.php'; 
                                            $qry = "SELECT * from invoice_tbl where isactive=1";
                                            $rs=mysqli_query($conn, $qry);

                                            if (mysqli_num_rows($rs)>0)
                                            {
                                                while ($row=mysqli_fetch_assoc($rs))
                                                {
                                                    echo $row['doi'];
                                                
                                        ?>
                                    </small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    Government Polytechnic for Girls, Opposite Physical Research Laboratory, Ahmedabad - 380 015
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong><?php echo $row['firstname'] . " " . $row['lastname']; ?></strong><br><b>Address:</b><?php echo $row['address']; ?><br><b>Email:</b><?php echo $row['email']; ?>
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <b>Order ID:</b><?php echo $row['id']; ?><br>
                            </div>



                            <!-- /.col -->
                            <!-- /.row -->

                        <!-- Table row -->



<?php 

$rid = $row['id'];
$qry1 = "SELECT * from product_tbl where isactive=1 and id=$rid";
$rs1=mysqli_query($conn, $qry1);

if (mysqli_num_rows($rs1)>0)
{
    while ($row1=mysqli_fetch_assoc($rs1))
    {

 ?>


                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product - ID: &nbsp <?php echo $row['postid']; ?></th>
                                        </tr>
                                            
                                        <tr>
                                            <th>Total: &nbsp <?php echo $row1['productprice']; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Please print the invoice letter and confirm your payment.</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!--<div class="row">
                             accepted payments column
                            <div class="col-md-12">
                               
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>Total:</th>
                                                <td> 50000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>/.col
                        </div>/.row -->

 <?php 
    }
}

  
?>  


                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="" class="btn btn-default" onclick="myFunction()"><i class="fa fa-print"></i> Print</a>
                                <a href="deletefrominvoice.php?did=<?php echo $row['postid']; ?>" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Confirm</a>
                            </div>
                        </div>
                    </section>
                </section>
                    </div>
                </div>
            </div>


<?php 
  

    }
}
?>


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
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
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
                            <p class="margin-clear" align="Center"><br><br>?? ArtiAuct. Artist Oriented Web Network. All Rights Reserved.</p>
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
                            <button class="btn btn-success btn-lg text-uppercase pull-right margin-top-15">go</button>
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
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js" type="text/javascript"></script>
</body>

<!-- Mirrored from demo.enpek.com/html-templates/dye/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 12:24:38 GMT -->
</html>