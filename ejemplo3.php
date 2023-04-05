<html>
    <head>
        <title>Ejemplo 3: Tipos de datos</title>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h3>Ejemplo 3</h3>
        </header>
        <section>
           <?php
                $nombreTrabajador ="Eduardo Chavez Vasquez";
                $fechaNac = "11/10/1978";
                $numeroHijos = 1;
                $sueldo = 2800.50;
                $estado = true;
                //
                echo "<h3>Datos del Empleado</h3><br>";
                echo "<br>". $nombreTrabajador." ->".gettype($nombreTrabajador);
                echo "<br>", $fechaNac," ->",gettype($fechaNac);
                echo "<br>", $numeroHijos," ->",gettype($numeroHijos);
                echo "<br>", $sueldo," ->",gettype($sueldo);
                echo "<br>", $estado," ->",gettype($estado);

           ?>
        </section>
        <footer>
            <h6>Derechos reservados - Eduardo</h6>
        </footer>
    </body>
</html>