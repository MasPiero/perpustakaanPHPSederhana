<?php
include "../koneksi.php";
$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];
require_once("../fpdf17/fpdf.php");


$pdf = new FPDF('P','mm',array(210,297)); //ukuran kertas potraot / landscape P/L
$pdf->AddPage();

$pdf -> SetFont('Arial','B',18); // tipe font, bold, ukuran font
$pdf-> Cell(60);
$pdf->Cell(75,10,'Laporan Peminjaman Buku', 0,1,'C');

$pdf->Ln(10);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(2);
$pdf->Cell(40,6,'Tanggal',1,0,'C');
$pdf->Cell(40,6,'Id Pinjam',1,0,'C');
$pdf->Cell(40,6,'Nama Buku',1,0,'C');
$pdf->Cell(40,6,'Nama Anggota',1,0,'C');

$query = mysqli_query($sambung,"SELECT * FROM tbpeminjaman left join tbbuku on tbpeminjaman.isbn = tbbuku.isbn left join tbanggota on tbpeminjaman.id_anggota = tbanggota.id_anggota where (tbpeminjaman.tgl_pinjam BETWEEN '$tgl_awal' AND '$tgl_akhir');");

while ($data = mysqli_fetch_array($query)) {
	


$pdf->Ln(6);
$pdf->Cell(2);
$pdf->Cell(40,6,$data['tgl_pinjam'],1,0,'C');
$pdf->Cell(40,6,$data['id_pinjam'],1,0,'C');
$pdf->Cell(40,6,$data['judul_buku'],1,0,'C');
$pdf->Cell(40,6,$data['nama_anggota'],1,0,'C');



}









$pdf->Output();



?>