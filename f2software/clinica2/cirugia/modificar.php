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
<title>historia clinica</title>
<meta charset="utf-8">

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
<body id="page5">
<div class="body2">

	
	<div class="main"><div class="ic"> </div>
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
				<?//?>
			</div>
		</header>
	</div>
</div>
			
<!--header end-->
<!--content -->



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
	

  <center>
    <br>
	
	
	  

<table width="90%" border="0"> 
			<tr  style="background: #CCCCCC">
	
    <form  name="fe" action="editarh.php" method="post" id="ContactForm">
	
          <TD width="100%"  >Codigo de Paciente:<input name="txtbus" type=text  value='<? echo $Rs['cod_alu'] ?>'>
          <input type="submit" name="btn1" value="Eliminar" />
		  <input  name="btn1" type="submit" value="Editar"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  SERVICIO
      <input name='serv'  placeholder=".........................................................................................................."  type='text' maxlength='55' required   value="<?php echo $Rs['servicio']; ?>">
		  </td>
		  </tr>
		  </form>
		  </table>
		
	<form  method=Post name=frm action="modificar.php">
	  
	

  <table width="90%" border="0">
  <tr>
   
    <td width="50%"> APELLIDO
      <input name='txtape'    type='text' maxlength='80' required  size='74' value="<?php echo $Rs['p_ape']; ?>"></td>
    <td width="50%"> NOMBRE
      <input name='txtnom'  type='text' maxlength='98' required  size='76' value="<?php echo $Rs['p_nom']; ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td width="10%">
	  SEXO <?php echo $Rs['p_sex']; ?>
	</td>
    <td width="40%"> ESTADO CIVIL <input name='e_civil'  type='text'  size='53' maxlength='98' required   value="<?php echo $Rs['e_civil']; ?>"></td>
    <td width="50%"> OCUPACION <input name='ocupacion'  type='text'  size='72' maxlength='98' required   value="<?php echo $Rs['ocupacion']; ?>"></td>
	
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td>LUGAR DE NACIMIENTO<input name='l_nacimiento'  type='text'  size='40' maxlength='98' required   value="<?php echo $Rs['l_nacimiento']; ?>"></td>
    <td> FECHA DE NACIMIENTO <input name='b'  type='text' maxlength='98' required  size='76' value="<?php echo $Rs['f_nacimiento']; ?>"> 
      
       </td>
    <td> EDAD: 
         <?php echo $Rs['p_edad']; ?></td>
		  <td> NACIONALIDAD:<input name='nacio'  type='text'  size='40' maxlength='98' required   value="<?php echo $Rs['nacio']; ?>"> 
          </td>
  </tr>
  </table>
   
  <table  width="90%" border="0">
  <tr>
    <td width="100%">DIRECCION ACTUAL COMPLETA     
      <input name='direc_actual'  type='text'  size='142' maxlength='98' required   value="<?php echo $Rs['direc_actual']; ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    
    <td width="50%">AVISAR EN CASO DE EMERGENCIAS A: <input name='avisara'  type='text'  size='45' maxlength='98' required   value="<?php echo $Rs['avisara']; ?>"></td>
    <td width="50%">PARENTESCO <input name='parentesco'  type='text'  size='72' maxlength='98' required   value="<?php echo $Rs['parentesco']; ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td width="100%" > DIRECCION  <input name='direc2'  type='text'  size='162' maxlength='98' required   value="<?php echo $Rs['direc2']; ?>"></td>
    
  </tr>
  </table>
  <table width="90%" border="0">
  <tr >
    <td width="30%">FECHA DE INGRESO  <input name='f_ingreso'  type='text'  size='' maxlength='98' required   value="<?php echo $Rs['f_ingreso']; ?>"></td>
   <td width="30%">HORA<input name='hora'  type='hora'  size='' maxlength='98' required   value="<?php echo $Rs['hora']; ?>"> </td>
	 <td width="30%">FECHA DE ADMISION ANTERIOR <input name='f_admi_ante'  type='text'  size='' maxlength='98' required   value="<?php echo $Rs['f_admi_ante']; ?>"></td>
  </tr>
  </table>
  
  <table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;MOTIVO DE LA CONSULTA</td>
   
  </tr>
</table>
<table width="90%" border="0">
  <tr>
    <td><input name='m_consul'   type='text'  size='180' maxlength='98' required   value="<?php echo $Rs['m_consul']; ?>"></td>

  </tr>
</table>
 <table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;ENFERMEDAD ACTUAL   &nbsp;&nbsp;&nbsp;&nbsp;(hacer relato conciso y completo de las dolencias. indicando fecha de comienzo duracion y tratamento de cada una de ella)</td>
   
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td  width="100%"  ><textarea  name="e_actual"  class="element textarea medium" value="<?php echo $var14?>" > <?php echo $Rs['e_actual']; ?></textarea></td>
  
  </tr>
</table  >
<table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;</td>
   
  </tr>
</table>

<table  width="90%" border="0">
  <tr>
    <td width="75%"> DIAGNOSTICO PROVICIONAL &nbsp;&nbsp;&nbsp; <input name='diacno_p'  type='text'  size='95' maxlength='98' required   value="<?php echo $Rs['diacno_p']; ?>"></td>
   <td width="30%" >
	 EGRESO DE CURACION  <input name='sex'  type='text' maxlength='98' required  size='76' value="<?php echo $Rs['agre_c']; ?>">
  
		</td>
  </tr>
</table>


  
		
    
 
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO PRINCIPIO-FINAL &nbsp;&nbsp;&nbsp; <input name='diac_p_f'  type='text'  size='145' maxlength='98' required   value="<?php echo $Rs['diac_p_f']; ?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO ANATOMOPATOLOGICO &nbsp;&nbsp;&nbsp; <input name='d_anatomo'  type='text'  size='110' maxlength='98' required   value="<?php echo $Rs['d_anatomo']; ?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO ASOCIADO &nbsp;&nbsp;&nbsp; <input name='d_asoc'  type='text'  size='145' maxlength='98' required   value="<?php echo $Rs['d_asoc']; ?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>INTERVENCION PRINCIPAL &nbsp;&nbsp;&nbsp; <input name='inter_p'  type='text'  size='145' maxlength='98' required   value="<?php echo $Rs['inter_s']; ?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>INTERVENCION SECUNDARIA &nbsp;&nbsp;&nbsp; <input name='inter_s'  type='text'  size='145' maxlength='98' required   value="<?php echo $Rs['inter_s']; ?>"></td>
 
  </tr>
</table>

	
	</center>
		

	<?php
	}
	   
	}else{
		
		echo"<center>";
	    echo "No fué posible realizar la operación solicitada  ".$x1;
		echo"</center>";
	
	  echo"<center>";
  echo"<div class='button black'><a href='modificar.php'>Intentar nuevamente</a></div>";
   echo"</center>";
	}
}

echo"</center>";
echo"</form>";

// Cerramos la conexión
mysql_close($link);
  
?>
<center>
<a href="pacienteslista.php">volver a lista de pacientes</a>
  </center>	
  
	
  
		</div>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
		
		<?php
 //no se
  
  include_once('../inventario/conexion.php');
  $link=conectarse() ;
     
     
   echo "<ul>";
   echo   "<li><a href=evoluciones.php?codigo=".$x1.">Evoluciones</a></li>";
  echo   "<li><a href=gasas2.php?codigo=".$x1.">GASAS Y COMPRESAS</a></li>";
echo "<li class='bg_none'><a href=modificarpdf.php?codigo=".$x1.">Imprimir Expediente</a></li>";

		
		
		?>
		
					
					
				
					
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
