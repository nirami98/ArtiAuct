<?php 
  session_start();
  if (isset($_SESSION['fn']))
  {
    header("location:dashboard.php");
  }
  if(isset($_COOKIE['email']))
  {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
  }
  else
  {
    $email = "";
    $password = "";
  }
?>

<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="logo.png" type="image/png" />
  <title>ArtiAuct | Login</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>

<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="index.php"><h1 style="font-size: 35px; color: #F7F7F7; font-weight: bold">ArtiAuct</h1></a>


      <!-- Login process starts from here -->


      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong><h1 style="font-size: 25px; color: #000000">Sign In</h1></strong>
        </header>
        <form action="checklogin.php" class="panel-body wrapper-lg" method="POST">
          
          <div class="form-group">
            <label class="control-label">Email or Username</label>
            <input type="text" placeholder="Email or Username" class="form-control input-lg" name="email" value="<?php echo $email; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" id="inputPassword" placeholder="Password" class="form-control input-lg" name="password" value="<?php echo $password; ?>">
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember"> Keep me logged in
            </label>
          </div>

          <!-- <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a> -->
          <!-- <a href="dashboard.php" class="btn btn-primary">Sign In</a> -->

          <center>
          <input type="submit" name="signin_btn" class="btn btn-s-md btn-dark btn-rounded" value="Sign In">
          </center>
        </form>

      </section>
    </div>
  </section>

  <!-- footer -->
  
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small style="color: #F7F7F7">Artist Oriented Web Network<br>&copy; 2018</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  
</body>
</html>