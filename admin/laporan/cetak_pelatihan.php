<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT PELATIHAN</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PELATIHAN</h2>
 
	</center>
 
	<?php 
	include '../../config/koneksi.php';
	?>
 
	<table border="1" class="table table-bordered nowrep" cellspacing="0" style="width: 1000px;text-align:center;height:auto;">
		<tr>
			<th width="1%">No</th>
			<th>Tanggal</th>
			<th>Nama Pelatihan</th>
			<th>Tempat</th>
			<th>Peserta</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pelatihan");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['nama_pelatihan']; ?></td>
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