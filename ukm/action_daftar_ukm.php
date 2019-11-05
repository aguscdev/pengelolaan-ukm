<?php

include "../config/koneksi.php";

$username = $_POST['username'];
// $nama_ukm = $_POST['nama_ukm'];
$email = $_POST['email'];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];
$pass = md5($_POST['pass']);

$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["fhoto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));

$sqlID = "SELECT id_user_ukm FROM user_ukm ORDER BY id_user_ukm DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id_user_ukm'] + 1;

//input ke database
$sql = "INSERT INTO user_ukm values('$myID','$username','$email','$alamat','$no_telp','$pass','$gambar_file')";


move_uploaded_file($_FILES["foto"]["tmp_name"],$gambar_file);
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
  echo "<script>
      alert('Anda Berhasil Mendaftar');
      document.location.href = '../index.php';
      </script>";
}else{
  echo "Anda gagal Mendaftar";
}

mysqli_close($koneksi);
?>