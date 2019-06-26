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
<title>precio nuevo</title>
<script src="../jquery/validarvacios.js"></script>
   <script src="../jquery/validar2.js"></script>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">

<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>

<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
  <script type="text/javascript">
            $(function(){
                //Para escribir solo numeros    
                $('#miCampo2').validCampoFranz('0123456789');
                $('#miCampo3').validCampoFranz('0123456789');
                $('#miCampo4').validCampoFranz('0123456789');
                    
            });
        </script>   
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
				<h2>Proveedor </h2>
				
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


	 <?php 
      
	
     
	
	
	 
     echo "<form id= 'formulario' action= 'guardar_provedor.php' method= 'post'>";

     
	
	 echo"<table>";
	 echo"<tr>";
	 echo"<td><labe><b>Codigo:<b/></td>";
	 echo"<td><input type='text' required name='codigo' placeholder='codigo...' ></label></td> ";
	 echo"</tr>";
	 
	
	  echo"<tr>";
	  echo"<td><label><b>Descriccion:</b></td>";
	 echo"<td><input type='text' required name='nombre' placeholder='nombre...' ></label></td>";
	 echo"</tr>";
	 
	  echo"<tr>";
	 echo"<td><b><label>Direccion:</b></td>";
	 echo"<td><input type='text' name='direccion'placeholder='direccion...' ></label></td>";
	   echo"</tr>";
	    
		 echo"<tr>";
	  echo"<td><label><b>Contacto:</b></td>";
	 echo"<td><input type='text' name='contacto' placeholder='contacto...' ></label></td>";
	  echo"</tr>";
	 
  echo"</br>";
	 
	 echo"<tr>";
	 echo "<td><input name= 'enviar' type= 'reset' value= 'Reset' ></td>";
	 echo "<td><input name= 'enviar' type= 'submit' value= 'Guardar'></td>";
      echo"</tr>";
	
	echo"</table>";
	 echo"</br>";
	  echo"</br>";
	
	 echo"<center>";
  echo"<div class='button black'><a href='eliminarpro.php'>Eliminar proveedor</a></div>";




	echo"</table>";
	?>
</fieldset>
				
				</strong></p>
								
			</article>
			<article class="col2 pad_left1">
				</br>
				<div class="wrapper marg_top pad_bot1">
					<figure class="left marg_right1"><img alt="" src="../images/pro.png"></figure></br>
					
				
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
					<li class="bg_none"><a href="kardexmemenu.php">Salir</a></li>
					
					
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
