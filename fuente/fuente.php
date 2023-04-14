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
                    <td colspan="3"><input type="text" name="txtCliente" size="50"></td>
                </tr>
                <tr id="fila" >
                    <td>Listado de Productos</td>
                    <td>Cantidad </td>
                    <td>Precio</td>
                    <td>Sub Total</td>
                </tr>
                <tr>
                    <td>Ensalada de frutas</td>
                    <td><input type="text" name="txtEnsalada" size="15"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jugo de frutas</td>
                    <td><input type="text" name="txtJugo" size="15"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Helado</td>
                    <td><input type="text" name="txtHelado" size="15"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sandwitch</td>
                    <td><input type="text" name="txtSandwitch" size="15"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td  colspan="3"><input type="submit" value="Finalizar venta"></td>
                </tr>
                <tr>
                    <td>Total a Pagar</td>
                    <td colspan="3"></td>
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