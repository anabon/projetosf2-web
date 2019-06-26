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
<title>Index</title>
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
				<h2> </h2>
				
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
 
 $horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fecha = date('Y-m-d H:i:s',$tiempo); 

  include_once('conexion.php');
  $link=conectarse() ;
  if($link)
	{
		 $x1=$_POST['codigo'];
		 $x2=$_POST['nombre'];
		 $x3=$_POST['direccion'];
		 $x4=$_POST['contacto'];
		
		 
		 if($x1=="" or $x2=="" or $x3=="")
				{
					echo "<hgroup>
   <h1>Campos Vacios</h1>
   </hgroup>";
					echo "<br>";
					
				}
		else
		   {
			$sqlconsulta="select * from clinica.provedor where trim(codigo) like ".$x1;
			$sqlresultado=mysql_fetch_row(mysql_query($sqlconsulta));
			if($sqlresultado>0)
			  { 
				echo "<hgroup>
   <h1>El Proveedor Ya Existe</h1>
   </hgroup>";
					echo "<br>";	echo "<br>";
				 
			  }
			else
			 {
				$ssq = "INSERT INTO clinica.provedor (codigo, nombre, direccion, contacto) 
				VALUES ('" . $x1. "','" . $x2. "','" . $x3. "','" . $x4."')";	
			    if(mysql_query($ssq))
		           {
			        echo "<hgroup>
   <h1>Proveedor Registrado</h1>
   <h2>El Proveedor Fue Registrado Con Exito. 
   </h2>
   </hgroup>";
					 echo "<br>";
					 echo "<br>";
					 echo "<hr>";
					
		           }
		        else
		           {
		             echo "error en el insert" .mysql_error();
		             
		           }
		     }
		   }
	 }
	  echo"<div class='button black'><a href='provedores.php'>nuevo proveedor</a></div>";
	  	  
?>


</fieldset>
				
				</strong></p>
								
			</article>
			<article class="col2 pad_left1">
				</br>
				</br>
				</br>
				</br>
				<div class="wrapper marg_top pad_bot1">
					<figure class="left marg_right1"><img alt="" src="../images/pastillas.png"></figure></br>
					
				
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
			Telf:(0414)722.78.12 (044)706.11.74 (0416)67.655.47
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
