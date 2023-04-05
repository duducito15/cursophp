<?php

//Script muestra un mensaje en el navegador
echo "Hola mundo!!!<br>";

//Tipos de datos: Escalares

$variable1 = 15; //ENTERO
$variable2 = 9.854; // DECIMAL
$variable3 = "Yo soy una cadena"; //CADENA DE TEXTO
$variable4 = true; //BOOLEANA

$VARIABLE1 = "OTRA CADENA";
$Variable1 = false;
// camelCase
//edadEstudiante

echo "Variable1: ",$variable1,"<br>";
echo "Variable2: ",$variable2,"<br>";
echo "Variable3: ",$variable3,"<br>";
echo "Variable4: ",$variable4,"<br>";

//Operadores Aritmeticos
// suma +
// resta -
// multiplicación *
// división /
// resto de una división %
// división entera \ -> int(9/4)
// potencia ^ -> funcion pow()


$num1 = 8;
$num2 = 3;
$divEntera = (int)($num1/$num2);

echo $num1 + $num2, "<br>";
echo $num1 - $num2, "<br>";
echo $num1 * $num2, "<br>";
echo $num1 / $num2, "<br>";
echo $divEntera, "<br>";

//Operadores relacionales
/*
igualdad        ==  ñ == Ñ
identico       ===  ñ === ñ
mayor que       >
menor que       <
mayor igual     >=
menor igual     <=
diferente       !=

8 > 5
*/

//Operadores Lógicos
 /*
    Y
    O
    Not

    (8 > 5) Y (8 > 4) 
 */


?>