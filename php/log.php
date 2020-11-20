
<?php include("encabezado.php");
?>
	<p>
<link rel="stylesheet" type="text/css" href="../css/estil.css">
<?php include("form.php");?> 
 
    <div><form method="post">

    	<h1>¡Ingresar!</h1>
    	<input type="hidden" name="total" required placeholder="TOTAL" value="<?php echo $total;?>">
    	<input type="text" name="usuario" required placeholder="Usuario" maxlength="15"  minlength="8">
        <input type="password" name="contraseña" required placeholder="Password" minlength="8" maxlength="20" >
    	<input type="submit"  value="Acceder" name="register">
    </form>
    <form action="registro.php" >
    <input type="submit" name="register" value="Registrase">
  </form>

</div>
<?php include("pie.php");
 ?>
