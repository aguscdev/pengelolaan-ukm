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
	header("Content-Disposition: attachment; filename=Laporan Data UKM.xls");
	?>
 
	<center>
		<h1>Laporan Data UKM</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<!-- <th>Tanggal</th> -->
			<th>Nama UKM</th>
			<th>Milik</th>
			<th>Alamat</th>
			<th>No. Telpon</th>
		</tr>
		<?php 
		// koneksi database	
		include '../../config/koneksi.php';
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from ukm");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_ukm']; ?></td>
			<td><?php echo $d['milik']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['no_telp']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>