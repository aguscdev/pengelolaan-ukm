<?php
	include "../../config/koneksi.php";
 
	$nama = $_POST["nama"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$level = $_POST["level"];
	$id = $_POST["id"];
 
	// query sql
	$sql = "UPDATE admin SET nama='$nama',username='$username', password='$password', level='$level' WHERE id='$id'";
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_admin.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_admin.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>