<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Laporan</li>
        </ol>


<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="CetakLaporanPengembalian.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Tanggal Awal</label>
				<input class="form-control" type="date" name="tgl_akhir" required="">
			</div>
			<div class="form-group">
				<label>Tanggal Akhir</label>
				<input class="form-control" type="date" name="tgl_awal" required="">
			</div>
			

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Cetak</button>
				<a href="?hal=Home" class="btn btn-info">Kembali</a>
			</div>
		</div>
	</div>
</div>