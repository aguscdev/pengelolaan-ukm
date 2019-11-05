<?php
	session_start();
	include "../../config/koneksi.php";
	$myUserID = $_SESSION["id"];
 	$id_ukm = $_POST["id_ukm"];
	$nama_pameran = $_POST["nama_pameran"];
	$tempat = $_POST["tempat"];
	$tanggal = $_POST["tanggal"];
	$waktu = $_POST["waktu"];
	$biaya = $_POST["biaya"];
	$peserta = $_POST["peserta"];

	// query sql
	$sql = "INSERT INTO pameran VALUES ('','$myUserID','$id_ukm','$nama_pameran','$tempat','$tanggal','$waktu','$biaya','$peserta')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// var_dump($_FILES);
	// die;

	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = '../home/home.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = '../home/home.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>