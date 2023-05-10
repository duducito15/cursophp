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
        $rs = mysqli_query($cn, "SELECT C.ID_CLIENTE AS CODIGO, 
                        CONCAT(C.NOMBRES,' ',C.PATERNO,' ',C.MATERNO) AS CLIENTE, 
                        D.DESCRIPCION AS DISTRITO FROM CLIENTE C INNER JOIN DISTRITO D 
                        ON C.ID_DISTRITO = D.ID_DISTRITO");
        $r = mysqli_fetch_assoc($rs);
    ?>
<header>
    <h3>LISTADO DE CLIENTES</h3>
</header>
<section>
<table border="0" width="550">
    <tr>
        <td>CODIGO</td>
        <td>CLIENTE</td>
        <td>DISTRITO</td>
    </tr>
    <?php foreach($rs as $r){?>
    <tr>
        <td><?php echo $r['CODIGO']?></td>
        <td><?php echo $r['CLIENTE']?></td>
        <td><?php echo $r['DISTRITO']?></td>
    </tr>
    <?php } ?>

</table>
</section>
<footer>
    <h6>Todos los derechos reservados @2023</h6>
</footer>
</body>

</html>