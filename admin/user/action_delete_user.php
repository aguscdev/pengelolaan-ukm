<?php
	include "../../config/koneksi.php";
 
	$id = $_GET["id"];
 
	// query sql
	$sql = "DELETE FROM user WHERE id='$id'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_user.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_user.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>