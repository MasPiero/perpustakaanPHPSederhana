<?php
include "../koneksi.php";
$id_pinjam = $_POST['id_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$isbn = $_POST['isbn'];
$tgl_kembali = $_POST['tgl_kembali'];
$id_anggota = $_POST['id_anggota'];
$status = "Pinjam";


$simpan = mysqli_query($sambung,"INSERT INTO tbpeminjaman VALUES('$id_pinjam','$tgl_pinjam','$isbn','$tgl_kembali','$id_anggota','$status')");

echo "<script>window.alert('Data Peminjaman Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataPeminjaman'>";



?>