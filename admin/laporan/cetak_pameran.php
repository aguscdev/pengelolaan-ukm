<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT PAMERAN</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PAMERAN</h2>
 
	</center>
 
	<?php 
	include '../../config/koneksi.php';
	?>
 
	<table border="1" class="table table-bordered nowrep" cellspacing="0" style="width: 1000px;text-align:center;height:auto;">
		<tr>
			<th width="1%">No</th>
			<th>Waktu</th>
			<th>Nama Pameran</th>
			<th>Tempat</th>
			<th>Peserta</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pameran");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['nama_pameran']; ?></td>
			<td><?php echo $d['tempat']; ?></td>
			<td><?php echo $d['peserta']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>