<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>


<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="ProsesTambahBuku.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>ISBN</label>
				<input class="form-control" type="text" name="isbn" required="">
			</div>
			<div class="form-group">
				<label>Judul Buku</label>
				<input class="form-control" type="text" name="judul_buku" required="">
			</div>
			<div class="form-group">
				<label>Pengarang</label>
				<input class="form-control" type="text" name="pengarang" required="">
			</div>
			<div class="form-group">
				<label>Tahun Terbit</label>
				<input class="form-control" type="number" name="tahun_terbit" required="">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input class="form-control" type="number" name="stok" required="">
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input class="form-control" type="file" name="foto" required="">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a href="?hal=DataBuku" class="btn btn-info">Kembali</a>
			</div>
		</div>
	</div>
</div>