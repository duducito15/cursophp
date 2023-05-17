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
    error_log(0);
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>COSTO ACUMULADO</td>
                <td>12000</td>
            </tr>
        </table>
    </section>
    <footer>
        <h5>Todos los derechos reservados @2023</h5>
    </footer>
</body>

</html>