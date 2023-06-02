<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>

</head>

<body>
    <?php
    include('encabezado.php');
    ?>
    <header>
        <h3>ACTUALIZACIÓN DE DATOS DEL PRODUCTO</h3>

    </header>
    <section>
        <?php
        error_reporting(0);

        include('cnventas.php');
        $codigo = $_GET['codigo'];

        $rs = mysqli_query($cn, "CALL sp_buscarproducto('$codigo')");
        $n = mysqli_num_rows($rs);
        if ($n == 0)
            echo "<script>alert('Producto NO EXISTE')</script>";

        $miProducto = mysqli_fetch_array($rs);

        if (isset($_POST['btnCalcular'])) {
            $boton = $_POST['btnCalcular'];


            if ($boton == "ACTUALIZAR") {
                $cod = $codigo;
                $des = $_POST['txtDescripcion'];
                $pre = $_POST['txtPrecio'];
                $sto = $_POST['txtStock'];
                $fec = $_POST['txtFecha'];

                $rs = mysqli_query($cn, "call sp_productoActualizar('$codigo','$descripcion',$precio,$stock,'$fecha')");

                if ($rs) {
                    echo "<script>alert('Actualización del Producto correcto!!!');
                                location.href='index.php'</script>";
                } else {
                    echo "ERROR: No se ejecuto " . mysqli_error($cn);
                }
            }
        }
        ?>
        <form method="post">

            <table class="table">
                <tr>
                    <td>CÓDIGO PRODUCTO</td>
                    <td>
                        <input type="text" name="txtCodigo" value="<?php echo $miProducto['ID_PRODUCTO']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>DESCRIPCIÓN</td>
                    <td>
                        <input type="text" name="txtDescripcion" value="<?php echo $miProducto['DESCRIPCION']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>PRECIO</td>
                    <td>
                        <input type="text" name="txtPrecio" value="<?php echo $miProducto['PRECIO']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>STOCK</td>
                    <td>
                        <input type="text" name="txtStock" value="<?php echo $miProducto['STOCK']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>FECHA VENCIMIENTO</td>
                    <td>
                        <input type="text" name="txtFecha" value="<?php echo $miProducto['FECHA_VENC']; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnCalcular" value="ACTUALIZAR">
                        <?php echo $mensaje; ?>
                    </td>

                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h5>Todos los derechos reservados @2023</h5>
    </footer>

</body>

</html>