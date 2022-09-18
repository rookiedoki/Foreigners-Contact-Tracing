<?php
  $page = basename($_SERVER['PHP_SELF']);
  session_start();
  if(!isset($_SESSION["username"]))
  {
    header('location: login.html');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FCTS | Nabua</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Bootstrap v4.4.1 -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/bootstrap.min.css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Font Awesome Free 5.12.0 -->
    <link rel="stylesheet" type="text/css" href="../vendor/fontawesome/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/LOGO2.png">
  </head>
    <body class="bg-light">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="../images/logonabua.png" alt="Logo of Nabua Municipality">
            <img src="../images/logo1.png" alt="FCTS">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto link-effect">
              <li class="nav-item <?php if($page == 'index.php') {echo 'active';}?>">
                  <a class="nav-link" href="index.php"><span class="fas fa-home"></span> Home |</a>
              </li>
              <li class="nav-item <?php if($page == 'user.php') {echo 'active';}?>">
                  <a class="nav-link" href="user.php"><span class="fas fa-users"></span>Manage Users |</a>
              </li>
              <li class="nav-item <?php if($page == 'userInfo.php') {echo 'active';}?>">
                  <a class="nav-link" href="userInfo.php"><span class="fas fa-users"></span>Users Info |</a>
              </li>
              <li class="nav-item <?php if($page == 'profile.php') {echo 'active';}?>">
                  <a class="nav-link" href="profile.php"><span class="fas fa-user"></span>Profile |</a>
              </li>
              <li class="nav-item <?php if($page == 'logout.php') {echo 'active';}?>">
                  <a class="nav-link" href="logout.php"><span class="fas fa-sign-out-alt"></span>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
