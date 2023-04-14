<?php
//Asigno precios
$ensalada = 10;
$jugo = 5;
$helado = 7;
$sandwitch = 20;
//Capturamos nombre del cliente
$cliente = $_POST['txtCliente'];
//Capturamos las cantidades
$cantEnsalada = $_POST['txtEnsalada'];
$cantJugo = $_POST['txtJugo'];
$cantHelado = $_POST['txtHelado'];
$cantSandwitch = $_POST['txtSandwitch'];
//calculamos subtotales
$subtotalEnsalada = $ensalada * $cantEnsalada;
$subtotalJugo = $jugo * $cantJugo;
$subtotalHelado = $helado * $cantHelado;
$subtotalSandwitch = $sandwitch * $cantSandwitch;
//Calculamos total
$total = $subtotalEnsalada + $subtotalJugo + $subtotalHelado + $subtotalSandwitch;
?>