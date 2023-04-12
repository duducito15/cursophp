<?php

//Funciones tipo variable

$titulo="algo de texto";
$numero = 15;
$clave = "";
$edad = 18;
$talla = 1.75;
$nombre = "Juan Perez";

//unset($titulo);

if (isset($titulo)) {
    echo "variable tiene contenido<br>";
} else{
    echo "variable sin contenido<br>";
}

settype($numero,'string');

echo gettype($numero);

if (empty($clave)) {
    echo "Clave vacia<br>";
} else{
    echo "OK<br>";
}



?>