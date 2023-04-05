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

        <form action="ejemplo9.php" method="post">
            <table border="0" width="500" cellspacing="0" cellpadding="0"> 
                <tr>
                    <td>Producto</td>
                    <td>
                        <select name="selProducto" id="">
                            <option value="Lavadora">Lavadora</option>
                            <option value="Refrigeradora">Refrigeradora</option>
                            <option value="Radiograbadora">Radiograbadora</option>
                            <option value="Tostadora">Tostadora</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td>
                        <input type="text" name="txtPrecio">
                    </td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td>
                        <input type="text" name="txtCantidad">
                    </td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>
                        <input type="text" name="txtSubtotal">
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