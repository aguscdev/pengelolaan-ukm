<?php
	include "../../config/koneksi.php";
 	session_start();
 	$myUserID = $_SESSION["id"];
	$nama_ukm = $_POST["nama_ukm"]; 
	$alamat = $_POST["alamat"];
	$no_telp = $_POST["no_telp"];
	// $foto = $_POST["photo"];
	$id_ukm = $_POST["id_ukm"];
	// $gambar = "img/";
	// $gambar_file = $gambar . basename($foto);
	// $uploadOk = 1;
	// $imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	// move_uploaded_file($gambar_file);
 
	// query sql
	$sql = "UPDATE ukm SET id_ukm='$myUserID',nama_ukm='$nama_ukm',alamat='$alamat',no_telp='$no_telp' WHERE id_ukm='$id_ukm'";
	// var_dump($sql);
	// die;
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>