<?php
	include "../../config/koneksi.php";
 
	$id_pameran = $_GET["id_pameran"];
 
	// query sql
	$sql = "DELETE FROM pameran WHERE id_pameran='$id_pameran'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_pameran.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_pameran.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>