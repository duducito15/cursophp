<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO PRODUCTO</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <header>
        <h3>NUEVO PRODUCTO</h3>
    </header>
    <section>
        <form action="nuevoProducto.php" method="post">
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
                    <td><input type="submit" value="AGREGAR"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h5>Todos los derecho reservados @2023</h5>
    </footer>
</body>

</html>