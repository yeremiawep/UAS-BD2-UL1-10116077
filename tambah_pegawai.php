<?php 
	session_start();
	if($_SESSION['login']!='login') header('Location: login.php');
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
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
              <li class="nav-item ">
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




  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo "Hello, ".ucwords($_SESSION['user']);?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <?php if($_SESSION['level']=='admin'){?>
			<li><a href="user.php">User <span class="sr-only">(current)</span></a></li>
			<?php } ?>
            <li class="active"><a href="#">Pegawai</a></li>
            <li><a href="divisi.php">Divisi</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard <?php echo ucfirst($_SESSION['level']);?></h1>
		  <div class="row">
		  <div class="col-md-6">
		  <div>
			<form class="form-horizontal" action="proses_tambah_pegawai.php" method="POST">
			  <div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama untuk Pegawai baru" required />
				</div>
			  </div>
			  <div class="form-group">
				<label for="Alamat" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat untuk Pegawai baru" required />
				</div>
			  </div>
			  <div class="form-group">
				  <label for="divisi" class="col-sm-2 control-label">Divisi</label>
				  <div class="col-sm-10">
				  <select name="divisi" id="disabledSelect" class="form-control">
					<?php 
						$result = $mysqli->query("select * from divisi");	 
						if($result->num_rows > 0){
							// echo "divisi ada";
							while($row = $result->fetch_assoc()) {
								echo '<option value="'.$row["id_divisi"].'">'.ucfirst($row["divisi"]).'</option>';
							}
						}
					?>
				  </select>
				  </div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="reset" class="btn btn-danger">Reset</button>
				  <a type="cancel" class="btn btn-warning" href="pegawai.php">Cancel</a>
				  <button type="submit" class="btn btn-primary">Tambah Data Baru</button>
				</div>
			  </div>
			</form>
		  </div>
		  </div>
		  <div class="col-md-6">
		  </div>
		  </div><!-- row -->
         </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<!-- DATA TABES SCRIPT -->
    <script src="js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>
