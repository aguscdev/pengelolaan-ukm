<?php
	include "../../config/koneksi.php";
	session_start();
 	$myUserID = $_SESSION["id"];
 	$id_ukm = $_POST["id_ukm"];
	$nama_pameran = $_POST["nama_pameran"];
	$tempat = $_POST["tempat"];
	$tanggal = $_POST["tanggal"];
	$waktu = $_POST["waktu"];
	$biaya = $_POST["biaya"];
	$peserta = $_POST["peserta"];
	$id_pameran = $_POST["id_pameran"];
 
	// query sql
	$sql = "UPDATE pameran SET id_pameran='$myUserID',id_ukm='$id_ukm',nama_pameran='$nama_pameran',tempat='$tempat',tanggal='$tanggal', waktu='$waktu',biaya='$biaya', peserta='$peserta' WHERE id_pameran='$id_pameran'";
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