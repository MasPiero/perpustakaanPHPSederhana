<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Pengembalian buku</li>
        </ol>

<div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-arrow-left"></i>
            Data Pengembalian Buku</div>
          <div class="card-body">
            <div class="table-responsive">
            	<?php
            	include "../koneksi.php";
            	$tampil = mysqli_query($sambung,"SELECT * FROM tbpengembalian left join tbpeminjaman on tbpengembalian.id_pinjam = tbpeminjaman.id_pinjam left join tbbuku on tbpeminjaman.isbn=tbbuku.isbn left join tbanggota on tbpeminjaman.id_anggota = tbanggota.id_anggota");

            	?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<div class="text-left">
              		<a href="?hal=Pengembalian" class="btn btn-primary">Tambah Data <i class="fa fa-book"></i> </a> 
              		
              	</div>
              	<br>
                <thead>
                  <tr>
                    <th>Id_kembali</th>
                    <th>Id Pinjam</th>
                    <th>Nama Anggota</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                      <th>Denda</th>
                    
                  </tr>
                </thead>
               
                <tbody>
                  	<?php
                  		while($data = mysqli_fetch_array($tampil)){


                  	?>
             
                  <tr>
                    <td><?php echo $data['id_kembali'] ?></td>
                    <td><?php echo $data['id_pinjam'] ?></td>
                    <td><?php echo $data['nama_anggota'] ?></td>
                    <td><?php echo $data['judul_buku'] ?></td>
                     <td><?php echo $data['tgl_pinjam'] ?></td>
                        <td><?php echo $data['tgl_kembali'] ?></td>
                           <td><?php echo $data['denda'] ?></td>
                    
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