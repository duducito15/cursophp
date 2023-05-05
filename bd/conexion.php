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
    $clave ='123456';

    $cn = mysqli_connect($servidor, $usuario, $clave);
    if(!$cn){
        echo "No se pudo conectar al servidor";
    } else{
        echo "Conección satisfactoria";
    }

    ?>
    
</body>
</html>