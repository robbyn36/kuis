<?php
include "../config.php";
require_once("dompdf/dompdf_config.inc.php");

$id = $_GET['id'];
echo $id;
$cetak = 'sudah';
$update_cetak = mysql_query("UPDATE calon_siswa set cetak = '$cetak' where id ='$id'");
if(!$update_cetak){
	echo "sumting wong";
	die(mysql_error());
	}
	
	




$query = mysql_query("SELECT * FROM calon_siswa where id = '$id' ");
while($data  = mysql_fetch_array($query)){


$html2 = '
<html><body>
  <div id="header">
  
  <table bode="1" align="center">
    <tr>
		<td width="" align="center" colspan="2"  height="4"><img src="../img/BATAM.png" height="50" width="50"></td>
		<td align="center" colspan="2" width="250" ><p><b>PEMERINTAH KOTA BATAM<BR>DINAS PENDIDIKAN<BR>SMK NEGERI 5 BATAM</b><BR><small>Kav. Bukit Kamboja-Kel. Sei. Pelunggut-Kec. Sagulung-Kota Batam<br>Telp. 0778-7432007 e-mail: info@smkn5batam.com; website: smkn5batam.com</small></p></td>
		<td width="" align="center" colspan="2"  height="4"><img src="../img/logo-tutwuri.png" height="50" width="50"></td>
    </tr>
  </table>
  <hr>
  
  <h2 align="center">Hasil Tes PPDB Online Smk Negeri 5 Batam </h2>
  
 <table border="1" align="center">
    <tr>
		<td width="150" align="left" colspan="2"  height="4"><b>ID</b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['id'] .'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Nama </b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['nama'] .'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Nisp</b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['nisp'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Asal Sekolah</b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['asal_sekolah'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Nilai </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['nilai'].'</b></td>
    </tr>
	
  </table>
  <br>
  <table align="center" border="">
  <tr>
	<td width="150" align="left" height="4"><b></b></td>
	<td width="150" align="left"   height="4"><b> </b></td>
  </tr>
	<tr>
		<td align="center" colspan="2"  height="4"><b>Calon Siswa</b></td>
		<td align="center" colspan="2" width="250" ><b>Pengawas</b></td>
    </tr>

	<tr>
		<td align="center" colspan="2"  height="50"><b></b></td>
		<td align="center" colspan="2" width="250" ><b></b></td>
    </tr>
	<tr>
		<td align="center" colspan="2"  height="4"><b>'.$data['nama'].'</b></td>
		<td align="center" colspan="2" width="250" ><b>'.$data['pengawas'].'</b></td>
    </tr>
  </table>
</div><br>
  </body></html>

';




//
$dompdf = new DOMPDF();
$dompdf->load_html($html2);
$dompdf->render();
$dompdf->stream('laporan_'.$nama.'.pdf',array('Attachment'=>0));














}
?>