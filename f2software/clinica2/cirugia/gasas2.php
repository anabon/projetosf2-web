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
						<li><a href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
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
if($btn=="Actualizar"){
$cod=$_POST["txtcod"];
$f_ingreso=$_POST["f_ingreso"];
$a=$_POST["1"];
$b=$_POST["2"];
$c=$_POST["3"];
$d=$_POST["4"];
$e=$_POST["5"];
$f=$_POST["6"];
$g=$_POST["7"];
$h=$_POST["8"];
$i=$_POST["9"];
$j=$_POST["10"];
$k=$_POST["11"];
$l=$_POST["12"];
$m=$_POST["13"];
$n=$_POST["14"];

if($a=="" or $b=="" )
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {

$sql="update gasas set fecha='$f_ingreso',p_nom='$a',t_i='$b',ciru='$c',p_a='$d',s_a='$e',aneste='$f'  ,instru='$g' 
,circu='$h',c_c='$i' ,n_c='j',obser='$k',biop='$l',dren='$m',recu='$n'
where cod_alu='$cod'";




$cs=mysql_query($sql,$cn);
echo "<script> alert('se actualiso correctamente')</script>";
		}


}
  include_once('../inventario/conexion.php');
  $link=conectarse() ;



if(isset($_POST["submit"])){

	$query = "UPDATE gasas SET  p_nom='".$_POST["p_nom"]."' , p_ape='".$_POST["p_ape"]."' WHERE cod_alu='".$_POST["cod_alu"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo"</br>";
	echo"</br>";
	echo"<center>";
	echo "Se ha modificado el producto con exito ".$x1;
	 echo"</center>";

}else{



	 
	$x1=$_GET['codigo'];
	$query="SELECT * FROM gasas WHERE cod_alu='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	if(mysql_num_rows($result) > 0){

	while($Rs=mysql_fetch_array($result)) {
	 
	?>
	

  <center>
    <br>
	
	
	  


<center>
<form name="fe" action="" method="post" id="ContactForm" enctype="multipart/form-data">
  <table width="90%" border="0">
  <tr  style="background: #CCCCCC">
   
    <td width="100%"> &nbsp; &nbsp; DATOS DEL PACIENTE 
	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FECHA DE INGRESO  <input name='f_ingreso'  type='text'  size='' maxlength='98' required   value="<? echo $Rs['fecha'] ?>">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N DE HISTORIA 
      <input name='txtcod'  placeholder=".........................................................................................................."  type='text' maxlength='55' required   value="<? echo $Rs['cod_alu'] ?>"></td>
	  
  </tr>

  
  </table>
  <table width="90%" border="0">
  <tr>
   
    <td width="50%"> NOMBRE DE USUARIO
      <input name='1'    type='text' maxlength='80' required  size='' value="<? echo $Rs['p_nom'] ?>"></td>
    <td width="50%"> TIPO DE INTERVENCION
      <input name='2'  type='text' maxlength='98' required  size='' value="<? echo $Rs['t_i'] ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
   
    <td width="40%"> CIRUJANO<input name='3'  type='text'  size='' maxlength='98'   value="<? echo $Rs['ciru'] ?>"></td>
    <td width="50%"> PRIMER AYUDANTE<input name='4'  type='text'  size='' maxlength='98'    value="<? echo $Rs['p_a'] ?>"></td>
	
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td>SEGUNDO AYUDANTE<input name='5'  type='text'  size='' maxlength='98' required   value="<? echo $Rs['s_a'] ?>"></td>
  
		  <td> ANESTESIOLOGO:<input name='6'  type='text'  size='' maxlength='98'    value="<? echo $Rs['aneste'] ?>"> 
          </td>
  </tr>

  </table>
   
  <table  width="90%" border="0">
  <tr>
    <td width="50%">INSTRUMENTISTA     
      <input name='7'  type='text'  size='' maxlength=''    value="<? echo $Rs['instru'] ?>"></td>
  
  
  
    
    <td width="50%">CIRCULANTE: <input name='8'  type='text'  size='' maxlength='98'    value="<? echo $Rs['circu'] ?>"></td>
    </tr>
	</table>
	
	<table width="40%" border="0" cellspacing="" cellpadding="">
  <tr>
    <th scope="col">COMPRESAS</th>
    <th scope="col">CANTIDAD</th>
    <th scope="col">GASAS</th>
    <th scope="col">CANTIDAD</th>
  </tr>
  <tr>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='avisara'  type='text'     value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table>
<tr>
<td>
<label class="description" for="element_7">CUENTA COMPLETA</label>
		<span>
			<input id="element_7_1" name="9" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="9" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>
<td>
<label class="description" for="element_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SE NOTIFICO AL CIRUJANO</label>
		<span>
			<input id="element_7_1" name="10" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="10" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>
</tr>

</table>

    <table  width="90%" border="0">
  <tr>
    <td width="100">OBSERVACION     
      <input name='11'  type='text'  size='150%' maxlength=''    value="<? echo $Rs['obser'] ?>"></td>

	</tr>
	</table>
	<table>
<tr>
<td>
<label class="description" for="element_7">BIOPSIA:</label>
		<span>
			<input id="element_7_1" name="12" class="element checkbox" type="checkbox" value="<? echo $Rs['biop'] ?>" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="12" class="element checkbox" type="checkbox" value="<? echo $Rs['biop'] ?>" />
<label class="choice" for="element_7_2">NO</label>

</td>
<td>
<label class="description" for="element_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DREN:</label>
		<span>
			<input id="element_7_1" name="13" class="element checkbox" type="checkbox" value="<? echo $Rs['dren'] ?>" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="13" class="element checkbox" type="checkbox" value="<? echo $Rs['dren'] ?>" />
<label class="choice" for="element_7_2">NO</label>

</td>
<td>
<label class="description" for="element_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECUPERACION:</label>
		<span>
			<input id="element_7_1" name="14" class="element checkbox" type="checkbox" value="<? echo $Rs['recu'] ?>" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="14" class="element checkbox" type="checkbox" value="<? echo $Rs['recu'] ?>" />
<label class="choice" for="element_7_2">NO</label>

</td>
</tr>

</table>	
<input type="submit"  onClick="return confirm('Esta seguro que desea Editar este control de gasas y compresas del paciente?');" name="btn1" value="Actualizar"/>
	</form>
	</center>
		

	<?php
	}
	   
	}else{
		
		echo"<center>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
	    echo "NO SE ENCUENTRAN REGISTROS DE CONTROL DE GASAS Y COMPRENSAS DE   ".$x1;
		echo"</center>";
	
	  echo"<center>"; 
 echo " <form name='fe'  action='gasas.php?codigo=".$x1."' method='post' > ";
	?>
</br>
  
	
    Codigo:<input name="txtbus" type=text  value='<? echo "$x1" ?>'>
    <input  name="btn1" type="submit" value="REGISTRAR CONTROL">
	
  </form>
  
  <?
  echo"<br>";
  echo"<br>";
  echo"<br>";
  echo"<br>";
   echo"</center>";
	}
}

echo"</center>";
echo"</form>";

// Cerramos la conexi�n
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
 


		
		
		?>
		
					
					<li class="bg_none"><a href="#">Imprimir Expediente</a></li>
				
					
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