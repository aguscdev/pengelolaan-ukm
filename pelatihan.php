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
<?php include 'sidebar.php'; ?><font color="black">
<br><br>
    <h2 class="text-center">List Pelatihan</h2>
<br>
<div class="container">
<table class="table table-hover">
    <tr>
  <thead>
      <th scope="col">No.</th>
      <th scope="col">Waktu</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama Pelatihan</th>
      <th scope="col">Tempat</th>
      <th scope="col">Peserta</th>
    </tr>
  </thead>
  <tbody>
     <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from pelatihan");
        while($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['waktu']; ?></td>
      <td><?php echo $d['tanggal']; ?></td>
      <td><?php echo $d['nama_pelatihan']; ?></td>
      <td><?php echo $d['tempat']; ?></td>
      <td><?php echo $d['peserta']; ?></td>
    </tr>
    <tr>
      <?php } ?>
  </tbody>
</table>
</div><br>
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