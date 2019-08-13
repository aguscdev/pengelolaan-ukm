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
  <title>Peneglolaan UKM</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<head>
    <link rel="stylesheet" href="assets/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/include/style.css">
  </head>
  <body>

  <!-- Header Nav ============================================================== -->
  <div class="header-blue">
    <nav class="navbar navbar-default navigation-clean-search">
      <div class="container">
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Kelola-UKM</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav">
            <li class="active" role="presentation"><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">All Catagories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="product.php">Smart Phones</a></li>
                <li><a href="product.php">Laptops</a></li>
                <li><a href="product.php">Accessories</a></li>
              </ul>
              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["username"]; ?></a></li>
            </li>
          </ul>
          <form class="navbar-form navbar-left" target="_self" method="GET" action="search.php">
            <div class="form-group">
              <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                <input class="form-control search-field" type="search" name="search" id="search-field">
            </div>
          </form>
          <p class="navbar-text navbar-right">
            <?php
              if(isset($_SESSION['username'])){
                echo '<a  class="btn btn-default action-button" href="cart.php"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang</a>';
                echo '<a class="btn btn-default action-button" href="account.php"><i class="glyphicon glyphicon-user"></i> My Account</a>';
                 echo '<a class="btn btn-default action-button" href="logout.php"><i class="glyphicon glyphicon -log-out"></i> Logout</a>';
              }
              else {
                echo '<a  class="btn btn-default action-button" href="admin/login.php"><i class="glyphicon glyphicon-shopping-cart"></i> Login Admin</a>';
                // echo '<a class="btn btn-default action-button" href="../../admin/login.php"><i class="glyphicon glyphicon glyphicon-user"></i> Login Admin</a>';
                echo '<a class="btn btn-default action-button" href="daftar.php"><i class="glyphicon glyphicon -log-out"></i> Daftar</a>';
                echo '<a class="btn btn-default action-button" href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a>';
              }
            ?>

          </p>
        </div>
      </div>
        </nav>
    </div>

<!-- Header Nav End -->

<div class="container">
  <div class="jumbotron" style="background-color:#ffffff;">
        <h4>Info detail Account User</h4>
        <p>Rincian pengguna Di bawah ini adalah rincian Anda dalam database. Jika Anda ingin mengubah apa pun, maka cukup masukkan data baru dalam kotak teks dan klik pada update.</p>
    </div>
</div>

<div class="container">
    <div class="panel panel-default" style="background-color:#ffffff;">
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

                           $result = $koneksi->query('SELECT * FROM user WHERE id_user='.$_SESSION['id_user']);

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
</body>
  <?php include 'footer.php'; ?>
</html>