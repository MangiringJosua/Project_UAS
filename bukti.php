<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'RUMAH MAKAN BINTANG RAYA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'FORM BUKTI PEMESANAN MEJA RUMAH MAKAN BINTANG RAYA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(12,7,'',10,5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Nama',1,0);
$pdf->Cell(85,6,'Jumlah bangku',1,0);
$pdf->Cell(27,6,'Tanggal',1,0);
$pdf->Cell(25,6,'Jam',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$meja = mysqli_query($con, "select * from meja");
while ($row = mysqli_fetch_array($meja)){
    $pdf->Cell(20,6,$row['nm'],1,0);
    $pdf->Cell(85,6,$row['orang'],1,0);
    $pdf->Cell(27,6,$row['tgl'],1,0);
    $pdf->Cell(25,6,$row['jam'],1,1); 
}

$pdf->Output();
?>
