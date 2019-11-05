<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION['username']=='') 
{
  header('location:../../user_ukm/login.php');

}
  else{

  $user = $_SESSION["username"];
  $id_user_ukm = $_SESSION["id_user_ukm"];  
  // $id_ukm = $_SESSION['id_ukm'];
  // $id_produk = $_SESSION['id_produk'];
  // $level = $_SESSION["level"];

include 'header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php include '../../config/koneksi.php'; ?>
          <h1>
            Dashboard <?php echo $_SESSION["username"]; ?>
          </h1><br/>        
          <!-- chart -->
          <div class="box box-succes">
            <div class="box-header with-border">
             <div class="container">
        <!-- <div class="panel panel-default" style="background-color:#000000;"> -->
            <!-- <div class="panel-body"> -->
                <img alt="logo" src="../../img/stmik.png" width="100" style="aligment:left;">
                <font face="Britannic Bold" size="5"><label style="color:white;"> Pengelolaan UKM</label></font>
                <br><br>
                <p>
                    <button type="button" class="btn btn-default btn-sm">
                        <h3><span class="glyphicon glyphicon-home"></span> Tngerang, BANTEN</h3>
                    </button>
                </p>
                <p>
                    <button type="button" class="btn btn-default btn-sm">
                        <h3><span class="glyphicon glyphicon-envelope"></span> ukm@gmail.com</h3> 
                    </button>
                </p>
                <p>
                    <button type="button" class="btn btn-default btn-sm">
                        <h3><span class="glyphicon glyphicon-earphone"></span> 021-59216677</h3>
                    </button>
                </p>
                <br><br>
                <div class="large text-center text-muted" style="color:white;">Copyright © 2019 - Pengelolaan UKM</div>
            </div>
        </div>
    </div>
    </div>
  </div>

<!-- <script>
    var ctx = document.getElementById("barChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Jumlah Transaksi", "Jumlah Produk","Jumlah Customer","Jumlah UKM"],
        datasets: [{
          label: '',
          data: [
            <?php 
              $Transaksi = mysqli_query($koneksi,"select * from orders where id");
              echo mysqli_num_rows($Transaksi);
            ?>,
            <?php 
              $produk = mysqli_query($koneksi,"select * from produk where id_produk");
              echo mysqli_num_rows($produk);
            ?>,
            <?php 
              $Customer = mysqli_query($koneksi,"select * from user where id_user");
              echo mysqli_num_rows($Customer);
            ?>,
            <?php 
              $ukm = mysqli_query($koneksi,"select * from ukm where id_ukm");
              echo mysqli_num_rows($ukm);
            ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script> -->
</body>
<?php include 'footer.php'; ?>
</html>
<?php } ?>