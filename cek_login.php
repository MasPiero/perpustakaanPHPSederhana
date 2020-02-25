<?php
include"koneksi.php";
$nama_admin = $_POST['nama_admin'];
$password_admin = $_POST['password_admin'];


$login = mysqli_query($sambung,"SELECT * FROM tbadmin where nama_admin = '$nama_admin' and password_admin='$password_admin'");
$ada = mysqli_num_rows($login);
$x	= mysqli_fetch_array($login);

	if($ada > 0){
		session_start();
		$_SESSION['id_admin'] = $x['id_admin'];
		$_SESSION['nama_admin'] = $x['nama_admin'];
		$_SESSION['status_admin'] = $x['status_admin'];

		echo "<script>alert('Anda Berhasil Login, Selamat Datang $_SESSION[nama_admin]'); window.location='admin/index.php'</script>";
	} else{
		echo "<script>alert('Login Gagal, Periksa Kembali Password'); window.location='index.html'</script>";
	}

?>