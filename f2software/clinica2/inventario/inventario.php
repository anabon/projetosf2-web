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
				<h2>INVENTARIO</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			
			
				
				
				</br>
				
				<?php


/* Abrir conexion a la Base de Datos */ 
$conexion=mysql_connect('localhost','root','1234'); 
$consulta=mysql_db_query('clinica', 'select * from productos order by codigo asc'); 

	$query_movimiento = ("SELECT * FROM productos ");


$query_m = ("SELECT * FROM  productos,mov_pro WHERE descriccion = descriccion_pro AND datediff(now(),fecha_pro)=0 ORDER BY fecha_pro DESC");
$total = mysql_query($query_m) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_total = mysql_fetch_assoc($total);

$movimiento = mysql_query($query_movimiento) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_movimiento = mysql_fetch_assoc($movimiento);
?>


         
<center>
<table style="border:1px  #666666; color:# 666666 ; width:800px; text-align:center;">
<tr style="background:#6666666;">
<? 
	
	echo "<td>Codigo</td><td>Descripcion</td><td>modelo</td><td>Cantidad</td><td>Precio Base</td><td>Precio Publico</td></tr>  ";
	

/* Mostrar la Consulta */ 
while ($valores = mysql_fetch_array($consulta)) { 
echo "<tr bgcolor=' #666666'><br><td>". $valores['codigo'] . "</td><td>". $valores['descriccion'] . "</td><td>". $valores['modelo'] . "</td><td>". $valores['cantidad'] . "</td><td>". $valores['p_base'] . "</td><td>". $valores['p_publico'] . "</td></tr>"; 
} // while 
/* Cerrar conexion a la BD */ 
mysql_free_result($consulta); 
mysql_close(); 
		echo "</center>";
		
	

?>
  <?php do { ?>
    <tr bgcolor='# 999999 '>
     
	  
	  <td><?php  $row_movimiento['p_publico']; ?></td>
      <td><?php  $row_movimiento['cantidad']; ?></td>
    </tr>
    <?php 
	

	
	
	 
	$total += $row_movimiento['cantidad'];
	$total2 += $row_movimiento['p_publico'];
	
	      //mostramos los resultados de la busqueda
	      } while ($row_movimiento= mysql_fetch_assoc($movimiento)); ?>
	


</table> 
				
     
	

				
				
								
			
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

