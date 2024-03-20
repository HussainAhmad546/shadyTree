<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sheddy Tree Dashboard Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href=""> -->
  <link rel="stylesheet" href="css/admin/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/admin/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/admin/adminlte.min.css">
  <link rel="stylesheet" href="css/admin/all.min.css">
  <link rel="stylesheet" href="css/admin/toastr.min.css">
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center card-header-1">
      <!-- <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a> -->
      <a href="/" class="main__logo" style="margin-bottom: 16px;">
         <img src="images/logo/header-logo-two.png" alt="logo__image" height="73px" width="120px">
      </a>
    </div>
    <div class="card-body card-body-1">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login_form" method="post" onsubmit="return false;">
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text" style="color: #FC3222;">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text" style="color: #FC3222;">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <!-- <div class="row"> -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" id="login_btn">Sign In</button>
                    </div>
                <!-- </div> -->
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="js/admin/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/admin/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/admin/adminlte.min.js"></script>
<script src="js/admin/toastr.min.js"></script>
<script src="js/admin/emailValidation.js"></script>



</body>
</html>
