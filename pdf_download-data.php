<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

require_once "../koneksi.php";
$id = $_GET['id'];

$query = "SELECT * FROM 
dataa as a INNER JOIN datab as b ON a . id=b . id
           INNER JOIN datac as c ON b . id=c . id
           INNER JOIN datad as d ON c . id=d . id
           INNER JOIN datae as e ON d . id=e . id
           INNER JOIN dataf as f ON e . id=f . id
           INNER JOIN datag as g ON f . id=g . id
           INNER JOIN datah as h ON g . id=h . id
           INNER JOIN datai as i ON h . id=i . id
           INNER JOIN dataj as j ON i . id=j . id
           INNER JOIN datak as k ON j . id=k . id

           where a.id='$id'";


$data = mysqli_query($db,$query);
$row = mysqli_fetch_array($data,MYSQLI_ASSOC);

// create some HTML content
$html = <<<EOD
<h1 align="center"> FORM : RAPID HEALTH ASSESSMENT </h1>
EOD;


$html .= '<table border="0" cellpadding="5">';
$html .= '<tr><td colspan="3"><strong>A. Jenis Bencana</strong></td></tr>';
$html .= '<tr><td width="32%">1. Jenis Bencana</td>		<td width="3%">:</td>		<td width="65%">' .$row['jenis']. '</td></tr>';
$html .= '<tr><td colspan="3"></td></tr>';

$html .= '<tr><td colspan="3"><strong>B. Lokasi Bencana</strong></td></tr>';
$html .= '<tr><td width="32%">1. Desa/Kelurahan</td>			<td width="3%">:</td>		<td width="65%">' .$row['desa']. '</td></tr>';
$html .= '<tr><td width="32%">2. Kecamatan</td>					<td width="3%">:</td>		<td width="65%">' .$row['kecamatan']. '</td></tr>';
$html .= '<tr><td width="32%">3. Kabupaten</td>					<td width="3%">:</td>		<td width="65%">' .$row['kabupaten']. '</td></tr>';
$html .= '<tr><td width="32%">4. Waktu Mulai Kejadian</td>		<td width="3%">:</td>		<td width="65%">' .$row['w_mulai']. '</td></tr>';
$html .= '<tr><td width="32%">5. Waktu Selesai Kejadian</td>	<td width="3%">:</td>		<td width="65%">' .$row['w_selesai']. '</td></tr>';
$html .= '<tr><td width="32%">6. Jenis Daerah Bencana</td>		<td width="3%">:</td>		<td width="65%">' .$row['j_daerah']. '</td></tr>';
$html .= '<tr><td width="32%">7. Jenis Lokasi Bencana</td>		<td width="3%">:</td>		<td width="65%">' .$row['j_lokasi']. '</td></tr>';
$html .= '<tr><td width="32%">8. Bila Banjir, Ketinggian Air Mencapai</td>	<td width="3%">:</td>		<td width="65%">' .$row['t_air']. ' Meter</td></tr>';
$html .= '<tr><td width="32%">9. Lama Tergenang</td>	<td width="3%">:</td>		<td width="65%">' .$row['lama_t']. ' Jam</td></tr>';
$html .= '<tr><td width="32%">10. Peta Lokasi Banjir</td>	<td width="3%">:</td>		<td width="65%">' .$row['peta']. '</td></tr>';
$html .= '<tr><td colspan="3"></td></tr>';

$html .= '<tr><td colspan="3"><strong>C. Identifikasi Dampak Bencana</strong></td></tr>';
$html .= '<tr><td width="100%">1. Jumlah dan Fasilitas Kesehatan yang Rusak :</td></tr>';
$html .= '<tr><td width="32%">a) Rumah Sakit</td>			<td width="3%">:</td>		<td width="65%">' .$row['rumsa']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">b) Puskesmas/Pustu</td>		<td width="3%">:</td>		<td width="65%">' .$row['puskes']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">c) Gudang Farmasi</td>		<td width="3%">:</td>		<td width="65%">' .$row['far']. ' Buah</td></tr>';

$html .= '<tr><td width="100%">2. Jumlah Rumah yang Rusak :</td></tr>';
$html .= '<tr><td width="32%">a) Ringan</td>				<td width="3%">:</td>		<td width="65%">' .$row['r_ringan']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">b) Berat</td>					<td width="3%">:</td>		<td width="65%">' .$row['r_berat']. ' Buah</td></tr>';

$html .= '<tr><td width="100%">3. Jumlah Sumber Air Bersih :</td></tr>';
$html .= '<tr><td width="32%">a) Sumur</td>					<td width="3%">:</td>		<td width="65%">' .$row['sumur']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">b) Sumur Tercemar</td>		<td width="3%">:</td>		<td width="65%">' .$row['sumur_t']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">c) PMA</td>					<td width="3%">:</td>		<td width="65%">' .$row['pma']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">d) PMA yang Rusak</td>		<td width="3%">:</td>		<td width="65%">' .$row['pma_r']. ' Buah</td></tr>';
$html .= '<tr><td width="32%">4. Keadaan Jalan/Transportasi</td>						<td width="3%">:</td>		<td width="65%">' .$row['transportasi']. '</td></tr>';
$html .= '<tr><td width="32%">5. Keadaan Sarana Komunikasi/Telepon</td>					<td width="3%">:</td>		<td width="65%">' .$row['komunikasi']. '</td></tr>';
$html .= '<tr><td width="32%">6. Keadaan Penerangan Listrik</td>					<td width="3%">:</td>		<td width="65%">' .$row['listrik']. '</td></tr>';

$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>D. Kondisi Korban</strong></td></tr>';
$html .= '<tr><td width="100%">1. Jumlah Penduduk Didaerah Bencana :</td></tr>';
$html .= '<tr><td width="32%">a) 0-5 Tahun</td>			<td width="3%">:</td>		<td width="65%">' .$row['anak']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">b) > 5 Tahun</td>			<td width="3%">:</td>		<td width="65%">' .$row['manusia']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">c) Jumlah Ibu Hamil</td>	<td width="3%">:</td>		<td width="65%">' .$row['hamil']. ' Orang</td></tr>';

$html .= '<tr><td width="32%">2. Jumlah Balita dengan Gizi Buruk</td>				<td width="3%">:</td>		<td width="65%">' .$row['balita']. ' Orang</td></tr>';

$html .= '<tr><td width="100%">3. Jumlah Korban :</td></tr>';
$html .= '<tr><td width="32%">a) Luka Ringan</td>			<td width="3%">:</td>		<td width="65%">' .$row['anak']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">b) Luka Berat</td>			<td width="3%">:</td>		<td width="65%">' .$row['manusia']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">c) Mati</td>				<td width="3%">:</td>		<td width="65%">' .$row['mati']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">d) Hilang</td>			<td width="3%">:</td>		<td width="65%">' .$row['hilang']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">e) Dirujuk</td>			<td width="3%">:</td>		<td width="65%">' .$row['dirujuk']. ' Orang</td></tr>';
$html .= '<tr><td width="32%">f) Dievakuasi</td>		<td width="3%">:</td>		<td width="65%">' .$row['evakuasi']. ' Orang</td></tr>';

$html .= '<tr><td width="32%">4. Jumlah Penduduk yang Memerlukan Pelayanan Kesehatan Lingkungan Darurat</td>				<td width="3%">:</td>		<td width="65%">' .$row['p_pelayanan']. ' Orang</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>E. Kondisi Sanitasi Lingkungan Penampungan</strong></td></tr>';
$html .= '<tr><td width="32%">1. Jenis Tempat Penampungan</td>		<td width="3%">:</td>		<td width="65%">' .$row['jenis_p']. '</td></tr>';
$html .= '<tr><td width="32%">2. Kapasitas Penampungan Pengungsi</td>		<td width="3%">:</td>		<td width="65%">' .$row['kapasitas_p']. '</td></tr>';
$html .= '<tr><td width="32%">3. Kapasitas Penyediaan Air Bersih</td>		<td width="3%">:</td>		<td width="65%">' .$row['kapasitas_a']. '</td></tr>';
$html .= '<tr><td width="32%">4. Sarana MCK</td>		<td width="3%">:</td>		<td width="65%">' .$row['mck']. '</td></tr>';
$html .= '<tr><td width="32%">5. Tempat Pembuangan Sampah</td>		<td width="3%">:</td>		<td width="65%">' .$row['t_pembuangan']. '</td></tr>';
$html .= '<tr><td width="32%">6. Sarana SPAL</td>		<td width="3%">:</td>		<td width="65%">' .$row['spal']. '</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>F. Upaya Penanggulangan yang Telah Dilakukan</strong></td></tr>';
$html .= '<tr><td width="32%">1. Tim Penanggulangan Bencana</td>		<td width="3%">:</td>		<td width="65%">' .$row['tim_p']. '</td></tr>';
$html .= '<tr><td width="32%">2. Jumlah POSKES</td>		<td width="3%">:</td>		<td width="65%">' .$row['j_poskes']. '</td></tr>';
$html .= '<tr><td width="32%">3. Jumlah Tenaga Kesehatan Terlibat di POSKES</td>		<td width="3%">:</td>		<td width="65%">' .$row['t_poskes']. '</td></tr>';
$html .= '<tr><td width="32%">4. Lainnya</td>		<td width="3%">:</td>		<td width="65%">' .$row['lainnya']. '</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>G. Kemungkinan KLB yang Akan Terjadi</strong></td></tr>';
$html .= '<tr><td colspan="3">' .$row['klb']. '</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>H. Kesiapan Logistik</strong></td></tr>';
$html .= '<tr><td width="32%">1. Persediaan Obat-Obatan</td>		<td width="3%">:</td>		<td width="65%">' .$row['obat']. '</td></tr>';
$html .= '<tr><td width="32%">2. Persediaan Kaporit</td>			<td width="3%">:</td>		<td width="65%">' .$row['kaporit']. '</td></tr>';
$html .= '<tr><td width="32%">3. Persediaan PAC</td>				<td width="3%">:</td>		<td width="65%">' .$row['pac']. '</td></tr>';
$html .= '<tr><td width="32%">4. Persediaan Aquatab</td>			<td width="3%">:</td>		<td width="65%">' .$row['aquatab']. '</td></tr>';
$html .= '<tr><td width="32%">5. Keadaan Logistik Program P2P-M</td>		<td width="3%">:</td>		<td width="65%">' .$row['p2pm']. '</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>I. Klasifikasi Bencana</strong></td></tr>';
$html .= '<tr><td width="32%">1. Klasifikasi Bencana</td>		<td width="3%">:</td>		<td width="65%">' .$row['k_bencana']. '</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>J. Bantuan Segera yang Diperlukan</strong></td></tr>';
$html .= '<tr><td colspan="3">' .$row['bantuan']. '</td></tr>';


$html .= '<tr><td colspan="3"></td></tr>';
$html .= '<tr><td colspan="3"><strong>K. Rencana Tindak Lanjut</strong></td></tr>';
$html .= '<tr><td colspan="3">' .$row['rencana']. '</td></tr>';

$html .= '</table>';

 
//;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('data_RHA.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
