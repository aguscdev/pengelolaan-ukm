<?php
	include "../../config/koneksi.php";
 
	$username = $_POST["username"];
	$email = $_POST["email"];
	$pass = md5($_POST["pass"]);
	$no_telp = $_POST["no_telp"];
	$alamat = $_POST["alamat"];
 
	// query sql
	$sql = "INSERT INTO user VALUES('','$username','$email','$alamat','$no_telp','$pass')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
 
	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>