<?php
include "../koneksi.php";

$isbn = $_POST['isbn'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$folder = "foto_buku/";


$type = $_FILES['foto']['name'];
$nama_file = $_FILES['foto']['name'];
$temp = explode(".", $_FILES['foto']['name']);
$file_name = $isbn . '.' . end($temp);
$typegambar = end($temp);

if($typegambar="jpg" || $typegambar="png" || $typegambar="jpeg"){
	$s = move_uploaded_file($_FILES['foto']['tmp_name'],$folder.$file_name);
	$simpan = mysqli_query($sambung,"INSERT INTO tbbuku VALUES('$isbn','$judul_buku','$pengarang','$tahun_terbit','$stok','$file_name')");
	echo "<script>window.alert('Buku Berhasil di tambahkan')</script>";
	//echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataBuku'>";

}else {
	echo "<script>window.alert('Tipe Gambar Salah')</script>";
}


?>