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
<title>borrar articulo</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="reset.css" type="text/css" media="all">
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
					<li><center><figure class="left marg_right1"> </figure></center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li id="menu_active"><a href="#">Pabellon</a></li>
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
				<h2></h2>
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
<center>
   <?php


  include_once('../inventario/conexion.php');
  $link=conectarse() ;



if(isset($_POST["submit"])){

	$query = "UPDATE pabellonp SET  p_nom='".$_POST["p_nom"]."' , p_ape='".$_POST["p_ape"]."' WHERE cod_alu='".$_POST["cod_alu"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo"</br>";
	echo"</br>";
	echo"<center>";
	echo "Se ha modificado el producto con exito ".$x1;
	 echo"</center>";

}else{



	 
	$x1=$_GET['codigo'];
	$query="SELECT * FROM pabellonp WHERE cod_alu='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	if(mysql_num_rows($result) > 0){

	while($Rs=mysql_fetch_array($result)) {
	 
	?>
	<form  name="fe" action="evolucionn.php" method="post" id="ContactForm">
	
</br>
  
	
    Codigo:<input name="txtbus" type=text  value='<? echo $Rs['cod_alu'] ?>'>
    <input  name="btn1" type="submit" value="Agregar Nueva Evolucion">
	
  </form>
  
<center>
  
    <br>
	<form  method=Post name=frm action="modificar.php">
	  <table style="border:1px  #666666; color:# 666666 ; width:100%;  ">
        <tr >
          <td>Nombre:
          <input name='modelo'  type='text' maxlength='40'  size='50' value="<?php echo $Rs['p_nom']; ?>">
	
          Apellido:
          <input name='modelo'  type='text' maxlength='45'  size='50' value="<?php echo $Rs['p_ape']; ?>"></td>
        </tr>

      </table>
	  </br> 
	
	</form>
	
	
	
	EVOLUCIONES
	</br>
	<?php	
$x1=$_GET['codigo'];
$query_movimiento = ("SELECT * FROM pabellonp WHERE  cod_alu = '".$x1."' ");
$movimiento = mysql_query($query_movimiento) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_movimiento = mysql_fetch_assoc($movimiento);
$totalRows_movimiento = mysql_num_rows($movimiento);

$query_des = ("SELECT * FROM evolucionc WHERE  cod_alu = '".$x1."' ORDER BY fecha ASC" );
$des = mysql_query($query_des) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_des = mysql_fetch_assoc($des);
?>
</br>

<center>


 <table width="100%" border="0"> 
<tr  style="background: #CCCCCC;  text-align:center; cellspacing=:20; ">
	
	
     <td center width="5%"  >FECHA</td>
    <td width="10%">SERVICIO</td>
	<td width="85%">EVOLUCION MEDICA</td>
	
	
	
		
	


</tr>
    <?php do { ?>
	<tr center>
	  
	   <td center width="10%" bgcolor="#CCCCCC"><?php echo $row_des['fecha']; ?> </td>
	  <td  width="10%" bgcolor="#FFFFFF"><?php echo $row_des['servicio']; ?></td>
      <td width="45%" bgcolor="#C4C4C4"><?php echo $row_des['evolucion']; ?></td>
	  
	 
	
	  	  
	 
	</tr>
	
	<?php } while ($row_des= mysql_fetch_assoc($des)); ?>
	<tr>
	
	<td bgcolor="#0033FF"> </td>
	<td></td>
	<td></td>
    </tr>
	

</table>


</center>

<?php mysql_free_result($des); ?>

	<?php
	}
	   
	}else{
		
		echo"<center>";
	    echo "No fu posible realizar la operacin solicitada  ".$x1;
		echo"</center>";
	
	  echo"<center>";
  echo"<div class='button black'><a href='modificar.php'>Intentar nuevamente</a></div>";
   echo"</center>";
	}
}

echo"</center>";

// Cerramos la conexin
mysql_close($link);
  
?>
</br>
<div  input type="submit"><a href="pacienteslista.php">volver a lista de pacientes</a></div>
  </center>	
		

		
		</div>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
		
			<nav>
		<?php
 //no se
  
  include_once('../inventario/conexion.php');
  $link=conectarse() ;
 



  
 
 

     
     
   
   echo   "<li><a href=modificar.php?codigo=".$x1.">DATOS GENERALES</a></li>";
 


		echo "<li><a href=gasas2.php?codigo=".$x1.">CONTROL DE GASAS Y COMPRESAS</a></li>";
		
		?>
					
					
					<li class="bg_none"><a href="../Researches.html">IMPRIMIR EVOLUCIONES</a></li>
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