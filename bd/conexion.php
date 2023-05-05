<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>

<body>

    <?php
    //Conectarse a la base de datos, usamos la siguiente función 
    //mysqli_connect('SERVIDOR', 'USUARIO', 'CLAVE');

    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '123456';

    $cn = mysqli_connect($servidor, $usuario, $clave);
    if (!$cn) {
        echo "No se pudo conectar al servidor";
    } else {
        echo "Conección satisfactoria";
    }
    // $cn = mysqli_connect($servidor, $usuario, $clave) or
    //         die ('Error en la conección->'.mysqli_error($cn));
    
    //Seleccionar la Base de datos
    $db = mysqli_select_db($cn, 'ventas2015');
    if (!$db) {
        echo "<br>La BD no existe";
    } else {
        echo "<br>BD seleccionada satisfactoriamente!!!";
    }

    //consultas MySql
    $rs = mysqli_query($cn, "SELECT * FROM CLIENTE");
    if ($rs) {
        echo "<br>Consulta implementada correctamente";
    }else {
        echo "<br>Error al implementar la consulta!!!";
    }
    $n = mysqli_num_rows($rs);
    echo "El numero de clientes registrados es:".$n;
    
    //Cerrar la conexiòn al Gestor de Base de datos
    $ccn = mysqli_close($cn);
    if ($ccn) {
        echo "<br>Conección cerrada correctamente...!!!";
    }
    ?>

</body>

</html>