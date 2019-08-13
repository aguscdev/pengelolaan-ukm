<?php
	include "../../config/koneksi.php";
 
	$nama_pameran = $_POST["nama_pameran"];
	$tempat = $_POST["tempat"];
	$waktu = $_POST["waktu"];
	$peserta = $_POST["peserta"];

	// query sql
	$sql = "INSERT INTO pameran (nama_pameran,tempat,waktu,peserta) VALUES ('$nama_pameran','$tempat','$waktu','$peserta')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// var_dump($_FILES);
	// die;

	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_pameran.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_pameran.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>