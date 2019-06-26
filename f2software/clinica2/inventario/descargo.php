<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
require '../conexion.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 require 'select.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>cargo</title>
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
				<h2>Descargar Productos </h2>
				
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
			
				
				<p class="pad_bot2 marg_top"><strong>
				</br>
				
				
				<fieldset>
     
	
<section>

	<form method="post" action="descargo2.php" name="formulario" id="formulario">
	
<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fecha = date('Y-m-d H:i:s',$tiempo); 

 
    
	echo"<table>";
	 echo"<tr>";
	  
	echo '<td><input type="hidden" name="tipo" value="Ingreso" /></td>';
	
	echo"</tr>";
	 
	
	 
	 	echo"<tr>";
	echo '<td><label><b>usuario:</b></td>';
	echo'<td> <select name="usuario[]">'.$options_admin.'</select></label></td>';
	echo"</tr>";
	
	echo"<tr>";
	echo '<td><label><b>Descriccion:</b></td>';
	echo'<td> <select name="descriccion[]">'.$options_prd.'</select></label> </td>';
	echo"</tr>";

	echo"<tr>";
	echo '<td><label><b>Cantidad:</b></td>';
	echo'<td><input type="text" name="cantidad[]" required  placeholder="000..." size="30" maxlength="10" /></td>';
	echo"</tr>";	

	 echo"<tr>";
	echo '<td><label><b>motivo :</b> </td>';
	echo'<td><input type="text" name="motivo[]" required placeholder="Motivo del cargo..." size="30" maxlength="30" onkeypress="return permite(event, \'num\')" /></label></td>';
	echo"</tr>";
	echo"<tr>";
	
	echo '<td><input value=" '.$fecha.' " name="fecha[]" type="hidden" /></label></td>';
	 
	 echo"</tr>";
	echo '<br />';
		echo '<br />';
	
	 
 ?>
<!--// FIN construccion de los campos para ingresar los datos de los clientes.-->
<tr>
</br>
		<td><label for="ingreso"></label></td>
        <td><input type="submit" name="aceptar" id="aceptar" value="Descargar" class="uno"/>
        
        
		<input type="reset" name="borrar" id="borrar" value="Borrar Formulario" class="uno"/></td>
        <td><label for="borrar"></label></td>
        
        </tr>
        
        </table>
       
       
    </form>

</fieldset>
				
				</strong></p>
								
			</article>
			<article class="col2 pad_left1">
				</br>
				<div class="wrapper marg_top pad_bot1">
					<figure class="left marg_right1"><img alt="" src="../images/26.png"></figure></br>
					
				
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
				info . del sistema jond_14@gmail.com</br>
yonathan suarez 
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
