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
<title>ELIMINAR USUSARIO</title>
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
						<li ><a href="../historiap.php">Historias Pediatricas </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li id="menu_active"><a href="indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li><a onClick="return confirm('Esta seguro que deseas salir del sistema? perderas los registros que no se hayan guardado');"href="../cerrar.php">Salir </a></li>
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
				<h2>ELIMINAR USUARIO</h2>
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
</br>


<form action="borrarusuario.php" method="post" name="form">
</br>
</br>
   		<? echo'<select input type="text" name="cedula"> '.$options_admi.'</select>'; ?>
        
        
        <input type="submit" value="Borrar"/>
        </form>

 </center>  
   
<?php

include("../conectar.php");

$con=mysql_connect($host,$user,$pw)or die ("problemas en el server ");
mysql_select_db($db,$con);

$reg=mysql_query("SELECT cedula FROM administrador WHERE  cedula='$_POST[cedula]' ",$con);

echo"</br>";
echo"</br>";

echo"</br>";

echo"<center>";
if(mysql_fetch_array($reg))
{
	mysql_query("DELETE FROM administrador WHERE cedula='$_POST[cedula]'",$con);
echo "<script language='JavaScript'> alert('eliminados '); </script>";
die ("<script>window.location = 'borrarusuario.php'</script>");	
	}else{
		echo"";
	}
echo"</center>";	
echo"</br>";
echo"</br>";

?>
</fieldset>
				
				</strong></p>
								
			</article>
			<article class="col2 pad_left1">
				<h2></h2>
				<div class="wrapper marg_top pad_bot1">
					<figure class="left marg_right1"><img alt="" src="../images/farmaceutico.jpg"></figure>
					<br>
				
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
					<li><a href="../Researches.html">Transacciones</a></li>
					<li><a href="../Services.html">Informes</a></li>
					<li><a href="../Events.html">Sistema</a></li>
					<li class="bg_none"><a href="../Contacts.html">Salir</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
				Av. Lucio Oquendo Nro. 3-51 La Concordia Diagonal  a La Funeraria CEICOTACH. San cristobal- Edo. Tachira<br>
			Telf:(0414)722.78.12 (044)706.11.74 (0416)67.655.47		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

