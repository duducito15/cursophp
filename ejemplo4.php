<html>
    <head>
        <title>Ejemplo 4: Manejo de constantes</title>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h3>Ejemplo 4: Manejo de constantes</h3>
        </header>
        <section>
            <form name="frmCambio" method="POST" action="ejemplo4.php">
                <table border="0" cellpadding = "0" cellspacing="0" aling="center">
                    <tr>
                        <td>Ingrese el monto en soles: </td>
                        <td>
                            <input type="text" name="txtSoles">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Procesar">
                        </td>
                        <td>
                            <input type="reset" value="Limpiar">
                        </td>
                    </tr>
                    <?php
                        error_reporting(0);
                        define("DOLAR", 3.87);
                        $soles = $_POST["txtSoles"];
                        $dolares = $soles / DOLAR;
                    ?>
                    <tr>
                        <td>Total dolares: </td>
                        <td>
                            <?php
                                echo "$ ", number_format($dolares, 2);
                            ?>
                        </td>
                    </tr>
                </table>
            </form>    
        

           <?php
                // define("IGV", 0.18);
                // define("pi", 3.1416);

           ?>
        </section>
        <footer>
            <h6>Derechos reservados - Eduardo</h6>
        </footer>
    </body>
</html>