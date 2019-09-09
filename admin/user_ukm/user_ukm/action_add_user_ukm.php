<?php
	include "../../../config/koneksi.php";
 
	$username = $_POST["username"];
	$id_ukm = $_POST["id_ukm"];
	$id_produk = $_POST["id_produk"];
	$email = $_POST["email"];
	$alamat = $_POST["alamat"];
 	$no_telp = $_POST["no_telp"];
	$pass = md5($_POST["pass"]);
	
	// query sql
	$sql = "INSERT INTO user_ukm VALUES('','$username','$id_ukm','$id_produk','$email','$alamat','$no_telp','$pass')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
 // 	die;
	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>