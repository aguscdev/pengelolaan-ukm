<?php
	include "../../config/koneksi.php";
 
	$kategori_id = $_GET["kategori_id"];
 
	// query sql
	$sql = "DELETE FROM kategori WHERE kategori_id='$kategori_id'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_kategori.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_kategori.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>