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

                            foreach ($rs as $r) {
                                $codigo = $r['CODIGO'];
                                $distrito = $r['DISTRITO'];
                                echo "<option value= ' " . $codigo . " '> " . $distrito . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="btnListar" value="LISTAR">
                    </td>
                </tr>
            </table>

            <?php
            //include('cnventas.php');
            $codigoDistrito = $_POST['selDistrito'];
            
            $consulta = "SELECT C.ID_CLIENTE AS CODIGO, 
                            CONCAT(C.NOMBRES,' ', C.PATERNO,' ',C.MATERNO) AS CLIENTE, 
                            FONO AS TELEFONO, DESCRIPCION AS DISTRITO 
                            FROM CLIENTE C INNER JOIN DISTRITO D 
                            ON C.ID_DISTRITO = D.ID_DISTRITO
                            WHERE C.ID_DISTRITO = TRIM('$codigoDistrito')";
           
            $rs1 = mysqli_query($cn, $consulta);
            $total = mysqli_num_rows($rs1);
            
            ?>
            <h4>CLIENTES POR DISTRITO: <?php echo $codigoDistrito ?></h5>
                <table border="0" width="700" cellpadding="1" cellspacing="1">
                    <tr>
                        <th>CODIGO</th>
                        <th>CLIENTE</th>
                        <th>TELEFONO</th>
                        <th>DISTRITO</th>
                    </tr>
                    <?php foreach ($rs1 as $r1) { ?>
                        <tr>
                            <td><?php echo $r1['CODIGO'] ?></td>
                            <td><?php echo $r1['CLIENTE'] ?></td>
                            <td><?php echo $r1['TELEFONO'] ?></td>
                            <td><?php echo $r1['DISTRITO'] ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>TOTAL CLIENTES:</td>
                        <td> <?php echo $total; ?></td>
                    </tr>
                </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @2023</h6>
    </footer>
</body>

</html>