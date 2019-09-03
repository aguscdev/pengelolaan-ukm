<?php

include "config/koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = md5($_POST['pass']);
$level = $_POST["level"];

$sqlID = "SELECT id FROM admin ORDER BY id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id'] + 1;

//input ke database
$sql = "INSERT INTO admin values('$myID','$nama','$username','$pass','$level')";
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