<?php
	include "../../config/koneksi.php";
 
	$id = $_GET["id"];
 
	// query sql
	$sql = "DELETE FROM admin WHERE id='$id'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_admin.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_admin.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>