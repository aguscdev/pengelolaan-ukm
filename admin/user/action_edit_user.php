<?php
	include "../../config/koneksi.php";
 
	$username = $_POST["username"];
	$email = $_POST["email"];
	$pass = md5($_POST["pass"]);
	$no_telp = $_POST["no_telp"];
	$alamat = $_POST["alamat"];
	$id_user = $_POST["id_user"];
 
	// query sql
	$sql = "UPDATE user SET username='$username',email='$email',alamat='$alamat',no_telp='$no_telp', pass='$pass' WHERE id_user='$id_user'";
						
	$query = mysqli_query($koneksi, $sql);
 	// var_dump($sql);
 	// die;
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_user.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_user.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>