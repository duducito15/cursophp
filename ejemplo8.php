<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <h3 id="centrado">Estructuras repetitivas</h3>
    </header>
    <section>
        <?php
        //Operadores de incremento y decremento
        /*
            ++$v -> preincrementar
            $v++ -> postincremento
            --$v -> predecrementar
            $v-- -> postdecremento

            += -> $a = $a + $n -> $a+=$n
            *= -> 
            -= ->
            /= ->
            .= -> concatenación
        */
        // Contadores
        /*
        - casi siempre aumenta o dismiyue en uno su valor
        - se requieren en las estructuras repetitivas para llevar un control dl blucle
        */
        // Acumuladores
        /**
         * - aumenta y disminuye su valor a partir de otro valor
         * -para poder usarlo correctamente debe estar en una estructura repetitiva
         */
        // Estrutura While
        /*
        while(condicion){
            instrucciones a repetir;
        }
        */
        /*$i = 1;
        while ($i <= 10) {
            echo $i."<br>";
            $i++;
        }

        $i = 10;
        while ($i >= 1) {
            echo $i."<br>";
            $i--;
        }*/

        /*$n = 10;
        $i = 1;
        $num = 1;
        $den = 5;
        while ($i <= $n) {
            if ($i % 2 != 0) {
                echo $num . "/" . $den . "<br>";
            } else {
                echo "-" . $num . "/" . $den . "<br>";
            }
            $i++;
            $num += 1;
            $den += 5;
        }

        $n= 9;
        $i=1;
        while ($i <= $n) {
            $j=1;
            while ($j <= $i) {
                echo $i." ";
                $j++;
            }
            echo "<br>";
            $i++;
        }*/
        //FOR
        /**
         * for(inicializacion; condicion; incremento/decremento){
         *      instrucciones a repetir
         * }
         */
        for ($i = 1; $i <= 10; $i++) {
            echo $i . "<br>";
        }

        //DO... WHILE
        /**
         * do{
         *      instrucciones a repetir
         * }while(condicion);
         */
        $i=1;
        do {
            echo $i."<br>";
            $i++;
        } while ($i <= 10);


        ?>
    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados - Eduardo</h6>
    </footer>

</body>

</html>