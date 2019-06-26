<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 

?>
<?php require '../conexion2.php'; ?>

<?
date_default_timezone_set('America/caracas');
$hora2 = date('H:i:s a');
$fecha4 = date('d-m-Y ');
include ("../conexion.php");


date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fechac = date('y-m-d ');


require '../inventario/select.php'; 

?>

<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fechac = date('y-m-d H:i:s',$tiempo); 
?>
<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fecha = date('y-m-d H:i:s',$tiempo); 
?>
 <?php


  include_once('../conexion2.php');
  $link=conectarse() ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Historia Pediatrica</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>



<link rel="stylesheet" href="../jquery/temas/base/jquery.ui.all.css">
<script src="../jquery/jquery-1.9.1.js"></script>
<script src="../jquery/ui/jquery.ui.core.js"></script>
	<script src="../jquery/ui/jquery.ui.widget.js"></script>
	<script src="../jquery/ui/jquery.ui.datepicker.js"></script>
    	<script src="../jquery/ui/jquery.ui.mouse.js"></script>
	<script src="../jquery/ui/jquery.ui.draggable.js"></script>
	<!--ajax 3-->
	 <script type="../text/javascript" src="ajax.js"></script>
<!--calendario-->
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
		$( "#format" ).change(function() {
			$( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
		});
	});
	</script>
    <style>
	#draggable { width: 120px; height: 100px; padding: 0.50em; }
	</style>
	<script>
	$(function() {
		$( "#draggable" ).draggable();
	});
	</script>
	<!--validar solo numeros -->
	
	<script type="text/javascript">
            $(function(){
                //Para escribir solo numeros    
                $('#miCampo2').validCampoFranz('0123456789');
                $('#miCampo3').validCampoFranz('0123456789');
                $('#miCampo4').validCampoFranz('0123456789');
                    
            });
        </script>   
		
		<!--validar campos ajax-->
	
</head>
<body id="page5">
<div class="body2">

	
	<div class="main"><div class="ic"> </div>
<!--header -->
		<header>
			<div class="wrapper">
				
				<nav>
					<ul id="menu">
						
							
						<li><center><figure class="left marg_right1"></figure>
						</center><div class="text1"></span></div></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu inicio? perderas los registros que no se hayan guardado');" href="../index.php">Inicio</a></li>
						<li id="menu_active" class="bg_none"><a onClick="return confirm('Esta seguro que desea ingresar a la lista de  pediatria? perderas los registros que no se hayan guardado');" href="pacienteslista.php">Historia Pediatrica </a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu pabellon? perderas los registros que no se hayan guardado');" href="../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu inventario? perderas los registros que no se hayan guardado');" href="../inventario/indexinventario.php">Inventario</a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu sistema? perderas los registros que no se hayan guardado');"href="../sistema/sistemamenu.php">Sistema</a></li>
						<li><a onClick="return confirm('Esta seguro que deseas salir del sistema? perderas los registros que no se hayan guardado');"href="../cerrar.php">Salir </a></li>
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
/*codigo php*/


$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
$var13="";
$var14="";
$var15="";
$var16="";
$var17="";
$var18="";
$var19="";
$var20="";
$var21="";
$var22="";
$var23="";
$var24="";
$var25="";
$var26="";

//buscar por nombre
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Buscar"){

$sql="select * from pacientep where p_nom='$bus'";


$cs=mysql_query($sql,$cn);
while($resul=mysql_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	}
	//ejemplo 2
	
	//buscar por codigo
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Agregar Nueva Evolucion"){

$sql="select * from pacientep where cod_alu='$bus'";


$cs=mysql_query($sql,$cn);
while($resul=mysql_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	}
	///aqui corta
	//buscar por codigo
	
	//buscar para eliminar
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Eliminar"){

$sql="select * from pacientep where cod_alu='$bus'";


$cs=mysql_query($sql,$cn);
while($resul=mysql_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	}
	///aqui corta
	//biuscar para eliminar
	
	
	
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Buscar"){

$sql="select * from pacientep where p_ape='$bus'";


$cs=mysql_query($sql,$cn);
while($resul=mysql_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	///aqui corta


		
		//guardaR evoluciones ACTUALIZADAS
		
		if($btn=="Actualizar"){
		
$cod=$_POST["txtcod"];
$fecha=$_POST["fecha"];	 
$diacno=$_POST["diacno"];
$trat=$_POST["trat"];
if($cod=="")
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucion` (`cod_alu` ,`fecha` ,`diacno` ,`trat`)VALUES ('$cod', '$fecha', '$diacno', '$trat')";

$cs=mysql_query($sql,$cn);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
		

	if($btn=="Actualizar"){
$cod=$_POST["txtcod"];
$nom=strtoupper($_POST["txtnom"]);
$ape=strtoupper($_POST["txtape"]);
$mc=strtoupper($_POST["mc"]);
$ea=strtoupper($_POST["ea"]);
$diacno=strtoupper($_POST["diacno"]);
$trat=strtoupper($_POST["trat"]);

$fecha=$_POST["fecha"];
if($cod=="" or $nom=="" )
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {

$sql="update pacientep set mc='$mc',ea='$ea', peso='$peso',talla='$talla',pc='$pc',diacno='$diacno',trat='$trat'
where cod_alu='$cod'";




$cs=mysql_query($sql,$cn);
echo "<script> alert('se actualiso correctamente')</script>";
		}
		}
		if($btn=="Eliminar Paciente Actual"){
$cod=$_POST["txtcod"];

$sql="delete from evolucion where cod_alu='$cod'";

$cs=mysql_query($sql,$cn);
		}
	
		
		
		if($btn=="Eliminar Paciente Actual"){
$cod=$_POST["txtcod"];

$sql="delete from pacientep where cod_alu='$cod'";

$cs=mysql_query($sql,$cn);
echo "<script> alert('Se Elimino Correctamente')</script>";
		}


}

	





	
	 
	
 


?>



<div class="body3">
	<div class="main">		
<section id="content_top"><h2>CONSULTA NUEVA</h2>
			
			
		</section>
			
		
	</div>
</div>
<section id="content">
		<div class="wrapper pad_bot1">
	
		
		
	
		
	





  <center>
<form name="fe" action="" method="post" id="ContactForm" enctype="multipart/form-data">
	<? $x1=$_GET['codigo'];
	$query="SELECT * FROM pacientep WHERE cod_alu='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	

	while($Rs=mysql_fetch_array($result)) {
	 
	?>



<table style="border:1px  #666666; color:# 666666 ; width:90%;  ">
        <tr>
          <td>Nombre:
          <input name='txtnom'  placeholder=".........................................................................................................."  type='text' maxlength='55'  size='55' value='<? echo $Rs['p_nom'] ?>'>
	<? echo "$nameimagen" ?>
          Apellido:
          <input name='txtape'  placeholder=".........................................................................................................." type='text' maxlength='55'  size='55' value='<? echo $Rs['p_ape'] ?>'></td>
        </tr>
		
        <TD>M:C ACTUAL
          <input type="text" name="mc"  placeholder="<? echo $Rs['mc'] ?>..........................................................................................................................................................................................................................................................................................................................................
          ........."  size="80" maxlength="80" value='<? echo $Rs['mc'] ?>'/></TD>
          
     </TR>
     <TR> 
          <TD>E:A: ACTUAL
         <input type="text" name="ea"  placeholder="<? echo $Rs['ea'] ?>.............................................................................................................................................................................................................................................................................................................................................................."  size="80" maxlength="80" value='<? echo $Rs['ea'] ?>' /></TD>
          
     </TR>
     
     <TR> 
          <TD>EXAMEN FISICO:
          <A> </A> PESO:
          <input type="text" name="peso" placeholder="................................................" size="20" maxlength="20"  value='<? echo $Rs['peso'] ?>'/>
          <A> </A> TALLA
          <input type="text" name="talla"  placeholder="................................................."size="28" maxlength="30" value='<? echo $Rs['talla'] ?>'/>
          <A> </A> P.C
          <input type="text" name="pc"  placeholder="................................................................" size="29" maxlength="30"  value='<? echo $Rs['pc'] ?>'/></TD>
     </TR>
    
     <TR> 
          <TD>DIAGNOSTICO :
          <input type="text" required name="diacno"  placeholder="<? echo $Rs['diacno'] ?>..................................................................................................................................................................................................................................................................................."  size="121" maxlength="120" /></TD>
          
     </TR>
     
   
     <TR> 
          <TD>TRATAMIENTO:
          <input type="text" required name="trat" placeholder="<? echo $Rs['trat'] ?>................................................................................................................................................................................................................................................................................" size="121" maxlength="120" /></TD>
		  <? echo '<td><input value=" '.$fecha.' " name="fecha" type="hidden" /></label></td>';
		 ?> 
		 
     </TR>
     
    </TABLE>
	</option>
	</br>
		<input   title="Actulaizaras o Agregaras Nuevas Evoluciones" type="submit" name="btn1" value="Actualizar"/>
	
	</div>
	</div>
	
	
	</div>
    <div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			</br>
				<ul><?
				$query="SELECT * FROM pacientep WHERE cod_alu='".$x1."'";
					echo   "<li><a href=modificar.php?codigo=".$x1.">Regresar</a></li>"; 
					 echo   "<li><a  title='REGRESAR A LOS DATOS BASICOS DE ".$Rs['cod_alu']."' href=modificar.php?codigo=".$Rs['cod_alu'].">DATOS GENERALES</a></li>";
					  echo   "<li><a  title='REGRESAR A LAS ANTIGUAS EVOLUCIONES DE ".$Rs['cod_alu']."' href=evoluciones.php?codigo=".$Rs['cod_alu'].">EVOLUCIONES</a></li>";
					   
					  
					 ?>
					<li class="bg_none"><a  title="REGRESAR A LISTA DE PACIENTES DE PEDIATRIA" href="pacienteslista.php">LISTAR</a></div></li>
			
					
				</ul>
			</nav>
		</div>
	</div>
</div>
    
    
   
</form>


<div class="body5">
	<div class="main">
		<footer>
			<? echo "Bienvenido Dr. <b>".$_SESSION['admin']." </b>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <? echo "<b>$fecha4 </b>"; ?> 
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
<?php }  ?>
</body>
</html>
