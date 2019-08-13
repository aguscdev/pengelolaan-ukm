<?php
	include "../../config/koneksi.php";
 
	$nama_pameran = $_POST["nama_pameran"];
	$tempat = $_POST["tempat"];
	$waktu = $_POST["waktu"];
	$peserta = $_POST["peserta"];
	$id_pameran = $_POST["id_pameran"];
 
	// query sql
	$sql = "UPDATE pameran SET nama_pameran='$nama_pameran',tempat='$tempat', waktu='$waktu', peserta='$peserta' WHERE id_pameran='$id_pameran'";
	// var_dump($sql);
	// die;
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_pameran.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_pameran.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>