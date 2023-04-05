<html>
    <head>
        <title>
            Mi primera página
        </title>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Listado de números del 1 al 10</h1>
        </header>
        <section>
            <?php
                //esto es un comentario
                for($i=1;$i<=20;$i++){
                    echo $i,"<br>";
                }
            ?>
        </section>
        <footer>
            <h6>Derechos reservados - Eduardo</h6>
        </footer>
    </body>
</html>

