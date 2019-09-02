<!DOCTYPE html>
<html>
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id ASC");
$query2 = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY kategori_id ASC");
?>
<head>
  <title>Peneglolaan UKM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/include/style.css">
    <link rel="stylesheet" type="text/css" href="assets/include/display.css">
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
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Kelola-UKM</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav">
            <!-- <li class="#" role="presentation"><a class="navbar-link login" href="admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a></li> -->
            <li class="active" role="presentation"><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Semua Kategori<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php if(mysqli_num_rows($query)) { ?>
                  <?php while ($d = mysqli_fetch_array($query)) { ?>
                <li><a href="kategori.php?kategory=<?php echo $d["kategori_id"]; ?>"><?php echo $d["nama_kategori"]; ?></a></li>
              <?php   }  ?>
              <?php } ?>
                <!-- <li><a href="product.php">Keripik</a></li> -->
                <!-- <li><a href="product.php">Accessories</a></li> -->
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Pelatihan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pelatihan/v_add_pelatihan.php">Tambah Pelatihan</a></li>
                <li><a href="pelatihan/v_pelatihan.php">List Pelatihan</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Pameran <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pameran/v_add_pameran.php">Tambah Pameran</a></li>
                <li><a href="pameran/v_pameran.php">List Pameran</a></li>
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
                echo '<a  class="btn btn-default action-button" href="cart.php"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang</a>';
                echo '<a class="btn btn-default action-button" href="account.php"><i class="glyphicon glyphicon-user"></i> My Account</a>';
                 echo '<a class="btn btn-default action-button" href="logout.php"><i class="glyphicon glyphicon -log-out"></i> Logout</a>';
              }
              else {
                echo '<a  class="btn btn-default action-button" href="admin/login.php"><i class="glyphicon glyphicon-shopping-cart"></i> Login Admin</a>';
                // echo '<a class="btn btn-default action-button" href="../../admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a>';
                echo '<a class="btn btn-default action-button" href="daftar.php"><i class="glyphicon glyphicon -log-out"></i> Daftar</a>';
                echo '<a class="btn btn-default action-button" href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a>';
              }
            ?>

          </p>
        </div>
      </div>
        </nav>
    </div>>

    <div class="container">
      <div class="jumbotron">
        <h1>Success,</h1> <p>Terimakasih Sudah transaksi di UKM kami.!</p>
        <p>Ditunggu Orderan selanjutnya.</p>
         <?php

          if(isset($_SESSION['cart'])) {
            echo '<div class="row">';
            echo '<div class="col-xs-6">';
            echo '<address>';
            echo '<strong><h4><u>Dikirim Ke</u>&nbsp;:</h4></strong>';

            ?>

            <?php
            include 'config/koneksi.php';
                $result = $koneksi->query('SELECT * FROM user WHERE id_user='.$_SESSION['id_user']);
                // $result1 = $mysqli->query('SELECT date FROM order');
                    if($result === FALSE){
                       die(mysql_error());
                    }

                    if($result) {
                      $obj = $result->fetch_object();
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama : &nbsp;'. $obj->username. '<br>';
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email : &nbsp;'. $obj->email. '<br>';
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Telepon : &nbsp;'. $obj->no_telp. '<br>';
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alamat : &nbsp;'. $obj->alamat. '<br>';
                    echo '</address>';
                    echo '</div>';
              
                    }
                }

            ?>
         
      </div>
    </div>
    </div>
  </body>
  <?php include 'footer.php'; ?>
</html>