<?php
	include "../koneksi.php";
	$id_anggota = $_GET['id_anggota'];
	$query = mysqli_query($sambung,"SELECT * FROM tbanggota where id_anggota = '$id_anggota'");
	$data = mysqli_fetch_array($query);
?>


<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Detail Anggota</li>
        </ol>


<div class="row">
	<div class="col-md-12">
		<div class="row">
				<div class="col-md-6">
					
					<div class="form-group">
						<label>id anggota</label>
						<input class="form-control"  readonly type="text" name="id_anggota" value="<?php echo $data['id_anggota'] ?>">
					</div>
					<div class="form-group">
						<label>Nama Anggota</label>
						<input class="form-control"  readonly type="text" name="nama_anggota"value="<?php echo $data['nama_anggota'] ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input class="form-control"  readonly type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
					</div>
					<div class="form-group">
						<label>no Telp</label>
						<input class="form-control"  readonly type="number" name="no_telp" value="<?php echo $data['no_telp'] ?>">
					</div>
					
					

					<div class="form-group">
						
						<a href="?hal=DataAnggota" class="btn btn-info">Kembali</a>
					</div>
				</div>

				<div class="col-md-6">
					
					<div class="form-group">
						
						<img src="foto_ktp/<?php echo $data['foto_ktp'] ?>" class="round" width="400" height="400">
					</div>
		</div>
	</div>
</div>