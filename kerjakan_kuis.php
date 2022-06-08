<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Simple pagination</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/css2.css" rel="stylesheet">
</head>
<body>
<div class="well">
	<h2>Soal</h2>
</div>

<?php include "config.php"; 
session_start();
	echo "Nama : ".$_SESSION['nama']."nisp : ".$_SESSION['nisp'];
?>
<div id="first-container">
	<table>
		<tbody>
		<?php
		$result = mysql_query("SELECT * FROM soal");
		if($result === FALSE){die (mysql_error());}
		while ($data = mysql_fetch_array ($result)){?>	
			<tr><td>
<div class="container">
<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="well">
	<form method="post" action="hasil.php">
		<div class="form-group">
			<label><?php 
					echo $data['id_soal'].". ".$data['soal'] ;
			?></label>
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
	</div>
			
			</td></tr>
	<?php
	}	
	?> 

		</tbody>
	</table>
	<div class="pager">
	<div class="my-navigation">
		<div class="simple-pagination-first"></div>
		<div class="simple-pagination-previous"></div>
		<div class="simple-pagination-page-numbers"></div>
		<div class="simple-pagination-next"></div>
		<div class="simple-pagination-last"></div>
	</div>
	<div class="simple-pagination-page-x-of-x"></div>
	<div class="simple-pagination-showing-x-of-x"></div>
	<div>
		tampilkan  <select class="simple-pagination-items-per-page"></select> Soal.
	</div>
	<div>
		Halaman <select class="simple-pagination-select-specific-page"></select>.
	</div>
	</div>
</div>


<br>
<br>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/jquery-simple-pagination-plugin.js"></script>
<script>
(function($){

$('#first-container').simplePagination();

})(jQuery);
</script>

</body>
</html>