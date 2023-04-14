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
        <?php 
        error_reporting(0);
        include('calculos.php');
        ?>
        <form action="fuente.php" method="post">
            <table border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td>Cliente</td>
                    <td colspan="3"><input type="text" name="txtCliente" size="50" 
                    value="<?php echo $cliente;?>"></td>
                </tr>
                <tr id="fila" >
                    <td>Listado de Productos</td>
                    <td>Cantidad </td>
                    <td>Precio</td>
                    <td>Sub Total</td>
                </tr>
                <tr>
                    <td>Ensalada de frutas</td>
                    <td><input type="text" name="txtEnsalada" size="15" 
                    value="<?php echo $cantEnsalada;?>"></td>
                    <td><?php echo number_format($ensalada,2); ?></td>
                    <td><?php echo number_format($subtotalEnsalada,2); ?></td>
                </tr>
                <tr>
                    <td>Jugo de frutas</td>
                    <td><input type="text" name="txtJugo" size="15"
                    value="<?php echo $cantJugo;?>"></td>
                    <td><?php echo number_format( $jugo,2); ?></td>
                    <td><?php echo number_format( $subtotalJugo,2); ?></td>
                </tr>
                <tr>
                    <td>Helado</td>
                    <td><input type="text" name="txtHelado" size="15"
                    value="<?php echo $cantHelado;?>"></td>
                    <td><?php echo number_format( $helado,2); ?></td>
                    <td><?php echo number_format( $subtotalHelado,2); ?></td>
                </tr>
                <tr>
                    <td>Sandwitch</td>
                    <td><input type="text" name="txtSandwitch" size="15"
                    value="<?php echo $cantSandwitch;?>"></td>
                    <td><?php echo number_format( $sandwitch,2); ?></td>
                    <td><?php echo number_format( $subtotalSandwitch,2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><input type="submit" value="Finalizar venta"
                    name="btnFinalizar"></td>
                </tr>
                <?php
                    if($_POST['btnFinalizar']){
                ?>
                <tr>
                    <td>Total a Pagar</td>
                    <td id="codigo" colspan="3">
                        <?php echo number_format( $total,2);?>
                    </td>
                </tr>
                <?php
                    }
                ?>
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