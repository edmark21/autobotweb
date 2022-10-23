<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Autobot</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://tc.hbwleads.net/reports.aspx" target="_blank" class="nav-link">Leadmaker</a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://cw.hbwleads.net/agc/vicidial.php" target="_blank" class="nav-link">CTC</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://slingshot.hbwleads.net/agc/vicidial.php" target="_blank" class="nav-link">Slingshot</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->




      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Autobot</span>
    </a>

<?php

$servername = "localhost";
$username = "id15446146_ed_crud";
$password = "f3o=b6Xk5q]MvWo9";
$dbname = "id15446146_crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name FROM tbl_sample ORDER BY last_name LIMIT 2";
$result = $conn->query($sql);


$a = $result->fetch_assoc();



$user = $a["first_name"];
$pass = $a["last_name"];

$b = $result->fetch_assoc();



$user2 = $b["first_name"];
$pass2 = $b["last_name"];

 ?>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Free</a>

        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="nav-icon fas fa-search"></i>
                  <p>Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Recordings</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="https://github.com/edmark21/autobot" class="nav-link">
                  <i class="nav-icon fas fa-book" ></i>
                  <p>About</p>
                </a>
              </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Welcome</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo "$user2"; ?></a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">

      <div class="row">
      <div class="col-md-8 offset-md-2">
      <form>
      <div class="input-group">
      <input type="search" class="form-control form-control-lg" placeholder="Enter Phone number here.." name="number" required="required">
      <div class="input-group-append">
      <button type="submit" class="btn btn-lg btn-default">
      <i class="fa fa-search"></i>
      </button>
      </div>
      </div>
      </form>
      </div>
      </div>









      <?php



			require_once 'twilio-php-main/src/Twilio/autoload.php';

			use Twilio\Rest\Client;
















      // Find your Account SID and Auth Token at twilio.com/console
			// and set the environment variables. See http://twil.io/secure
			$sid = ($user);
			$token = ($pass);



			$twilio = new Client($sid, $token);



			try {

			  $phone_number = $twilio->lookups->v1->phoneNumbers("+1".$_GET["number"])
			                                    ->fetch(["addOns" => ["ekata_reverse_phone"]]
			                                    );






			//var_dump($phone_number->addOns['results']['belongs_to']);
				try{
					$name = $phone_number->addOns['results']['ekata_reverse_phone']['result']['belongs_to']['name'];
				}
				catch(Exception $e) {
					echo "Unavailable ";
				}

        $arr = array( "a"=>"21", "b"=>"7", "c"=>".", "d"=>"_", "e"=>"");
			  shuffle($arr);

        $arrr = array( "a"=>"@gmail.com", "b"=>"@yahoo.com", "c"=>"@hotmail.com", "d"=>"@aol.net", "c"=>"@global.net");
			  shuffle($arrr);




        $fn = $phone_number->addOns['results']['ekata_reverse_phone']['result']['belongs_to']['firstname'];
        $fn = strtolower($fn);
        $ln = $phone_number->addOns['results']['ekata_reverse_phone']['result']['belongs_to']['lastname'];
        $ln = strtolower($ln);

				$addr = $phone_number->addOns['results']['ekata_reverse_phone']['result']['current_addresses'][0]['street_line_1'];
				$city = $phone_number->addOns['results']['ekata_reverse_phone']['result']['current_addresses'][0]['city'];
				$sc = $phone_number->addOns['results']['ekata_reverse_phone']['result']['current_addresses'][0]['state_code'];
				$pc = $phone_number->addOns['results']['ekata_reverse_phone']['result']['current_addresses'][0]['postal_code'];
				$phone_number = $twilio->lookups->v1->phoneNumbers("+1".$_GET["number"])->fetch(["type" => ["caller-name"]]);
                $p = $_GET["number"];
















				echo "<p align='center'><br>";
				echo "<br>";
				echo "<b>$p</b>";
				echo "<br>";
				echo "<b>New Prospect info:</b>";
				echo "<br>";
				echo "<font color='green'>".$phone_number->callerName['caller_name']."</font>";
				echo "<br>";
				echo "<br>";
				echo "<b>Name:</b>";
				echo "<br>";
				echo "<font color='green'>".$name."</font>";
				echo "<br>";
				echo "<b>Address:</b>";
				echo "<br>";
				echo "<font color='green'>", $addr, " ", $city, ", ", $sc, " ", $pc, "</font>";
				echo "<br>";
        echo "<b>Email:</b>";
			  echo "<br>";
        echo "<font color='green'>".$fn, $arr[0], $ln, $arrr[0]."</font>";
			  echo "<br>";
				echo "<b>Ask for DOB.</b>";





			}

			catch(Exception $e) {
				echo "<p align='center'><br>";
				echo "<br>";
				echo "<b>New Prospect info:</b>";
				echo "<br>";
				echo "<br>";
			  echo "<b>Name:</b>";
			  echo "<br>";
			  echo "<br>";
			  echo "<b>Address:</b>";
			  echo "<br>";
        echo "<br>";
        echo "<b>Email:</b>";


			}
			?>
      </div>


    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Developed By: Edmark Jay Sumampen <a href="https://edwin8.tk">Autobot</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Beta Version</b> 0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
