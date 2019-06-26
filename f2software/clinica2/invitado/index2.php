<?   

 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');




require '../conectar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Index invitado</title>
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
					<div class="text1"></span></div>
					</li>
						<li id="menu_active"><a href="index2.php">Inicio</a></li>
						<li ><a href="pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="pabellonmenu.php">Pabellon</a></li>
						<li><a href="indexinventario.php">Inventario</a></li>
					

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
			<article class="pad">
				<h2>sistema Intra-hospitalario </h2>
				
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
	<form  name="fe" action="historiap.php" method="post" id="ContactForm">
	
<br>
<br>
   <b>Busqueda Por Descripcion</b><br><br>
    <input name="txtbus" type=text   placeholder='nombre,apellido, etc... .....'>
    <br></br>
  <input  name="btn1" type="submit" value="Buscar">
	    
    
  </form>
  
  
			</article>
			<article class="col2 pad_left1">
				<h2>Ultimos Pacientes Agregados</h2>
				<?php

$query_movimiento = ("SELECT * FROM pacientep WHERE p_nom = p_nom AND fecha > DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY fecha DESC");

$movimiento = mysql_query($query_movimiento) or die ( "Error en query: $sql, el error  es: " . mysql_error() );

$Rs = mysql_fetch_assoc($movimiento);

?>
				
				<div class="wrapper marg_top pad_bot1">
					
	<table style="border:1px ; color: #000000; width:350px; text-align:center;">
<tr style="background: #A556AF ">
    <td>N</td>
    <td>NOMBRE</td>
	<td>APELLIDO</td>
	<td>OPERACIONES</td>
	
	

	
</tr>


<?
 do { 

?>
  <? echo  "<tr bgcolor='#FFFFFF'>".
  
      "<td>".$Rs["cod_alu"]."</td>".
      "<td>".$Rs["p_nom"]."</td>".
	  "<td>".$Rs["p_ape"]."</td>".
    
      // Establecemos un hiperv�nculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el n�mero de c�dula en su
      // direcci�n a trav�s de la variable Cedula
      "<td><a href=modificar.php?codigo=".$Rs["cod_alu"].">Ver</a></td>".
    "</tr>";

	 ?>
       
    </tr><?
	   //mostramos los resultados de la busqueda
	      } while ($Rs= mysql_fetch_assoc($movimiento)); ?>
	



<?php mysql_free_result($movimiento); ?>
</table>
				
			
		</div>
		
	</section>
</div>

<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					<li><? echo "INVITADO <b>".$_SESSION['admin']." </b>"; ?> </li>
					
					<li class="bg_none"><? echo "<b>$fecha </b>"; ?></li>
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
