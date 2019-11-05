<?php
	include "../../config/koneksi.php";
 	
 	$id_user_ukm = $_POST["id_user_ukm"];
 	$kategori = $_POST["kategori_id"];
	$nama_produk = $_POST["nama_produk"];
	$deskripsi = $_POST["deskripsi"];
	$harga = $_POST["harga"];
	$qty = $_POST["qty"];
	$foto = $_POST["foto"];
	$id = $_POST["id"];
	$gambar = "img/";
	$gambar_file = $gambar . basename($foto);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	move_uploaded_file($gambar_file);
 
	// query sql
	$sql = "UPDATE produk SET id_user_ukm='$id_user_ukm',kategori_id='$kategori',nama_produk='$nama_produk',deskripsi='$deskripsi', harga='$harga',qty='$qty', foto='$gambar_file' WHERE id='$id'";
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