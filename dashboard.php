<?php 
	session_start(); 
	if($_SESSION['login']!='login') {
    header('Location: login.php');
}
  $koneksi = mysqli_connect('localhost','root','','10116077_kepegawaian');
  $data_user = mysqli_query($koneksi,"SELECT * from user");
  $jumlah_user = mysqli_num_rows($data_user);

  $data_pegawai = mysqli_query($koneksi,"SELECT * from pegawai");
  $jumlah_pegawai = mysqli_num_rows($data_pegawai);
  $data_divisi = mysqli_query($koneksi,"SELECT * from divisi");
  $jumlah_divisi = mysqli_num_rows($data_divisi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Pegawai</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Template/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo "Welcome, ".ucwords($_SESSION['user']);?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <hr class="sidebar-divider my-0">
          <li class="nav-item ">
            <a href="user.php" class="nav-link">
              <p>
                User
              </p>
            </a>
          </li>
          <hr class="sidebar-divider my-0">
          <li class="nav-item">
            <a href="pegawai.php" class="nav-link">
              <p>
                Pegawai
              </p>
            </a>
          </li>
          <hr class="sidebar-divider my-0">
          <li class="nav-item">
            <a href="divisi.php" class="nav-link">
              <p>
                Divisi
              </p>
            </a>
          </li>
          <hr class="sidebar-divider my-0">
            <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <p>
                Logout
              </p>
            </a>
</li>
</ul>
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
            <h1 class="m-0"><?php echo "Dashboard, ".ucwords($_SESSION['user']);?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $jumlah_user; ?></h3>
                <h5>User</h5>
              </div>
              <a href="user.php" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?=$jumlah_pegawai; ?></h3>
                <h5>Pegawai</h5>
              </div>
              <a href="pegawai.php" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gray">
              <div class="inner">
                <h3><?=$jumlah_divisi; ?></h3>
                <h5>Divisi</h5>
              </div>
              <a href="divisi.php" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</section>
</div>
</div>
    <!-- /.content-header -->

    
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="Template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Template/plugins/moment/moment.min.js"></script>
<script src="Template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="Template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="Template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Template//js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Template//js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Template//js/pages/dashboard.js"></script>
</body>
</html>
