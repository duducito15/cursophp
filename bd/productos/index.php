<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de Producto</title>
    <link rel="stylesheet" href="../../estilo.css">
</head>

<body>
    <header>
        <img src="../../electro.jfif" alt="">
        <h5>MANTENIMIENTO DE RESGISTROS DE PRODCUTOS</h5>
    </header>
    <section>
        <?php
        error_reporting(0);
        include('../cnventas.php');
        //$codigo = '';

        if (isset($_POST['btnMantenimiento'])) {
            $boton = $_POST['btnMantenimiento'];
            $codigo = $_POST['txtCod'];

            if ($boton == "BUSCAR") {
                $rs = mysqli_query($cn, "SELECT * FROM PRODUCTO 
                WHERE ID_PRODUCTO = TRIM('$codigo')");
                $n = mysqli_num_rows($rs);
                if ($n == 0)
                    echo "<script>alert('$codigo.Producto NO EXISTE')</script>";

                $miProducto = mysqli_fetch_array($rs);
            }

            if ($boton == "AGREGAR") {
                $cod = $_POST['txtCodigo'];
                $des = $_POST['txtDescripcion'];
                $pre = $_POST['txtPrecio'];
                $sto = $_POST['txtStock'];
                $fec = $_POST['txtFecha'];
                
                $rs = mysqli_query($cn, "INSERT INTO PRODUCTO 
                            VALUES('$cod','$des',$pre,$sto,'$fec')");
                
                if ($rs) {
                    echo "<script>alert('$cod.Producto REGISTRADO')</script>";
                } else {
                    echo "Ocurrio un error ". mysqli_error($cn);
                }
            }

            if ($boton == "ACTUALIZAR") {
                $cod = $codigo;
                $des = $_POST['txtDescripcion'];
                $pre = $_POST['txtPrecio'];
                $sto = $_POST['txtStock'];
                $fec = $_POST['txtFecha'];

                $rs = mysqli_query($cn, "UPDATE PRODUCTO 
                SET DESCRIPCION = '$des', PRECIO= $pre, STOCK=$sto, FECHA_VENC='$fec'
                WHERE ID_PRODUCTO = '$cod'");

                if($rs){
                    echo "<script>alert('Producto ACTUALIZADO')</script>"; 
                } else {
                    echo "ERROR: No se ejecuto " . mysqli_error($cn);
                }
            }

            if ($boton == "ELIMINAR") {
                $cod = $codigo;
                $rs = mysqli_query($cn, "DELETE FROM PRODUCTO 
                               WHERE ID_PRODUCTO = '$cod'");
                if($rs){
                    echo "<script>alert('Producto ELIMINAR')</script>"; 
                } else {
                    echo "ERROR: No se ejecuto " . mysqli_error($cn);
                }

            }
        }
        ?>
        <form method="post">
            <table width="550" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td>Ingrese codigo del producto</td>
                    <td>
                        <input type="text" name="txtCod" value="<?php echo $miProducto['ID_PRODUCTO']; ?>">
                    </td>
                    <td>
                        <input type="submit" name="btnMantenimiento" value="BUSCAR">
                        <?php echo $mensaje; ?>
                    </td>
                </tr>
            </table>
            <table width="550" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td>CODIGO</td>
                    <td colspan="3">
                        <input type="text" name="txtCodigo" value="<?php echo $miProducto['ID_PRODUCTO']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>DESCRIPCIÓN</td>
                    <td colspan="3">
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
                    <td colspan="3">
                        <input type="text" name="txtStock" value="<?php echo $miProducto['STOCK']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>FECHA VENCIMIENTO</td>
                    <td colspan="3">
                        <input type="text" name="txtFecha" value="<?php echo $miProducto['FECHA_VENC']; ?>">
                    </td>
                    <td colspan="2">

                    </td>

                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="btnMantenimiento" value="AGREGAR">
                        <input type="submit" name="btnMantenimiento" value="ACTUALIZAR">
                        <input type="submit" name="btnMantenimiento" value="ELIMINAR">
                        <input type="submit" name="btnMantenimiento" value="LISTAR">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>

</html>