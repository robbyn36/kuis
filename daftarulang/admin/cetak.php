<?php
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
 
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
 
date_default_timezone_set('Asia/Jakarta');
require_once "phpexcel/Classes/PHPExcel.php";
require_once "config_print.php";
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();
//Font Setting
$styleArray = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'FF000000'),
        'size'  => 12,
        'name'  => 'Times New Roman',
		'borders' => array(
			'allboarders' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		)
    ));
//
// Set Properti Documen excel yang akan dibuat

$objPHPExcel->getProperties()->setCreator("Smkn Negeri 5 Batam")
                             ->setLastModifiedBy("Smkn Negeri 5 Batam")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
//set table header
//Tabel akan kita mulai dari Kolom B10 dan seterusnya
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No')->getStyle('A1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nama Siswa')->getStyle('B1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Jenis Kelamin')->getStyle('C1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Nisn')->getStyle('D1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'T.Tgl lahir')->getStyle('E1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Agama')->getStyle('F1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Kewarganegaraan')->getStyle('G1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Berkebutuhan Khusus')->getStyle('H1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Alamat')->getStyle('I1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'RT')->getStyle('J1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'RW')->getStyle('K1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'Kecamatan')->getStyle('L1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('M1', 'Kode Pos')->getStyle('M1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('N1', 'Tempat Tinggal')->getStyle('N1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('O1', 'Moda Transportasi')->getStyle('O1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('P1', 'No Telp')->getStyle('P1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'No HP')->getStyle('Q1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('R1', 'E-Mail')->getStyle('R1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('S1', 'Tinggi Badan')->getStyle('S1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('T1', 'Berat Badan')->getStyle('T1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('U1', 'Jarak Tempuh')->getStyle('U1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('V1', 'Waktu Tempuh')->getStyle('V1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('W1', 'Jumlah Saudara')->getStyle('W1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('X1', 'Nama Ayah')->getStyle('X1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('Y1', 'Tempat Tanggal Lahir')->getStyle('Y1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('Z1', 'Pendidikan')->getStyle('Z1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AA1', 'Pekerjaan')->getStyle('AA1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AB1', 'Berkebutuhan Khusus')->getStyle('AB1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AC1', 'No Telp')->getStyle('AC1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AD1', 'No HP')->getStyle('AD1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AE1', 'Nama Ibu')->getStyle('AE1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AF1', 'Tempat Tanggal Lahir')->getStyle('AF1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AG1', 'Pendidikan Ibu')->getStyle('AG1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AH1', 'Pekerjaan Ibu')->getStyle('AH1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AI1', 'Penghasilan ibu')->getStyle('AI1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AJ1', 'Berkebutuhan Khusus')->getStyle('AJ1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AK1', 'No Telp')->getStyle('KA1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AL1', 'No HP')->getStyle('AL1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AM1', 'Nama Wali')->getStyle('AM1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AN1', 'Tempat Tanggal Lahir')->getStyle('AN1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AO1', 'Pendidikan Wali')->getStyle('AO1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AP1', 'Pekerjaan Wali')->getStyle('AP1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AQ1', 'Penghasilan Wali')->getStyle('AQ1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AR1', 'Berkebutuhan Khusus Wali')->getStyle('AR1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AS1', 'No Telp')->getStyle('AS1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->setCellValue('AT1', 'No HP')->getStyle('AT1')->applyFromArray($styleArray);

//letak style



// Add some data
$query = "SELECT * FROM registrasi ORDER BY id ASC";
$sql = $mysqli->query($query)or(die(mysql_error()));
//start data from row 11
$i = 2;
$no= 1;
while ($data = $sql->fetch_assoc()) {
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $no);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $data['nama_siswa']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $data['jenis_kelamin']);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('D'.$i, $data['nisn'], PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $data['ttl']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $data['agama']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $data['kewarganegraan']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $data['siswa_berkebutuhan_khusus']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $data['alamat']);
    $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $data['rt']);
    $objPHPExcel->getActiveSheet()->setCellValue('K'.$i, $data['rw']);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('L'.$i, $data['kecamatan'], PHPExcel_Cell_DataType::TYPE_STRING);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('M'.$i, $data['kode_pos'], PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('N'.$i, $data['tempat_tinggal']);
    $objPHPExcel->getActiveSheet()->setCellValue('O'.$i, $data['moda_transportasi']);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('P'.$i, $data['no_telp_rumah_siswa'], PHPExcel_Cell_DataType::TYPE_STRING);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('Q'.$i, $data['no_hp_siswa'], PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('R'.$i, $data['email_siswa']);
    $objPHPExcel->getActiveSheet()->setCellValue('S'.$i, $data['tinggi_badan_siswa']);
    $objPHPExcel->getActiveSheet()->setCellValue('T'.$i, $data['berat_badan_siswa']);
    $objPHPExcel->getActiveSheet()->setCellValue('U'.$i, $data['jarak']);
    $objPHPExcel->getActiveSheet()->setCellValue('V'.$i, $data['waktu_tempuh']);
    $objPHPExcel->getActiveSheet()->setCellValue('W'.$i, $data['jumlah_saudara']);
    $objPHPExcel->getActiveSheet()->setCellValue('X'.$i, $data['nama_ayah']);
    $objPHPExcel->getActiveSheet()->setCellValue('Y'.$i, $data['ttl_ayah']);
    $objPHPExcel->getActiveSheet()->setCellValue('Z'.$i, $data['pendidikan_ayah']);
    $objPHPExcel->getActiveSheet()->setCellValue('AA'.$i, $data['pekerjaan_ayah']);
    $objPHPExcel->getActiveSheet()->setCellValue('AB'.$i, $data['berkebutuhan_khusus_ayah']);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('AC'.$i, $data['no_telp_ayah'], PHPExcel_Cell_DataType::TYPE_STRING);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('AD'.$i, $data['no_hp_ayah'], PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('AE'.$i, $data['nama_ibu']);
    $objPHPExcel->getActiveSheet()->setCellValue('AF'.$i, $data['ttl_ibu']);
    $objPHPExcel->getActiveSheet()->setCellValue('AG'.$i, $data['pendidikan_ibu']);
    $objPHPExcel->getActiveSheet()->setCellValue('AH'.$i, $data['pekerjaan_ibu']);
    $objPHPExcel->getActiveSheet()->setCellValue('AI'.$i, $data['penghasilan_ibu']);
    $objPHPExcel->getActiveSheet()->setCellValue('AJ'.$i, $data['berkebutuhan_khusus_ibu']);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('AK'.$i, $data['no_telp'], PHPExcel_Cell_DataType::TYPE_STRING);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('AL'.$i, $data['no_hp'], PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('AM'.$i, $data['nama_wali']);
    $objPHPExcel->getActiveSheet()->setCellValue('AN'.$i, $data['ttl_wali']);
    $objPHPExcel->getActiveSheet()->setCellValue('AO'.$i, $data['pendidikan_wali']);
    $objPHPExcel->getActiveSheet()->setCellValue('AP'.$i, $data['pekerjaan_wali']);
    $objPHPExcel->getActiveSheet()->setCellValue('AQ'.$i, $data['penghasilan_wali']);
    $objPHPExcel->getActiveSheet()->setCellValue('AR'.$i, $data['berkebutuhan_khusus_wali']);
	$objPHPExcel->getActiveSheet()->setCellValueExplicit('AS'.$i, $data['no_telp_wali'], PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValueExplicit('AT'.$i, $data['no_telp_wali'], PHPExcel_Cell_DataType::TYPE_STRING);
	//$objPHPExcel->getActiveSheet()->setCellValueExplicit('G'.$i, $data['no_hp_siswa'], PHPExcel_Cell_DataType::TYPE_STRING);

    $i++;
    $no++;
}
//Mengatur lebar cell pada documen excel
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(30);
	// Set sheet yang aktif pada documen excel
$objPHPExcel->setActiveSheetIndex(0);




$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
 
// Echo done
echo date('H:i:s') , " Done writing file" , EOL;
echo 'File has been created in ' , getcwd() , EOL;

?>
