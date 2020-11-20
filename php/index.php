

<?php include_once "encabezado.php" ?>

<center><img src="../img/log.png" height="700" width="700" class="chell_animacion"></center>
<style type="text/css">
 
.chell_animacion:hover{
border-radius:50%;
box-shadow: 0px 0px 15px 15px #FFF9C8;

}
 .chell_animacion{
		padding: 15px; 
		margin: 10px; 
		border;  
		
        
        border-color: #EBF5FB;

	}
	.chell_animacion{
     position: relative;
     left: auto;
     right: auto;
     top:15px;


 
      
}          
.chell_animacion{
position: relative;
transition: all 1s ease;
transform: perspective(600px);
transform-origin: 100% 50%;
transform-style: preserve-3d;
}
h1{
    font-family: Broadway;
    
}



 
/*ANIMACION IMAGENES DEL PRODUCTO*/
 
.anima:hover{
border-radius:30%;
box-shadow: 0px 0px 15px 15px antiquewhite;
transform: rotate(360deg);
transform: rotate(360deg);
}
 .anima{
  background-color: ;
		padding: 10px; 
		margin: 10px; 
		border: 2px solid white; 
		float: left; 
		width: 230px;
	}
 
 
	.anima{
  position: relative;
  top: 0px;
  left: 10px;
      
}
.anima{
position: relative;
transition: all 1s ease;
transform: perspective(600px);
transform-origin: 100% 50%;
transform-style: preserve-3d;
}
.anima:hover{
transform: perspective(600px) rotateY(-180deg) translateX(100%);
}
 
.anima .anima-1,
.anima .anima-2{
position: absolute;
  left: 40px;
    border-radius: 120px;
    width: 150px;
    height: 150px;
 
backface-visibility: hidden;
}
.anima .anima-2{
transform: rotateY(-180deg);
 position: relative;
 right: 50px;
}
 
 /*LETRA :3*/
 .letra{
       font-size: 17px;
  font-family:monospace;
     
  
 }
 /*BOTON*/
 .rainbow{background-color:#343A40;border-radius:4px;color:#fff;cursor:pointer;padding:8px 16px}
.rainbow-2:hover{background-image:linear-gradient(to right,#fca4a5 1%,#fcd8a6 14%,#d5f9a4 31%,#a6fcca 50%,#a4cef9 72%,#dda4f9 89%,#ff999a 100%);animation:slidebg 2s linear infinite} 	
@keyframes slidebg{to{background-position:20vw}}
.follow{margin-top:40px}
.follow a{color:#000;padding:8px 16px;text-decoration:none}

</style>


<?php include_once "carusel.php" ?>
<body>
<center><h1>PRODUCTOS</h1></center>
<center>
    <script>
        function rdir() {
            location.href="vender.php";
        }
    </script>
	<table class="egt">
	   <tr>
	   	<td><table>
         <tr><td >
          <div class="anima">
          <img src="../img/1.jpeg" width="230" height="180" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 1<br> <br>Turbante velvet<br>Color: Uva con perlas blancas</p></center>
           </div></div>
             
         
          </td></tr>
         <tr><td><center>$65</center></td></tr>
         <tr><td><center><button id="mas" class="rainbow rainbow-2" onclick="rdir()" type="mas"> Ver más <span class="icon icon-plus" ></span></button></center></td></tr>
        </table></td>
        <td><table>
         <tr><td>
          <div class="anima">
          <img src="../img/2.jpeg" width="230" height="180" class="anima-1"> 
          <div class="anima-2"><p class="letra">PRODUCTO N° 2<br> <br>Turbante velvet<br>Color: De terciopelo con perlas blancas</p>
           </div></div>
          </td></tr>
         <tr><td><center>$65</center></td></tr>
         <tr><td><center><button type="mas" id="mas" onclick="rdir()" class="rainbow rainbow-2" > Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
        
        <td><table>
         <tr><td>
           <div class="anima">
          <img src="../img/3.jpeg" width="150" height="150" class="anima-1">
            <div class="anima-2"><center><p class="letra">PRODUCTO N° 3<br> <br>Turbante<br>Color: Mostaza con dots </p></center></div></div>
          </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button type="mas" onclick="rdir()" class="rainbow rainbow-2"> Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
        
        <td><table>
         <tr><td>
          <div class="anima">
          <img src="../img/4.jpeg" width="150" height="150"class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 4<br> <br>Turbante<br>Color: verde aqua con figuras  </p></center></div></div> 
          </td></tr>
         <tr><td><center>$65</center></td></tr>
         <tr><td><center><button id="mas" type="mas" onclick="rdir()" class="rainbow rainbow-2"> Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
        
        <td><table>
         <tr><td>
          <div class="anima">
          <img src="../img/5.jpeg" width="150" height="150" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 5<br> <br>Turbante<br>Color: beige con cruces </p></center></div></div>
           </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button id="mas" type="mas" onclick="rdir()"class="rainbow rainbow-2">  Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
      </tr>
      <tr>
	   	<td><table>
         <tr><td>
          <div class="anima">
          <img src="../img/6.jpeg" width="150" height="150" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 6<br> <br>Turbante<br>Color: rayas (azul marino, blanco, café) </p></center></div></div>
          </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button id="mas" type="mas" class="rainbow rainbow-2" >  Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
        <td><table>
         <tr><td>
           <div class="anima">
          <img src="../img/7.jpeg" width="150" height="150" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 7<br> <br>Turbante<br>Color: tela lisa, verde olivo</p></center></div></div> 
          </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button id="mas" onclick="rdir()"  type="mas" class="rainbow rainbow-2">  Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
       
        <td><table>
         <tr><td>
           <div class="anima">
          <img src="../img/8.jpeg" width="150" height="150" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 8<br> <br>Turbante<br>Color: rayas (azul marino, naranja, beige)</p></center></div></div> 
          </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button id="mas"  onclick="rdir()" type="mas" class="rainbow rainbow-2">  Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
       
        <td><table>
         <tr><td>
           <div class="anima">
          <img src="../img/9.jpeg" width="150" height="150" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 9<br> <br>Turbante<br>Color: tela lisa, color vainilla</p></center></div></div> 
          
           </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button id="mas" onclick="rdir()" type="mas" class="rainbow rainbow-2">  Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
       
        <td><table>
         <tr><td>
           <div class="anima">
          <img src="../img/10.jpeg" width="150" height="150" class="anima-1">
           <div class="anima-2"><center><p class="letra">PRODUCTO N° 10<br> <br>Turbante<br>Color: amarillo con flores</p></center></div></div> </td></tr>
         <tr><td><center>$60</center></td></tr>
         <tr><td><center><button id="mas"  type="mas" onclick="rdir()"class="rainbow rainbow-2"> Ver más <span class="icon icon-plus"></span></button></center></td></tr>
        </table></td>
      </tr>
    
  

  

</table>
	
</center>
<?php include_once "pie.php" ?>