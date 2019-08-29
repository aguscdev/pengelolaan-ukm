<?php
require_once __DIR__ . '/vendor/autoload.php';

include '../../config/koneksi.php';
			
$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pameran</title>
    <link rel="stylesheet" href="vendor/print.css">
</head>
<body>
   <h2> Data Laporan Pameran</h2>
   <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Waktu</th>
            <th>Nama Pameran</th>
            <th>Tempat</th>
            <th>Peserta</th>
        </tr>';
     	$no = 1;
		$sql = mysqli_query($koneksi,"select * from Pameran");
		while($d = mysqli_fetch_array($sql)){
        $html .= '<tr>
            <td>'. $no++ .'</td>
            <td>'. $d["waktu"] .'</td>
            <td>'. $d["nama_pameran"] .'</td>
            <td>'. $d["tempat"] .'</td>
            <td>'. $d["peserta"] .'</td> 
        </tr>';
     }   
$html .= '</table>    
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Laporan-Pameran.pdf', 'I');
?>