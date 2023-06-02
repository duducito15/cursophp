<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO PRODUCTO</title>

</head>

<body>
    <?php
    error_reporting(0);
    include('cnventas.php');
    include('encabezado.php')
    ?>
    <header>
        <h3>NUEVO PRODUCTO</h3>
    </header>
    <section>

        <form action="" method="post">
            <table>
                <tr>
                    <td>CODIGO PRODUCTO</td>
                    <td>
                        <input type="text" name="txtCodigo">
                    </td>
                </tr>
                <tr>
                    <td>DESCRIPCION</td>
                    <td>
                        <input type="text" name="txtDescripcion">
                    </td>
                </tr>
                <tr>
                    <td>PRECIO</td>
                    <td>
                        <input type="text" name="txtPrecio">
                    </td>
                </tr>
                <tr>
                    <td>STOCK</td>
                    <td>
                        <input type="text" name="txtStock">
                    </td>
                </tr>
                <tr>
                    <td>FECHA DE VENCIMIENTO</td>
                    <td>
                        <input type="text" name="txtFecha">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="AGREGAR" name="btnAgregar"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                        if (isset($_POST['btnAgregar'])) {
                            $codigo = $_POST['txtCodigo'];
                            $descripcion = $_POST['txtDescripcion'];
                            $precio = $_POST['txtPrecio'];
                            $stock = $_POST['txtStock'];
                            $fecha = $_POST['txtFecha'];

                            $rs = mysqli_query($cn, "call sp_productoNuevo('$codigo','$descripcion',$precio,$stock,'$fecha')");

                            if ($rs) {
                                echo "<script>alert('Registro de producto correcto!!!');
                                location.href='index.php'</script>";
                            } else {
                                echo "Ocurrio un error " . mysqli_error($cn);
                            }
                        }

                        ?>
                    </td>

                </tr>
            </table>
        </form>

    </section>
    <footer>
        <h5>Todos los derecho reservados @2023</h5>
    </footer>
</body>

</html>