<?php
	include "../../config/koneksi.php";
 
	$username = $_POST["username"];
	$nama_ukm = $_POST["nama_ukm"];
	$email = $_POST["email"];
	$alamat = $_POST["alamat"];
 	$no_telp = $_POST["no_telp"];
	$pass = md5($_POST["pass"]);

	$gambar = "img/";
	$gambar_file = $gambar . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["photo"]["tmp_name"],$gambar_file);

	$sqlID = "SELECT id FROM user_ukm ORDER BY id DESC LIMIT 1";
	$select = mysqli_query($koneksi, $sqlID);
	$data = mysqli_fetch_assoc($select);
	$myID = $data['id'] + 1;
	
	// query sql
	$sql = "INSERT INTO user_ukm VALUES('','$myID','$myID','$username','$nama_ukm','$email','$alamat','$no_telp','$pass','$gambar_file')";
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