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
	$id_pelatihan = $_POST["id_pelatihan"];
 
	// query sql
	$sql = "UPDATE pelatihan SET id_pelatihan='$myUserID',id_ukm='$id_ukm',nama_pelatihan='$nama_pelatihan',tempat='$tempat',tanggal='$tanggal', waktu='$waktu', peserta='$peserta' WHERE id_pelatihan='$id_pelatihan'";
	// var_dump($sql);
	// die;
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = '../home/home.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = '../home/home.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>