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
    <title>Peneglolaan UKM</title>
    <link rel="stylesheet" href="assets/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/include/style.css">

    <link rel="stylesheet" type="text/css" href="assets/include/display.css">
    <style>
  .background-color {
    background-color:#ffffff;
  }
</style>
  </head>
  <body class="background-color">

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
<!-- Header Nav End -->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php

          if(isset($_SESSION['cart'])) {
        		echo '<div class="invoice-title">';
        		echo '<h2>Invoice</h2>';
        		echo '</div><hr>';
        		echo '<div class="row">';
        		echo '<div class="col-xs-6">';
        		echo '<address>';
        		echo '<strong><h4><u> Pemesan</u>&nbsp;:</h4></strong><br>';

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
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>List Order</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
                        <?php

                          if(isset($_SESSION['cart'])) {

                          $total = 0;
    		echo '<table class="table table-condensed">
    						<thead>
                    <tr>
        							<td><strong>No</strong></td>
        							<td class="text-center"><strong>Nama</strong></td>
                      <td class="text-center"><strong>Harga</strong></td>
        							<td class="text-center"><strong>Jumlah</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                    </tr>
    						</thead>
    						<tbody>';
    						foreach($_SESSION['cart'] as $id_produk => $quantity) {

                            $result = $koneksi->query("SELECT id_produk, nama_produk, deskripsi, qty, harga FROM produk WHERE id_produk = ".$id_produk);
                              if($result){
                              while($obj = $result->fetch_object()) {
                                $cost = $obj->harga * $quantity; //work out the line cost
                                $total = $total + $cost; //add to the total cost
            echo '<tr>
    								<td>'.$obj->id_produk.'</td>
    								<td class="text-center">'.$obj->nama_produk.'</td>
    								<td class="text-center">'.$cost.'</td>
    								<td class="text-center">'.$quantity.'</td>
                    <td class="text-right">'.$cost.'</td>
    							</tr>';
                        }
                      }
                    }
            echo '<tr>
                    <td class="thick-line"></td>
    								<td class="thick-line"></td>
                    <td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">'.$total.'</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
                    <td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">'.$total.'</td>
    							</tr>
    						</tbody>
    					</table>';
              echo '<a href="success.php"><button class="add-to-cart" style="float:right;">Order</button></a>';
                    }
                    ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div></div>
</div></div><br>
            
  </body>
  <?php include 'footer.php'; ?>
</html>