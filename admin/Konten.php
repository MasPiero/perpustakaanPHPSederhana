<?php
 if($_GET['hal'] == 'Beranda'){
 	include "Beranda.php";
 }

 	else if($_GET['hal'] == 'Home'){
 		include "Home.php";
 	}
 	else if($_GET['hal'] == 'DataBuku'){
 		include "DataBuku.php";
 	}
 	else if($_GET['hal'] == 'DataAnggota'){
 		include "DataAnggota.php";
 	}
 	else if($_GET['hal'] == 'TambahBuku'){
 		include "TambahBuku.php";
 	}
 	else if($_GET['hal'] == 'DetailBuku'){
 		include "DetailBuku.php";
 	}
 	else if($_GET['hal'] == 'UbahBuku'){
 		include "UbahBuku.php";
 	}
 	else if($_GET['hal'] == 'TambahAnggota'){
 		include "TambahAnggota.php";
 	}
 	else if($_GET['hal'] == 'DetailAnggota'){
 		include "DetailAnggota.php";
 	}
 	else if($_GET['hal'] == 'UbahAnggota'){
 		include "UbahAnggota.php";
 	}
 	else if($_GET['hal'] == 'DataPeminjaman'){
 		include "DataPeminjaman.php";
 	}
 	else if($_GET['hal'] == 'Peminjaman'){
 		include "Peminjaman.php";
 	}
 	else if($_GET['hal'] == 'DataPengembalian'){
 		include "DataPengembalian.php";
 	}
 	else if($_GET['hal'] == 'Pengembalian'){
 		include "Pengembalian.php";
 	}
 		else if($_GET['hal'] == 'LaporanPeminjaman'){
 		include "LaporanPeminjaman.php";
 	}
 		else if($_GET['hal'] == 'LaporanPengembalian'){
 		include "LaporanPengembalian.php";
 	}

 	
?>