<?php
	include "../../config/koneksi.php";
 
 	$produk = $_POST["id_produk"];
	$nama_ukm = $_POST["nama_ukm"];
	$milik = $_POST["milik"];
	$alamat = $_POST["alamat"];
	$no_telp = $_POST["no_telp"];
	// $foto = $_POST["foto"];
	$gambar = "img/";
	$gambar_file = $gambar . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["photo"]["tmp_name"],$gambar_file);
 
	// query sql
	$sql = "INSERT INTO ukm (id_produk,nama_ukm,milik,alamat,no_telp,photo) VALUES ('$produk','$nama_ukm','$milik','$alamat','$no_telp','$gambar_file')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// var_dump($_FILES);
	// die;

	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>