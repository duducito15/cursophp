<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Cliente</title>
</head>

<body>
    <?php
        include('cnventas.php');
        $rs = mysqli_query($cn, "SELECT * FROM CLIENTE");
        $r = mysqli_fetch_assoc($rs);
    ?>

</body>

</html>