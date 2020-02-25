<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Home</li>
        </ol>


<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
              <?php
              include "../koneksi.php";
                $query = mysqli_query($sambung,"SELECT nama_anggota FROM tbanggota");
                $jumlahAnggota = mysqli_num_rows($query);
              ?>
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5"><?php echo "$jumlahAnggota"; ?> Anggota</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?hal=DataAnggota">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
             <?php
              include "../koneksi.php";
                $queryBuku = mysqli_query($sambung,"SELECT judul_buku FROM tbbuku");
                $jumlahBuku = mysqli_num_rows($queryBuku);
              ?>
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-book"></i>
                </div>
                <div class="mr-5"> <?php echo "$jumlahBuku"; ?> Judul Buku</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?hal=DataBuku">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
              <?php
              include "../koneksi.php";
                $queryBukuPinjam = mysqli_query($sambung,"SELECT id_pinjam FROM tbpeminjaman where status = 'PINJAM'");
                $jumlahBukuPinjam = mysqli_num_rows($queryBukuPinjam);
              ?>
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-arrow-right"></i>
                </div>
                <div class="mr-5"> <?php echo "$jumlahBukuPinjam"; ?> Buku di pinjam</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?hal=DataPeminjaman">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
              <?php
              include "../koneksi.php";
                $queryBukuKembali = mysqli_query($sambung,"SELECT id_kembali FROM tbpengembalian");
                $jumlahBukuKembali = mysqli_num_rows($queryBukuKembali);
              ?>
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-arrow-left"></i>
                </div>
                <div class="mr-5">  <?php echo "$jumlahBukuKembali"; ?> Buku Kembali</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="?hal=DataPengembalian">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

      