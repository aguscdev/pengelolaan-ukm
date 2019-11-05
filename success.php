<!DOCTYPE html>
<html>
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id ASC");
$query2 = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY kategori_id ASC");
?>
<?php include 'header.php'; ?>
<body>
<?php include 'sidebar.php'; ?>

<br>
<!-- Header Nav End -->

    <div class="container"><font color="white">
      <div class="text-center">
      <div class="jumbotron" style="background-color:#ff8000">
        <h1>Success,</h1> 
        <h5><p>Pesanan anda telah di tempatkan</p></h5>
         <?php

          if(isset($_SESSION['cart'])) {
            // echo '<div class="">';
            // echo '<div class="col-xs-6">';
            // echo '<address>';
            // echo '<strong><h4>Dikirim Ke&nbsp;:</h4></strong>';

            ?>

            <?php
            include 'config/koneksi.php';
                $result = $koneksi->query('SELECT * FROM orders WHERE id=id');
    //$result = $koneksi->query('SELECT * FROM user WHERE id_user='.$_SESSION['id_user']);
                // $result1 = $mysqli->query('SELECT date FROM order');
                    if($result === FALSE){
                       die(mysql_error());
                    }

                    if($result) {
                      $obj = $result->fetch_object();
                    echo 'Nomor pemesan anda adalah&nbsp;<b>PSN-'. $obj->id. '</b>';
                        echo '&nbsp;dan total pembayaran adalah&nbsp;<b>Rp.'. $obj->total. '</b>';
                        // echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Telepon : &nbsp;'. $obj->no_telp. '<br>';
                        // echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alamat : &nbsp;'. $obj->alamat. '<br>';
                    // echo '</address>';
                    // echo '</div>';
              
                    }
                }

            ?>

        <h5>Silahkan melakukan pembayaran dengan meng transfer ke nomor rekening di bawah ini pembayaran</h5>
        <h5>Kirim bukti pembayaran ke tlpn/Wa: 0896-5076-4064.</h5><br> 
        <h1><p>BANK BJB</p><h1>
        <h1><p>A/n Vina Kartika</p><h1>
        <h1><p>Nomor Rekening: 0092717410100</p><h1>
        <h1><p>Terimakasih telah belanja di UKM kami</p><h1> 
         
      </div>
    </div>
    </div>
    </div>
  </body>        
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


</html>