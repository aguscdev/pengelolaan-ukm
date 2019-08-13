<?php
	include "../../config/koneksi.php";
 
	$nama_pelatihan = $_POST["nama_pelatihan"];
	$tempat = $_POST["tempat"];
	$waktu = $_POST["waktu"];
	$peserta = $_POST["peserta"];

	// query sql
	$sql = "INSERT INTO pelatihan (nama_pelatihan,tempat,waktu,peserta) VALUES ('$nama_pelatihan','$tempat','$waktu','$peserta')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// var_dump($_FILES);
	// die;

	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_pelatihan.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_pelatihan.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>