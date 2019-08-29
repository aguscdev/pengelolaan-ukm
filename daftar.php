    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman | Daftar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
</head>
<!-- Header Nav End --><br>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Daftar</b></a>
  </div>
  <div class="register-box-body">
  <form method="post" action="action_daftar.php">  
  <div class="form-group has-feedback">
    <label>UserName:</label>
    <input type="text" name="username" class="form-control" placeholder="Nama ">
  </div>
  <div class="form-group has-feedback">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="example@mail.com">
  </div>
  <div class="form-group has-feedback">
    <label>No Telepon:</label>
    <input type="number" name="no_telp" class="form-control" placeholder="telepon">
  </div>
  <div class="form-group has-feedback">
    <label>Alamat:</label>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
  </div>
  <div class="form-group has-feedback">
    <label>Password:</label>
    <input type="Password" name="pass" class="form-control" placeholder="Password">
  </div>
  <br/>
  <div class="col-xs-5">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
  </div>
  <div class="col-xs-5">
    <a href="index.php" class="btn btn-warning btn-block btn-flat">Batal</a>
  </div>  
  </form>
  <br/>
  <br/>
</div>
<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
</body>
</html>