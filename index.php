<?php
session_start();

require_once("db.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Career portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
  </head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="index.php" class="logo logo-bg">
        <span class="logo-lg"><b>Career portal</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <?php if (empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
              <li>
                <a href="login.php">Login</a>
              </li>
              <li>
                <a href="sign-up.php">Sign Up</a>
              </li>
              <li>
                <a href="admin/index.php">Admin Login</a>
              </li>
            <?php } else {

              if (isset($_SESSION['id_user'])) {
                ?>
                <li>
                  <a href="user/index.php">Dashboard</a>
                </li>
                <?php
              } else if (isset($_SESSION['id_company'])) {
                ?>
                  <li>
                    <a href="company/index.php">Dashboard</a>
                  </li>
              <?php } ?>
              <li>
                <a href="logout.php">Logout</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </header>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">

      <section class="content-header bg-main">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center index-head">
              <h1>All <strong>JOBS</strong> In One Place</h1>
              <p>One search, global reach</p>
              <p><a class="btn btn-success btn-lg" href="jobs.php" role="button">Search Jobs</a></p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer" style="margin-left: 0px;">
      <div class="text-center">
        <strong><a href="https://www.linkedin.com/in/natheer-asm">Natheer AS</a>.</strong> All rights
        reserved.
      </div>
    </footer>

    <div class="control-sidebar-bg"></div>

  </div>

  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
</body>

</html>