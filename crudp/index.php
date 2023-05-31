<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <header>
        <?php
        include('encabezado.php');
        include('cnventas.php')

        ?>
    </header>
    <section>
        <table width="550">
            <tr>
                <td>Adminsitrar Productos</td>
                <td align="right">
                    <input type="button" value="Agregar Nuevo Producto">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="text">
                    <input type="button" value="Buscar">
                </td>
            </tr>
        </table>
        <table border="0" cellpading="5" cellspacing="0" width="550">
            <tr>
                <th>CODIGO</th>
                <th>DESCRIPCIÓN</th>
                <th>PRECIO</th>
                <th>STOCK</th>
                <th>FECHA VENCIMIENTO</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            $rs = mysqli_query($cn, "CALL sp_productoListar");
            foreach ($rs as $r) { ?>
                <tr>
                    <td><?php echo $r['COD'] ?></td>
                    <td><?php echo $r['DES'] ?></td>
                    <td><?php echo $r['PRE'] ?></td>
                    <td><?php echo $r['STO'] ?></td>
                    <td><?php echo $r['FEC'] ?></td>
                    <td><?php echo "Actualizar" ?></td>
                    <td><?php echo "Eliminar" ?></td>
                </tr>
            <?php } ?>

        </table>

    </section>
    <footer>
        <?php
        include('pie.php');
        ?>
    </footer>

</body>

</html>