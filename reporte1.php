<?php
//FPDF(orientacion, unidad, formato)

require('fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('helvetica','B',20);



?>