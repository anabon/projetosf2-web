<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
require '../conectar.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 require 'select.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Modificar Articulo</title>
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
					<li><center><figure class="left marg_right1"></figure>
					</center>
					<div class="text1"> </span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li id="menu_active"><a href="indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li class="bg_none"><a href="../cerrar.php">Salir</a></li>
					</ul>
				</nav>
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
			<article class="pad">
				<h2>Modificar Productos</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			
			
			<?php
 
  
  include_once('conexion.php');
  $link=conectarse() ;
 
$query="SELECT * FROM productos ORDER BY codigo ASC";
 
$result=mysql_query($query,$link) or die("Error: ".mysql_error());
 
// Si no se encuentran registros en la tabla usuarios solo resta mostrar
// el mensaje correspondiente, si se encuentra uno o m�s registros se recorre
// la tabla con la posibilidad de recoger los diferentes campos mediante la variable $Rs
 
if(mysql_num_rows($result) > 0){
 
// El encabezado de la tabla
?>

</BR>
     
<center>
<table style="border:1px  #666666; color:# 666666 ; width:800px; text-align:center;">
  <tbody>
    <tr style="background:#6666666;">
      <td > Codigo</td>
      <td > Descriccion</td>
	  <td > Modelo</td>
	  <td > </td>
   
   
    </tr>
 
<?php     
 
  while($Rs=mysql_fetch_array($result)) {
 
echo "<tr>".
      "<td>".$Rs["codigo"]."</td>".
	  "<td>".$Rs["descriccion"]."</td>".
      "<td>".$Rs["modelo"]."</td>".
   
      // Establecemos un hiperv�nculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el n�mero de c�dula en su
      // direcci�n a trav�s de la variable Cedula
      "<td><a href=modificar.php?codigo=".$Rs["codigo"].">Modificar</a></td>".
    "</tr>";
	echo "</table>";
 
}
 
}else{
 
echo "No hay productos registrados ";
 
}
// Cerramos la conexi�n
mysql_close($link);
echo" </center>";
	echo"</center>";
	

?>
				
				
				

				
     
	

				
				
								
			
				</strong>
			</article>
		</div>
		
	</section>
</div>

<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
						<li><a href="articulosmenu.php">Articulos</a></li>
					<li><a href="transaccionesmenu.php">Transacciones</a></li>
					<li class="bg_none"><a href="kardexmenu.php">Informes</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
				</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>


