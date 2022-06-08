<?php session_start();?>
<html>
<head>
	<title>Kuis</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/countdown.js"></script>
<style>
/*
Styles related DIRECTLY with jQuery-simple-pagination
*/
.simple-pagination-page-numbers a
{
	display: block;
	width: 4rem;
	text-align: center;
}
a
{
	color: #216ed9;
	text-decoration: none;
}
a h1
{
	padding: 4rem;
	color: #216ed9;
	text-align: center;
}
a:hover
{
	text-decoration: underline;
}
a[class^="simple-pagination-navigation-"] + a[class^="simple-pagination-navigation-"]
{
	margin-right: 0;
}
a[class*="simple-pagination-navigation-disabled"]
{
	color: red;
	cursor: default;
}
div.floating-menu {
	position:fixed;
	background:#fff4c8;
	border:2px 2px 2px 2px  solid #ffcc00;
	width:202px;
	z-index:100;
}
</style>
</head>
	
<body>
<?php 
include "config.php";

?>

<!------ /////-->
<div class="container">
<div class="row">
            
                <div class="col-lg-12">
<!------ /////-->
<div id="masthead">  
  <div class="container">
  <br>
  <br>
  <br>
  <div class="well">
    <div class="row">
      <div class="col-md-12 brand">
        <h1>Silahkan Kerjakan Soal Di Bawah ini</h1>
      </div>
      </div>
    </div> 
  </div><!-- /cont -->
</div>

 <div class="alert alert-danger navbar navbar-default fixed-navbar col-md-12">
                               Diharapkan Untuk Tidak Me-Refresh Page (F5), karna jawaban yang sudah di isi akan hilang
</div>
	<div class="floating-menu">
		<div id='timer'>
            <script type="application/javascript">
            var myCountdownTest = new Countdown({
                                    time:2700, 
                                    width:200, 
                                    height:80, 
                                    rangeHi:"minute"
                                    });
           </script>
        </div>	
    </div>	


<!-- pagination-plugin -->
<div id="second-container">
<!----Content -->
<?php

if($_SESSION['status'] == "belum"){
	}else{
	header('location:index.php');
}





$result = mysql_query("SELECT * FROM soal order by rand()");
	if($result === FALSE){die (mysql_error());}
	echo '<form method="post" action="">';
	$nomor_soal = 1;
	while ($data = mysql_fetch_array ($result)){?>	
<table><tr><td>
<div class="container">
	<div class="col-md-2">
	</div>
	<div class="col-sm-1">
		<div class="well">
		
			<label><?php echo $nomor_soal++;?></label>
		
		</div>
	</div>
<div class="col-md-8">
	<div class="well">
		<div class="form-group">
			<?php echo $data['soal'] ?>
			<?php 
					if($data['gambar']){ ?>
					<br><img src="gambar soal/<?php echo $data['gambar'] ?>" class="img img-thumbnail">
					<?php 
					}else{
					
					}
			?>
			<div class="radio">
				<label>
					<input type="radio" name="soal_<?php echo $data['id_soal']; ?>" value="a" id="radio1_<?php echo $data['id_soal'];?>" required >A. <?php echo $data['a'];?>
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="soal_<?php echo $data['id_soal']; ?>" value="b" id="radio1_<?php echo $data['id_soal'];?>" required >B. <?php echo $data['b'];?>
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="soal_<?php echo $data['id_soal']; ?>" value="c" id="radio1_<?php echo $data['id_soal'];?>" required >C. <?php echo $data['c'];?>
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="soal_<?php echo $data['id_soal']; ?>" value="d" id="radio1_<?php echo $data['id_soal'];?>" required >D. <?php echo $data['d'];?>
				</label>
			</div>
			
		</div>
		
	</div>
	</div>
	<div class="col-md-2">
</div>
</div>
</td></tr></table>

<?php
}	
?> 

<div class="container">
                                                                           

 <div class="pager">
    	<li class="simple-pagination-first"></li>
		<li class="simple-pagination-previous"></li>
		<li class="simple-pagination-page-numbers"></li>
		<li class="simple-pagination-next"></li>
		<li class="simple-pagination-last"></li>
			<div class="simple-pagination-page-x-of-x"></div>
	<div class="simple-pagination-showing-x-of-x"></div>
	<li>
		Display <select class="simple-pagination-items-per-page"></select> items per page.
	</li>
	<li>
		Go directly to page <select class="simple-pagination-select-specific-page"></select>.
	</li>
  </div>
  </div>
  <div class="col-md-4 col-md-offset-4">
	<button type="submit" name="simpan" class="btn btn-primary btn-lg btn-block">Selesai</button>
	<br>
	<br>
	</div>
	
		</form>
</div>

  

	<!-- script references -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery-simple-pagination-plugin.js"></script>
	</div>
	</div>
	</div>
	</div>
<?php
error_reporting(0);
if(isset($_POST['simpan'])){
$_SESSION['status'] = 'sudah';
include "config.php";
$jawaban = $_POST;
$result = mysql_query("SELECT * FROM soal");
	if($result === FALSE){die (mysql_error());}
	$benar = 0;
	$salah = 0;
	$kosong = 0;
	$soal = 0;
	
//calculating answer
	while ($data = mysql_fetch_array ($result)){
		$soal++;
			if ($data['kunci'] == $jawaban['soal_'.$soal]) {
				$benar++;
			}else if($jawaban['soal_'.$soal] == NULL){
				$kosong++;
			}else{
				$salah++;
			}
		}$total = $benar*2.94;	
		
//Insert Into DB
$nama  = $_SESSION['nama'];
$nisp = $_SESSION['nisp'];
$_SESSION['total_benar'] = $benar;
$_SESSION['total_salah'] = $salah;
$_SESSION['total_kosong'] = $kosong;
$_SESSION['total_nilai'] = $total;
$asal_sekolah = $_SESSION['asal_sekolah'];
$tanggal = date("H:i d M	Y");
$cetak = 'belum';
$query = mysql_query("INSERT INTO calon_siswa VALUES('','$nama','$nisp','$asal_sekolah','$total','$tanggal','$cetak')");
if(!$query){
	echo "gagal";
	}else{
	echo "<script>document.location='hasil.php'</script>";
	};
 }else{

}
?>	
	

	
	</body>
<script>
(function($){

$('#second-container').simplePagination();


})(jQuery);
</script>
<script>
setTimeout(function() {
             $("form").submit();
          }, 2700000);
</script>

</html>