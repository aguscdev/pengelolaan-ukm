<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
   header('location:../../user_ukm/login.php');

  
}else{

  $user = $_SESSION["username"];
  $id = $_SESSION["id"];  
  // $level = $_SESSION["level"];

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
					include '../../../config/koneksi.php';
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
							<th>Foto</th>
						</thead>
						<tbody>
						<?php 
						$no = 1;

						if(isset($_GET['date'])){
							$date = $_GET['date'];
							$sql = mysqli_query($koneksi,"SELECT * FROM ukm WHERE date='$date'");
						}else{
							$sql = mysqli_query($koneksi,"SELECT * FROM ukm");
						}
						
						while($data = mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nama_ukm']; ?></td>
							<td><?php echo $data['milik']; ?></td>
							<td><img src="../ukm/<?php echo $data['photo']; ?>" width="50" height="50"/></td> 
						</tr>
						<?php 
						}
						?>
						</tbody>
					</table>
					<!-- <a href="../laporan/cetak_ukm.php" class="btn btn-primary btn-lg">
                      <span class="glyphicon glyphicon-print"></span> Print 
                    </a>
                    <a href="../laporan/pdf_ukm.php" class="btn btn-danger btn-lg" target="_blank">
                      <span class=""></span> Pdf 
                    </a>
                    <a href="../laporan/excel_ukm.php" class="btn btn-success btn-lg">
                      <span class=""></span> export
                    </a> -->

                    <a class="btn btn-primary btn-lg" href="../laporan/cetak_ukm.php?id_ukm=<?php echo $_SESSION["id"]; ?>"><span class="glyphicon glyphicon-print"></span>Print</a>
                    <a class="btn btn-danger btn-lg" href="../laporan/pdf_ukm.php?id_ukm=<?php echo $_SESSION["id"]; ?>"><span class=""></span>Pdf</a>
                    <a class="btn btn-success btn-lg" href="../laporan/excel_ukm.php?id_ukm=<?php echo $_SESSION["id"]; ?>"><span class=""></span>Export</a>
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