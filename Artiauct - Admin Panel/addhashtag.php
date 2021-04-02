<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>ArtiAuct | Hashtag Management</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="images/shreyalogo.png" class="m-r-sm"><i>ArtiAuct</i></a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="images/assa.jpg">
            </span>
            ADMIN <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="index.php" class="btn btn-default">Logout</a>
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
                        <li >
                          <a href="viewuser.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View User</span>
                          </a>
                        </li>
                        <li >
                          <a href="deluser.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Block User</span>
                          </a>
                        </li>
                        
                      </ul>
                    </li>
                    <!--<li>
                      <a href="addpro.html"   class="active">
                        <i class="fa fa-table icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Add Product</span>
                      </a>
                    </li>
                    
                    
                  </ul>
                </nav>
                / nav -->
                <li >
                      <a href="#layout"  >
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
                        <li >
                          <a href="vcart.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Cart</span>
                          </a>
                        </li>
                        <li >
                          <a href="vprdetails.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Product Detail</span>
                          </a>
                        </li>
                      </ul>
                     <li >
                      <a href="#layout"  >
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
                          <a href="addhash.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Add Hashtags</span>
                          </a>
                        </li>
                        <li >
                          <a href="viewhasht.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>View Hash-table</span>
                          </a>
                        </li>
                      </ul>
                    <li >
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
                        <li >
                          <a href="uploadchallenge.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Upload Challenge</span>
                          </a>
                        </li>
                        <li >
                          <a href="editchallenge.php" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Edit Challenge</span>
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


              </div>
            </section>
            
            <!--<footer class="footer lt hidden-xs b-t b-dark">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer>-->
          </section>

        </aside>
        <!-- /.aside -->
<section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Information</li>
              </ul>
              
   <di<div class="m-b-md">
                <h3 class="m-b-none">Admin</h3>
                <small>Welcome back !</small>
              </div>
              
             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Hashtag ID</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hash_ID">
  </div>v class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>-->
  <div class="form-group">
    <label for="exampleInputPassword1">Hashtag Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Name_Of_Hash">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
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