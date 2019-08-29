<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Data Pameran.xls");
	?>
 
	<center>
		<h1>Laporan Data Pameran</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Waktu</th>
			<th>Nama Pameran</th>
			<th>Tempat</th>
			<th>Peserta</th>
			<!-- <th>Foto</th> -->
		</tr>
		<?php 
		// koneksi database	
		include '../../config/koneksi.php';
 
		// menampilkan data pameran
		$data = mysqli_query($koneksi,"select * from pameran");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
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
</body>
</html>