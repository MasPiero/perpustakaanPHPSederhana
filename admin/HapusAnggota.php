<?php

include "../koneksi.php";

$id_anggota = $_GET['id_anggota'];
$hapus = mysqli_query($sambung, "DELETE FROM tbanggota where id_anggota = '$id_anggota'");

echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataAnggota'>";

?>