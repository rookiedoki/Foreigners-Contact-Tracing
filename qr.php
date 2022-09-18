<?php
  session_start();
  if(!isset($_SESSION["username"]))
  {
    header('location: login.html');
  }
?>

<?php
error_reporting(0);
$f = "visit.php";
if(!file_exists($f)){
  touch($f);
  $handle =  fopen($f, "w" ) ;
  fwrite($handle,0) ;
  fclose ($handle);
}

include('libs/phpqrcode/qrlib.php');

function getUsernameFromEmail($email) {
  $find = '@';
  $pos = strpos($email, $find);
  $username = substr($email, 0, $pos);
  return $username;
}

if(isset($_POST['submit']) ) {
  $tempDir = 'temp/';
  $email = $_POST['mail'];
  $subject =  $_POST['subject'];
  $filename = getUsernameFromEmail($email);
  $body =  $_POST['msg'];
  $codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body);
  QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FCTS</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap v4.4.1 -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.min.css">
    <!-- Font Awesome Free 5.12.0 -->
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO2.png">
    <link rel="stylesheet" href="libs/style.css">
    <script src="libs/navbarclock.js"></script>
  </head>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logonabua.png" alt="logo of Nabua Municipality">
            <img src="images/logo1.png" alt="FCTS logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto link-effect">
              <li class="nav-item <?php if($page == 'index.php') {echo 'active';}?>">
                  <a class="nav-link" href="index.php"><span class="fas fa-home"></span> Home |</a>
              </li>
              <li class="nav-item <?php if($page == 'profile.php') {echo 'active';}?>">
                  <a class="nav-link" href="profile.php"><span class="fas fa-user"></span> Profile |</a>
              </li>
              <li class="nav-item <?php if($page == 'qr.php') {echo 'active';}?>">
                  <a class="nav-link" href="qr.php"><span class="fas fa-qrcode"></span> Generate QR |</a>
              </li>
              <li class="nav-item <?php if($page == 'logout.php') {echo 'active';}?>">
                  <a class="nav-link" href="logout.php"><span class="fas fa-sign-out-alt"></span> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <body class="container-fluid">
        <div class="row">
    			  <div class="col"><br /><br />
    				    <form method="post" class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                  <h4><?php echo $_SESSION['fullname']; ?>'s Information</h4>
                   <div class="mb-3">
    						     <label>Username</label>
    						      <input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" readonly/>
    					     </div>
    					     <div class="mb-3">
    						     <label>Email</label>
    						     <input type="email" class="form-control" name="mail" placeholder="Enter your Email" value="<?php echo $_SESSION['email']; ?>" readonly />
                   </div>
    					     <div class="mb-3">
    						     <label>Status of Vaccination</label>
    						     <input type="text" class="form-control" name="subject" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z0-9 .]+">
    					     </div>
    						     <center><button type="submit" name="submit" class="btn btn-primary" style="width:15em;" />Generate to QR Code</center>
    				   </form>
    			  </div>
    			<?php
    			if(!isset($filename)){
    				$filename = "author";
    			}
    			?>
    			<div class="col" style="padding-top: 130px;">
    				<h2 style="text-align:center"><img src="images/logo1.png"></h2>
    				<center>
    					<div class="qrframe img-fluid" style="border:2px solid black; width:210px; height:210px;">
    							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
    					</div>
    					<a class="btn btn-primary submitBtn" style="width:180px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
    				</center>
    			</div>
      </div>
  </body>
</html><br /><br /><br /><br />
<?php include('include/footer.php'); ?>
