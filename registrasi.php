<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'sidebar.php'; ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Registrasi Sekarang</h2>
			<div class="login-form-grids">
				<!-- <h5>profile information</h5> -->
				<form action="action_daftar.php" method="post">
					<input type="text" name="username" placeholder="Username..." required=" " ></br>
					<input type="email" name="email" placeholder="Masukan Alamat Email.." required=" " ></br>
					<input type="text" name="no_telp" placeholder="Masukkan Nomor Telepon..." required=" " ></br>
					<input type="text" name="alamat" placeholder="Masukkan Alamat" required=" " >
					<input type="password" name="pass" placeholder="Masukan Password" required=" " >
					
					<input type="submit" value="Register">
					<!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button> -->
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
<?php include 'footer.php'; ?> 
<!-- Bootstrap Core JavaScript -->
<!-- Bootstrap Core JavaScript -->
<script src="assets/tamplate/js/bootstrap.min.js"></script>

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
<script src="assets/tamplate/js/minicart.min.js"></script>
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
<script src="assets/tamplate/js/skdslider.min.js"></script>
<link href="assets/tamplate/css/skdslider.css" rel="stylesheet">
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