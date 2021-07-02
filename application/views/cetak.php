<?php

define('K_PATH_IMAGES', 'assets/img/');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


//set informasi 
$pdf->SetCreator('Riyan Nur Rizal');
$pdf->SetTitle('Rumah Sakit Umum Daerah');
$pdf->SetSubject('Printed by SIMRS');

//header data 

$pdf->SetHeaderData('logo rsu.png', 10, 'Rumah Sakit Umum Daerah Kota Banjar', 'Jln. Rumah Sakit Umum No.5, Hegarsari, Kec. Pataruman, Kota Banjar, Jawa Barat', array(48, 89, 122), array(0, 0, 0));
$pdf->SetFooterData(array(0, 0, 0), array(0, 0, 0));

//set margin
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 10, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set page break 
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// set image scale 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// point sub setting 
$pdf->setFontSubsetting(true);

// setting font 
$pdf->SetFont('helvetica', '', 14, true);

$pdf->AddPage();

$pdf->Cell(35, 5, 'First name:');
$pdf->Cell('Detik', 5, 'Riyan Nur Rizal');
$pdf->Ln(6);

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .antrian {
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 150%;
            max-height: 150%;
            background-color: #ffffff;
            border: 2px solid rgb(0, 0, 0);
            text-align: center;
        }

        .coba{
         color: #ffffff;
         font-weight: 700;
         background-color: #f08519;
         border-bottom: 4px solid #0b56a7;
        }
    </style>

</head>
<body>
<center>
<div style="text-align: center;">
   <h1> Ketika css tidak terpanggil </h1>
   <h2> Apakah anda bingung bikin tampilan cetak pake vendor?</h2>
   <h4> Ya, Aa Bingung Neng</h4>
   <img src="assets/img/logo rsu.png">
</div>
<table style="text-align: center;">';

$html .= '
<thead class="thead-dark">
    <tr>
      <th scope="col">No. Pendaftaran</th>
      <th scope="col">Poli Tujuan</th>
      <th scope="col">Estimasi Dilayani</th>
      <th scope="col">Dokter Tujuan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2003190003</th>
      <td>2105100010</td>
      <td>30/06/2021 11.00</td>
      <td>Dr. Riyan Nur Rizal, S.Kom, M.Kom</td>
    </tr>
  </tbody>


<div style="text-align: center;">
<img src="assets/img/qrcode/2003190003.png">
</div>
';

$html .= '
</table> 
</center>
</body>
</html>';


$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output('Cetak Antrian.pdf', 'I');
