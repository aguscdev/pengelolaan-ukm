<?php
	include "../../config/koneksi.php";
 
	$id_pelatihan = $_GET["id_pelatihan"];
 
	// query sql
	$sql = "DELETE FROM pelatihan WHERE id_pelatihan='$id_pelatihan'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_pelatihan.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_pelatihan.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>