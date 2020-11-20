<?php
include_once "base_de_datos.php";
include_once "encabezado.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
session_start();
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$granTotal = 0;

			if(isset($_GET["status"])){
				if($_GET["status"] === "1"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Venta realizada correctamente
						</div>
					<?php
				}else if($_GET["status"] === "2"){
					?>
					<div class="alert alert-info">
							<strong>Venta cancelada</strong>
						</div>
					<?php
				}else if($_GET["status"] === "3"){
					?>
					<div class="alert alert-info">
							<strong>Ok</strong> Producto quitado de la lista
						</div>
					<?php
				}else if($_GET["status"] === "4"){
					?>
					<div class="alert alert-warning">
							<strong>Error:</strong> El producto que buscas no existe
						</div>
					<?php
				}else if($_GET["status"] === "5"){
					?>
					<div class="alert alert-danger">
							<strong>Error: </strong>El producto está agotado
						</div>
					<?php
				}else{
					?>
					<div class="alert alert-danger">
							<strong>Error:</strong> Algo salió mal mientras se realizaba la venta
						</div>
					<?php
				}
			}
		?>


			<tbody><table><tr>
		    <?php foreach($productos as $producto){ ?>
			<td><div class="prod"><center><img src="<?php echo $producto->ruta ?>" width="150"  height="150"/><br>
            <strong>$<?php echo $producto->precioVenta;?></strong>
            <form id="formulario" method="post" action="agregarAlCarrito.php">
            <center><?php echo $producto->nomp;?><br><?php echo $producto->descripcion;?><br>
            </center>
            <input  name="id" required type="hidden" value="<?php echo $producto->id;?>">
            <input  name="cantidad" id="cantidad" min="1" required type="number"  style="width : 40px; heigth : 40px" value="1" >
            <button type="submit" class="maas" required onclick="val()" onmouseover="i();" id="boton" > <i id="ma"class="icon icon-plus"></i></button>
            
            </form></center></div></td>
            

            <?php } ?></tr>
           </table></tbody>
            <style type="text/css">
            	img{
            		border-radius: 120px;
            	}
            	#cantidad{
    margin: 0 auto;
    align-content: center;
    border-radius: 5px;
    border: 1px solid #666666;
    
    height: 23px;
}
            .prod{
            	 border-radius: 5px;
    border: 1px solid #666666;

            }
            .maas{
            	background-color:#C693F1;
            	border-radius: 10px;
            	width: 50px;
            	height: 30px;

            }
            

            </style>
            <script type="text/javascript">
            	 var boton = document.getElementById('boton');
                 var resultado = document.getElementById('id');
                boton.onmouseover= function(e) {
                resultado.value =  this.value;
                 }
                
            </script>
		
<br><br><br><br>
		<center><table>
			<thead>
				<tr>
					<th><center>Nombre</center></th>
					<th><center>Descripción</center></th>
					<th><center>Precio</center></th>
					<th><center>Cantidad</center></th>
					<th><center>Total</center></th>
					<th><center>Quitar</center></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($_SESSION["carrito"] as $indice => $producto){
						$granTotal += $producto->total;
					?>
				<tr>
					<td><center><?php echo $producto->nomp ?></center></td>
					<td><center><?php echo $producto->descripcion ?></center></td>
					<td><center><?php echo $producto->precioVenta ?></center></td>
					<td><center><?php echo $producto->cantidad ?></center></td>
					<td><center><?php echo $producto->total ?></center></td>
					<td><center><a class="btn btn-danger" href="<?php echo "quitarDelCarrito.php?indice=" . $indice?>"><i class="icon icon-bin"></i></a></center></td>
				</tr>
				
				<?php }?>
			</tbody>
		</table>
</center>

		<center><h2>Total: <?php echo $granTotal; ?></h2>
     	<form action="./terminarVenta.php" method="POST">
			<input name="total" id="total"type="hidden" required value="<?php echo $granTotal;?>" required>
			
			<button type="submit" id="bot" class="btn btn-success" >Ir a pagar</button>
			<a href="./cancelarVenta.php" class="btn btn-danger" onclick="m();">Salir</a>
			
		</form></center><br><br>
		<style type="text/css">
			.btn{
				color:black;
				

			}
		</style>
		<script type="text/javascript">
			var a=document.getElementById('total').value;
			
			if (a==""|| a=="0"){
				document.getElementById('bot').disabled=true;		
			}else{
				document.getElementById('bot').disabled=false;
			}
			function m(){
				alert("Venta cancelada");
			}
		</script>
		 <?php include_once "pie.php";?>