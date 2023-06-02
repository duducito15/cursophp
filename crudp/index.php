<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
        <form action="" method="post">
            <table width="550" class="table table-hover">
                <tr>
                    <td>
                        <h2>Administrar <b>Productos</b></h2>
                    </td>
                    <td align="right">
                        <input type="submit" value="Agregar Nuevo Producto" class="btn btn-success">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="text">
                        <input type="button" value="Buscar" class="btn btn-primary" placeholder="Buscar">

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
                        <td> <i class="bi bi-pencil-fill"></i></td>
                        <td><i class="bi bi-trash-fill"></i></td>
                    </tr>
                <?php } ?>
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