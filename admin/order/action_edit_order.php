<?php
	include "../../config/koneksi.php";
 
	$nama_produk = $_POST["nama_produk"];
	$deskripsi = $_POST["deskripsi"];
	$harga = $_POST["harga"];
	$units = $_POST["units"];
	$total = $_POST["total"];
	$date = $_POST["date"];
	$email = $_POST["email"];
	$id = $_POST["id"];
 
	// query sql
	$sql = "UPDATE orders SET nama_produk='$nama_produk',deskripsi='$deskripsi',harga='$harga',units='$units',total='$total',date='$date',email='$email' WHERE id='$id'";
						
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// die;
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_order.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_order.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>