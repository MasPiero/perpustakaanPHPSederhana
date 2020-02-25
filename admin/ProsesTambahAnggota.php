<?php
include "../koneksi.php";


$nama_anggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$folder = "foto_ktp/";


$type = $_FILES['foto']['name'];
$nama_file = $_FILES['foto']['name'];
$temp = explode(".", $_FILES['foto']['name']);
$file_name = $nama_anggota . '.' . end($temp);
$typegambar = end($temp);

if($typegambar="jpg" || $typegambar="png" || $typegambar="jpeg"){
	$s = move_uploaded_file($_FILES['foto']['tmp_name'],$folder.$file_name);
	$simpan = mysqli_query($sambung,"INSERT INTO tbanggota VALUES('','$nama_anggota','$alamat','$no_telp','$file_name')");
	echo "<script>window.alert('Anggota Berhasil di tambahkan')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataAnggota'>";

}else {
	echo "<script>window.alert('Tipe Gambar Salah')</script>";
}


?>