<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Distrito</title>
</head>

<body>
    <?php
    error_reporting(0);
    include('cnventas.php');
    ?>
    <header>
        <h3>LISTADO DE CLIENTES</h3>
    </header>
    <section>
        <form action="listaClientesDistrito.php" method="post">
            <table>
                <tr>
                    <td>
                        Seleccion un distrito
                    </td>
                    <td>
                        <select name="selDistrito">
                            <?php
                            $rs = mysqli_query($cn, "SELECT DISTINCT C.ID_DISTRITO AS CODIGO, D.DESCRIPCION 
                             AS DISTRITO FROM CLIENTE C INNER JOIN DISTRITO D ON 
                             C.ID_DISTRITO = D.ID_DISTRITO;");
                            $n = mysqli_num_rows($rs);

                            foreach($rs as $r){
                                $codigo = $r['CODIGO'];
                                $distrito = $r['DISTRITO'];
                                echo "<option value= ' ".$codigo. " '> ".$distrito."</option>";
                                
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </form>

        </table>
    </section>
    <footer>
        <h6>Todos los derechos reservados @2023</h6>
    </footer>
</body>

</html>