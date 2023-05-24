<?php
include('cnventas.php');

if (isset($_POST['btnAgregar'])) {
    $codigo = $_POST['txtCodigo'];
    $nombre = $_POST['txtNombre'];
    $apellidoPaterno = $_POST['txtApellidoPaterno'];
    $apellidoMaterno = $_POST['txtApellidoMaterno'];
    $direccion = $_POST['txtdirecc'];
    $telefono = $_POST['txtFono'];
    $codigoDistrito=trim($_POST["selDistrito"]);
    $correo = $_POST['txtCorreo'];
    
    $sql = "Insert into CLIENTE(ID_CLIENTE,NOMBRES,PATERNO,MATERNO,DIRECCION, FONO,ID_DISTRITO, EMAIL)
 	VALUES ('$codigo', '$nombre','$apellidoPaterno','$apellidoMaterno','$direccion','$telefono',
    '$codigoDistrito','$correo')";
    $rs=mysqli_query($cn, $sql);

    if ($rs) {
        echo "<script> alert('El cliente se ha registrado con exito'); </script>";
    } else {
        echo "Ocurrio un error " . mysqli_error($cn);
    }
}
//$codigoDistrito= "L05";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO PRODUCTO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>
    <section>
        <?php
        error_reporting(0);

        ?>
        <form action="nuevoCliente.php" method="post">
            <table>
                <tr>
                    <td>CODIGO CLIENTE</td>
                    <td>
                        <?php
                        $fila = mysqli_query($cn, "SELECT max(SUBSTRING(ID_CLIENTE, 2,LENGTH(ID_CLIENTE)-1 )) +1  AS CODIGO FROM CLIENTE;");
                        $codigogenerado = "";
                        foreach ($fila as $r) {
                            $codigogenerado = "C00" . $r['CODIGO'];
                        }
                        ?>

                        <input type="text" name="txtCodigo" readonly value="<?php echo $codigogenerado; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NOMBRE</td>
                    <td>
                        <input type="text" name="txtNombre">
                    </td>
                </tr>
                <tr>
                    <td>APELLIDO PATERNO</td>
                    <td>
                        <input type="text" name="txtApellidoPaterno">
                    </td>
                </tr>
                <tr>
                    <td>APELLIDO MATERNO</td>
                    <td>
                        <input type="text" name="txtApellidoMaterno">
                    </td>
                </tr>
                <tr>
                    <td>DIRECCION</td>
                    <td>
                        <input type="text" name="txtdirecc">
                    </td>
                </tr>
                <tr>
                    <td>TELEFONO</td>
                    <td>
                        <input type="text" name="txtFono">
                    </td>
                </tr>
                <tr>
                    <td>CODIGO DISTRITO</td>
                    <td>

                        <select name="selDistrito" id="distrito">
                            <?php
                            $rs = mysqli_query($cn, "SELECT ID_DISTRITO AS CODIGO, DESCRIPCION FROM DISTRITO;");
                            $n = mysqli_num_rows($rs);
                            foreach ($rs as $r) {
                                echo "<option value= ' " . trim($r['CODIGO'])  . " '> " . $r['DESCRIPCION'] . "</option>";
                            }
                            ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>CORREO</td>
                    <td>
                        <input type="text" name="txtCorreo">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Registrar" name="btnAgregar"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php



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