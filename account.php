<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["username"]==="") {
  header("location:index.php");
}

include 'config/koneksi.php';

?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'sidebar.php'; ?>
<!-- breadcrumbs -->
<!--   <div class="container">
  <div class="jumbotron" style="background-color:#f3ef33;">
        <h4>Info detail Account User</h4>
        <p>Rincian pengguna Di bawah ini adalah rincian Anda dalam database. Jika Anda ingin mengubah apa pun, maka cukup masukkan data baru dalam kotak teks dan klik pada update.</p>
    </div>
</div>
 -->
</br>
<div class="container">
    <div class="panel panel-default" style="background-color:#ff8000">
        <div class="panel-body">
          <h2 class="text-center">Update Account</h2><br/>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <form method ="POST" class="form-horizontal" action="update.php">
                  <fieldset>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" id="right-label" for="textinput">Name&nbsp;:</label>
                      <div class="col-sm-10">
                
                    <?php
                          include 'config/koneksi.php';

                           $result = $koneksi->query('SELECT * FROM user WHERE id='.$_SESSION['id']);

                           if($result === FALSE){
                             die(mysql_error());
                          }

                          if($result) {
                            $obj = $result->fetch_object();
                        
                            echo '<input type="text" id="right-label" placeholder="'. $obj->username. '" name="username" class="form-control" required="">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Email&nbsp;:</label>';
                            echo '<div class="col-sm-10">';
                            echo '<input type="email" id="right-label" placeholder="'. $obj->email. '" name="email" class="form-control" required="">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">No Telepon&nbsp;:</label>';
                            echo '<div class="col-sm-10">';
                            echo '<input type="number" id="right-label" placeholder="'. $obj->no_telp. '" name="no_telp" class="form-control" required="">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Alamat&nbsp;:</label>';
                            echo '<div class="col-sm-10">';
                            echo '<input type="text" id="right-label" placeholder="'. $obj->alamat. '" name="alamat" class="form-control" required="">';
                            echo '</div>';
                            echo '</div>';


                          }
                          echo '<div class="form-group">
                              <label class="col-sm-2 control-label" id="right-label" for="textinput">Password&nbsp;:</label>
                              <div class="col-sm-10">
                                <input type="password" id="right-label" placeholder="'. $obj->pass. '" name="pass" class="form-control" required="">
                              </div>
                              </div>';
                  ?>
                <div class="row">      
                  <div class="small-8 columns">
                    <div class="pull-right">
                      <input type="submit" id="right-label" value="Update" class="btn btn-primary">
                      <input type="reset" id="right-label" value="Reset" class="btn btn-primary">
                    </div>
                  </div>
                </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
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