<?php session_start(); ?>
<head>
	<title>Kuis</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<style>
	.container{
		font-style : italic;
	}
	.well2{
		background-color:#6600FF;
		color : white;
		text-align:center;
		padding :5px 0px 0px 0px;
	}
	.total-salah{
		background-color:red;
		color:white;
	}
	.total-benar{
		background-color:#66FFFF;
		color:white;
	}
	.total-kosong{
		background-color:brown;
		color:white;
	}
	.total-nilai{
		background-color:#66FF33;
		color:white;
	}

	</style>
</head>






	<div class="container">
	<div class="col-md-2">
	</div>
  <div class="col-md-8 col-sm-8">
    <div class="panel panel-primary">
      <div class="panel-heading">Resume Hasil Nilai Anda</div>
        <div class="panel-body">
            <div class="bs-callout bs-callout-danger">

		<div class="col-md-4">
		<br>
		<br>
		<br>
		<div class="Well">
		<h6><img src="img/smkn5batam.jpg" class="img img-thumbnail"></h6>
		</div>
		<div class="Well">
		<h6><img src="img/logo-tutwuri.png" class="img img-thumbnail"></h6>
		</div>
		</div>

		<div class="col-md-8">
		<div class="well">
		<ul class="list-unstyled detail-user text-center">
			<li class="list-group-item"><?php echo "<b>Nama ". $_SESSION['nama']."</b><br>";?></li>
			<li class="list-group-item" ><?php echo "<b>Nisp ". $_SESSION['nisp']."</b>"; ?></li>
			<li class="list-group-item" ><?php echo "<b>Asal Sekolah ". $_SESSION['asal_sekolah']."</b>"; ?></li>
		</ul>
		<ul class="list-unstyled detail-user text-left">
			<li class="list-group-item total-benar"><?php echo "<b>Benar ". $_SESSION['total_benar']."</b><br>";?></li>
			<li class="list-group-item total-salah " ><?php echo "<b>Salah ". $_SESSION['total_salah']."</b>"; ?></li>
			<li class="list-group-item total-kosong" ><?php echo "<b>Kosong ". $_SESSION['total_kosong']."</b><br>"; ?></li>
			<br>
			<li class="list-group-item total-nilai text-center" height="10px"><h3><?php echo "<b>Nilai Anda	 ". $_SESSION['total_nilai']."</b>"; ?></h3></li>
		</ul>
<a href="index.php" class="btn btn-primary btn-lg btn-block" name="selesai">Selesai Review</a>
			</div>
			
		</div>
		<div align='center'><b>&copy;SMK Negeri 5 Batam</b></div>
	</div>
	
 </div>
	
  </div>
  
</div>
<script src="js/jquery-2.1.1.min.js"></script>