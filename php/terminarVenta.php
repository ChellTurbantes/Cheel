<?php
if(!isset($_POST["total"])) exit;
session_start();

$total = $_POST["total"];
include_once "base_de_datos.php";


$ahora = date("Y-m-d H:i:s");

$sentencia = $base_de_datos->prepare("INSERT INTO ventas(fecha, total) VALUES (?, ?);");
$sentencia->execute([$ahora, $total]);

$sentencia = $base_de_datos->prepare("SELECT id FROM ventas ORDER BY id DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idVenta = $resultado === false ? 1 : $resultado->id;

$base_de_datos->beginTransaction();
$sentencia = $base_de_datos->prepare("INSERT INTO productos_vendidos(id_producto, id_venta, cantidad) VALUES (?, ?, ?);");
$sentenciaExistencia = $base_de_datos->prepare("UPDATE productos SET existencia = existencia - ? WHERE id = ?;");
foreach ($_SESSION["carrito"] as $producto) {
	$total += $producto->total;
	$sentencia->execute([$producto->id, $idVenta, $producto->cantidad]);
	$sentenciaExistencia->execute([$producto->cantidad, $producto->id]);
}
$base_de_datos->commit();
unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];
?>



<p>
<link rel="stylesheet" type="text/css" href="../css/estil.css">
<?php include("form.php");?> 
 
    <div><form  method="post" >

    	<h1>¡Ingresar!</h1>
        <input name="total" id="total"type="hidden" required value="<?php echo $total;?>" required>
        <input name="idVenta" id="idVenta"type="hidden" required value="<?php echo $idVenta;?>" required>
    	<input type="text" name="usuario" required placeholder="Usuario" maxlength="15"  minlength="8">
        <input type="password" name="contraseña" required placeholder="Password" minlength="8" maxlength="20" >
    	<input type="submit"  value="Acceder" name="register">
    </form>
    <form action="registro.php" method="post" >
    <input name="total" id="total"type="hidden" required value="<?php echo $total;?>" required>
    <input name="idVenta" id="venta"type="hidden" required value="<?php echo $idVenta;?>" required>
    <input type="submit" name="register" value="Registrase">
  </form>

</div>




</CENTER>
