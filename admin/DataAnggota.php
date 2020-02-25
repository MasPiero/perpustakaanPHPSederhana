<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Anggota</li>
        </ol>

<div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-user"></i>
            Data Anggota</div>
          <div class="card-body">
            <div class="table-responsive">
            	<?php
            	include "../koneksi.php";
            	$tampil = mysqli_query($sambung,"SELECT * FROM tbanggota");

            	?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<div class="text-left">
              		<a href="?hal=TambahAnggota" class="btn btn-primary">Tambah Anggota <i class="fa fa-user"></i> </a> 
              		
              	</div>
              	<br>
                <thead>
                  <tr>
                    <th>Id Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
               
                <tbody>
                  	<?php
                  		while($data = mysqli_fetch_array($tampil)){


                  	?>
             
                  <tr>
                    <td><?php echo $data['id_anggota'] ?></td>
                    <td><?php echo $data['nama_anggota'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['no_telp'] ?></td>
                     
                    <td>
                    	<a class="btn btn-info" href="Beranda.php?hal=DetailAnggota&id_anggota=<?php echo $data['id_anggota'] ?>">Detail</a>
                    	<a class="btn btn-primary" href="Beranda.php?hal=UbahAnggota&id_anggota=<?php echo $data['id_anggota'] ?>">Ubah</a>
                    	<a class="btn btn-danger" onclick="return confirm('Data Akan Dihapus?')" href="HapusAnggota.php?id_anggota=<?php echo $data['id_anggota'] ?>">Hapus</a>
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