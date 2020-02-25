<?php
include "../koneksi.php";
$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($sambung,"SELECT * FROM tbanggota where id_anggota = '$id_anggota'");

?>

<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Ubah Anggota</li>
        </ol>


<?php
	while($data=mysqli_fetch_array($query)){

?>

<div class="row">
	<div class="col-md-12">
		<div class="row">
				<div class="col-md-6">
					<form action="ProsesUbahDataAnggota.php" method="POST" enctype="multipart/form-data">
					
					<div class="form-group">
						<label>Id Anggota</label>
						<input class="form-control"  readonly type="text" name="id_anggota" value="<?php echo $data['id_anggota'] ?>">
					</div>
					<div class="form-group">
						<label>Nama Anggota</label>
						<input class="form-control"   type="text" name="nama_anggota"value="<?php echo $data['nama_anggota'] ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input class="form-control"   type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
					</div>
					<div class="form-group">
						<label>No telp</label>
						<input class="form-control"   type="number" name="no_telp" value="<?php echo $data['no_telp'] ?>">
					</div>
					
					

					<div class="form-group">
						<button class="btn btn-primary" type="submit">Ubah</button>
						<a href="?hal=DataAnggota" class="btn btn-info">Kembali</a>
					</div>
				</div>
					</form>

				<div class="col-md-6">
					<form action="ProsesUbahFotoAnggota.php" method="POST" enctype="multipart/form-data">
					
						<div class="form-group">
						<input hidden class="form-control"  readonly type="text" name="id_anggota" value="<?php echo $data['id_anggota'] ?>">
						<input hidden class="form-control"  readonly type="text" name="nama_anggota" value="<?php echo $data['nama_anggota'] ?>">
					</div>
					<div class="form-group">
						
						<img src="foto_ktp/<?php echo $data['foto_ktp'] ?>" class="round" width="400" height="400">
						<input class="form-control" type="file" name="foto" required="">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Ubah Foto</button>
						
					</div>
				</form>
		</div>
	</div>

	<?php
}
	?>
</div>
