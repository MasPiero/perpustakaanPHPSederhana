<?php
	include "../koneksi.php";
	$isbn = $_GET['isbn'];
	$query = mysqli_query($sambung,"SELECT * FROM tbbuku where isbn = '$isbn'");
	$data = mysqli_fetch_array($query);
?>


<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Detail Buku</li>
        </ol>


<div class="row">
	<div class="col-md-12">
		<div class="row">
				<div class="col-md-6">
					
					<div class="form-group">
						<label>ISBN</label>
						<input class="form-control"  readonly type="text" name="isbn" value="<?php echo $data['isbn'] ?>">
					</div>
					<div class="form-group">
						<label>Judul Buku</label>
						<input class="form-control"  readonly type="text" name="judul_buku"value="<?php echo $data['judul_buku'] ?>">
					</div>
					<div class="form-group">
						<label>Pengarang</label>
						<input class="form-control"  readonly type="text" name="pengarang" value="<?php echo $data['pengarang'] ?>">
					</div>
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input class="form-control"  readonly type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit'] ?>">
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input class="form-control"  readonly type="number" name="stok" value="<?php echo $data['stok'] ?>">
					</div>
					

					<div class="form-group">
						
						<a href="?hal=DataBuku" class="btn btn-info">Kembali</a>
					</div>
				</div>

				<div class="col-md-6">
					
					<div class="form-group">
						
						<img src="foto_buku/<?php echo $data['foto'] ?>" class="round" width="400" height="400">
					</div>
		</div>
	</div>
</div>