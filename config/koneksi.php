<?php 
$currency = 'Rp.';
$koneksi = mysqli_connect("localhost","root","","umkm");

// check koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal :" .mysqli_connect_error();
}
?>