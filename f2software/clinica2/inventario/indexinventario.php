<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');



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
				<h2>Inventario Farmaceutico </h2>
				
			</article>
		</section>
	</div>
</div>
	<div class="main">
		<section id="content_top">
		<article class="pad_left2">
			
				<h2></h2>
				<div class="wrapper marg_top">
					
					<ul class="col2 list3">
				
					
						<a href="articulosmenu.php"> <h3>ARTICULOS</h3></a>
						<a href="transaccionesmenu.php"><h3>TRANSACCIOES</h3></a>
						<a href="kardexmenu.php"><h3>INFORMES</h3></a>
						
					</ul>
					
				
				<article class="col2 pad_left1">
				
				<div class="wrapper marg_top pad_bot1">
				</br>
					</br>
						
					<figure class="left marg_right1"><img alt=""  width='200' src="../images/farmacia.png"></figure></br>
					
				
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
				info . del sistema jond_14@gmail.com</br>
yonathan suarez 
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
