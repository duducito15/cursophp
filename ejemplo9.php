<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago al credito</title>
</head>

<body>
    <header>
        <img src="electro.jfif" alt="Electrodomesticos">
        <h3 id="centrado">Venta de Productos</h3>
    </header>
    <section>
        <?php
        error_reporting(0);
        $producto = $_POST["selProducto"];

        switch ($producto) {
            case 'Lavadora':
                $precio = 1500;
                break;
            case 'Refrigeradora':
                $precio = 3500;
                break;
            case 'Radiograbadora':
                $precio = 2800;
                break;
            case 'Tostadora':
                $precio = 500;
                break;
        }

        if ($producto == 'Lavadora') $sell = 'SELECTED';
        else $sell = '';
        if ($producto == 'Refrigeradora') $selre = 'SELECTED';
        else $selre = '';
        if ($producto == 'Radiograbadora') $selra = 'SELECTED';
        else $selra = '';
        if ($producto == 'Tostadora') $selt = 'SELECTED';
        else $selt = '';

        ?>
        <form action="ejemplo9.php" method="post">
            <table border="0" width="500" cellspacing="0" cellpadding="0">
                <tr>
                    <td>Producto</td>
                    <td>
                        <select name="selProducto" onchange="this.form.submit()">
                            <option value="Lavadora" <?php echo $sell; ?>>Lavadora</option>
                            <option value="Refrigeradora" <?php echo $selre; ?>>Refrigeradora</option>
                            <option value="Radiograbadora" <?php echo $selra; ?>>Radiograbadora</option>
                            <option value="Tostadora" <?php echo $selt; ?>>Tostadora</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td>
                        <input type="text" name="txtPrecio" readonly="readonly" value="<?php
                                                                                        if ($_POST["selProducto"]) {
                                                                                            echo number_format($precio, 2, '.', '');
                                                                                        }
                                                                                        ?>">
                    </td>
                </tr>
                <?php
                $cantidad = $_POST["txtCantidad"];
                $subtotal = $precio * $cantidad;
                ?>
                <tr>
                    <td>Cantidad</td>
                    <td>
                        <input type="text" name="txtCantidad" value="<?php echo $cantidad;?>">
                    </td>
                    <td>
                        <input type="submit" value="Calcular" name="btnCalcular">
                    </td>
                </tr>            
                <tr>
                    <td>Subtotal</td>
                    <td>
                        <input type="text" name="txtSubtotal" value="
                        <?php
                            echo number_format($subtotal, 2, '.', '');
                        ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td>Cuotas</td>
                    <td>
                        <select name="selCuotas" id="">
                            <option value="3">3</option>
                            <option value="6">6</option>
                            <option value="9">9</option>
                            <option value="12">12</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>

    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados - 2023</h6>
    </footer>
</body>

</html>