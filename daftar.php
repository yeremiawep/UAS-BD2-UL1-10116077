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
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>REGISTER</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        <form action="cek_daftar.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User" name="username" id="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="form-group">
				  <label for="level" class="col-sm-2 control-label">Level</label>
				  <div class="col-sm-10">
				  <select name="level" id="disabledSelect" class="form-control">
					<option value="user">User</option>
					<option value="admin">Admin</option>
				  </select>
				  </div>
			  </div>
          <!-- /.col -->
          <div class = "row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <div class="col-4">
          <a href="login.php" class="btn btn-primary ">login </a>
          </div>
          <!-- /.col -->
          </div>
        </div>
      </form>
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Template/dist/js/adminlte.min.js"></script>
</body>
</html>
