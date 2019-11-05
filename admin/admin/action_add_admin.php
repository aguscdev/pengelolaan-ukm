<?php
	include "../../config/koneksi.php";
 
	$nama = $_POST["nama"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$level = $_POST["level"];
 
	// query sql
	$sql = "INSERT INTO admin VALUES('','$nama','$username','$password','$level')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
 
	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_admin.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_admin.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>