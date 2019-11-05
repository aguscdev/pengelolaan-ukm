<?php
	include "../../config/koneksi.php";
 
	$id_user_ukm = $_GET["id_user_ukm"];
 
	// query sql
	$sql = "DELETE FROM user_ukm WHERE id_user_ukm='$id_user_ukm'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_admin_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_admin_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>