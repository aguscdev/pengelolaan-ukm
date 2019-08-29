<?php

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';
session_start();

if ($_SESSION['username']=='') {
	header('location:login.php');
}else{
	$user = $_SESSION["username"];
	$id = $_SESSION["id"];	
	$level = $_SESSION["level"];

	// var_dump($user,$user_id,$level);

	if ($level =='ADMIN') {
		header('location:home/home.php');
	}
	elseif ($level=='DESA') {
		header('location:home/home.php');
	}
	elseif ($level=='UKM') {
		header('location:home/home.php');
	}
}

?>