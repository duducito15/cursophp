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

        if (isset($_POST['btnBuscar'])) {
            $boton = $_POST['btnBuscar'];
            $codigo = $_POST['txtCodigo'];
            if ($boton == "BUSCAR") {
                $rs = mysqli_query($cn, "SELECT * FROM PRODUCTO 
                                            WHERE ID_PRODUCTO = '$codigo'");
                $n = mysqli_num_rows($rs);
                if ($n == 0){
                    echo "<script>alert('Producto NO EXISTE')</script>";
                }

                $miProducto = mysqli_fetch_array($rs);
            }

            if ($boton == "ACTUALIZAR") {
                
            }

        }



        ?>
        <form action="actuzalizarProducto.php" method="post">
            <table width="550" border="1" cellspacing="1" cellpadding ="1">
                <tr>
                    <td>Ingrese codigo del producto</td>
                    <td>
                        <input type="text" name="txtCodigo">
                    </td>
                    <td>
                        <input type="submit" name="btnBuscar" value="BUSCAR">
                    </td>
                </tr>
            </table>
            <table width="550" border="1" cellspacing="1" cellpadding ="1">
                <tr>
                    <td>DESCRIPCIÓN</td>
                    <td colspan="3">
                        <input type="text" name="txtDescripcion" value="">
                    </td>
                </tr>
                <tr>
                    <td>PRECIO</td>
                    <td>
                        <input type="text" name="txtPrecio">
                    </td>
                    <td>STOCK</td>
                    <td>
                        <input type="text" name="txtStock">
                    </td>
                </tr>
                <tr>
                    <td>FECHA VENCIMIENTO</td>
                    <td>
                        <input type="text" name="txtFecha">
                    </td>
                    <td colspan="2">
                        <input type="submit" value="ACTUALIZAR">
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