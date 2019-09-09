<?php

include "../../../config/koneksi.php";

$username = $_POST['username'];
$nama_ukm = $_POST['nama_ukm'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];
$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));

$sqlID = "SELECT id FROM user_ukm ORDER BY id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id'] + 1;

//input ke database
$sql = "INSERT INTO user_ukm values('$myID','$myID','$myID','$username','$nama_ukm','$email','$alamat','$no_telp','$pass','$gambar_file')";


move_uploaded_file($_FILES["foto"]["tmp_name"],$gambar_file);
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
  echo "<script>
      alert('Anda Berhasil Mendaftar');
      document.location.href = '../../../index.php';
      </script>";
}else{
  echo "Anda gagal Mendaftar";
}

mysqli_close($koneksi);
?>