<html>
<head>
	<title>Registrasi Ulang</title>
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	
</head>
<body>
<br>
<form class="form-horizontal" action="" method="POST">
<div class="container">
	<div class="well">
		<div class="panel-body">
			<div class="row">
<div class="row">
                <div class="col-md-12">
				
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Silahkan Isi Form Yang Ada Di Bawah ini
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed btn-block btn btn-info"><B>Data Diri</B></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <?php include "datadiri.php" ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed btn btn-info btn-block "><B>Data Ayah</B></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
                                            <?php include "dataayah.php"; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed btn btn-info btn-block " ><B>Data Ibu</B></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php include "dataibu.php"; ?>
                                        </div>
                                    </div>
                                </div>
								<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed btn btn-info btn-block "><B>Data Wali</B></a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php include "datawali.php"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div>

			</div>
		</div>
	</div>
</div>
<div class="col-md-4 col-md-offset-4">
	<button class="btn btn-success btn-lg btn-block" type="submit" name="simpan">Simpan</button>
</div>
</form>
</body>
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
<script src="option.js"></script>
</html>

<?php 
if(isset($_POST['simpan'])){
include "config.php";
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$tempat_lahir = $_POST['tempat_lahir'];
$agama = $_POST['agama'];
$kewarganegraan = $_POST['kewarganegraan'];
$siswa_berkebutuhan_khusus = implode(",",$_POST['berkebutuhan_khusus']);//
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$tempat_tinggal = implode(",",$_POST['tempat_tinggal']);//
$moda_transportasi = implode(",",$_POST['moda_transportasi']);//
$no_telp_rumah = $_POST['no_telp_rumah'];
$no_hp = $_POST['no_hp'];
$e_mail = $_POST['e_mail'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];
$jarak = $_POST['jarak'];
$waktu_tempuh = $_POST['waktu_tempuh'];
$jmlah_saudara = $_POST['jmlah_saudara'];
$nama_ayah = $_POST['nama_ayah'];
$ttl_ayah = $_POST['ttl_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_ayah  = $_POST['penghasilan_ayah'];
$berkebutuhan_khusus_ayah = implode(",",$_POST['berkebutuhan_khusus_ayah']);
$no_telp_ayah = $_POST['no_telp_ayah'];
$no_hp_ayah = $_POST['no_hp_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$ttl_ibu = $_POST['ttl_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$berkebutuhan_khusus_ibu = implode(",",$_POST['berkebutuhan_khusus_ibu']);
$no_telp_ibu = $_POST['no_telp_ibu'];
$no_hp_ibu = $_POST['no_hp_ibu'];
$nama_wali = $_POST['nama_wali'];
$ttl_wali = $_POST['ttl_wali'];
$pendidikan_wali = $_POST['pendidikan_wali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$penghasilan = $_POST['penghasilan'];
$berkebutuhan_khusus_wali = implode(",",$_POST['berkebutuhan_khusus_wali']);//
$no_telp_wali = $_POST['no_telp_wali'];
$no_hp_wali = $_POST['no_hp_wali'];

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
echo '<div class="alert alert-info">
          Data Berhasil Di Input                      
	</div>';

mysql_query("INSERT INTO registrasi VALUES('','$nama','$jenis_kelamin','$nisn','$tempat_lahir'
				,'$agama',
				'$kewarganegraan','$siswa_berkebutuhan_khusus','$alamat','$rt','$rw','$desa'
				,'$kecamatan','$kode_pos','$tempat_tinggal','$moda_transportasi','$no_telp_rumah','$no_hp'
				,'$e_mail','$tinggi_badan','$berat_badan','$jarak','$waktu_tempuh','$jmlah_saudara',
				'$nama_ayah','$ttl_ayah','$pendidikan_ayah','$pekerjaan_ayah','$penghasilan_ayah','$berkebutuhan_khusus_ayah'
				,'$no_telp_ayah','$no_hp_ayah','$nama_ibu','$ttl_ibu','$pendidikan_ibu'
				,'$pekerjaan_ibu','$penghasilan_ibu','$berkebutuhan_khusus_ibu','$no_telp_ibu'
				,'$no_hp_ibu','$nama_wali','$ttl_wali','$pendidikan_wali','$pekerjaan_wali'
				,'$penghasilan','$berkebutuhan_khusus_wali'
				,'$no_telp_wali','$no_hp_wali')") or(die(mysql_error()));



















}
?>

