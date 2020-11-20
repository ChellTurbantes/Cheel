<?php

      $total= $_POST["total"];//Recibe el Numero de control que del cual se consultaran los datos
       $idVenta = $_POST["idVenta"];
include("encabezado.php");
include("registrar.php");
?>

    <link rel="stylesheet" type="text/css" href="../css/estil.css">

				<div id="regis">
    <form method="post">
    	<h1>¡Registrarse!</h1>
    	<input type="hidden" name="total" required value="<?php echo $total;?>"   >
    	<input type="hidden" name="idVenta" required   value="<?php echo $idVenta;?>" >
   <input type="text" name="usuario" id="usuario"  required placeholder="Usuario" maxlength="15"  minlength="8">
             <pre id="resultado"></pre>

<input name="nombre" type="text" id="nombre" required placeholder="Nombres">
<input name="apellido" type="text" id="apellido" required placeholder="Apellido paterno">

<input name="calles" type="text" id="calles" required placeholder="Calles">
<input name="num" type="number" id="num" required placeholder="Num. In">

<input name="telefono" type="text" id="telefono" required pattern="[0-9]+"  minlength="10" maxlength="10"placeholder="Teléfono">
<input name="correo" type="email" id="correo" required placeholder="Correo">
 <pre id="resultado"></pre>
<input type="password" name="contraseña" required placeholder="Password" minlength="8" maxlength="20" >
    	<input type="submit" name="registe">
    </form></div>

<?php
include("pie.php");

?>
