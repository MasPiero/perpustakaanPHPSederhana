<?php

include "../koneksi.php";

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$edit = mysqli_query($sambung,"UPDATE tbanggota SET nama_anggota='$nama_anggota',alamat='$alamat',no_telp='$no_telp' where id_anggota='$id_anggota' ");

echo "<script>window.alert('Anggota Berhasil diUbah')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataAnggota'>";

?>