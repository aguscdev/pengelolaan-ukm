<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include '../config/koneksi.php';

$username = $_POST["username"];
$pass = md5($_POST['pass']);
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $koneksi->query('SELECT id_user_ukm,email,pass,username from user_ukm order by id_user_ukm asc');
// var_dump($result);
// die;
if($result == FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email == $username) {

      $_SESSION['id_user_ukm'] = $obj->id_user_ukm;
      $_SESSION['id_ukm'] = $obj->id_ukm;
      $_SESSION['username'] = $obj->username;
      $_SESSION['nama_ukm'] = $obj->nama_ukm;
      $_SESSION['email'] = $obj->email;
      $_SESSION['alamat'] = $obj->alamat;
      $_SESSION['no_telp'] = $obj->no_telp;
      $_SESSION['pass'] = $obj->pass;
      $_SESSION['fhoto'] = $obj->fhoto;
      // $_SESSION['id'] = $obj->id;
      // $_SESSION['username'] = $obj->username;
      header("location:home/home.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=login.php");
}


?>
