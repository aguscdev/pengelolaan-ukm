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
    <!-- login -->
    <link href="../assets/tamplate/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/tamplate/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="../assets/tamplate/css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="../assets/tamplate/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
  }
  ?>
    <!-- login -->
  <div class="login">
    <div class="container">
      <h2>Login Admin</h2>
    
      <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
        <form action="cek_login.php" class="inner-login" method="post" id="login">
          <input type="text" name="username" placeholder="Username" required=" " >
          <input type="password" name="password" placeholder="Password" required=" " >
          <div class="forgot">
            <a href="#">Lupa kata sandi?</a>
          </div>
          <input type="submit" name="submit" value="LOGIN">
        </form>
      </div>
      <div class="register-home">
        <a href="../index.php">Home</a>
      </div>
    </div>
  </div>
<!-- //login -->
    <script src="../assets/assets/js/jquery.min.js"></script>
    <script src="../assets/assets/js/bootstrap.min.js"></script>
  </body>
</html>