<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';

$username = $_POST["username"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];
$pass = md5($_POST['pass']);


if($username!=""){
  $result = $koneksi->query('UPDATE user SET username ="'. $username .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($email!=""){
  $result = $koneksi->query('UPDATE user SET email ="'. $email .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($alamat!=""){
  $result = $koneksi->query('UPDATE user SET alamat ="'. $alamat .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

if($no_telp!=""){
  $result = $koneksi->query('UPDATE user SET no_telp ="'. $no_telp .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}


//$result = $mysqli->query('Select password from users WHERE id ='.$_SESSION['id']);

//$obj = $result->fetch_object();

if(/*$opwd === $obj->password &&*/ $pass!=""){
  $query = $koneksi->query('UPDATE user SET pass ="'. $pass .'" WHERE id ='.$_SESSION['id']);
  if($query){
  }
}

//else {
//  echo 'Wrong Password. Please try again. <a href="account.php">Go Back</a>';
//}

header("location:account.php");


?>
