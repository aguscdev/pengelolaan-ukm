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

<!-- Index Product ============================================================ -->
      <div class="container"><font color="black">
        <?php if (isset($_GET['search'])) { 
          $object = $_GET['search']?>
          <h3>Anda Mencari '<?php echo $object; ?>'</h3><br><br>
      <?php } ?>

      <?php
      include 'config/koneksi.php';
          $sql = $koneksi->query("SELECT * FROM produk");
          if($sql){
              while($obj = $sql->fetch_object()) { 
                if ( preg_replace('/\s+/','',$obj->nama_produk) == preg_replace('/\s+/', '',$object)) {
                    echo '<div class="col-md-4 top_brand_left">
      <div class="hover14 column">
        <div class="agile_top_brand_left_grid">
          <div class="agile_top_brand_left_grid_pos">
            <img src="assets/tamplate/images/offer.png" alt=" " class="img-responsive" />
          </div>
          <div class="agile_top_brand_left_grid1">
            <figure>
              <div class="snipcart-item block" >
                <div class="snipcart-thumb">
                   <a><img src="admin/produk/'.$obj->foto.'" width="100%" data-toggle="modal" data-target="#'.$obj->id.'"></a>    
                  <p><h5 data-toggle="modal" data-target="#'.$obj->id.'"><a><font color="black">'.$obj->nama_produk.'</a></h5></p>
                  <h4>Rp '.$obj->harga.'</h4>
                </div>
                <div class="snipcart-details top_brand_home_details">
                    <fieldset>
                      <input data-toggle="modal" data-target="#'.$obj->id.'" type="submit" name="submit" value="Add to cart" class="button" />
                    </fieldset>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>';
    echo '<div class="modal fade" id="'.$obj->id.'" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">'.$obj->nama_produk.'</h4>
          </div>';
    echo '<div class="modal-body">';              
    echo '<div class="col-lg-4"><img src="admin/produk/'.$obj->foto.'" width="100%"></div>
            <p><h3>'.$obj->nama_produk.'</h3></p>
            <p><h4><strong>Description</strong>: '.$obj->deskripsi.'</h4></p>
            <p><h3><strong>Harga (Per Unit)</strong>: '.$currency.$obj->harga.'</h3></p>
            <p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
          
            if($obj->harga > 0) {
                    
                    echo '<br><br><br><br><br><br><p><a href="update_cart.php?action=add&id='.$obj->id.'"><input type="submit" class="btn btn-warning" value="Tambah Ke Keranjang" style=";">';
                    echo '</div></div>';
                }

                else {
                    
                    echo 'Out Of Stock!!!';
                }
                
                  echo '</div></div>';
            }

         }
         ?>
          <?php } ?>
         </div>
      </div><br>

<!-- Index Product End -->

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