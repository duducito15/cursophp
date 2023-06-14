<?php
include('cnventas.php');
require('../fpdf.php');

//
$pdf = new FPDF('P');
$pdf->AddPage();
//ENCABEZADO DEL REPORTE
$pdf->SetFont('helvetica','B',16);
$pdf->Cell(200,10,"LISTADO DE PRODUCTOS",0,1,"C");
//CONTENIDO
$pdf->SetFont('helvetica','B',8);
$pdf->Cell(60,10,utf8_decode("Fecha: ").date("d/m/y"),0,1);

$pdf->Cell(15,8,"CODIGO");
$pdf->Cell(70,8,"PRODUCTO");
$pdf->Cell(20,8,"PRECIO");
$pdf->Cell(10,8,"STOCK");
$pdf->Cell(15,8,"VENCIMIENTO");
//LISTAR DE LA BASE DE DATOS
$pdf->SetFont('Arial','',8);

$rs = mysqli_query($cn, "CALL sp_productoListar");
$n = mysqli_num_rows($rs);
while ($r = mysqli_fetch_assoc($rs)) {
    $cod = $r['COD'];
    $des = $r['DES'];
    $pre = $r['PRE'];
    $sto = $r['STO'];
    $fec = $r['FEC'];

    $pdf->Cell(10,8,'',0,1);
    $pdf->Cell(15,8,$cod);
    $pdf->Cell(70,8,$des);
    $pdf->Cell(20,8,$pre);
    $pdf->Cell(10,8,$sto);
    $pdf->Cell(30,8,$fec);

    //$pdf->Cell(50,8,'',0,1);
}
$pdf->Cell(10,8,'',0,1);
$pdf->Cell(50,9,"TOTAL DE PRODUCTOS ".$n);
$pdf->Output();

?>