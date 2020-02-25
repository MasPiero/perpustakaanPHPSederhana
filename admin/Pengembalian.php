

<?php
session_start();
include "../koneksi.php";

$query = mysqli_query($sambung,"SELECT * FROM tbpengembalian ");
$data = mysqli_fetch_array($query);



$today=date("Ymd");
$query = "SELECT MAX(RIGHT(id_kembali, 12)) AS last FROM tbpengembalian WHERE RIGHT(id_kembali,12) LIKE '$today%'";
$hasil = mysqli_query($sambung,$query);
$data  = mysqli_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
$lastNoUrut = substr($lastNoTransaksi,8,4);
$nextNoUrut = $lastNoUrut +1;
$nextNoTransaksi =$today.sprintf('%04s', $nextNoUrut);
$char = "K";
$baru = $char.$nextNoTransaksi;


               
?>


<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Pengembalian</li>
        </ol>


<div class="row">
  <div class="col-md-12">
     <div class="row">
        <div class="col-md-6">
          <form action="ProsesTambahPengembalian.php" method="POST" enctype="multipart/form-data">
         
            <div class="form-group">
            <label>Id Kembali</label>
            <input class="form-control" type="text" name="id_kembali" id="id_kembali" value="<?php echo $baru ?>" readonly>
            </div>

            <div class="form-group">
              <label>Id Pinjam</label>
              	<select class="form-control" name="id_pinjam" id="id_pinjam" onchange="changeValue(this.value)">
              		<option value=0>--Pilih--</option>
              			<?php
              				include "../koneksi.php";
              			$result = mysqli_query($sambung,"SELECT * from tbpeminjaman left join tbbuku on tbpeminjaman.isbn = tbbuku.isbn left join tbanggota on tbpeminjaman.id_anggota = tbanggota.id_anggota where tbpeminjaman.status = 'Pinjam'");
              			$jsArray = "var dataPinjam = new Array();";
              			while ($w = mysqli_fetch_array($result)){

              				echo "<option value='$w[id_pinjam]'> $w[id_pinjam] </option>";
              				$jsArray .= "dataPinjam['".$w['id_pinjam']."'] = {judul_buku: '".$w['judul_buku']."' , 
              				peminjam: '".$w['nama_anggota']."' , tgl_pinjam: '".$w['tgl_pinjam']."' , 
              				tgl_kembali: '".$w['tgl_kembali']."'

              				 };";
              			}
              			?>
              		</select>                 
            </div>

          <div class="form-group">
       	  <label>Judul Buku</label>
      	  <input class="form-control" type="text" name="judul_buku" id="judul_buku" readonly="">
      	  </div>

          <div class="form-group">
          <label>Peminjam</label>
          <input class="form-control" type="text" name="peminjam" id="peminjam" readonly="">
         </div>
     
  
       
   
  </div> 

  <div class="col-md-6">
        
         

     
       <div class="form-group">
        <label>Tanggal pinjam</label>
        <input class="form-control" type="text" name="tgl_pinjam" id="tgl_pinjam" readonly="">
      </div>

         <div class="form-group">
        <label>Tanggal Kembali</label>
        <input class="form-control" type="text" name="tgl_kembali" id="tgl_kembali" readonly="">
      </div>
       <div class="form-group">
        <label>Denda</label>
        <input class="form-control" type="number" name="denda" id="denda"  required>
      </div>
        <label></label>
       <div class="form-group">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="?hal=DataPengembalian" class="btn btn-info">Kembali</a>
      </div>
    </form>
  </div> 

</div>
</div>
</div>



<script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(x){
	document.getElementById('judul_buku').value = dataPinjam[x].judul_buku;
	document.getElementById('peminjam').value = dataPinjam[x].peminjam;
	document.getElementById('tgl_pinjam').value = dataPinjam[x].tgl_pinjam;
	document.getElementById('tgl_kembali').value = dataPinjam[x].tgl_kembali;


};


</script>

