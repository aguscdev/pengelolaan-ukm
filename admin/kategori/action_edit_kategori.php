<?php
	include "../../config/koneksi.php";
 
	$nama_kategori = $_POST["nama_kategori"];
	$kategori_id = $_POST["kategori_id"];
 
	// query sql
	$sql = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE kategori_id='$kategori_id'";
						
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_kategori.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_kategori.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>