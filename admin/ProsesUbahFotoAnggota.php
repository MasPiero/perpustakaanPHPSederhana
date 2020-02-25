<?php
include "../koneksi.php";
$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$folder = "foto_ktp/";


$type = $_FILES['foto']['name'];
$nama_file = $_FILES['foto']['name'];
$temp = explode(".", $_FILES['foto']['name']);
$file_name = $nama_anggota . '.' . end($temp);
$typegambar = end($temp);

	if($typegambar="jpg" || $typegambar ="png" || $typegambar = "jpeg"){
$s = move_uploaded_file($_FILES['foto']['tmp_name'], $folder.$file_name);
$simpan = mysqli_query($sambung,"UPDATE tbanggota set foto = '$file_name' where id_anggota = '$id_anggota'");
echo "<script>window.alert('Foto Berhasil diubah')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataAnggota'>";

}else{

	echo "<script>window.alert('tipe Gambar Salah')</script>";
	echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataAnggota'>";

}


?>