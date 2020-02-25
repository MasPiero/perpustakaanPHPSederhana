<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah Anggota</li>
        </ol>


<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="ProsesTambahAnggota.php" method="POST" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Nama Anggota</label>
				<input class="form-control" type="text" name="nama_anggota" required="">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" type="text" name="alamat" required="">
			</div>
			<div class="form-group">
				<label>No Telp</label>
				<input class="form-control" type="text" name="no_telp" required="">
			</div>
			
			<div class="form-group">
				<label>Foto KTP</label>
				<input class="form-control" type="file" name="foto" required="">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a href="?hal=DataAnggota" class="btn btn-info">Kembali</a>
			</div>
		</div>
	</div>
</div>