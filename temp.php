<?php 	session_start();?>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
</head>
<div class="well">
<div class="row">    
			<div class="col-md-12 col-sm-3 text-center">
			<div class="lead">Anda Terdatar Dengan Data Sebagai Berikut </div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
			<ul class="list-unstyled detail-user text-center">
              <?php 
			
				echo "<h5><li class='list-group-item'>Nama : <b>". $_SESSION['nama']."</b></li></h5>";
				//echo "<h5><li class='list-group-item'>No. PENDAFTARAN SMKN 5 BATAM : <b>". $_SESSION['no_pendaftaran']."</b></li></h5>";
				echo "<h5><li class='list-group-item'>No. PESERTA UN SMP: <b>". $_SESSION['nisp']."</b></li></h5>";
				echo "<h5><li class='list-group-item'>Asal Sekolah : <B>". $_SESSION['asal_sekolah']."</b></li></h5>";
				//echo "<h5><li class='list-group-item'>Pilihan Jurusan Pertama : <B>". $_SESSION['j1']."</b></li></h5>";
				//echo "<h5><li class='list-group-item'>Pilihan Jurusan Kedua : <B>". $_SESSION['j2']."</b></li></h5>";
				
			  ?>
			  </ul>
            </div>
            </div>
            <div class="col-md-2 col-sm-3 text-center">
            </div>
            <div class="col-md-10 col-sm-9">
              <h3>PETUNJUK UMUM</h3>
              <div class="row">
			  
                <div class="col-xs-12">
                  <ol>
					<li>Harap Periksa nama Peserta, No Pendaftaran,NIS dan Asal Sekolah Telah Sesuai Dengan Data Anda</li>
					<li>Centang bulatan yang dianggap benar</li> 
					<li>Tersedia waktu 45 menit untuk mengerjakan paket tes tersebut</li>
					<li>Jumlah soal sebanyak 34 butir, pada setiap soal terdapat 4 (Empat) pilihan jawaban</li>
					<li>Periksa dan bacalah soal-soal sebelum anda menjawab</li>
					<li>Laporkan kepada pengawas PPDB Online SMKN 5 Batam apabila terdapat lembar soal yang kurang jelas, dan tidak lengkap</li>
					<li>Tidak diijinkan menggunakan kalkulator, HP, atau alat Bantu hitung lainnya</li>
					<li>Periksa pekerjaan anda sebelum diserahkan kepada Pengawas PPDB Online SMKN 5 Batam</li>
				  </ol>
                  </div>
                <div class="col-xs-3"></div>
              </div>
            </div>
            </div>
          </div>
		  <div class="col-md-12">
	<div class="col-md-4 col-md-offset-4">
			<a href="kuis.php" class="btn btn-primary btn-lg btn-block">Mulai Kerjakan Soal</a>
	</div>
	</div>
<?php 
include "config.php";
$nisp = $_SESSION['nisp'];
$query = mysql_query("SELECT * FROM calon_siswa where nisp = '$nisp'")or die(mysql_error());	
while($data = mysql_fetch_array($query)){
	if($data['nisp'] == $nisp){
	header('location:error.php');
}else{
	
	}	
}

?>