<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Cliente</title>
</head>

<body>
    <?php
    include('cnventas.php');
    $rs = mysqli_query($cn, "SELECT * FROM CLIENTE");
    $r = mysqli_fetch_assoc($rs);
    ?>

    <table border="1" width="550">
        <tr>
            <td>CODIGO</td>
            <td>
                <?php echo $r['ID_CLIENTE']; ?>
            </td>
        </tr>
        <tr>
            <td>NOMBRE</td>
            <td>
                <?php echo $r['NOMBRES'] . " " . $r['PATERNO'] . " " . $r['MATERNO']; ?>
            </td>
        </tr>
        <tr>
            <td>DIRECCION</td>
            <td>
                <?php echo $r['DIRECCION']; ?>
            </td>
        </tr>
        <tr>
            <td>TELEFONO</td>
            <td> 
                <?php echo $r['FONO']; ?>
            </td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>
                <?php echo $r['EMAIL']; ?>
            </td>
        </tr>
    </table>
</body>

</html>