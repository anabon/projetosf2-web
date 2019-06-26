<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');

require '../conectar.php'; 
require 'select.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Index Inventario</title>
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

<div class="body3">
	<div class="main">
		<section id="content_top">
			<article class="pad">
				<h2>ELIMINAR PROVEEDOR </h2>
				
			</article>
		</section>
	</div>
</div>
	<div class="main">
		<section id="content_top">
		
				<h2></h2>
				<div class="wrapper marg_top">
					
				   
   <form action="eliminar_pro.php" method="post" name="form">
   		<? echo'<select input type="text" name="nombre"> '.$options_prov.'</select>'; ?>
        
        
        <input type="submit" value="Borrar"/>
        </form>
		<?
		include("../conectar.php");

$con=mysql_connect($host,$user,$pw)or die ("problemas en el server ");
mysql_select_db($db,$con);

$reg=mysql_query("SELECT codigo FROM provedor WHERE  nombre='$_POST[nombre]' ",$con);

echo"</br>";
echo"</br>";
echo"</br>";
echo"<center>";
if(mysql_fetch_array($reg))
{
	mysql_query("DELETE FROM provedor WHERE nombre='$_POST[nombre]'",$con);
echo"provedor eliminado ";	
	}else{
		echo"";
	}
echo"</center>";	?>
				</div>
					
		</article>
			<article class="col2 pad_left1">
				
				
			
					
				
			</article>
		</div>
				
				</br>
					
								
			</article>
			
		</section>
	</div>
</div>

		
	</section>
</div>




<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
				<li ><a href="indexinventario.php">REGRESAR</a></li>
					<li><? echo "Bienvenido Dr. <b>".$_SESSION['admin']." </b>"; ?> </li>
					
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
