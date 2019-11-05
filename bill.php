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

<div class="container">
    <div class="row"><font color="black">
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
                $result = $koneksi->query('SELECT * FROM user WHERE id='.$_SESSION['id']);
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
    						foreach($_SESSION['cart'] as $id => $quantity) {

                            $result = $koneksi->query("SELECT id, nama_produk, deskripsi, qty, harga FROM produk WHERE id = ".$id);
                              if($result){
                              while($obj = $result->fetch_object()) {
                                $cost = $obj->harga * $quantity; //work out the line cost
                                $total = $total + $cost; //add to the total cost
            echo '<tr>
    								<td>'.$obj->id.'</td>
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
              echo '<a href="success.php"><button class="btn btn-warning" style="float:right;">Order</button></a>';
                    }
                    ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div></div>
</div></div></div><br>
            
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