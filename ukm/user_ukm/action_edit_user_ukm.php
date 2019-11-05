<?php
	include "../../config/koneksi.php";
 
	$username = $_POST["username"];
	$email = $_POST["email"];
	$pass = md5($_POST["pass"]);
	$no_telp = $_POST["no_telp"];
	$alamat = $_POST["alamat"];
	$id_user_ukm = $_POST["id_user_ukm"];
 
	// query sql
	$sql = "UPDATE user_ukm SET username='$username',email='$email',alamat='$alamat',no_telp='$no_telp', pass='$pass' WHERE id='$id'";
						
	$query = mysqli_query($koneksi, $sql);
 	// var_dump($sql);
 	// die;
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_user_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_user_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>