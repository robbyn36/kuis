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
		<td align="center" colspan="2" width="250" ><p>PEMERINTAH KOTA BATAM<BR>DINAS PENDIDIKAN<BR>SMK NEGERI 5 BATAM<BR><small>Kav. Bukit Kamboja-Kel. Sei. Pelunggut-Kec. Sagulung-Kota Batam<br>Telp. 0778-7432007 e-mail: info@smkn5batam.com; website: smkn5batam.com</small></p></td>
		<td width="" align="center" colspan="2"  height="4"><img src="img/logo-tutwuri.png" height="50" width="50"></td>
    </tr>
  </table>
  <hr>
  
  <h2 align="center">Data Siswa Smkn 5 Batam </h2>
 <table border="0" align="center">
	<tr>
		<td><h3>Data Siswa</h3></td>
		<td></td>
	</tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">Nama Siswa </td>
		<td align="left" colspan="2" width="250" >: '.$data['nama_siswa'] .'</td>
    </tr>
	<tr>
		
		<td width="150" align="left" colspan="2"  height="4">Jenis Kelamin </td>
		<td align="left" colspan="2" width="250" >: '.$data['jenis_kelamin'] .'</td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">Nisn</td>
		<td align="left" colspan="2" width="250" >: '.$data['nisn'].'</td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">Tempat Tanggal Lahir </td>
		<td align="left" colspan="2" width="250" >: '.$data['ttl'].'</td>
    </tr>
	<tr>
		
		<td width="150" align="left" colspan="2"  height="4">Agama </td>
		<td align="left" colspan="2" width="250" >: '.$data['agama'].'</td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">Kewarganegaraan </td>
		<td align="left" colspan="2" width="250" >: '.$data['kewarganegraan'].'</td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">Berkebutuhan Khusus </td>
		<td align="left" colspan="2" width="250" >: '.$data['siswa_berkebutuhan_khusus'].'</td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">Alamat </td>
		<td align="left" colspan="2" width="250" >: '.$data['alamat'].'</td>
    </tr>
	<tr>
		<td width="150" align="left" colspan="2"  height="4">RT </td>
		<td align="left" colspan="2" width="250" >: '.$data['rt'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">RW </td>
		<td align="left" colspan="2" width="250" >: '.$data['rw'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">RW </td>
		<td align="left" colspan="2" width="250" >: '.$data['desa'].'</td>
    </tr>

	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Desa</td>
		<td align="left" colspan="2" width="250" >: '.$data['desa'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Kecamatan</td>
		<td align="left" colspan="2" width="250" >: '.$data['kecamatan'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Kode Pos </td>
		<td align="left" colspan="2" width="250" >: '.$data['kode_pos'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Tempat Tinggal</td>
		<td align="left" colspan="2" width="250" >: '.$data['tempat_tinggal'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Moda Transportasi</td>
		<td align="left" colspan="2" width="250" >: '.$data['moda_transportasi'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No Telp </td>
		<td align="left" colspan="2" width="250" >: '.$data['no_telp_rumah_siswa'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No HP </td>
		<td align="left" colspan="2" width="250" >: '.$data['no_hp_siswa'].'</td>
    </tr>

	<tr>		
		<td width="150" align="left" colspan="2"  height="4">E-Mail</td>
		<td align="left" colspan="2" width="250" >: '.$data['email_siswa'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Tinggi Badan</td>
		<td align="left" colspan="2" width="250" >: '.$data['tinggi_badan_siswa'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Berat Badan</td>
		<td align="left" colspan="2" width="250" >: '.$data['berat_badan_siswa'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Jarak Rumah</td>
		<td align="left" colspan="2" width="250" >: '.$data['jarak'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Wkatu Tempuh</td>
		<td align="left" colspan="2" width="250" >: '.$data['waktu_tempuh'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Jumlah Saudara </td>
		<td align="left" colspan="2" width="250" >: '.$data['jumlah_saudara'].'</td>
    </tr>
	<tr>
		<td><h3>Data Ayah</h3></td>
		<td></td>
	</tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Nama Ayah </td>
		<td align="left" colspan="2" width="250" >: '.$data['nama_ayah'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Tempat Tanggal Lahir</td>
		<td align="left" colspan="2" width="250" >: '.$data['ttl_ayah'].'</td>
    </tr>
	<tr>		

		<td width="150" align="left" colspan="2"  height="4">Pendidikan Ayah</td>
		<td align="left" colspan="2" width="250" >: '.$data['pendidikan_ayah'].'</td>
    </tr>
	<tr>		
			
		<td width="150" align="left" colspan="2"  height="4">Pekerjaan Ayah</td>
		<td align="left" colspan="2" width="250" >: '.$data['pekerjaan_ayah'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Penghasilan Ayah</td>
		<td align="left" colspan="2" width="250" >: Rp.'.$data['penghasilan_ayah'].'</td>
    </tr>
	<tr>		
		
		<td width="150" align="left" colspan="2"  height="4">Berkebutuhan Khusus</td>
		<td align="left" colspan="2" width="250" >: '.$data['berkebutuhan_khusus_ayah'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No Telp</td>
		<td align="left" colspan="2" width="250" >: '.$data['no_telp_ayah'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No HP </td>
		<td align="left" colspan="2" width="250" >: '.$data['no_hp_ayah'].'</td>
    </tr>
	<tr>
		<td><h3>Data Ibu</h3></td>
		<td></td>
	</tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Nama ibu </td>
		<td align="left" colspan="2" width="250" >: '.$data['nama_ibu'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Tempat Tanggal Lahir</td>
		<td align="left" colspan="2" width="250" >: '.$data['ttl_ibu'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Pendidikan Ibu</td>
		<td align="left" colspan="2" width="250" >: '.$data['pendidikan_ibu'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Pekerjaan Ibu</td>
		<td align="left" colspan="2" width="250" >: '.$data['pekerjaan_ibu'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Penghasilan Ibu</td>
		<td align="left" colspan="2" width="250" >:Rp. '.$data['penghasilan_ibu'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Berkebutuhan Khusus</td>
		<td align="left" colspan="2" width="250" >: '.$data['berkebutuhan_khusus_ibu'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No Telp</td>
		<td align="left" colspan="2" width="250" >: '.$data['no_telp'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No HP </td>
		<td align="left" colspan="2" width="250" >: '.$data['no_hp'].'</td>
    </tr>
	<tr>
		<td><h3>Data Wali</h3></td>
		<td></td>
	</tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Nama Wali </td>
		<td align="left" colspan="2" width="250" >: '.$data['nama_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Tempat Tanggal Lahir</td>
		<td align="left" colspan="2" width="250" >: '.$data['ttl_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Pendidikan Wali</td>
		<td align="left" colspan="2" width="250" >: '.$data['pendidikan_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Pekerjaan Wali</td>
		<td align="left" colspan="2" width="250" >: '.$data['pekerjaan_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Penghasilan Wali</td>
		<td align="left" colspan="2" width="250" >:Rp. '.$data['penghasilan_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">Berkebutuhan Khusus</td>
		<td align="left" colspan="2" width="250" >: '.$data['berkebutuhan_khusus_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No Telp</td>
		<td align="left" colspan="2" width="250" >: '.$data['no_telp_wali'].'</td>
    </tr>
	<tr>		
		<td width="150" align="left" colspan="2"  height="4">No HP </td>
		<td align="left" colspan="2" width="250" >: '.$data['no_hp_wali'].'</td>
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