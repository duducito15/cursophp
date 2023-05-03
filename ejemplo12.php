<?php

//arreglos - array

$notas = array(12, 15, 16, 18);
$nombres = array("Juan", "Pedro", "Romaldo");

$notas1 = array(0 => 15, 2 => 18);
$notas2 = array(1 => 15, 18, 14, 13 , 16);

$notas3[0] = 13;
$notas3[1] = 15;
$notas3[2] = 18;

//echo $notas[2];

//Arreglos asociativos
$notas4 = array("Juan"=>15, "Pedro"=>12, "Roberto"=>16, "papita"=> 5); 
//echo $notas4["Roberto"];

//Foreach
foreach($notas4 as $valor){
    echo $valor."<br>";
}

foreach($notas4 as $nombre=>$nota){
    echo $nombre." - ".$nota."<br>";
}
//Crear un arreglo en el cual se pueda almacenar el numero de ventas realizadas
// por un empleado; minimo 10 empleados
?>