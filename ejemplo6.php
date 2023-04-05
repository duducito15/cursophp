<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h3 id="centrado">Ejemplo 6: Estructuras de decisión</h3>
    </header>
    <section>
        <?php

        $edad = 21;
        if ($edad > 17) {
            echo "Mayor de edad";
        }
        //if ($edad>17) echo "Mayor de edad";

        $sueldo = 1800;
        if ($sueldo > 1500) {
            $descuento = $sueldo * 0.1;
        } else {
            $descuento = 0;
        }
        echo "<br>El descuento es: " . $descuento;

        $dia = 8;
        if ($dia == 1) {
            echo "Domingo";
        } elseif ($dia == 2) {
            echo "Lunes";
        } elseif ($dia == 3) {
            echo "Martes";
        } elseif ($dia == 4) {
            echo "Miércoles";
        } elseif ($dia == 5) {
            echo "Jueves";
        } elseif ($dia == 6) {
            echo "Viernes";
        } elseif ($dia == 7) {
            echo "Sábado";
        } else {
            echo "No se puede procesar";
        }

        switch ($dia) {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Lunes";
                break;
            case 3:
                echo "Martes";
                break;
            case 4:
                echo "Miércoles";
                break;
            case 5:
                echo "Jueves";
                break;
            case 6:
                echo "Viernes";
                break;
            case 7:
                echo "Sábado";
                break;
            default:
                echo "No se puede procesar";
                break;
        }



        ?>
    </section>
    <footer>
        <h6 id="centrado">Derechos reservados - Eduardo</h6>
    </footer>

</body>

</html>