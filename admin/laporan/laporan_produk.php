<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id = $_SESSION["id"];  
  $level = $_SESSION["level"];

  include '../home/header.php'; 
?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="panel panel-default">
              <div class="panel-heading">Laporan Produk</div>
                <div class="panel-body"><br/>
					<?php 
					include '../../config/koneksi.php';
					?>
					<!-- <form method="get">
						<div class="form-group"><br/>
							<label>PILIH TANGGAL</label>
							<input class="form-control" type="date" name="date">
							<input type="submit" class="btn btn-primary" value="FILTER">
						</div>
					</form> -->
					<table class="table table-bordered">
						<thead>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>QTY</th>
							<th>Foto</th>
						</thead>
						<tbody>
						<?php 
						$no = 1;

						if(isset($_GET['date'])){
							$date = $_GET['date'];
							$sql = mysqli_query($koneksi,"select * from product where date='$date'");
						}else{
							$sql = mysqli_query($koneksi,"select * from produk");
						}
						
						while($data = mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<!-- <td><?php echo $data['date']; ?></td> -->
							<td><?php echo $data['nama_produk']; ?></td>
							<td><?php echo $data['harga']; ?></td>
							<td><?php echo $data['qty']; ?></td>
							<td><img src="../produk/<?php echo $data['foto']; ?>" width="50" height="50"/></td> 
						</tr>
						<?php 
						}
						?>
						</tbody>
					</table>
					<a href="../laporan/cetak_produk.php" class="btn btn-primary btn-lg">
                      <span class="glyphicon glyphicon-print"></span> Print 
                    </a>
                    <a href="../laporan/pdf_produk.php" class="btn btn-danger btn-lg" target="_blank">
                      <span class=""></span> Pdf 
                    </a>
                    <a href="../laporan/excel_produk.php" class="btn btn-success btn-lg">
                      <span class=""></span> export
                    </a>
				</div>
			</div>
        </section><br>
      </div>
    </div>
  </div>
	<!-- <script>
		window.print();
	</script> -->
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php } ?>