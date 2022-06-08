<form method="post" action="">

<div>
	<label>Nama</label>
	<input type="text" name="nama"></input>
</div>
<div>
<label>Gunakan Huruf:</label>
<input type="checkbox">Tidak</input>
<input type="checkbox" id="tampilkan_huruf">Gunakan</input>
	<div hidden id="tampilkan">
		<input type="checkbox" name="huruf[]" value="a" >A</input>
		<input type="checkbox" name="huruf[]" value="b" >B</input>
		<input type="checkbox" name="huruf[]" value="c" >C</input>
		<input type="checkbox" name="huruf[]" value="d" >D</input>
		<input type="checkbox" name="huruf[]" value="e" >E</input>
		<input type="checkbox" name="huruf[]" value="f" >F</input>
	</div>
</div>
<label>Angka:</label>
<div>
	<input type="checkbox" name="nomor[]" value="1">1</input>
	<input type="checkbox" name="nomor[]" value="2">2</input>
	<input type="checkbox" name="nomor[]" value="3">3</input>
	<input type="checkbox" name="nomor[]" value="4">4</input>
	<input type="checkbox" name="nomor[]" value="5">5</input>
	<input type="checkbox" name="nomor[]" value="6">6</input>	
</div>
<input type="submit" value="simpan" name="simpan">
</form>
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_test");
if(isset($_POST['simpan'])){
$nama = $_POST['nama'];
$huruf = implode(",",$_POST['huruf']);
$nomor = implode(",",$_POST['nomor']);
echo "Nama = ".$nama."<br>";
echo "Huruf = ".$huruf."<br>";
echo "Nomor = ".$nomor;
}else{
	echo "error";
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#tampilkan_huruf").on("click",function(){
	$("#tampilkan").toggle('slow');
		});
	});
</script>