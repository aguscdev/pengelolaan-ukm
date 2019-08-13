<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config/koneksi.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $id_produk => $quantity) {

    $result = $koneksi->query("SELECT * FROM produk WHERE id_produk = ".$id_produk);

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->harga * $quantity;

        $user = $_SESSION["username"];

        $query = $koneksi->query("INSERT INTO orders (nama_produk, deskripsi, harga, units, total, email) VALUES('$obj->nama_produk', '$obj->deskripsi', $obj->harga, $quantity, $cost, '$user')");

        // var_dump($query);
        // die;

        if($query){
          $newqty = $obj->qty - $quantity;
          if($koneksi->query("UPDATE produk SET qty = ".$newqty." WHERE id_produk = ".$id_produk)){

          }
        }

        //send mail script
        // $query = $mysqli->query("SELECT * from orders order by date desc");
        // if($query){
        //   while ($obj = $query->fetch_object()){
        //     $subject = "Your Order ID ".$obj->id;
        //     $message = "<html><body>";
        //     $message .= '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
        //     $message .= '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
        //     $message .= '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
        //     $message .= '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
        //     $message .= '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
        //     $message .= '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
        //     $message .= '<p><strong>Total Cost</strong>: '.$obj->total.'</p>';
        //     $message .= "</body></html>";
        //     $headers = "From: support@techbarrack.com";
        //     $headers .= "MIME-Version: 1.0\r\n";
        //     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        //     $sent = mail($user, $subject, $message, $headers) ;
        //     if($sent){
        //       $message = "";
        //     }
        //     else {
        //       echo 'Failure';
        //     }
          //}
        }



      }
    }
  }



header("location:bill.php");

?>
