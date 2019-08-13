<!DOCTYPE html>
<html>
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';

?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengelolaan UKM</title>
    <link rel="stylesheet" href="assets/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/include/style.css">
    <link rel="stylesheet" type="text/css" href="assets/include/display.css">
</head>

<body>

<!-- Header Nav ============================================================== -->
  <div class="header-blue">
    <nav class="navbar navbar-default navigation-clean-search">
      <div class="container">
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Kelola-UKM</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav">
            <li class="active" role="presentation"><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">All Catagories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="product.php">Smart Phones</a></li>
                <li><a href="product.php">Laptops</a></li>
                <li><a href="product.php">Accessories</a></li>
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

<div class="container">
  <div class="team_columns_carousel_wrapper">
  <div class="jumbotron">
    <p><h1><center>Keranjang Belanja Anda</center></h1></p>
  </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-md-12"></div>
        <div class="alert alert-success" style="display:none;">
          <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>

          <?php
          include 'config/koneksi.php';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table class="table"><thread>';
            echo '<tr>';
            echo '<th>No</th>';
            echo '<th>Nama</th>';
            echo '<th>Jumlah</th>';
            echo '<th>Harga</th></thread>';
            echo '</tr>';
            echo '<tbody>';

            foreach($_SESSION['cart'] as $id_produk => $quantity) {

            $result = $koneksi->query("SELECT id_produk, nama_produk, deskripsi, harga, qty FROM produk WHERE id_produk = ".$id_produk);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->harga * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr class="active">';
                echo '<td>'.$obj->id_produk.'</td>';
                echo '<td>'.$obj->nama_produk.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="add-to-cart" style="padding:5px;" href="update_cart.php?action=add&id_produk='.$id_produk.'">+</a>&nbsp;<a class="add-to-cart" style="padding:5px;" href="update_cart.php?action=remove&id_produk='.$id_produk.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }

          echo '<tr class="success">';
          echo '<td colspan="3" align="left">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';

          echo '</tr>';
          echo '</tbody>';
          echo '</table><hr>';
          echo '<a href="index.php"><button class="add-to-cart">Batal</button></a>&nbsp;<a href="product.php"><button class="add-to-cart">Belanja Lagi</button></a>';

          if(isset($_SESSION['username'])) {
            echo '<a href="order_update.php"><button class="add-to-cart" style="float:right;">Input</button></a>';
          }

          else {
            echo '<a href="login.php" class="add-to-cart" style="float:right">Login</a>';
          }
          echo '<hr>';
        }

        else {
          echo "<h4><center>Anda tidak memiliki barang di keranjang belanja Anda !!.</center></h4>";
        }

          echo '</div>';
          echo '</div>';
          ?>
    </div>
  </div><br>
  </div>
  </div>
  </body>
  <?php include 'footer.php'; ?>
</html>