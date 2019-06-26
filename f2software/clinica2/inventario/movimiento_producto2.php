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
						<li><a href="#">Pabellon</a></li>
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
				<h2>Movimiento Por Producto</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			
			
				
				
				</br>
				
			<?php	
$criterio = $_POST['criterio'];
$query_movimiento = ("SELECT * FROM productos WHERE  descriccion = '".$criterio."' ");
$movimiento = mysql_query($query_movimiento) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_movimiento = mysql_fetch_assoc($movimiento);
$totalRows_movimiento = mysql_num_rows($movimiento);

$query_des = ("SELECT * FROM mov_pro WHERE  descriccion_pro = '".$criterio."' ORDER BY fecha_pro ASC" );
$des = mysql_query($query_des) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_des = mysql_fetch_assoc($des);
?>

<center>
<table style="border:1px #FF0000; color:#000000; width:990px; text-align:center;">
<tr style="background:#CCCCCC;">
	
	
    <td>Descripcion</td>
	<td>Cantidad</td>
	<td>Tipo De Movimiento</td>
	<td>Usuario</td>
	<td>Fecha Movimiento</td>
		
	
</tr>
    <?php do { ?>
	<tr bgcolor='#FFF'>
	  
	
	  <td><?php echo $row_des['descriccion_pro']; ?></td>
      <td><?php echo $row_des['cantidad_pro']; ?></td>
	  <td><?php echo $row_des['tipo_pro']; ?></td>
	  <td><?php echo $row_des['usuario_pro']; ?></td>
	  <td><?php echo $row_des['fecha_pro']; ?></td>
	  	  
	  
	</tr>
	
	<?php } while ($row_des= mysql_fetch_assoc($des)); ?>
	<tr>
	
	
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
    </tr>
    <td></td>
    <td></td>
    <td></td>
	
	    

</table>
</br>
<table>
<tr>
<td bgcolor='#CCCCCC'><label><b>Cantidad Actual= </b></label></td>
		<td style="background: #CCCCCC"><b><?php echo $row_movimiento['cantidad']; ?></b></td>
		</tr>
	</table>
</center>

<?php mysql_free_result($des); ?>




         

     
	

				
				
								
			
				</strong>
				<a href="control_producto.php">Regresar</a>
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


