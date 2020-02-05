<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id ASC");
$query2 = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY kategori_id ASC");
?>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>HAYOO.. BELANJA DAN IKUTI , <a href="products.html">TOKO KAMI SEKARANG</a></p>
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
			            
			            echo '<a href="account.php"><font color="white"> Akun Saya</a>';
			            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php"><font color="white"> Keluar</a>';
			            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.php"><font color="white"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>';
			          }
			          else {
			            // echo '<a  class="btn btn-default action-button" href="admin/login.php"><i class="glyphicon glyphicon-user"></i> Login Admin</a>';
			            // echo '<a class="btn btn-default action-button" href="../../admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a>';
			            echo '<a href="registrasi.php"><font color="white"> Registrasi</a>';
			            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php"><font color="white"> Masuk</a>';
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
				<h1><a href="index.php">UKM SOLEAR</a></h1>
			</div>
		<div class="w3l_search">
			<form action="search.php" method="GET">
				 <div class="form-group">
				<input type="search" name="search" placeholder="Cari Produk ..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
				</div>
			</form>
		</div>	
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
											<li><a href="ukm/registrasi.php">Registrasi</a></li>
											<li><a href="ukm/login.php">Login</a></li>
										</ul>
									</div>
									
								</div>
							</ul>
						</li>
						<li><a href="pameran.php">Pameran</a></li>
						<li><a href="pelatihan.php">Pelatihan</a></li>
						<li><a href="kontak.php">Kontak</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
		
<!-- //navigation -->
	