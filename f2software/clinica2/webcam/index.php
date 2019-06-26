<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 
require '../conectar.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HISTORIA PEDIATRICA</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">

<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
	<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css" />

<script type="text/javascript" src="js/webcam.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
    <script language="JavaScript">
		webcam.set_api_url( 'test.php' );//PHP adonde va a recibir la imagen y la va a guardar en el servidor
		webcam.set_quality( 90 ); // calidad de la imagen
		webcam.set_shutter_sound( true ); // Sonido de flash
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
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
					<li><center><figure class="left marg_right1"> </figure></center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li id="menu_active"><a href="pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li ><a href="../inventario/indexinventario.php">Inventario</a></li>
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
			<article class="pad_left2">
				<h2>FOTOS</h2>
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>
</br>

	<div class="main">
<body>
<div align="left" id="cuadro_camara">    
<table width="100%" height="144"><tr><td width="100" valign=top>
		<form>
		<input type=button value="Configurar" onClick="webcam.configure()" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="Tomar foto" onClick="webcam.freeze();mostrarboton();" class="botones_cam">
		&nbsp;&nbsp;
		<input type=button value="subir" onClick="do_upload();ocultarboton();" class="botones_cam" id="btnsubir" style="display:none;">
		&nbsp;&nbsp;
		<input type=button value="Reset" onClick="webcam.reset();ocultarboton();" class="botones_cam">
	</form>
	</td>
    <td width="263" valign=top>
	<script language="JavaScript">
	document.write( webcam.get_html(320, 240) );//dimensiones de la camara
	</script>
    </td>
    <td width="411">
	    <div id="upload_results" class="formulario" > </div>
  </td></tr></table>
</div>

    <div id="gallery">
    <ul>
  <?php  
  //Visto en : www.entrecodigos.net
  include("conexion.php");
  //Hacemos una consulta para mostrar las imagenes
  $consulta="select * from fotos order by id_foto desc";
  $busca_fotos=mysql_query($consulta,$conectar);
  while($row=mysql_fetch_array($busca_fotos)){
   $url=$row['id_foto'];  
   $nombre=$row['nombre']; 
   $des=$row['des'];
   //mostramos las imagenes
   echo "<li>
            <a href=\"fotos/".$url.".jpg\" title=\"$url - $des\" target=\"_blank\">
                <img src=\"fotos/".$url.".jpg\" width=\"150\" height=\"120\" alt=\"\" />
            </a>
        </li>";
  }
?>    
    </ul>
</div>
</body>
 
	</div>
  
		</div>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
		
		
		
     
     
  <ul>
 
 <li class='bg_none'> <input name="button" type="button" onclick="window.close();" value="Cerrar esta ventana" /> </li>

		
		
					
					
				
					
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