<?php session_start() ?>
<head>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<br>
<div class="container">
<div class="col-md-2">
</div>
<div class="col-md-12 well ">
	<div class="lead text-center">
	Selamat Datang di Website PPDB Smk Negeri 5 Batam
	<br>
		<div class="text-center">
				<img src="img/logo-tutwuri.png" class="img img-rounded" height="150" width="150"></img>
				<img src="img/LOGO_LISTRIK_SMKN5.jpg" class="img img-rounded" height="100" width="80"></img>
				<img src="img/LOGO_MM_SMKN5.jpg" class="img img-rounded" height="100" width="80"></img>
				<img src="img/LOGO_RBK_SMKN5.jpg" class="img img-rounded" height="100" width="80"></img>
				<img src="img/LOGO_WELDING_SMKN5.jpg" class="img img-rounded" height="100" width="80"></img>
				<img src="img/Pemesianan Kapal.jpg" class="img img-rounded" height="100" width="80"></img>
				<img src="img/TKJ.jpg" class="img img-rounded" height="100" width="80"></img>
				<img src="img/smkn5batam.jpg" class="img img-rounded" height="150" width="150" ></img>
		</div>
		<h4>Silakan Lakukan Registrasi pada Form yang tersedia di bawah</h4>
	</div>
	<div class="col-md-3">
	</div>
	<div class="col-md-6 text-center">
		<form action="" method="POST" align="center">
								<div class="form-group col-lg-12">
									<label>Nama</label>
									<input type="" name="nama" class="form-control" id="" value="" required>
								</div>
								
								<div class="form-group col-lg-12">
									<label>No. PENDAFTARAN SMKN 5 BATAM</label>
									<input type="number" name="nisp" class="form-control" id="" value="" required>
								</div>
								
								<div class="form-group col-lg-12">
									<label>No. PESERTA UN SMP</label>
									<input type="" name="no_peserta" class="form-control" id="" value="" required>
								</div>
				
				<div class="form-group col-lg-12">
									<label>Asal Sekolah</label>
									<input type="text" name="asal_sekolah" class="form-control" id="" value="" required>
								</div>
								<div class="form-group col-lg-12">
									<button type="submit" name="submit" class="btn btn-info">Mulai Ujian</button>
								</div>
						</form>
						</div>
						
</div>


   <?php 
if(isset($_POST['submit'])){
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['nisp'] = $_POST['nisp'];
	$_SESSION['no_peserta'] = $_POST['no_peserta'];
	$_SESSION['asal_sekolah'] = $_POST['asal_sekolah']; 
	$_SESSION['status'] = 'belum';
	   echo "<script>document.location='temp.php'</script>";
	}else{
	
	};



?>