<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>L O G I N</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <?php 
		if(@$_SESSION['msg']==1){
			echo '<div class="alert alert-info" role="alert">Maaf Username atau Password yang kamu masukkan salah.</div>';
			// $_SESSION['msg'] = 0;
		}
    else if(@$_SESSION['msg']==2){
        echo '<div class="alert alert-success" role="alert">Daftar Berhasil.</div>';
    }
		?>

      <form action="cek_login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User" name="username" id="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password"name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class = "row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <div class="col-4">
          <a href="daftar.php" class="btn btn-danger ">Register </a>
          </div>
          <!-- /.col -->
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Template/dist/js/adminlte.min.js"></script>
</body>
</html>