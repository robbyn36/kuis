<table border="1">
    <tr>
    	<th>NO.</th>
		<th>nama</th>
		<th>jenis kelamin</th>
		<th>Nisn</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Agama</th>
		<th>Kewarganegaraan</th>
		<th>Berkebutuhan Khusus</th>
		<th>Alamat</th>
		<th>RT</th>
		<th>RW</th>
		<th>Desa</th>
		<th>Kecamatan</th>
		<th>Kode Pos</th>
		<th>Tempat Tinggal</th>
		<th>Moda Transportasi</th>
		<th>No Telp</th>
		<th>No HP</th>
		<th>E-Mail</th>
		<th>Tinggi Badan</th>
		<th>Berat Badan</th>
		<th>Jarak Tempuh</th>
		<th>Waktu Tempuh</th>
		<th>Jumlah Saudara</th>
		<th>Nama Ayah</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Pendidikan</th>
		<th>Pekerjaan</th>
		<th>Berkebutuhan Khusus</th>
		<th>No Telp</th>
		<th>No HP</th>
		<th>Nama Ibu</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Pendidikan Ibu</th>
		<th>Pekerjaan Ibu</th>
		<th>Penghasilan ibu</th>
		<th>Berkebutuhan Khusus</th>
		<th>No Telp</th>
		<th>No HP</th>
		<th>Nama Wali</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Pendidikan Wali</th>
		<th>Pekerjaan Wali</th>
		<th>Penghasilan Wali</th>
		<th>Berkebutuhan Khusus Wali</th>
		<th>No Telp</th>
		<th>No Hp</th>
	</tr>
	<?php
	//connection to mysql

	
	mysql_connect("localhost","root","");
	mysql_select_db("ppdb_online");
	
	//query get data
	$sql = mysql_query("SELECT * FROM registrasi ORDER BY id ASC");
	$no = 1;
	while($data = mysql_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['nama_siswa'].'</td>
			<td>'.$data['jenis_kelamin'].'</td>
			<td>'.$data['nisn'].'</td>
			<td>'.$data['ttl'].'</td>
			<td>'.$data['agama'].'</td>
			<td>'.$data['kewarganegraan'].'</td>
			<td>'.$data['siswa_berkebutuhan_khusus'].'</td>
			<td>'.$data['alamat'].'</td>
			<td>'.$data['rt'].'</td>
			<td>'.$data['rw'].'</td>
			<td>'.$data['desa'].'</td>
			<td>'.$data['kecamatan'].'</td>
			<td>'.$data['kode_pos'].'</td>
			<td>'.$data['tempat_tinggal'].'</td>
			<td>'.$data['moda_transportasi'].'</td>
			<td>'.$data['no_telp_rumah_siswa'].'</td>
			<td>'.$data['no_hp_siswa'].'</td>
			<td>'.$data['email_siswa'].'</td>
			<td>'.$data['tinggi_badan_siswa'].'</td>
			<td>'.$data['berat_badan_siswa'].'</td>
			<td>'.$data['jarak'].'</td>
			<td>'.$data['waktu_tempuh'].'</td>
			<td>'.$data['jumlah_saudara'].'</td>
			<td>'.$data['nama_ayah'].'</td>
			<td>'.$data['ttl_ayah'].'</td>
			<td>'.$data['pendidikan_ayah'].'</td>
			<td>'.$data['pekerjaan_ayah'].'</td>
			<td>'.$data['berkebutuhan_khusus_ayah'].'</td>
			<td>'.$data['no_telp_ayah'].'</td>
			<td>'.$data['no_hp_ayah'].'</td>
			<td>'.$data['nama_ibu'].'</td>
			<td>'.$data['ttl_ibu'].'</td>
			<td>'.$data['pendidikan_ibu'].'</td>
			<td>'.$data['pekerjaan_ibu'].'</td>
			<td>'.$data['penghasilan_ibu'].'</td>
			<td>'.$data['berkebutuhan_khusus_ibu'].'</td>
			<td>'.$data['no_telp'].'</td>
			<td>'.$data['no_hp'].'</td>
			<td>'.$data['nama_wali'].'</td>
			<td>'.$data['ttl_wali'].'</td>
			<td>'.$data['pendidikan_wali'].'</td>
			<td>'.$data['pekerjaan_wali'].'</td>
			<td>'.$data['penghasilan_wali'].'</td>
			<td>'.$data['berkebutuhan_khusus_wali'].'</td>
			<td>'.$data['no_telp_wali'].'</td>
			<td>'.$data['no_hp_wali'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>