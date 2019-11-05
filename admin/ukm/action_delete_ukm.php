<?php
	include "../../config/koneksi.php";
 
	$id_ukm = $_GET["id_ukm"];
 
	// query sql
	$sql = "DELETE FROM ukm WHERE id_ukm='$id_ukm'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>