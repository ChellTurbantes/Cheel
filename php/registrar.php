<?php

include("con_db.php");


   if (isset($_POST['registe'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $usur = trim($_POST['usuario']);
	    $nombre = trim($_POST['nombre']);
        $apellido= trim($_POST['apellido']);
        $total= $_POST["total"];//Recibe el Numero de control que del cual se consultaran los datos
        $idVenta = $_POST["idVenta"];
	   
	    $calles= trim($_POST['calles']);
	    $num = trim("num");
                      $telefono = trim($_POST['telefono']);
	    $correo= trim($_POST['correo']);
                      $contraseña= trim($_POST['contraseña']);

                     $sql4="select * from clientes where usuario = '$usur'";
                     $sql5="select * from clientes where correo = '$correo'";
                     $ejecuta = mysqli_query($conex,$sql4);
                     $ejecuta2 = mysqli_query($conex,$sql5);
                    $numero_filas = mysqli_num_rows($ejecuta);
                    $numero_filas2 = mysqli_num_rows($ejecuta2);
                    if($numero_filas == 1){
?>
                              <h3 class="bad">¡Ya existe alguien con ese usuario!</h3>

                                 <?php
	                    }if($numero_filas2 == 1){
	                    	?>
	                    	<h3 class="bad">¡Ya existe alguien con ese correo!</h3> <?php
	                      }else {
	                    
	    $consulta = "INSERT INTO clientes (usuario, nombre, apellido, calles, num, telefono, correo, contraseña) VALUES ('$usur','$nombre','$apellido','$calles','$num','$telefono','$correo','$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	include_once "base_de_datos.php";
	    	$sentencia = $base_de_datos->prepare("UPDATE ventas SET user_cli=? WHERE id = ?;");
$resultado = $sentencia->execute([$usur, $idVenta]);

if($resultado === TRUE){
		echo'<script language="javascript">alert("Vamos a pagar"); window.location.href="https://www.paypal.com/cgi-bin/webscr"</script> ';}

	exit;?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
                                
           <?php

 }else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
}
}
}

?>
