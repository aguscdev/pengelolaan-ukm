<?php
	include "../../config/koneksi.php";
 
	$username = $_POST["username"];
	$email = $_POST["email"];
	$alamat = $_POST["alamat"];
 	$no_telp = $_POST["no_telp"];
	$pass = md5($_POST["pass"]);

	$gambar = "img/";
	$gambar_file = $gambar . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["photo"]["tmp_name"],$gambar_file);

	$sqlID = "SELECT id_user_ukm FROM user_ukm ORDER BY id_user_ukm DESC LIMIT 1";
	$select = mysqli_query($koneksi, $sqlID);
	$data = mysqli_fetch_assoc($select);
	$myID = $data['id_user_ukm'] + 1;
	
	// query sql
	$sql = "INSERT INTO user_ukm VALUES('','$username','$email','$alamat','$no_telp','$pass','$gambar_file')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
 // 	die;
	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_admin_ukm.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_admin_ukm.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>