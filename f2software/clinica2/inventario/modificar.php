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
<title>Modificar Articulo</title>
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
					<div class="text1"> </span></div>
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
				<h2>Modificar Productos</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			
			
			 <?php


  include_once('conexion.php');
  $link=conectarse() ;



if(isset($_POST["submit"])){

	$query = "UPDATE productos SET  modelo='".$_POST["modelo"]."', descriccion='".$_POST["descriccion"]."', marca='".$_POST["marca"]."', p_base='".$_POST["p_base"]."', p_publico='".$_POST["p_publico"]."' WHERE codigo='".$_POST["codigo"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo"</br>";
	echo"</br>";
	echo"<center>";
	echo "Se ha modificado el producto con exito ".$x1;
	 echo"</center>";

}else{



	 
	$x1=$_GET['codigo'];
	$query="SELECT * FROM productos WHERE codigo='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	if(mysql_num_rows($result) > 0){

	while($Rs=mysql_fetch_array($result)) {
	 
	?>
<center>
  
    <br>
	<form  method=Post name=frm action="modificar.php">
	    <table>
		
	  
	  <tr>
	    <td> Modelo</td>
	    <td><input name='modelo'  type='text' maxlength='20' value="<?php echo $Rs['modelo']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Descriccion</td>
	    <td><input name='descriccion'  type='text' maxlength='30' value="<?php echo $Rs['descriccion']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Marca</td>
	    <td><input name='marca'  type='text' maxlength='20' value="<?php echo $Rs['marca']; ?>"></td>
	    </tr>
	     
	     <tr>
	    <td> Precio base</td>
	    <td><input name='p_base'  type='text' maxlength='30' value="<?php echo $Rs['p_base']; ?>"></td>
	    </tr>
	     <tr>
	    <td> Precio al publico</td>
	    <td><input name='p_publico'  type='text' maxlength='30' value="<?php echo $Rs['p_publico']; ?>"></td>
	    </tr>
        </table>
	  </br>
      
	<center><input name='submit' type='submit' value='Modificar'></center>
	 
	
	</form>

	<?php
	}
	   
	}else{
		echo"</br>";
		echo"</br>";
		echo"<center>";
	    echo "No fu� posible realizar la operaci�n solicitada  ".$x1;
		echo"</center>";
	
	  echo"<center>";
  echo"<div class='button black'><a href='modificar1.php'>Intentar nuevamente</a></div>";
   echo"</center>";
	}
}

echo"</center>";

// Cerramos la conexi�n
mysql_close($link);
  
?>				
				
				

				
     
	

				
				
								
			
				</strong>
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
				</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>


