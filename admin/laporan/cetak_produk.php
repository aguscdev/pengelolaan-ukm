<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT PRODUK</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PRODUK</h2>
 
	</center>
 
	<?php 
	include '../../config/koneksi.php';
	?>
 
	<table border="1" class="table table-bordered nowrep" cellspacing="0" style="width: 1000px;text-align:center;height:auto;">
		<tr>
			<th width="1%">No</th>
			<!-- <th>Tanggal</th> -->
			<th>Nama Produk</th>
			<th>Harga</th>
			<th width="5%">QTY</th>
			<th>Foto</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<!-- <td><?php echo $d['date']; ?></td> -->
			<td><?php echo $d['nama_produk']; ?></td>
			<td><?php echo $d['harga']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><img src="../produk/<?php echo $d['foto']; ?>" width="50" height="50"/></td> 
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