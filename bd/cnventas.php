<?php
$servidor ="localhost";
$usuario = "root";
$clave = "123456";
$cn = mysqli_connect($servidor, $usuario, $clave);
mysqli_select_db($cn,"ventas2015");
