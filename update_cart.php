<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';

$id_produk = $_GET['id_produk'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $koneksi->query("SELECT qty FROM produk WHERE id_produk = ".$id_produk);


if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$id_produk]+1 <= $obj->qty)
        $_SESSION['cart'][$id_produk]++;
      break;

      case "remove":
      $_SESSION['cart'][$id_produk]--;
      if($_SESSION['cart'][$id_produk] == 0)
        unset($_SESSION['cart'][$id_produk]);
        break;
    }
  }
}

header("location:cart.php");

?>
