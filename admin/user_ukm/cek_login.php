<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include '../../config/koneksi.php';

$username = $_POST["username"];
$pass = md5($_POST['pass']);
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $koneksi->query('SELECT id,email,pass,username from user_ukm order by id asc');
// var_dump($result);
// die;
if($result == FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email == $username) {

      $_SESSION['username'] = $username;
      // $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['username'] = $obj->username;
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
