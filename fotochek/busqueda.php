<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link href="miEstilo.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h3>FOTOCHECK DE CLIENTES</h3>
      <img src="banner.jpg" width="550" height="120"/>
    </header>
    <section>
      <?php   
        error_reporting(0);
        include('cnventas.php');
        include('captura.php');
        
        $codigo = getCodigo();
                
        //Determina que boton ha seleccionado el usuario
        if (isset($_POST['btnGenerico'])) {
           $boton = $_POST['btnGenerico'];

           if ($boton == 'BUSCAR') {
             $rs = mysqlI_query($cn,"CALL sp_clienteBuscar('$codigo');");
             $cliente = mysqli_fetch_array($rs);
           }
       }
   ?>
   <form method="POST">
      <table border="0" width="550" cellspacing="1" cellpadding="10">
         <tr>
            <td>Ingrese codigo</td>
            <td><input type="text" name="txtCodigo" maxlength="5"
                       value="<?php echo getCodigo(); ?>" /></td>
            
            <td><input type="submit" name="btnGenerico" 
                       value="BUSCAR" /></td>
         </tr>
       </table>
       <br>      
       <table border="0" width="550" cellspacing="1" cellpadding="5">
          <tr>
            <th>NOMBRES</th>
            <td colspan="3"><?php echo $cliente[1] ?></td>
          </tr>
          <tr>
            <th>PATERNO</th>
            <td><?php echo $cliente[2] ?></td>
            <th>MATERNO</th>
            <td><?php echo $cliente[3] ?></td>
          </tr>
          <tr>
            <th>DIRECCION</th>
            <td colspan="3"><?php echo $cliente[4] ?></td>
          </tr>
          <tr>
             <th>TELEFONO</th>
             <td><?php echo $cliente[5] ?></td>
             <th>DISTRITO</th>
             <td><?php echo $cliente[6] ?></td>
          </tr>
          <tr>
             <th>EMAIL</th>
             <td colspan="3"><?php echo $cliente[7] ?></td>
          </tr>
          <tr>
             <td colspan="4" id="centrado">
               <a href="fotocheck.php?id=<?php echo $cliente[0];?>">Generar reporte</a>
             </td>
          </tr>
        </table>
      </form>
    </section>
    <footer>
       <h5>Todos los derechos reservados @2015</h5>
    </footer>
</body>
</html>
