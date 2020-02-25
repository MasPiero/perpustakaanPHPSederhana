<?php
include "../koneksi.php";
$isbn = $_POST['isbn'];
$folder = "foto_buku/";


$type = $_FILES['foto']['name'];
$nama_file = $_FILES['foto']['name'];
$temp = explode(".", $_FILES['foto']['name']);
$file_name = $isbn . '.' . end($temp);
$typegambar = end($temp);

	if($typegambar="jpg" || $typegambar ="png" || $typegambar = "jpeg"){
$s = move_uploaded_file($_FILES['foto']['tmp_name'], $folder.$file_name);
$simpan = mysqli_query($sambung,"UPDATE tbbuku set foto = '$file_name' where isbn = '$isbn'");
echo "<script>window.alert('Foto Berhasil diubah')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataBuku'>";

}else{

	echo "<script>window.alert('tipe Gambar Salah')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataBuku'>";

}


?>