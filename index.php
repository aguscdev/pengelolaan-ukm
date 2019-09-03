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
                echo '<a  class="btn btn-default action-button" href="admin/login.php"><i class="glyphicon glyphicon-user"></i> Login Admin</a>';
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

   <!-- Carousal ================================================================ -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      <a href="product.php"><img src="img/keripik.jpg" style="width:100%;"></a>
      <div class="carousel-caption">
      </div>
      </div>

      <div class="item">
      <a href="product.php"><img src="img/kerupuk.jpg" style="width:100%;"></a>
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <a href="product.php"><img src="img/keripik.jpg" style="width:100%;"></a>
      <div class="carousel-caption">
      
      </div>
      </div>
    
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div><br>
<!-- Carousal End -->

<!-- Slider Product =========================================================== -->
   <div class="container">
   <div class="row">
      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="5000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->
            <div class="item active">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a href="product.php"><img src="assets/img/produk/img6.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik ori</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <a href="product.php"><img src="assets/img/produk/img7.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik Pedas</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <a href="product.php"><img src="assets/img/produk/img3.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik pedas</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <a href="product.php"><img src="assets/img/produk/img4.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Kerupuk</a></h5>
                     <hr>
                     <h6>Kerupuk Ikan</h6>
                  </div>
               </div>
            </div>
            <!--========= 2nd slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a href="product.php"><img src="assets/img/produk/img5.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Kerupuk</a></h5>
                     <hr>
                     <h6>Kerupuk Putih</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <a href="product.php"><img src="assets/img/produk/img7.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik Kentang</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <a href="product.php"><img src="assets/img/produk/img6.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik Ubi</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <a href="product.php"><img src="assets/img/produk/img8.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Kerupuk</a></h5>
                     <hr>
                     <h6>Kerupuk Jablay</h6>
                  </div>
               </div>
            </div>
            <!--========= 3rd slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a href="product.php"><img src="assets/img/produk/img9.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik Manis</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <a href="product.php"><img src="assets/img/produk/img10.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Kerupuk</a></h5>
                     <hr>
                     <h6>Kerupuk Ikan</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <a href="product.hp"><img src="assets/img/produk/img11.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Keripik</a></h5>
                     <hr>
                     <h6>Keripik Kentang</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <a href="product.php"><img src="assets/img/produk/img12.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Kerupuk</a></h5>
                     <hr>
                     <h6>Kerupuk manis</h6>
                  </div>
               </div>
            </div>
         <!--======= Navigation Buttons =========-->

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
   </div>
   </div>
</div>
<!-- Slider Product End -->
<br/>
<br/>
<!-- Index Product ============================================================ -->
  <div class="container">
         <div class="row team_columns_carousel_wrapper">
          <?php
          include 'config/koneksi.php';
          $sql = $koneksi->query("SELECT * FROM produk");
          if($sql){
              while($obj = $sql->fetch_object()) {
              echo '<div class="item">
                      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                        <a><img src="admin/produk/'.$obj->foto.'" width="100%" data-toggle="modal" data-target="#'.$obj->id_produk.'"></a>    
                        <div class="team_columns_item_caption">
                        <h5 data-toggle="modal" data-target="#'.$obj->id_produk.'"><a>'.$obj->nama_produk.'</a></h5>
                        <hr>
                        <h5>Rp '.$obj->harga.'</h5>
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
                            <p><h4><strong>Description</strong>: '.$obj->deskripsi.'</h4></p>
                            <p><h3><strong>Harga (Per Unit)</strong>: '.$currency.$obj->harga.'</h3></p>
                            <p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
                          
                            if($obj->harga > 0){
                    echo '<p><a href="update_cart.php?action=add&id_produk='.$obj->id_produk.'"><input type="submit" class="add-to-cart" value="Tambahkan ke keranjang" style=";">';
                    echo '</div></div>'; 
                  } else {
                    echo 'Out Of Stock!';
                  }
                    echo '</div></div>';            
                  }
                  
                  }?>
                <hr>
            </div>
      </div>
    <br>
    
<!-- Index Product End -->


</body>
<?php include 'footer.php'; ?>
</html>