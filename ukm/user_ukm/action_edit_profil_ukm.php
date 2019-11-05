<?php
	include "../../config/koneksi.php";
 
	$username = $_POST["username"];
	// $nama_ukm = $_POST["nama_ukm"];
	$email = $_POST["email"];
	$alamat = $_POST["alamat"];
	$no_telp = $_POST["no_telp"];
	$pass = md5($_POST["pass"]);
	$foto = $_POST["fhoto"];
	$id = $_POST["id_user_ukm"];
	$gambar = "img/";
	$gambar_file = $gambar . basename($foto);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	move_uploaded_file($gambar_file);
 
	// query sql
	$sql = "UPDATE user_ukm SET username='$username',email='$email',alamat='$alamat',no_telp='$no_telp', pass='$pass', fhoto='$gambar_file' WHERE id_user_ukm='$id'";
						
	$query = mysqli_query($koneksi, $sql);
 	// var_dump($sql);
 	// die;
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = '../home/home.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = '../home/home.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>