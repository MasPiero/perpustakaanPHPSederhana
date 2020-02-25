<?php
include "../koneksi.php";

$hari_ini = date("Ymd");
$id_kembali = $_POST['id_kembali'];
$id_pinjam = $_POST['id_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali_aktual = $hari_ini;
$denda = $_POST['denda'];

$simpan = mysqli_query($sambung,"INSERT INTO tbpengembalian VALUES('$id_kembali','$id_pinjam','$tgl_kembali_aktual','$denda')");


//query dulu stokmya
$qstok = mysqli_fetch_array(mysqli_query($sambung,"SELECT isbn from tbpeminjaman where id_pinjam = '$id_pinjam'"));

//mengurangi stok
$stok = mysqli_query($sambung,"UPDATE tbbuku SET stok = stok + 1 where isbn = '$stok[isbn]'");

//ubah status pinjamnya
$edit = mysqli_query($sambung,"UPDATE tbpeminjaman set status = 'Kembali' where id_pinjam = '$id_pinjam'");

echo "<script>window.alert('Data Pengembalian Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataPengembalian'>";




?>