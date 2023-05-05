<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Productos</title>
</head>
<body>
    <?php
        include('cnventas.php');
        $rs = mysqli_query($cn, "SELECT B.* FROM BOLETA B INNER JOIN CLIENTE C ON B.ID_CLIENTE=C.ID_CLIENTE
        WHERE CONCAT(C.NOMBRES,' ',C.PATERNO,' ',C.MATERNO) = 'CARLOS LOPEZ HURTADO'
        ");
        $n = mysqli_num_rows($rs);
        echo "El numero total de BOLETAS ASOCIADAS A CARLOS LOPEZ HURTADO es: ".$n;

        mysqli_close($cn);

        //Caso: determinar le numero total de boletas asociadas al
        // cliente Carlos Lopez Hurtado.
    ?>
    
</body>
</html>