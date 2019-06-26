<?   
  
 
require '../conectar.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>borrar articulo</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="body1"></div>
<div class="body2">
	<div class="main">
	<div class="ic"> </div>
<!--header -->
		<header>
			<div class="wrapper">
				<nav>
					<ul id="menu">
					<li><center><figure class="left marg_right1"> </figure></center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="index2.php">Inicio</a></li>
						<li id="menu_active"><a href="#">Historias Pediatricas </a></li>
						<li><a href="pabellonmenu.php">Pabellon</a></li>
						<li ><a href="indexinventario.php">Inventario</a></li>
						<li class="bg_none"><a href="../cerrar.php">Salir</a></li>
					</ul>
				</nav>
				</br>
				<img src='../images/user106.png' width='70' alt='Edicion' title='MANUAL DE USUARIO'></a>
			</div>
			<div class="wrapper">
				
				</article>
			</div>
		</header>
	</div>
</div>
<!--header end-->
<!--content -->
<div class="body3">
	<div class="main">
		<section id="content_top">
			<article class="pad_left2">
				<h2>Pacientes</h2>
				
			
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>


<div class="main">
	<section id="content">
		
			


				
				
			<!--inventario de pacientes-->	
		
		
 <?php
 
  
  include_once('../inventario/conexion.php');
  $link=conectarse() ;
 
$query="SELECT * FROM pacientep ORDER BY cod_alu ASC";
 
$result=mysql_query($query,$link) or die("Error: ".mysql_error());
 
// Si no se encuentran registros en la tabla usuarios solo resta mostrar
// el mensaje correspondiente, si se encuentra uno o más registros se recorre
// la tabla con la posibilidad de recoger los diferentes campos mediante la variable $Rs
 
if(mysql_num_rows($result) > 0){
 
// El encabezado de la tabla
?>
</br>



	<form  name="fe" action="historiap.php" method="post" id="ContactForm">
	

  
    <a></a><a></a><a></a><a></a><a><a></a><a></a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><input name="txtbus" type=text   placeholder='Buscar paciente.....'>
     <input  name="btn1" type="submit" value="Buscar">
    
  </form>
  <center>
  
  </br>

<table style="border:1px  #666666; color:# 666666 ; width:800px; text-align:center;" >
  <tbody>
    <tr style="background:#6666666;">
      <td bgcolor="#CCCCCC" >Codigo</td>
      <td bgcolor="#CCCCCC">Nombre</td>
      <td bgcolor="#CCCCCC">Apellido</td>
	  <td bgcolor="#CCCCCC">Operaciones</td>
    </tr>
 
<?php     
 
  while($Rs=mysql_fetch_array($result)) {
 
echo "<tr>".
      "<td>".$Rs["cod_alu"]."</td>".
      "<td>".$Rs["p_nom"]."</td>".
	  "<td>".$Rs["p_ape"]."</td>".
    
      // Establecemos un hipervínculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el número de cédula en su
      // dirección a través de la variable Cedula
      "<td><a href=modificar.php?codigo=".$Rs["cod_alu"].">Ver</a></td>".
    "</tr>";
 
}
 
}else{
 
echo "No hay productos registrados ";
 
}
// Cerramos la conexión
mysql_close($link);
echo" </center>";
	echo"</center>";
	

?>			
	</tbody>
	</table>			
	</center>	
	</br>
</center>			
		</div>	
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
				
					
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
				Av. Lucio Oquendo Nro. 3-51 La Concordia Diagonal  a La Funeraria CEICOTACH. San cristobal- Edo. Tachira<br>
			Telf:(0414)722.78.12 (044)706.11.74 (0416)67.655.47
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>


</body>
</html>
