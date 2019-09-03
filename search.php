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
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">UKM <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="daftar_ukm.php">Registrasi UKM</a></li>
                <li><a href="admin/login.php">Login UKM</a></li>
                <!-- <li><a href="index.php">List UKM</a></li> -->
              </ul>
            </li>
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
    </div>
<!-- Header Nav End --><br>

<!-- Index Product ============================================================ -->
      <div class="container">
        <?php if (isset($_GET['search'])) { 
          $object = $_GET['search']?>
          <h3>Anda Mencari '<?php echo $object; ?>'</h3>
      <?php } ?>

      <?php
      include 'config/koneksi.php';
          $sql = $koneksi->query("SELECT * FROM produk");
          if($sql){
              while($obj = $sql->fetch_object()) { 
                if ( preg_replace('/\s+/','',$obj->nama_produk) == preg_replace('/\s+/', '',$object)) {
                    echo '<div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                          <a><img src="admin/produk/'.$obj->foto.'" width="100%" data-toggle="modal" data-target="#'.$obj->id_produk.'"></a>    
                          <div class="team_columns_item_caption">
                            <h5 data-toggle="modal" data-target="#'.$obj->id_produk.'"><a>'.$obj->nama_produk.'</a></h5>
                            <hr>
                            <h5>Rp.'.$obj->harga.'</h5>
                          </div>         
                      </div>
                    </div>';
              echo '<div class="modal fade" id="'.$obj->id_produk.'" role="dialog">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">'.$obj->nama_produk.'</h4>
                          </div>';
              echo '<div class="modal-body">';              
              echo '<div class="col-lg-4"><img src="admin/produk/'.$obj->foto.'"></div>
                    <p><h3>'.$obj->nama_produk.'</h3></p>
                    <p><h4><strong>Deskripsi</strong>: '.$obj->deskripsi.'</h4></p>
                    <p><h3><strong>Harga (Per Unit)</strong>: '.$currency.$obj->harga.'</h3></p>
                    <p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
                    if($obj->qty > 0){
                        echo '<p><a href="update_cart.php?action=add&id_produk='.$obj->id_produk.'"><input type="submit" class="add-to-cart" value="Tambah Ke Keranjang"></a>';
                        echo '</div></div>';
                    }
                    else {
                        echo 'Out Of Stock!';
                    }
              echo '</div></div>';
              }
            }
          }?>
         <hr></div>
      </div><br>

<!-- Index Product End -->

<script src="assets/include/bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="assets/include/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include 'footer.php'; ?>
</html>