<?php
	include "../koneksi.php";
	// bikin nomor transaksi otomatis

	$today=date("Ymd");
	$query = "SELECT MAX(RIGHT(id_pinjam,12)) As akhir from tbpeminjaman where RIGHT(id_pinjam,12) LIKE '$today%'";
	$hasil = mysqli_query($sambung,$query);
	$data = mysqli_fetch_array($hasil);
	$noAkhirPinjam = $data['akhir'];
	$noAkhirUrut = substr($noAkhirPinjam, 8,4);
	$nourutSelanjutnya = $noAkhirUrut +1;
	$noPinjamSelanjutnya = $today . sprintf('%04s',$nourutSelanjutnya);
	$kode = "P";
	$no_baru = $kode.$noPinjamSelanjutnya; 


?>



<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Peminjaman buku</li>
        </ol>


<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="ProsesTambahPeminjaman.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Id Pinjam</label>
				<input class="form-control" type="text" name="id_pinjam" value="<?php echo $no_baru ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Pinjam</label>
				<input class="form-control" type="date" name="tgl_pinjam" required="">
			</div>
			<div class="form-group">
				<label>Judul Buku</label>
				<?php
					include "../koneksi.php";

					echo "<select class='form-control' name='isbn'> ";
					$tampil = mysqli_query($sambung,"SELECT * FROM tbbuku");
					while($w = mysqli_fetch_array($tampil)){

					echo "<option value= $w[isbn] selected>$w[judul_buku]</option>";

					}
					echo "</select>";
				?>



			</div>
			<div class="form-group">
				<label>Tanggal Kembali</label>
				<input class="form-control" type="date" name="tgl_kembali" required="">
			</div>
			<div class="form-group">
				<label>Nama Anggota</label>
				<?php
					include "../koneksi.php";

					echo "<select class='form-control' name='id_anggota'> ";
					$tampil = mysqli_query($sambung,"SELECT * FROM tbanggota");
					while($w = mysqli_fetch_array($tampil)){

					echo "<option value= $w[id_anggota] selected>$w[nama_anggota]</option>";

					}
					echo "</select>";
				?>



			</div>
			

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a href="?hal=DataPeminjaman" class="btn btn-info">Kembali</a>
			</div>
		</div>
	</div>
</div>