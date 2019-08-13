<?php
	include "../../config/koneksi.php";
 
	$nama_pelatihan = $_POST["nama_pelatihan"];
	$tempat = $_POST["tempat"];
	$waktu = $_POST["waktu"];
	$peserta = $_POST["peserta"];
	$id_pelatihan = $_POST["id_pelatihan"];
 
	// query sql
	$sql = "UPDATE pelatihan SET nama_pelatihan='$nama_pelatihan',tempat='$tempat', waktu='$waktu', peserta='$peserta' WHERE id_pelatihan='$id_pelatihan'";
	// var_dump($sql);
	// die;
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_pelatihan.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_pelatihan.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>