<?php 
  session_start();
  //var_dump($_SESSION);
  if (!isset($_SESSION['fn']))
  {
    header("location:index.php");
    exit();
  }
  $user=$_SESSION["fn"];
  //echo "Welcome " . $user;
?>


<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="logo.png" type="image/png" />
  <title>ArtiAuct | City Management</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
</head>
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="dashboard.php" class="navbar-brand" data-toggle="fullscreen"><img src="images/shreyalogo.png" class="m-r-sm"><i>ArtiAuct</i></a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="images/shreyalogo.png">
            </span>
            <?php echo $user; ?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="logout.php" class="btn btn-default">Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="dashboard.php"   class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    
                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-user icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-user text-active"></i>
                        </span>
                        <span>Manage User</span>
                      </a>
                    
                      <ul class="nav lt">
                        <li>
                          <a href="viewuser.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View User</span>
                          </a>
                        </li>
                      </ul>
                    
                    </li>
                    <li>
                      <a href="#layout">
                        <i class="fa fa-tag icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-shopping-cart text-active"></i>
                        </span>
                        <span>Manage Product</span>
                      </a>
                      <ul class="nav lt">
                        <li>
                          <a href="viewproductdetails.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Product Detail</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a href="#layout">
                        <i class="fa fa-list icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-tags text-active"></i>
                        </span>
                        <span>Manage Hashtags</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="viewhashtag.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Hashtags</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a href="#layout"  >
                        <i class="fa fa-camera-retro icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-picture-o text-active"></i>
                        </span>
                        <span>Manage Posts</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="viewpost.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Post</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-pencil-square icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-folder-open text-active"></i>
                        </span>
                        <span>Manage Challenge</span>
                      </a>
                      <ul class="nav lt">
                        <li>
                          <a href="uploadchallenge.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Upload Challenge</span>
                          </a>
                        </li>
                        <li >
                          <a href="viewchallenge.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Challenge</span>
                          </a>
                        </li>
                        </ul>
                      </li>                
                      
                      <li>
                        <a href="#layout">
                          <i class="fa fa-sort-alpha-asc icon">
                            <b class="bg-warning"></b>
                          </i>
                          <span class="pull-right">
                            <i class="fa fa-angle-down text"></i>
                            <i class="fa fa-sort-alpha-asc text-active"></i>
                          </span>
                          <span>Manage Category</span>
                        </a>
                        <ul class="nav lt">
                          <li >
                            <a href="addcategory.php">
                              <i class="fa fa-angle-right"></i>
                              <span>Add Category</span>
                            </a>
                          </li>
                          <li >
                            <a href="viewcategory.php">
                              <i class="fa fa-angle-right"></i>
                              <span>View Category</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li>
                        <a href="#layout"  >
                          <i class="fa fa-map-marker icon">
                            <b class="bg-warning"></b>
                          </i>
                          <span class="pull-right">
                            <i class="fa fa-angle-down text"></i>
                            <i class="fa fa-hand-o-left text-active"></i>
                          </span>
                          <span>Manage Location</span>
                        </a>
  
                        <ul class="nav lt">
                          <li >
                            <a href="#layout"  >
                              <i class="fa fa-hand-o-right icon">
                                <b class="bg-warning"></b>
                              </i>
                              <span class="pull-right">
                                <i class="fa fa-angle-down text"></i>
                                <i class="fa fa-map-marker text-active"></i>
                              </span>
                              <span>Manage State</span>
                            </a>

                            <ul class="nav lt">
                              <li >
                                <a href="addstate.php" >                                                        
                                  <i class="fa fa-angle-right"></i>
                                    <span>Add State</span>
                                </a>
                              </li>
                              
                              <li >
                                <a href="viewstate.php" >                                                        
                                  <i class="fa fa-angle-right"></i>
                                  <span>View State</span>
                                </a>
                              </li>
                            </ul> 
                          </li>
                          
                          <li >
                            <a href="#layout"  >
                              <i class="fa fa-hand-o-right icon">
                                <b class="bg-warning"></b>
                              </i>
                              <span class="pull-right">
                                <i class="fa fa-angle-down text"></i>
                                <i class="fa fa-map-marker text-active"></i>
                              </span>
                              <span>Manage City</span>
                            </a>
                            
                            <ul class="nav lt">
                              <li >
                                <a href="addcity.php" >                                                        
                                  <i class="fa fa-angle-right"></i>
                                    <span>Add Ctiy</span>
                                </a>
                              </li>
                        
                              <li >
                                <a href="viewcity.php" >                                                        
                                  <i class="fa fa-angle-right"></i>
                                  <span>View City</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li >

                      <li>
                        <a href="#layout">
                          <i class="fa fa-heart icon">
                            <b class="bg-warning"></b>
                          </i>
                          <span class="pull-right">
                            <i class="fa fa-angle-down text"></i>
                            <i class="fa fa-heart-o text-active"></i>
                          </span>
                          <span>Manage Likes</span>
                        </a>
                        <ul class="nav lt">
                          <li >
                            <a href="viewlikes.php">
                              <i class="fa fa-angle-right"></i>
                              <span>View Likes</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li>
                        <a href="#layout">
                          <i class="fa fa-comments icon">
                            <b class="bg-warning"></b>
                          </i>
                          <span class="pull-right">
                            <i class="fa fa-angle-down text"></i>
                            <i class="fa fa-comment-o text-active" ></i>
                          </span>
                          <span>Manage Comments</span>
                        </a>
                        <ul class="nav lt">
                          <li >
                            <a href="viewcomments.php">
                              <i class="fa fa-angle-right"></i>
                              <span>View Comments</span>
                            </a>
                          </li>
                        </ul>
                      </li>                      

                      <li>
                        <a href="#layout">
                          <i class="fa fa-edit icon">
                            <b class="bg-warning"></b>
                          </i>
                          <span class="pull-right">
                            <i class="fa fa-angle-down text"></i>
                            <i class="fa fa-edit text-active" ></i>
                          </span>
                          <span>Manage Feedback</span>
                        </a>
                        <ul class="nav lt">
                          <li >
                            <a href="viewfeedback.php">
                              <i class="fa fa-angle-right"></i>
                              <span>View Feedback</span>
                            </a>
                          </li>
                        </ul>
                      </li>   

                      <li>
                        <a href="#layout">
                          <i class="fa fa-unlink icon">
                            <b class="bg-warning"></b>
                          </i>
                          <span class="pull-right">
                            <i class="fa fa-angle-down text"></i>
                            <i class="fa fa-unlink text-active" ></i>
                          </span>
                          <span>Manage Complain</span>
                        </a>
                        <ul class="nav lt">
                          <li >
                            <a href="viewcomplain.php">
                              <i class="fa fa-angle-right"></i>
                              <span>View Complain</span>
                            </a>
                          </li>
                        </ul>
                      </li>                                                               
                    </ul>
                  </nav>

                </div>
              </section>
          </section>

        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Information</li>
              </ul>
              <div class="m-b-md">
                <h3 class="m-b-none" style="color: white">City</h3>
                <small style="color: white">View Cities</small>
              </div>
              
              <?php 
                require 'dbconnect.php';
                $qry = "SELECT * FROM city_tbl";
                $rs=mysqli_query($conn, $qry);
              ?>

              <div class="row">
                <div class="col-md-12">



                    <!--Area chart example -->
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>State ID</th>
                                                    <th>City Name</th>
                                                    <th>Is Active</th>
                                                    <th>Remove</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                              <?php 
                                                if (mysqli_num_rows($rs)>0)
                                                {
                                                  while ($row=mysqli_fetch_assoc($rs))
                                                  {
                                                    //if($row['isactive']==1 OR $row['isactive']==2)
                                                    //{
                                              ?>

                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['sid']; ?></td>
                                                    <td><?php echo $row['cityname']; ?></td>
                                                    <td><?php echo $row['isactive']; ?></td>
                                                    <td><a href="statuschangecity.php?id=<?php echo $row['id']; ?>">Remove</a></td>
                                                </tr>
                                                
                                                <?php 
                                                    //}
                                                  }
                                                }
                                              ?>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

                
            </div>

          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  
  
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/charts/flot/jquery.flot.min.js"></script>
  <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="js/charts/flot/jquery.flot.resize.js"></script>
  <script src="js/charts/flot/jquery.flot.grow.js"></script>
  <script src="js/charts/flot/demo.js"></script>

  <script src="js/calendar/bootstrap_calendar.js"></script>
  <script src="js/calendar/demo.js"></script>

  <script src="js/sortable/jquery.sortable.js"></script>

</body>
</html>