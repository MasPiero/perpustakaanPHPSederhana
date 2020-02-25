<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

<div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Buku</div>
          <div class="card-body">
            <div class="table-responsive">
            	<?php
            	include "../koneksi.php";
            	$tampil = mysqli_query($sambung,"SELECT * FROM tbbuku");

            	?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<div class="text-left">
              		<a href="?hal=TambahBuku" class="btn btn-primary">Tambah Buku <i class="fa fa-book"></i> </a> 
              		
              	</div>
              	<br>
                <thead>
                  <tr>
                    <th>ISBN</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
               
                <tbody>
                  	<?php
                  		while($data = mysqli_fetch_array($tampil)){


                  	?>
             
                  <tr>
                    <td><?php echo $data['isbn'] ?></td>
                    <td><?php echo $data['judul_buku'] ?></td>
                    <td><?php echo $data['pengarang'] ?></td>
                    <td><?php echo $data['tahun_terbit'] ?></td>
                     <td><?php echo $data['stok'] ?></td>
                    <td>
                    	<a class="btn btn-info" href="Beranda.php?hal=DetailBuku&isbn=<?php echo $data['isbn'] ?>">Detail</a>
                    	<a class="btn btn-primary" href="Beranda.php?hal=UbahBuku&isbn=<?php echo $data['isbn'] ?>">Ubah</a>
                    	<a class="btn btn-danger" onclick="return confirm('Data Akan Dihapus?')" href="HapusBuku.php?isbn=<?php echo $data['isbn'] ?>">Hapus</a>
                    </td>
                  </tr>
                </tbody>
                <?php
            	}
            ?>
              </table>
            </div>
          </div>
         
        </div>

      </div>