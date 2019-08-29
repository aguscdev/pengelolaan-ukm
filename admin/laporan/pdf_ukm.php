<?php
require_once __DIR__ . '/vendor/autoload.php';

include '../../config/koneksi.php';
			
$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar UKM</title>
    <link rel="stylesheet" href="vendor/print.css">
</head>
<body>
   <h2> Data Laporan UKM</h2>
   <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama UKM</th>
            <th>Milik</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>foto</th>
        </tr>';
     	$no = 1;
		$sql = mysqli_query($koneksi,"select * from ukm");
		while($d = mysqli_fetch_array($sql)){
        $html .= '<tr>
            <td>'. $no++ .'</td>
            <td>'. $d["nama_ukm"] .'</td>
            <td>'. $d["milik"] .'</td>
            <td>'. $d["alamat"] .'</td>
            <td>'. $d["no_telp"] .'</td>
            <td><img src="../produk/'. $d["foto"] .'" width="50" height="50"></td> 
        </tr>';
     }   
$html .= '</table>    
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Laporan-UKM.pdf', 'I');
?>