<?php

include "../koneksi.php";

$isbn = $_GET['isbn'];
$hapus = mysqli_query($sambung, "DELETE FROM tbbuku where isbn = '$isbn'");

echo "<meta http-equiv='refresh' content='0; url=beranda.php?hal=DataBuku'>";

?>