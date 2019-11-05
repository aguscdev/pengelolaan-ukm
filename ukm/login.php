<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include '../config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id ASC");
$query2 = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY kategori_id ASC");
?>
<!DOCTYPE html>
<html>
<head>
<title>Pengelolaan UKM</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../assets/tamplate/js/move-top.js"></script>
<script type="text/javascript" src="../assets/tamplate/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<div class="agileits_header">
    <div class="container">
      <div class="w3l_offers">
        <p>HAYOO.. BELANJA DAN IKUTI , <a href="../products.php">TOKO KAMI SEKARANG</a></p>
      </div>
      <div class="agile-login">
        <ul>
          <!-- <li><a href="registrasi.php"> Registrasi </a></li>
          <li><a href="login.php">Masuk</a></li>
          <li><a href="contact.html">Bantuan</a></li> -->
          <?php
                if(isset($_SESSION['username'])){
                  // echo '<a  class="btn btn-default action-button" href="cart.php"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang</a>';
                  // echo '<a class="btn btn-default action-button" href="account.php"><i class="glyphicon glyphicon-user"></i> My Account</a>';
                  //  echo '<a class="btn btn-default action-button" href="logout.php"><i class="glyphicon glyphicon -log-out"></i> Logout</a>';
                  
                  echo '<a href="../account.php"><font color="white"> Akun Saya</a>';
                  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../logout.php"><font color="white"> Keluar</a>';
                  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../cart.php"><font color="white"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>';
                }
                else {
                  // echo '<a  class="btn btn-default action-button" href="admin/login.php"><i class="glyphicon glyphicon-user"></i> Login Admin</a>';
                  // echo '<a class="btn btn-default action-button" href="../../admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a>';
                  echo '<a href="../registrasi.php"><font color="white"> Registrasi</a>';
                  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../login.php"><font color="white"> Masuk</a>';
                }
              ?>
          
        </ul>
      </div>
      <!-- <div class="product_list_header">  
          <form action="#" method="post" class="last"> 
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="display" value="1">
            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
          </form>  
      </div> -->
      <div class="clearfix"> </div>
    </div>
  </div>

  <div class="logo_products">
    <div class="container">
    <div class="w3ls_logo_products_left1">
        <ul class="phone_email">
          <li><i class="fa fa-phone" aria-hidden="true"></i>Pesan online atau hubungi kami: 0896-5076-4064</li>
          
        </ul>
      </div>
      <div class="w3ls_logo_products_left">
        <h1><a href="../index.php">UMKM SEJAHTERA</a></h1>
      </div>
    <div class="w3l_search">
      <form action="search.php" method="GET">
        <input type="search" name="Search" placeholder="Cari Produk ..." required="">
        <button type="submit" class="btn btn-default search" aria-label="Left Align">
          <i class="fa fa-search" aria-hidden="true"> </i>
        </button>
        <div class="clearfix"></div>
      </form>
    </div>
    <form class="navbar-form navbar-left" target="_self" method="GET" action="search.php">
            <div class="form-group">
              <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                <input class="form-control search-field" type="search" name="search" id="search-field">
            </div>
          </form>
      
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //header -->
<!-- navigation -->
  <div class="navigation-agileits">
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> 
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" class="act">Home</a></li>  
            <!-- Mega Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <div class="multi-gd-img">
                    <ul class="multi-column-dropdown">
                      <h6>All Kategori</h6>
                      <?php if(mysqli_num_rows($query)) { ?>
                                <?php while ($d = mysqli_fetch_array($query)) { ?>
                              <li><a href="kategori.php?kategory=<?php echo $d["kategori_id"]; ?>"><?php echo $d["nama_kategori"]; ?></a></li>
                            <?php   }  ?>
                            <?php } ?>
                    </ul>
                  </div>  
                  
                </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">UKM<b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <div class="multi-gd-img">
                    <ul class="multi-column-dropdown">
                      <h6>Kelola UKM</h6>
                      <li><a href="../ukm/registrasi.php">Registrasi</a></li>
                      <li><a href="../login.php">Login</a></li>
                    </ul>
                  </div>
                  
                </div>
              </ul>
            </li>
            <li><a href="../pameran.php">Pameran</a></li>
            <li><a href="../pelatihan.php">Pelatihan</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
    
<!-- //navigation -->
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
      <h2>Login UKM</h2>
    
      <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
        <form action="cek_login.php" class="inner-login" method="post" id="login">
          <input type="email" name="username" placeholder="Masukan Email" required=" " >
          <input type="password" name="pass" placeholder="Masukan Password" required=" " >
          <div class="forgot">
            <a href="#">Lupa kata sandi?</a>
          </div>
          <input type="submit" name="submit" value="LOGIN">
        </form>
      </div>
      <h4>Untuk Orang Baru</h4>
      <p><a href="registrasi.php">Daftar disini</a> (Atau) kembali ke <a href="../index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
    </div>
  </div>
<!-- //login -->
<!-- //footer -->
<div class="footer">
    <div class="container">
      <div class="w3_footer_grids">
        <div class="col-md-3 w3_footer_grid">
          <h3>Contact</h3>
          
          <ul class="address">
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
          </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
          <h3>Information</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="short-codes.html">Short Codes</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Special Products</a></li>
          </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
          <h3>Category</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Groceries</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Household</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Personal Care</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Packaged Foods</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Beverages</a></li>
          </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
          <h3>Profile</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    
    <div class="footer-copy">
      
      <div class="container">
        <p>© 2017 Super Market. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>
    </div>
    
  </div>  
  <div class="footer-botm">
      <div class="container">
        <div class="w3layouts-foot">
          <ul>
            <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="payment-w3ls">  
          <img src="../assets/tamplate/images/card.png" alt=" " class="img-responsive">
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
<!-- //footer --> 
<!-- Bootstrap Core JavaScript -->
<script src="../assets/tamplate/js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->
<script src="../assets/tamplate/js/minicart.min.js"></script>
<script>
  // Mini Cart
  paypal.minicart.render({
    action: '#'
  });

  if (~window.location.search.indexOf('reset=true')) {
    paypal.minicart.reset();
  }
</script>
<!-- main slider-banner -->
<script src="../assets/tamplate/js/skdslider.min.js"></script>
<link href="../assets/tamplate/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
            
      jQuery('#responsive').change(function(){
        $('#responsive_wrapper').width(jQuery(this).val());
      });
      
    });
</script> 
<!-- //main slider-banner --> 

</body>
</html>