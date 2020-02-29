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

                          $total = 0;
        echo '';
                foreach($_SESSION['cart'] as $id => $quantity) {

                            $result = $koneksi->query("SELECT id, nama_produk, deskripsi, qty, harga FROM produk WHERE id = ".$id);
                              if($result){
                              $obj = $result->fetch_object(); {
                                $cost = $obj->harga * $quantity; //work out the line cost
                                $total = $total + $cost; //add to the total cost
            echo '';
                        }
                      }
                    }
            echo '
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total pembayaran adalah</strong>&nbsp;<b>Rp.'.$total.'<b/></td>
                  </tr>
                </tbody>
              </table>';
              echo '';
                    }
                    ?>

        <h5>Silahkan melakukan pembayaran dengan meng transfer ke nomor rekening di bawah ini pembayaran</h5>
        <h5>Kirim bukti pembayaran ke tlpn/Wa: 0896-5076-4064.</h5><br> 
        <h1><p>BANK BJB</p><h1>
        <h1><p>A/n Vina Kartika</p><h1>
        <h1><p>Nomor Rekening: 0092717410100</p><h1>
        <h1><p>Terimakasih telah belanja di UKM kami</p><h1> 
        <a class="btn btn-danger" href="index.php">Home</a>
         
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