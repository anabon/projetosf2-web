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
<title></title>
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
				<h2>INGRESAR PRODUCTO </h2>
				
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

<form id= 'formulario' action= 'guardar_ingreso.php' method= 'post'>
</br>
   <label>CODIGO:</label>
   <input name='codigo' type="text" class="txtcodigo" id="miCampo2" placeholder='.........................................................................................'/>
   
   </br>
      <label> DESCRIPCION :</label>
   <input name='descriccion' type="text" class="txtdescriccion" placeholder='....................................'/>
   
   
   </br>
   
     <label> TIPO :</label>
   <select class="txtmodelo" name='modelo'>
     <option value="">......................................</option>
     <option value="pastillas">PASTILLAS</option>
     <option value="insumos">INSUMOS</option>
     <option value="otros">OTROS</option>
   </select>
   
   </br>
  
     <label> Precio base:</label>
   <input name='p_base' type="text"  id="miCampo4"  placeholder='......................................'/>
   </br>
     <label> Precio Publico:</label>
   <input  name='p_publico' type="text" class="txtpreciop" id="miCampo5" placeholder=' ...............................'/>
   </br>
 
   <?
   echo"<label>Proveedor:</label>
	<select name='proveedor'>'.$options_prov.'</select>";
    
 
   
     
   echo"</br></br>";



 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name= 'enviar' type= 'reset' value= 'reset' >";
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name= 'enviar' type= 'submit' value= 'Guardar'>";
  ?>

<center>

</section>
</center>
</form>

</fieldset>
				
				</strong></p>
								
			</article>
			<article class="col2 pad_left1">
				<h2>INVENTARIO</h2>
				<div class="wrapper marg_top pad_bot1">
					<figure class="left marg_right1"><img alt="" src="../images/a.jpg"></figure></br>
					<br> </a> <a href="inventario.php" class="link1">Ver Inventario</a>
				
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
