<?php
require('fpdf.php');
//Configurar el PDF
$pdf = new FPDF('P','pt','A4');
//añadir una pagina
$pdf->AddPage();
//
$pdf->Image('logo.png',10,22,160,120);

//Definicion del encabezado
$pdf->SetFont('helvetica','B',14);
$pdf->Cell(400,30,'LISTADO DE PRODUCTOS',0,2,'R');
//Definicion del contenido
$pdf->SetFont('helvetica','',10);

//
$pdf->SetXY(130,80);
$pdf->Cell(400,15,'Arroz',0,2,'L');
$pdf->Cell(400,15,'Azucar',0,2,'L');
$pdf->Cell(400,15,'Leche',0,2,'L');
$pdf->Cell(400,15,'Yogurt',0,2,'L');
//
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(2);
$pdf->Line(5,150,590,150);
//Envio del reporte para
$pdf->Output();
?>