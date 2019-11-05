<?php
	include "../../config/koneksi.php";
 
	$nama = $_POST["nama"];
 
	// query sql
	$sql = "INSERT INTO kategori VALUES('','$nama')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
 
	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_kategori.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_kategori.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>