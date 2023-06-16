<?php
    //Obteniendo el codigo de la pagina fotocheck.php
    $cod = $_GET['id'];
    
    include('cnventas.php');
    require('fpdf.php');

    //Configurando el PDF
    $pdf=new FPDF('L');
    $pdf->AddPage();

    //Mostrando la imagen del fotocheck.jpg
    $pdf->Image('fotocheck.jpg',80,22,140,80);

    //Consultando al cliente de acuerdo al codigo obtenido
    $rs=mysqli_query($cn,"SELECT * FROM CLIENTE WHERE ID_CLIENTE='$cod'");
    
    $pdf->SetFont('Arial','',8);
    
    //Transfiriendo el archivo encontrado a la variable $cliente
    while ($cliente=mysqli_fetch_array($rs)){
        $codigo = $cliente[0];
        $nombres = $cliente[1];
        $paterno = $cliente[2];
        $materno = $cliente[3];
        $foto='fotos/'.$codigo.'.jpg';
        
        $pdf->SetXY(102, 78);
        $pdf->Cell(20,20,$codigo);

        $pdf->SetXY(93, 45);
        $pdf->Image($foto,$pdf->GetX(),$pdf->GetY(),30);
        
        $pdf->SetXY(140, 47);
        $pdf->Cell(20,20,$paterno);
        $pdf->Cell(20,20,$materno);
        
        $pdf->SetXY(140, 67);
        $pdf->Cell(20,20,$nombres);
    }
    
    //Impresion de fecha
    $pdf->SetXY(170, 95);
    $pdf->Cell(160,10,utf8_decode("Fecha de Impresión: ").date("d/m/Y"));
    $pdf->Output(); 
?>
