<!DOCTYPE html>
<html lang="en">
 <?php include 'header.php'; ?> 
  <body>
  	<?php include 'sidebar.php'; ?>
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
      <h2>Login</h2>
    
      <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
        <form action="cek_login.php" class="inner-login" method="post" id="login">
          <input type="email" name="username" placeholder="Email" required=" " >
          <input type="password" name="pass" placeholder="Pass" required=" " >
          <div class="forgot">
            <a href="#">Lupa kata sandi?</a>
          </div>
          <input type="submit" name="submit" value="LOGIN">
        </form>
      </div>
      <h4>Untuk Orang Baru</h4>
      <p><a href="registered.php">Daftar disini</a> (Atau) kembali ke <a href="../index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
    </div>
  </div>
<!-- //login -->
    <?php include 'footer.php'; ?>
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