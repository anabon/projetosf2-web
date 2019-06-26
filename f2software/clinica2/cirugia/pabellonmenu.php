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
<title>menu cirugia</title>
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
<body id="page4">
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
						<li ><a title="ir a inicio" href="../index.php">Inicio</a></li>
						<li ><a title="historias pediatricas" href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li id="menu_active" ><a href="#">Pabellon</a></li>
						<li "><a href="../inventario/indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li class="bg_none"><a onClick="return confirm('Esta seguro que deseas salir del sistema?');" href="../cerrar.php">Salir</a></li>
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
			<article class="pad_left2">
				<h2>HOSPITALIZACION Y CIRUGIA</h2>
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>
<div class="main">
	
		<article class="pad_left2">
			<h2></h2>
			
			
			<div class="wrapper marg_top">
			
			<article class="col3 pad_left1">
					<a> &nbsp;</a>
				</article>
				
				<article class="col3">
					<a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><figure><img src="../images/page4_img2.jpg"  alt="" class="pad_bot1">
					<form  name="fe" action="historiac.php" method="post" >
	

	<input  name="btn1" type="submit" value="Agregar Paciente Nuevo">
    
    
  </figure></form>
					<p><strong>SIRVE PARA INGRESAR PACIENTES</strong><br></p>
				</article>
				
	

	
    

					
				<article class="col3 pad_left1">
					<figure>  <a  href="pacienteslista.php"><img src="../images/page4_img4.jpg" alt="" class="pad_bot1"></a>
					<a href="pacienteslista.php" class="link1">PACIENTES LISTA</a></figure></figure>
					<p><strong>LISTA DE PACIENTES YA REGISTRADOS</strong><br>
					</p>
				</article>
				
			</div>
			
		</article>
	</section>
</div>
<!--content end-->
<!--footer -->
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
