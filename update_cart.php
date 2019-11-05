<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';

$id = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $koneksi->query("SELECT qty FROM produk WHERE id = ".$id);


if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$id]+1 <= $obj->qty)
        $_SESSION['cart'][$id]++;
      break;

      case "remove":
      $_SESSION['cart'][$id]--;
      if($_SESSION['cart'][$id] == 0)
        unset($_SESSION['cart'][$id]);
        break;
    }
  }
}

header("location:cart.php");

?>
