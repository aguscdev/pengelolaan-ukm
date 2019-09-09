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
	header("Content-Disposition: attachment; filename=Laporan Data Produk.xls");
	?>
 
	<center>
		<h1>Laporan Data Produk</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<!-- <th>Tanggal</th> -->
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>QTY</th>
			<!-- <th>Foto</th> -->
		</tr>
		<?php 
		// koneksi database	
		include '../../../config/koneksi.php';
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from produk");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<!-- <td><?php echo $d['date']; ?></td> -->
			<td><?php echo $d['nama_produk']; ?></td>
			<td><?php echo $d['harga']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<!-- <td><img src="../produk/<?php echo $d['foto']; ?>" width="50" height="50"/></td>  -->
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>