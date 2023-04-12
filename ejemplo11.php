<?php

//Funciones definidas por el usuario

/**
 * function nombre(*parametros){
 *      instrcuiones de la funcion;
 *      return valor_de_retorno;
 * }
 */

 function suma($a,$b){
    return $a+$b;
 }
 
 $res = suma(4,5);

 echo $res;

 //Funcion que determine el monto a pagar segun la categoria del empleado
 //A = 25, B = 20, C = 15

 function montoPorHora($categoria){
    if ($categoria == "A") {
        return 25;
    }elseif($categoria == "B"){
        return 20;
    }elseif($categoria == "C"){
        return 15;
    }
 }

 echo "Monto a pagar ". montoPorHora("C")."<br>";

 //Funcion que determine el IGV - Funcion sin retorno

 function igv($monto){
    echo $monto * 0.18;
 }

 igv(1000);

 
?>