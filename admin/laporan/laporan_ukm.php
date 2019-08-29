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
              <div class="panel-heading">Laporan UKM</div>
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
							<th>Nama UKM</th>
							<th>Milik</th>
							<th>Alamat</th>
							<th>No. Telepon</th>
							<th>Foto</th>
						</thead>
						<tbody>
						<?php 
						$no = 1;

						if(isset($_GET['date'])){
							$date = $_GET['date'];
							$sql = mysqli_query($koneksi,"select * from ukm where date='$date'");
						}else{
							$sql = mysqli_query($koneksi,"select * from ukm");
						}
						
						while($data = mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nama_ukm']; ?></td>
							<td><?php echo $data['milik']; ?></td>
							<td><?php echo $data['alamat']; ?></td>
							<td><?php echo $data['no_telp']; ?></td>
							<td><img src="../ukm/<?php echo $data['foto']; ?>" width="50" height="50"/></td> 
						</tr>
						<?php 
						}
						?>
						</tbody>
					</table>
					<a href="../laporan/cetak_ukm.php" class="btn btn-primary btn-lg">
                      <span class="glyphicon glyphicon-print"></span> Print 
                    </a>
                    <a href="../laporan/pdf_ukm.php" class="btn btn-danger btn-lg" target="_blank">
                      <span class=""></span> Pdf 
                    </a>
                    <a href="../laporan/excel_ukm.php" class="btn btn-success btn-lg">
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