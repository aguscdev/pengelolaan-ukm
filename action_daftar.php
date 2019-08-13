<?php

include "config/koneksi.php";

$username = $_POST['username'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];

$sqlID = "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id_user'] + 1;

//input ke database
$sql = "INSERT INTO user values('$myID','$username','$email','$alamat','$no_telp','$pass')";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
  echo "<script>
      alert('Anda Berhasil Mendaftar');
      document.location.href = 'index.php';
      </script>";
}else{
  echo "Anda gagal Mendaftar";
}

mysqli_close($koneksi);
?>