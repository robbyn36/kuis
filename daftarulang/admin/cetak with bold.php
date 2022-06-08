<?php
include "../config.php";
require_once("dompdf/dompdf_config.inc.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM registrasi where id = '$id'")or(die(mysql_error()));
while($data  = mysql_fetch_array($query)){


$html2 = '
<html>
<head>
</head>
<body>
  <div id="header">
  
  <table border="0" align="center">
    <tr>
		<td width="" align="center" colspan="2"  height="4"><img src="img/BATAM.png" height="50" width="50"></td>
		<td align="center" colspan="2" width="250" ><p><b>PEMERINTAH KOTA BATAM<BR>DINAS PENDIDIKAN<BR>SMK NEGERI 5 BATAM</b><BR><small>Kav. Bukit Kamboja-Kel. Sei. Pelunggut-Kec. Sagulung-Kota Batam<br>Telp. 0778-7432007 e-mail: info@smkn5batam.com; website: smkn5batam.com</small></p></td>
		<td width="" align="center" colspan="2"  height="4"><img src="img/logo-tutwuri.png" height="50" width="50"></td>
    </tr>
  </table>
  <hr>
  
  <h2 align="center">Data Calon Siswa Smkn 5 Batam </h2>
 <table border="0" align="center">
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Nama Siswa </b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['nama_siswa'] .'</b></td>
    </tr>
	<tr>
		
		<td width="150" align="left" colspan="2"  height="4"><b>Jenis Kelamin </b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['jenis_kelamin'] .'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Nisn</b></td>
		<td align="left" colspan="2" width="250" ><b>: '.$data['nisn'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Tempat Tanggal Lahir </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['ttl'].'</b></td>
    </tr>
	<tr>
		
		<td width="150" align="left" colspan="2"  height="4"><b>Agama </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['agama'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Kewarganegaraan </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['kewarganegraan'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Berkebutuhan Khusus </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['siswa_berkebutuhan_khusus'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>Alamat </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['alamat'].'</b></td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4"><b>RT </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['rt'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>RW </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['rw'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>RW </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['desa'].'</b></td>
    </tr>

	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Desa</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['desa'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Kecamatan</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['kecamatan'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Kode Pos </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['kode_pos'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Tempat Tinggal</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['tempat_tinggal'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Moda Transportasi</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['moda_transportasi'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No Telp </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_telp_rumah_siswa'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No HP </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_hp_siswa'].'</b></td>
    </tr>

	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>E-Mail</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['email_siswa'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Tinggi Badan</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['tinggi_badan_siswa'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Berat Badan</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['berat_badan_siswa'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Jarak Rumah</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['jarak'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Wkatu Tempuh</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['waktu_tempuh'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Jumlah Saudara </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['jumlah_saudara'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b></b></td>
		<td align="left" colspan="2" width="250" ><b> Data Ayah</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Nama Ayah </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['nama_ayah'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Tempat Tanggal Lahir</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['ttl_ayah'].'</b></td>
    </tr>
	<tr>		

		<td width="150" align="left" colspan="2"  height="4"><b>Pendidikan Ayah</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['pendidikan_ayah'].'</b></td>
    </tr>
	<tr>		
			
		<td width="150" align="left" colspan="2"  height="4"><b>Pekerjaan Ayah</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['pekerjaan_ayah'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Penghasilan Ayah</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['penghasilan_ayah'].'</b></td>
    </tr>
	<tr>		
		
		<td width="150" align="left" colspan="2"  height="4"><b>Berkebutuhan Khusus</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['berkebutuhan_khusus_ayah'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No Telp</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_telp_ayah'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No HP </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_hp_ayah'].'</b></td>
    </tr>

	<tr>		
		<td width="150" align="left" colspan="2"  height="4"></td>
		<td align="left" colspan="2" width="250" ><b>Data IBU</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Nama ibu </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['nama_ibu'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Tempat Tanggal Lahir</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['ttl_ibu'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Pendidikan Ibu</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['pendidikan_ibu'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Pekerjaan Ibu</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['pekerjaan_ibu'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Penghasilan Ibu</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['penghasilan_ibu'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Berkebutuhan Khusus</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['berkebutuhan_khusus_ibu'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No Telp</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_telp'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No HP </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_hp'].'</b></td>
    </tr>

	<tr>		
		<td width="150" align="left" colspan="2"  height="4"></td>
		<td align="left" colspan="2" width="250" ><b>Data WALI</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Nama Wali </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['nama_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Tempat Tanggal Lahir</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['ttl_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Pendidikan Wali</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['pendidikan_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Pekerjaan Wali</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['pekerjaan_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Penghasilan Wali</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['penghasilan_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>Berkebutuhan Khusus</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['berkebutuhan_khusus_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No Telp</b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_telp_wali'].'</b></td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4"><b>No HP </b></td>
		<td align="left" colspan="2" width="250" ><b> : '.$data['no_hp_wali'].'</b></td>
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

echo $html2;

}
?>