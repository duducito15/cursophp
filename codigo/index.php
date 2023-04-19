<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de empleados</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <header>
        <h2 id="centrado">Formulario de registro de empleados</h2>
        <img src="https://img.freepik.com/fotos-premium/equipo-gente-negocios-trabajando-juntos-oficina-hablando-discutiendo-banner-fondo-trabajo-equipo_44344-3554.jpg" alt="" height="150" width="700">
    </header>
    <section>
        <?php
        error_reporting(0);
        $apellidos = $_POST['txtApellidos'];
        $nombres = $_POST['txtNombres'];
        $fecnac = $_POST['txtFecnac'];
        $estado = $_POST['selEstado'];
        $sexo = $_POST['rbSexo'];

        $mApellidos = "";
        $mNombres = "";
        $mFecnac = "";

        $permitidos = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]{1,100}";

        if (!preg_match($permitidos, $apellidos) || !is_string($apellidos)) {
            $mApellidos = "Registre apellidos!!!";
        }
        if (!preg_match($permitidos, $nombres) || !is_string($nombres)) {
            $mNombres = "Registre nombres!!!";
        }
        if (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecnac)) {
            $mFecnac = "Fecha no valida!!!";
        }

        switch ($estado) {
            case 'Soltero':
                $cEstado = 1;
                break;
            case 'Casado':
                $cEstado = 2;
                break;
            case 'Viudo':
                $cEstado = 3;
                break;
            case 'Divorciado':
                $cEstado = 4;
                break;
        }
        if ($sexo == 'M' ) $cSexo = 1;
        if ($sexo == 'F' ) $cSexo = 2;

        
        ?>
        <form action="index.php" method="post">
            <table border="0" width="700" cellspacing="0" cellpading="0">
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="txtApellidos" size="50" placeholder="Ingrese apellidos"></td>
                    <td>CODIGO GENERADO</td>
                </tr>
                <tr>
                    <td>Nombres: </td>
                    <td><input type="text" name="txtNombres" size="50" placeholder="Ingrese nombres"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento: </td>
                    <td><input type="text" name="txtFecnac" size="30" placeholder="dd/mm/aaaa"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado civil: </td>
                    <td>
                        <select name="selEstado" id="">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>

                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sexo: </td>
                    <td>
                        <input type="radio" name="rbSexo" value="M">Masculino
                        <input type="radio" name="rbSexo" value="F">Femenino
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Autogenerar còdigo" name="btnGenerar"></td>
                    <td></td>
                </tr>

            </table>

        </form>
    </section>
    <footer>

    </footer>


</body>

</html>