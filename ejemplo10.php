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

if (is_integer($edad)) {
    echo "Edad ingresada correctamente<br>";
} else{
    echo "Edad no correcta<br>";
}

if (is_double($talla)) {
    echo "Talla ingresada correctamente<br>";
} else{
    echo "Talla no correcta<br>";
}

if (is_string($nombre)) {
    echo "Nombre ingresado correctamente<br>";
} else{
    echo "Nombre no correcto<br>";
}

/*echo var_dump($nombre);
echo var_dump($edad);
echo var_dump($talla);
*/
//Funciones de cadena
$email = "juanperez@gmail.com";
$codigo = "C01234";

echo strlen($email)."<br>";


?>