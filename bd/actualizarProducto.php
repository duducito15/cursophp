<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <header>
        <h3>ACTUALIZACIÓN DE DATOS DEL PRODUCTO</h3>
    </header>
    <section>
        <?php
        error_reporting(0);
        include('cnventas.php');
        $codigo = '';

        if (isset($_POST['btnCalcular'])) {
            $boton = $_POST['btnCalcular'];
            $codigo = $_POST['txtCodigo'];
            if ($boton == "BUSCAR") {
                $rs = mysqli_query($cn, "SELECT * FROM PRODUCTO 
                                            WHERE ID_PRODUCTO = '$codigo'");
                $n = mysqli_num_rows($rs);
                if ($n == 0) {
                    echo "<script>alert('Producto NO EXISTE')</script>";
                }

                $miProducto = mysqli_fetch_array($rs);
            }

            if ($boton == "ACTUALIZAR") {
                $cod = $codigo;
                $des = $_POST['txtDescripcion'];
                $pre = $_POST['txtPrecio'];
                $sto = $_POST['txtStock'];
                $fec = $_POST['txtFecha'];

                $rs1 = mysqli_query($cn, "UPDATE PRODUCTO 
                SET DESCRIPCION = '$des', PRECIO= $pre, STOCK=$sto, FECHA_VENC='$fec'
                WHERE ID_PRODUCTO = '$cod'");

                $n1 = mysqli_num_rows($rs1);
                if ($n1 != 0) {
                    echo "<script>alert('Producto ACTUALIZADO')</script>";
                } 
            }
        }
        ?>
        <form action="actualizarProducto.php" method="post">
            <table width="550" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td>Ingrese codigo del producto</td>
                    <td>
                        <input type="text" name="txtCodigo" value="<?php echo $miProducto['ID_PRODUCTO'] ?>">
                    </td>
                    <td>
                        <input type="submit" name="btnCalcular" value="BUSCAR">
                    </td>
                </tr>
            </table>
            <table width="550" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td>DESCRIPCIÓN</td>
                    <td colspan="3">
                        <input type="text" name="txtDescripcion" value="<?php echo $miProducto['DESCRIPCION'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>PRECIO</td>
                    <td>
                        <input type="text" name="txtPrecio" value="<?php echo $miProducto['PRECIO'] ?>">
                    </td>
                    <td>STOCK</td>
                    <td>
                        <input type="text" name="txtStock" value="<?php echo $miProducto['STOCK'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>FECHA VENCIMIENTO</td>
                    <td>
                        <input type="text" name="txtFecha" value="<?php echo $miProducto['FECHA_VENC'] ?>">
                    </td>
                    <td colspan="2">
                        <input type="submit" name = "btnCalcular" value="ACTUALIZAR">
                    </td>

                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h5>Todos los derechos rservados @2023</h5>
    </footer>

</body>

</html>