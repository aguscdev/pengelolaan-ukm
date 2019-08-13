<?php
require_once __DIR__ . '/vendor/autoload.php';

include '../../config/koneksi.php';
			
$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="vendor/print.css">
</head>
<body>
   <h2> Data Laporan Transaksi</h2>
   <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>';
     	$no = 1;
		$sql = mysqli_query($koneksi,"select * from orders");
		while($d = mysqli_fetch_array($sql)){
        $html .= '<tr>
            <td>'. $no++ .'</td>
            <td>'. $d["date"] .'</td>
            <td>'. $d["nama_produk"] .'</td>
            <td>'. $d["harga"] .'</td>
            <td>'. $d["units"] .'</td>
            <td>'. $d["total"] .'</td>
        </tr>';
     }   
$html .= '</table>    
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Laporan-Transaksi.pdf', 'I');
?>