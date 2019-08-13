<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UKM</title>
    <link href="../assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../assets/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../assets/assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../assets/assets/css/jquery.dataTables.min.css">
  </head>
  <body>
    <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
  }
  ?>
    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-login">
            <form action="cek_login.php" class="inner-login" method="post" id="login">
              <h3 class="text-center title-login">Log in</h3>
              <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>

              <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <input type="submit" name="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
              <a class="btn btn-block btn-custom-green" href="../index.php">DASHBOARD</a>
            </form>
        </div>
    </div>
    <script src="../assets/assets/js/jquery.min.js"></script>
    <script src="../assets/assets/js/bootstrap.min.js"></script>
  </body>
</html>