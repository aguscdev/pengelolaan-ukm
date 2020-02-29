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

<div class="container">
  <div class="team_columns_carousel_wrapper">
  <div class="jumbotron">
    <p><h1><center><font color="black">Keranjang Belanja Anda</center></h1></p>
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

            foreach($_SESSION['cart'] as $id => $quantity) {

            $result = $koneksi->query("SELECT id, nama_produk, deskripsi, harga, qty FROM produk WHERE id = ".$id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->harga * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr class="active">';
                echo '<td>'.$obj->id.'</td>';
                echo '<td>'.$obj->nama_produk.'</td>';
                // echo '<td>'.$quantity.'&nbsp;<a class="add-to-cart" style="padding:5px;" href="update_cart.php?action=add&id='.$id.'">+</a>&nbsp;<a class="add-to-cart" style="padding:5px;" href="update_cart.php?action=remove&id='.$id.'">-</a></td>';
                 echo '<td> <input type="text" value="'.$quantity.'">&nbsp;<a class="add-to-cart" style="padding:5px;" href="update_cart.php?action=add&id='.$id.'">+</a>&nbsp;<a class="add-to-cart" style="padding:5px;" href="update_cart.php?action=remove&id='.$id.'">-</a></td>';

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
          echo '<a href="index.php"><button class="btn btn-warning">Batal</button></a>&nbsp;<a href="index.php"><button class="btn btn-warning">Belanja Lagi</button></a>';

          if(isset($_SESSION['username'])) {
            echo '<a href="order_update.php"><button class="btn btn-warning" style="float:right;">Input</button></a>';
          }

          else {
            echo '<a href="login.php" class="btn btn-warning" style="float:right">Login</a>';
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