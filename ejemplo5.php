<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplo 5: Variables y Oeradores</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <h3 id="centrado">PAGO DE EMPLEADOS</h3>
    </header>
    <section>
        <form action="ejemplo5.php" method="POST" name="frmEmpleado">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="200">Empleado:</td>
                    <td>
                        <input type="text" name="txtEmpleado">
                    </td>
                </tr>
                <tr>
                    <td>Horas trabajadas:</td>
                    <td>
                        <input type="text" name="txtHrsTrabajadas">
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td>
                        <input type="text" name="txtTarifa">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Procesar">
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
                <?php
                    error_reporting(0);
                    $empleado = $_POST['txtEmpleado'];
                    $horasTrabajadas = $_POST['txtHrsTrabajadas'];
                    $tarifa =$_POST['txtTarifa'];
                    //Calculos
                    $sueldoBruto = $horasTrabajadas * $tarifa;
                    $essalud = $sueldoBruto * 0.12;
                    $afp = $sueldoBruto * 0.1;

                    $sueldoNeto = $sueldoBruto - $essalud - $afp;
                ?>
                <tr>
                    <td>Empleado</td>
                    <td>
                        <?php
                        echo "<br>".$empleado;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td>
                    <?php
                        echo "<br>".$horasTrabajadas;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por horas</td>
                    <td>
                    <?php
                        echo "<br>".$tarifa;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo bruto</td>
                    <td>
                    <?php
                        echo "<br>".$sueldoBruto;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td>
                    <?php
                        echo "<br>".$essalud;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento AFP</td>
                    <td>
                    <?php
                        echo "<br>".$afp;
                        ?>
                    </td>
                </tr> 
                <tr>
                    <td>Sueldo Neto</td>
                    <td>
                    <?php
                        echo "<br>".$sueldoNeto;
                        ?>
                    </td>
                </tr>        
            </table>
        </form>
    </section>
    <footer>
        <h6>Derechos reservados - Eduardo</h6>
    </footer>
    
</body>
</html>