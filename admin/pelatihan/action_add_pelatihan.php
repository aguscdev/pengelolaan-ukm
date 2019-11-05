<?php
	include "../../config/koneksi.php";
 	session_start();
 	$myUserID = $_SESSION["id"];
 	$id_ukm = $_POST["id_ukm"];
	$nama_pelatihan = $_POST["nama_pelatihan"];
	$tempat = $_POST["tempat"];
	$tanggal = $_POST["tanggal"];
	$waktu = $_POST["waktu"];
	$peserta = $_POST["peserta"];
	// query sql
	$sql = "INSERT INTO pelatihan VALUES ('','$myUserID','$id_ukm','$nama_pelatihan','$tempat','$tanggal','$waktu','$peserta')";
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