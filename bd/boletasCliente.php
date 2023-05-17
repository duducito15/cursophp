<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletas por cliente</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <?php
    error_reporting(0);
    include('cnventas.php');
    ?>

    <header>
        <h3>LISTADO DE BOLETAS POR CLEINTE</h3>
    </header>
    <section>
        <form action="boletasCliente.php" method="post">
            <table border="1" width="700" cellspacing="1" cellpadding="1">
                <tr>
                    <td>INGRESE CODIGO DEL CLIENTE</td>
                    <td>
                        <input type="text" name="txtCodigo" maxlength="5">
                    </td>
                    <td>
                        <input type="submit" value="CONSULTAR">
                    </td>
                </tr>
            </table>
        </form>
        <table border="0" width="700" cellspacing="1" cellpadding="1">
            <tr>
                <th>Nº BOLETA</th>
                <th>FECHA</th>
                <th>CODIGO CLIENTE</th>
                <th>NOMBRE CLIENTE</th>
                <th>SUBTOTAL</th>
            </tr>
            <?php
            $codigoCliente = $_POST['txtCodigo'];
            $consulta = "SELECT B.NUM_BOLETA, B.FECHA, C.ID_CLIENTE, 
                                CONCAT(C.NOMBRES,' ',C.PATERNO,' ',C.MATERNO) AS CLIENTE,
                                SUM(P.PRECIO * D.CANTIDAD) AS SUBTOTAL
                        FROM CLIENTE C INNER JOIN BOLETA B ON C.ID_CLIENTE = B.ID_CLIENTE
                                    INNER JOIN DETALLEBOLETA D ON D.NUM_BOLETA = B.NUM_BOLETA
                                    INNER JOIN PRODUCTO P ON P.ID_PRODUCTO =D.ID_PRODUCTO
                        GROUP BY B.NUM_BOLETA, B.FECHA, C.ID_CLIENTE, 
                                CONCAT(C.NOMBRES,' ',C.PATERNO,' ',C.MATERNO)
                        HAVING C.ID_CLIENTE = TRIM('$codigoCliente')";
           
            $rs = mysqli_query($cn, $consulta);

            $acumulado = 0;

            foreach ($rs as $r) { ?>
                <tr>
                    <td><?php echo $r['NUM_BOLETA'] ?></td>
                    <td><?php echo $r['FECHA'] ?></td>
                    <td><?php echo $r['ID_CLIENTE'] ?></td>
                    <td><?php echo $r['CLIENTE'] ?></td>
                    <td><?php echo $r['SUBTOTAL'] ?></td>
                </tr>
            <?php $acumulado = $acumulado + $r['SUBTOTAL'];
            } ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>TOTAL ACUMULADO</td>
                <td>
                    <?php echo number_format($acumulado, 2); ?>
                </td>
            </tr>
        </table>
    </section>
    <footer>
        <h5>Todos los derechos reservados @2023</h5>
    </footer>
</body>

</html>