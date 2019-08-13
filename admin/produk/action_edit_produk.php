<?php
	include "../../config/koneksi.php";
 
	$nama_produk = $_POST["nama_produk"];
	$deskripsi = $_POST["deskripsi"];
	$harga = $_POST["harga"];
	$qty = $_POST["qty"];
	$foto = $_POST["foto"];
	$id_produk = $_POST["id_produk"];
	$gambar = "img/";
	$gambar_file = $gambar . basename($foto);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	move_uploaded_file($gambar_file);
 
	// query sql
	$sql = "UPDATE produk SET nama_produk='$nama_produk',deskripsi='$deskripsi', harga='$harga',qty='$qty', foto='$gambar_file' WHERE id_produk='$id_produk'";
	// var_dump($sql);
	// die;
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_produk.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_produk.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>