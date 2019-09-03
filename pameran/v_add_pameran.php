<!DOCTYPE html>
<html>
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include '../config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id ASC");
$query2 = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY kategori_id ASC");

?>
<head>
  <title>Peneglolaan UKM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/include/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/include/display.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .background-color {
    background-color:#ffffff;
  }
</style>
</head>
<body class="background-color">
   <div class="header-blue">
    <nav class="navbar navbar-default navigation-clean-search">
      <div class="container">
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="../index.php">Kelola-UKM</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav">
            <!-- <li class="#" role="presentation"><a class="navbar-link login" href="admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a></li> -->
            <li class="active" role="presentation"><a href="../index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">UKM <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../daftar_ukm.php">Registrasi UKM</a></li>
                <li><a href="../admin/login.php">Login UKM</a></li>
                <!-- <li><a href="../index.php">List UKM</a></li> -->
              </ul>
            </li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Semua Kategori<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php if(mysqli_num_rows($query)) { ?>
                  <?php while ($d = mysqli_fetch_array($query)) { ?>
                <li><a href="../kategori.php?kategory=<?php echo $d["kategori_id"]; ?>"><?php echo $d["nama_kategori"]; ?></a></li>
              <?php   }  ?>
              <?php } ?>
                <!-- <li><a href="product.php">Keripik</a></li> -->
                <!-- <li><a href="product.php">Accessories</a></li> -->
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Pelatihan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../pelatihan/v_add_pelatihan.php">Tambah Pelatihan</a></li>
                <li><a href="../pelatihan/v_pelatihan.php">List Pelatihan</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Pameran <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="v_add_pameran.php">Tambah Pameran</a></li>
                <li><a href="v_pameran.php">List Pameran</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" target="_self" method="GET" action="search.php">
            <div class="form-group">
              <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                <input class="form-control search-field" type="search" name="search" id="search-field">
            </div>
          </form>
          <p class="navbar-text navbar-right">
            <?php
              if(isset($_SESSION['username'])){
                echo '<a  class="btn btn-default action-button" href="../cart.php"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang</a>';
                echo '<a class="btn btn-default action-button" href="../account.php"><i class="glyphicon glyphicon-user"></i> My Account</a>';
                 echo '<a class="btn btn-default action-button" href="../logout.php"><i class="glyphicon glyphicon -log-out"></i> Logout</a>';
              }
              else {
                echo '<a  class="btn btn-default action-button" href="../admin/login.php"><i class="glyphicon glyphicon-user"></i> Login Admin</a>';
                // echo '<a class="btn btn-default action-button" href="../../admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a>';
                echo '<a class="btn btn-default action-button" href="../daftar.php"><i class="glyphicon glyphicon -log-out"></i> Daftar</a>';
                echo '<a class="btn btn-default action-button" href="../login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a>';
              }
            ?>
          </p>
        </div>
      </div>
     </nav>
    </div>
<!-- Header Nav End --><br>

<section class="content-header">
  <div class="panel panel-default">
      <div class="panel-heading">Tambah Pameran</div>
      <div class="panel-body">
      <form method="post" action="action_add_pameran.php">
          <div class="form-group">
              <label for="pameran">Nama Pameran:</label>
              <input type="text" name="nama_pameran" class="form-control" id="pameran" required>
          </div>
          <div class="form-group">
              <label for="tempat">Tempat:</label>
              <input type="text" name="tempat" class="form-control" id="tempat" required>
          </div>
          <div class="form-group">
              <label for="waktu">Waktu:</label>
              <input type="time" name="waktu" class="form-control" id="waktu" required>
          </div>
          <div class="form-group">
              <label for="Peserta">Peserta:</label>
              <input type="text" name="peserta" class="form-control" id="peserta" required>
          </div>
          <button type="submit" name="submit" class="btn btn-info">Simpan</button>
      </form>
      </div>
  </div>
</section><br>

<footer class="bg-light py-5">
    <div class="container">
        <div class="panel panel-default" style="background-color:#000000;">
            <div class="panel-body">
                <img alt="logo" src="../img/stmik.png" width="100" style="aligment:left;">
                <font face="Britannic Bold" size="5"><label style="color:white;"> Pengelolaan UKM</label></font>
                <br><br>
                <p>
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-home"></span> Tngerang, BANTEN
                    </button>
                </p>
                <p>
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-envelope"></span> ukm@gmail.com 
                    </button>
                </p>
                <p>
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-earphone"></span> 021-59216677
                    </button>
                </p>
                <br><br>
                <div class="large text-center text-muted" style="color:white;">Copyright © 2019 - Pengelolaan UKM</div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>