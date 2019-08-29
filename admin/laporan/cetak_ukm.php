<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT UKM</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN UKM</h2>
 
	</center>
 
	<?php 
	include '../../config/koneksi.php';
	?>
 
	<table border="1" class="table table-bordered nowrep" cellspacing="0" style="width: 1000px;text-align:center;height:auto;">
		<tr>
			<th width="1%">No</th>
			<!-- <th>Tanggal</th> -->
			<th>Nama UKM</th>
			<th>Milik</th>
			<th>Alamat</th>
			<th>No. Telepon</th>
			<th>Foto</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from ukm");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<!-- <td><?php echo $d['date']; ?></td> -->
			<td><?php echo $d['nama_ukm']; ?></td>
			<td><?php echo $d['milik']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['no_telp']; ?></td>
			<td><img src="../ukm/<?php echo $d['foto']; ?>" width="50" height="50"/></td> 
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