<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Planilla de sueldos</title>
</head>

<body>
    <header>
        <h3 id="centrado">PAGO DE SALARIO DE EMPLEADOS</h3>
        <img src="img/utea.png" alt="logo de la utea" id="centrado">
    </header>
    <section>
        <?php
            error_reporting(0);

            $empleado = $_POST['txtEmpleado'];
            $horas = $_POST['txtHoras'];
            $categoria = $_POST['selCategoria'];

            if ($categoria=='jefe') {
                $selJefe ='SELECTED';
            }else{
                $selJefe ='';
            }
            if ($categoria=='administrativo') {
                $selAdministrativo ='SELECTED';
            }else{
                $selAdministrativo ='';
            }
            if ($categoria=='operario') {
                $selOperario ='SELECTED';
            }else{
                $selOperario ='';
            }            
            if ($categoria=='practicante') {
                $selPracticante ='SELECTED';
            }else{
                $selPracticante ='';
            }                               
        ?>
        <form action="ejemplo7.php" method="post">
            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td width="150">Empleado</td>
                    <td>
                        <input type="text" name="txtEmpleado" size="70" value="<?php echo $empleado; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Horas</td>
                    <td>
                        <input type="text" name="txtHoras" size="20" value="<?php echo $horas; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="selCategoria" >
                            <option value="jefe" <?php echo $selJefe; ?> >Jefe</option>
                            <option value="administrativo" <?php echo $selAdministrativo; ?> >Adminsitrativo</option>
                            <option value="operario" <?php echo $selOperario; ?> >Operario</option>
                            <option value="practicante" <?php echo $selPracticante; ?> >Practicante</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Calcular">
                        <input type="reset" value="Limpiar valores">
                    </td>
                </tr>
                <?php
                    if($categoria =="jefe") $pagoHoras = 50;
                    if($categoria =="administrativo") $pagoHoras = 40;
                    if($categoria =="operario") $pagoHoras = 20;
                    if($categoria =="practicante") $pagoHoras = 10;

                    $sueldoBruto = $pagoHoras * $horas;
                    $descuento = $sueldoBruto * 0.15;
                    $sueldoNeto = $sueldoBruto - $descuento;
                ?>
                <tr>
                    <td>Sueldo Bruto</td>
                    <td>
                        <?php echo "S/ ".number_format($sueldoBruto,2);?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento</td>
                    <td><?php echo "S/ ".number_format($descuento,2);?></td>
                </tr>
                <tr>
                    <td>Sueldo neto</td>
                    <td><?php echo "S/ ".number_format($sueldoNeto,2);?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </form>
    </section>
    <footer>
        <h6 id="centrado">Derechos reservados - Eduardo</h6>
    </footer>
</body>

</html>