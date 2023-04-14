<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Fuente de soda</title>
</head>

<body>
    <header>
        <?php
        include('encabezado.php');
        ?>
    </header>
    <section>
        <form action="fuente.php" method="post">
            <table border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td>Cliente</td>
                    <td><input type="text" name="txtCliente"></td>
                </tr>
                <tr>
                    <td>Listado de Productos</td>
                    <td>Cantidad </td>
                    <td>Precio</td>
                    <td>Sub Total</td>
                </tr>
                <tr>
                    <td>Ensalada de frutas</td>
                    <td><input type="text" name="txtEnsalada"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jugo de frutas</td>
                    <td><input type="text" name="txtJugo"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Helado</td>
                    <td><input type="text" name="txtHelado"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sandwitch</td>
                    <td><input type="text" name="txtSandwitch"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Finalizar venta"></td>
                </tr>
                <tr>
                    <td>Total a Pagar</td>
                    <td></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php
        include('pie.php');
        ?>
    </footer>
</body>

</html>