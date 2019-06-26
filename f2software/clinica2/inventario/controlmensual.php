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
				<h2>Control Mensual</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			
			
				
				
				</br>
				
			<?php

$query_movimiento = ("SELECT * FROM mov_pro, productos WHERE descriccion = descriccion_pro AND  fecha_pro > DATE_SUB( CURDATE( ) , INTERVAL DAYOFMONTH( CURDATE( ) )DAY ) ORDER BY fecha_pro DESC");
$movimiento = mysql_query($query_movimiento) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_movimiento = mysql_fetch_assoc($movimiento);
//terminamos la consulta de los movimientos de articulos
?>

<fieldset>
     
	 <legend></legend>
    <br>
<center>
<table style="border:1px #FF0000; color:#000000; width:900px; text-align:center;">
<tr style="background: #CCCCCC">
    
    <td><b>Descripcion</b></td>
	<td><b>Cantidad</b></td>
	<td><b>Tipo</b></td>
    <td><b>Usuario</b></td>
	<td><b>Fecha</b></td>

	
</tr>
  <?php do { ?>
    <tr bgcolor='#CCCCCC'>
    
  	  <td><?php echo $row_movimiento['descriccion_pro']; ?></td>
	 
	  <td><?php echo $row_movimiento['total']; ?></td>
	  <td><?php echo $row_movimiento['tipo_pro']; ?></td>
       <td><?php echo $row_movimiento['usuario_pro']; ?></td>
	 <?php
$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);	
$fecha = $row_movimiento['fecha_pro'];

?>

<td><?php echo date("d-m-y -  H:i:s", strtotime($fecha));?>  </td>

	 
	  
	  
	 
       
    </tr>
    <?php 
	

	 
	
	 $total1 += $row_movimiento['total'];
	

	
	
	
	      //mostramos los resultados de la busqueda
	      } while ($row_movimiento= mysql_fetch_assoc($movimiento)); ?>
	<tr>
	    
		
	
		
		<td style="background:#CCCCCC;"><b><?php echo "Totales:"; ?></b></td>
		<td style="background:#CCCCCC;"><b><?php echo "$total1"; ?></b></td>
		
	</tr>
	

</table>
</center>
<?php mysql_free_result($movimiento); ?>




         

     
	

				
				
								
			
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


