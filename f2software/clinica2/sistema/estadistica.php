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
<title>lista de pacientes</title>
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
					<li><center><figure class="left marg_right1"> </figure></center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li ><a href="../inventario/indexinventario.php">Inventario</a></li>
						<li id="menu_active"><a href="../sistema/sistemamenu.php">Sistema</a></li>
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
				
				
			<div class="wrapper marg_top">
					<figure class="left marg_right1"><img src="images/logo1.png" alt=""></figure>
					</br> <h2 class="pad_bot2"> Pacientes Pediatria  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRAFICOS </h2>
					
				</div>
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>


<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
	
			<!--inventario de pacientes-->	
		
		
 <?php
 
  
  
include_once("config.php");

include_once('../inventario/conexion.php');
  $link=conectarse() ;
 



$sexo=" select p_sex, count(*) as p_sex1
    from pacientep
group by p_sex";



$sexo2 = mysql_query($sexo, $con);
$sexo3 = mysql_num_rows($sexo2);

$result=mysql_query($sexo,$link) or die("Error: ".mysql_error());
	echo "</br>"; 
	
	
	echo '<table style="border:1px  #666666; color:# 666666 ; width:40%;">';
	echo "<tr bgcolor='# 999999 '>";
	echo "<td style='color: #0000' >";
	
	echo ' CLASIFICACION POR SEXO:';
	echo "</td>"; 
	echo "</tr>"; 
	if(mysql_num_rows($result) ){

	while($Rs=mysql_fetch_array($result)) {
 	echo "<tr style='color: #0000'>";
  echo "<td>";
 
   
  echo "<a style='color: #0000'>".$Rs['p_sex']."</a>";
  echo '<a style="color: #0000">  </a>';
echo "</td>"; 
 echo "<td >";
  echo $Rs['p_sex1']; 
echo "</td>"; 
echo "</tr>"; 


}
 
}

$consulta_noticias = "SELECT * FROM pacientep";
$rs_noticias = mysql_query($consulta_noticias, $con);
$num_total_registros = mysql_num_rows($rs_noticias);
//Si hay registros


	//pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra
	
echo "<tr>"; 
echo "<td>"; 
echo '<a style="color: #0000"> PACIENTES REGISTRADOS:</a>';
echo "</td>"; 
echo "<td>";
 
	echo  $num_total_registros ;
echo "</center>";	
	echo "</td>"; 
echo "</tr>"; 

	
	
include_once('../inventario/conexion.php');
  $link=conectarse() ;
		
$rango= "select sum(case when edad2 between 0 and 2 then 1 else 0 end) p_edad0a2, sum(case when edad2 between 3 and 5 then 1 else 0 end) p_edad3a5, sum(case when edad2 between 6 and 7 then 1 else 0 end) p_edad6a7, sum(case when edad2 between 8 and 15 then 1 else 0 end) p_edad8a15 from pacientep";


$rango1 = mysql_query($rango, $con);
$rango2 = mysql_num_rows($rango1);

$res=mysql_query($rango,$link) or die("Error: ".mysql_error());
echo "<tr>"; 
echo "<td>"; 	 
	echo "RANGO DE EDADES";
	echo "</td>";
	echo "</tr>";
	echo "</br>";
	if(mysql_num_rows($res) ){

	while($Rs=mysql_fetch_array($res)) {
 echo "<tr>"; 
 echo "<td>"; 	
echo '<a style="color: #0000"> EDADES DE  0 a 2: </a>';
   echo "</td>";
	
	 echo "<td>"; 	
  echo $Rs['p_edad0a2'];
  echo "</td>";
   echo "<tr>"; 
 echo "<td>"; 	
echo '<a style="color: #0000"> EDADES DE  3 a 5: </a>';
   echo "</td>";
	
	 echo "<td>"; 	
  echo $Rs['p_edad3a5'];
  echo "</td>";
  echo "</tr>";
  echo "</tr>";
   echo "<tr>"; 
 echo "<td>"; 	

  echo '<a style="color: #0000  " >EDADES DE 6 a 7: </a>';
  echo "</td>";
 
   echo "<td>"; 	
  echo $Rs['p_edad6a7']; 
   echo "<td>"; 	
    echo "</tr>";
	echo "<tr>"; 
 echo "<td>"; 	
echo '<a style="color: #0000"> EDADES DE  8 a 15: </a>';
   echo "</td>";
	
	 echo "<td>"; 	
  echo $Rs['p_edad8a15'];
  echo "</td>";
  echo "</tr>";
}
}




	$consulta = "SELECT * FROM evolucion";
$rs_no = mysql_query($consulta, $con);
$num = mysql_num_rows($rs_no);
//Si hay registros


	//pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra
	
	 echo "<tr>"; 
 echo "<td>"; 	
	echo 'NUMERO / EVOLUCIONES';
echo "</td>"; 
echo "<td>"; 		
	echo "$num ";

echo "</td>"; 	
    echo "</tr>";
	
	echo "</br>";
 echo "<tr>"; 
 echo "<td>"; 	
		?>	
		<script language="JavaScript" type="text/javascript">
<!--//BEGIN Script

function new_window(url) {

link = window.open(url,"Link","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=yes,resizable=0,width=430,height=300,left=80,top=180");

}
//END Script-->
</script></br>
             <center>    <a href="javascript:new_window('../grafico.php')"> 
                    <img src='../images/38797.png' width='40' alt='Edicion' title='GENERAR GRAFICA DE EDADES REGISTRADAS'></a></center>
		</td>
		</tr> 
 	
		
		</table>	
		</article>
			<article class="col2 pad_left1">
	</br>
				
				
					<figure class="left marg_right1"><img src="../grafico.php" alt="" border="0">
					<strong>
			
				<div class="wrapper marg_top pad_bot1">
					
					<strong></strong> <br>
					ESTADISTICA CIRUGIA
					<figure class="left marg_right1"><img src="../grafico2.php" alt="" border="0"></figure>
					
					 <a href="javascript:new_window('../graficos2.php')"> ver</a> 
						</div>
			</article>
		</div>
				</div>
			</article>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					<li class="bg_none"></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
				<? echo "Bienvenido Dr. <b>".$_SESSION['admin']." </b>"; ?>
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
