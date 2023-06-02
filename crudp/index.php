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
        include('cnventas.php');
        ?>
    </header>
    <section>

        <table width="550" class="table table-hover">
            <tr>
                <td>
                    <h2>Administrar <b>Productos</b></h2>
                </td>
                <td align="right">
                    <a href="agregarProducto.php" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i>
                        <span>Agregar nuevo producto</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="text">
                    <input type="submit" name="btnProducto" value="Buscar" class="btn btn-primary" placeholder="Buscar">

                </td>
            </tr>
        </table>
        <table border="0" cellpading="5" cellspacing="0" width="550" class="table table-hover">
            <tr>
                <th>CÓDIGO</th>
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
                    <td>
                        <a href="editarProducto.php?codigo=<?php echo $r['COD']; ?>">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                    <td>
                        <a href="eliminarProducto.php">
                            <i class="bi bi-trash-fill"></i>
                        </a>

                    </td>
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