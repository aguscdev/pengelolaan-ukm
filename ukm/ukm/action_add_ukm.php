<?php
	session_start();
	include "../../config/koneksi.php";
	$myUserID = $_SESSION["id_user_ukm"];
	$nama_ukm = $_POST["nama_ukm"];
	$pemilik_ukm = $_POST["pemilik_ukm"];
	$alamat = $_POST["alamat"];
	$no_telp = $_POST["no_telp"];
 
	// query sql
	$sql = "INSERT INTO ukm VALUES ('','$myUserID','$nama_ukm','$pemilik_ukm','$alamat','$no_telp')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// die;
	// var_dump($_FILES);

	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = '../home/home.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = '../home/home.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>