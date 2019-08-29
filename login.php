<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman | Login</title>
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
    <a href="#"><b>Login</b></a>
  </div>
  <div class="register-box-body">
  <form method="post" action="cek_login.php">  
  <div class="form-group has-feedback">
    <label>Email:</label>
    <input type="email" name="username" class="form-control" placeholder="Enter email id">
  </div>
  <div class="form-group has-feedback">
    <label>Password:</label>
    <input type="Password" name="pass" class="form-control" placeholder="Enter pass">
  </div>
  <br/>
  <div class="col-xs-5">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
  </div>
  <div class="col-xs-5">
    <a href="index.php" class="btn btn-warning btn-block btn-flat">Batal</a>
  </div>  
  </form>
  <br/>
  <br/>
</div>
</body>
</html>