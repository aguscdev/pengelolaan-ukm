<?php
	include "../../config/koneksi.php";
	$nama_produk = $_POST["nama_produk"];
	$deskripsi = $_POST["deskripsi"];
	$harga = $_POST["harga"];
	$units = $_POST["units"];
	$total = $_POST["total"];
	$date = $_POST["date"];
	$email = $_POST["email"];

	// query sql
	$sql = "INSERT INTO orders VALUES ('','$nama_produk','$deskripsi','$harga','$units','$total','$date','$email')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// var_dump($_FILES);
	// die;

	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_order.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_order.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>