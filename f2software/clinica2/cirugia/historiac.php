<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 

?>
<?php require '../conexion2.php'; ?>

<?

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
<?
date_default_timezone_set('America/caracas');
$hora2 = date('H:i:s a');
$fecha2 = date('d-m-Y ');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>paciente cirugia</title>
<script src="../jquery/validarvacios.js"></script>
   <script src="../jquery/validar2.js"></script>
<meta charset="utf-8">
<link rel="stylesheet" href="reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">

<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>



<link rel="stylesheet" href="../jquery/temas/base/jquery.ui.all.css">

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
						<li><a href="../index.php">Inicio</a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar a citas pediatricas? perderas los registros que no se hayan guardado');" href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li id="menu_active"><a href="pabellonmenu.php">Pabellon</a></li>
						<li><a href="../inventario/indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li><a href="../cerrar.php">Salir </a></li>
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
	
	}
	
	}
	//ejemplo 2
	
	//buscar por codigo
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Buscar"){

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
	
	}
	
	}
	///aqui corta
	//buscar por codigo
 
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
	
	}
	
	///aqui corta

if($btn=="Agregar Paciente Nuevo"){

$sql="select count(cod_alu),Max(cod_alu)  from pabellonp ";
$cs=mysql_query($sql,$cn);
while($resul=mysql_fetch_array($cs)){
	$count=$resul[0];
	$max=$resul[1];

		}
		if($count==0){
		$var="A0001";
		}	
	else{
		$var="A".substr((substr($max,1)+10001),1);
		}
}


		
//guardaR evoluciones 
		
		//guardaR evoluciones ACTUALIZADAS
		
		if($btn=="Agregar"){
		
$cod=$_POST["txtcod"];
$fecha=$_POST["f_ingreso"];	 
$evolucion=$_POST["m_consul"];
$serv=$_POST["serv"];

if($cod=="")
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucionc` (`cod_alu` ,`fecha` ,`servicio` ,`evolucion`)VALUES ('$cod', '$fecha', '$serv','$evolucion')";

$cs=mysql_query($sql,$cn);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
		
		//GUARDAR EVOLUCIONES

	
	if($btn=="Agregar"){
	
	 date_default_timezone_set('Mexico/General');
                $fecha_actual = date('Y');
                //CON ESTOS DATOS CALCULAMOS LA FECHA DE NACIMIENTO
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $anio = $_POST['anio'];
                $edad_Quetiene = $fecha_actual - $anio;
                
				$b="$dia/$mes/$anio";
	
$cod=$_POST["txtcod"];
$serv=strtoupper($_POST["serv"]);
$nom = strtoupper($_POST["txtnom"]); //guardar en mayusculas
$ape=strtoupper($_POST["txtape"]);
$sex=strtoupper($_POST["sex"]);
$pedad=strtoupper($_POST["$edad_Quetiene"]);
$edoc=strtoupper($_POST["e_civil"]);
$ocu=strtoupper($_POST["ocupacion"]);
$p_lugarn=strtoupper($_POST["l_nacimiento"]);
$b1=strtoupper($_POST["$b"]);
$nacio=strtoupper($_POST["nacio"]);
$direc=strtoupper($_POST["direc_actual"]);
$avisara=strtoupper($_POST["avisara"]);
$parentesco=strtoupper($_POST["parentesco"]);
$direc2=strtoupper($_POST["direc2"]);
$f_ingreso=strtoupper($_POST["f_ingreso"]);
$f_admi_ante=strtoupper($_POST["f_admi_ante"]);
$m_consul=strtoupper($_POST["m_consul"]);
$e_actual=strtoupper($_POST["e_actual"]);
$diacno_p=strtoupper($_POST["diacno_p"]);
$diac_p_f=strtoupper($_POST["diac_p_f"]);
$d_anatomo=strtoupper($_POST["d_anatomo"]);
$d_asoc=strtoupper($_POST["d_asoc"]);
$inter_p=strtoupper($_POST["inter_p"]);
$inter_s=strtoupper($_POST["inter_s"]);
$hora=strtoupper($_POST["hora"]);
$agre_c=strtoupper($_POST["agre_c"]);


$imagen=$_POST["imagen"];

$sql="insert into pabellonp values('$serv','$cod','$ape','$nom','$sex','$edoc'
,'$ocu','$p_lugarn','$b','$nacio','$direc','$f_ingreso','$f_admi_ante','$m_consul','$e_actual'
,'$diacno_p','$diac_p_f','$d_anatomo','$d_asoc','$inter_p','$inter_s','$edad_Quetiene','$avisara','$parentesco','$direc2','$hora','$agre_c')";



$cs=mysql_query($sql,$cn);
echo "<script> alert('se inserto correctamente')</script>";
		}
		
		//guardaR evoluciones ACTUALIZADAS
			//guardaR evoluciones ACTUALIZADAS
		
		if($btn=="Actualizar"){
		
$cod=$_POST["txtcod"];
$fecha=$_POST["f_ingreso"];	 
$evolucion=$_POST["evolucion"];
$serv=$_POST["serv"];

if($cod=="")
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucionc` (`cod_alu` ,`fecha` ,`servicio` ,`evolucion`)VALUES ('$cod', '$fecha', '$serv','$evolucion')";

$cs=mysql_query($sql,$cn);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
		

	if($btn=="Actualizar"){
$cod=$_POST["txtcod"];
$nom=$_POST["txtnom"];
$ape=$_POST["txtape"];
$p_lugarn=$_POST["p_lugarn"];
$direc=$_POST["direc"];
$sex=$_POST["sex"];
$nmadre=$_POST["nmadre"];
$edadm=$_POST["edadm"];
$profm=$_POST["profm"];
$telm=$_POST["telm"];
$npadre=$_POST["npadre"];
$edadp=$_POST["edadp"];
$profp=$_POST["profp"];
$telp=$_POST["telp"];
$mc=$_POST["mc"];
$ea=$_POST["ea"];
$ant_p=$_POST["ant_p"];
$ant_f=$_POST["ant_f"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$pc=$_POST["pc"];
$diacno=$_POST["diacno"];
$trat=$_POST["trat"];

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

$sql="update pacientep set p_nom='$nom',p_ape='$ape',p_lugarn='$p_lugarn',direc='$direc',p_sex='$sex'  ,nmadre='$nmadre' 
,edadm='$edadm',profm='$profm' ,telm='$telm',npadre='$npadre',edadp='$edadp',profp='$profp',telp='$telp',mc='$mc',ea='$ea',ant_p='$ant_p'
,ant_f='$ant_f',peso='$peso',talla='$talla',pc='$pc',diacno='$diacno',trat='$trat'
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


<form name="fe" action="" method="post" >
	<br>
		
			<center>	
				
			<table width="90%" border="0"> 
			<tr>	
    
          <TD width="30%"  ><input type="text" placeholder="A0000" name="txtbus"/></TD>
          <TD width="20%" ><input type="submit" name="btn1" value="Buscar" /></TD>
		  <td width="20%" >  <input  name="btn1" type="submit" value="Agregar Paciente Nuevo"></td>
		   <td width="20%" >  <div  input type="submit"><a href="pacienteslista.php">Listar</a></div></td>
		  </tr>
		  </form>
		  </table>
		<form name="fe" action="" method="post"  enctype="multipart/form-data">
	
	<table width="90%" border="0">
  <tr border="0"> 
  <td width="30%">  </td>
  
    
    
  </tr>
  </table>
  <table width="90%" border="0">
  <tr  style="background: #CCCCCC">
   
    <td width="100%"> &nbsp; &nbsp; DATOS DEL PACIENTE 
	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label>SERVICIO</label>
   <select class="txt" name='serv'>
     <option value="HOSPITALIZACION">HOSPITALIZACION</option>
     <option value="CIRUGIA">CIRUGIA</option>
	 <option value="CESARIA">CESARIA</option>
	  <option value="PARTO">PARTO</option>
    
   </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N°DE HISTORIA 
      <input name='txtcod'  placeholder=".........................................................................................................."  type='text' maxlength='55' required   value="<?php echo $var ?>"></td>
	  
  </tr>

  
  </table>
  <table width="90%" border="0">
  <tr>
   
    <td width="50%"> APELLIDO
      <input name='txtape'    type='text' maxlength='80' required  size='74' value="<?php echo $var3 ?>"></td>
    <td width="50%"> NOMBRE
      <input name='txtnom'  type='text' maxlength='98' required  size='76' value="<?php echo $var2 ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td width="10%"><label> SEXO</label>
   <select class="txt" name='sex'>
     <option value="M">M</option>
     <option value="F">F</option>
    
   </select></td>
    <td width="40%">  <label>ESTADO CIVIL</label>
   <select class="txt" name='e_civil'>
     <option value="SOLTERO">SOLTERO</option>
     <option value="CASADO">CASADO</option>
	 <option value="VIUDO">VIUDO</option>
	  <option value="DIVORCIADO">DIVORCIADO</option>
    
   </select>
  </td>
    <td width="50%"> OCUPACION <input name='ocupacion'  type='text'  size='72' maxlength='98'    value="<?php echo $var5 ?>"></td>
	
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td>LUGAR DE NACIMIENTO<input name='l_nacimiento'  type='text'  size='60' maxlength='98'  value="<?php echo $var6 ?>"></td>
    <td> FECHA DE NACIMIENTO  <select name="dia" id="dia">
		   
		   
        <?
        for($d=1;$d<=31;$d++){
                               ?>
          <option value="<?=$d?>"><?=$d?></option>
        <?
                               }
                               ?>
      </select>
        /
        <select name="mes" id="mes">
          <?
        for($m=1;$m<=12;$m++){
                               ?>
          <option value="<?=$m?>"><?=$m?></option>
          <?
                               }
                               ?>
        </select>
        /
        <select name="anio" id="anio">
          <?
        for($a=1960;$a<=2014;$a++){
                               ?>
          <option value="<?=$a?>">
            <?=$a?>
          </option>
          <?
                               }
                               ?>
        </select>
        <label for="select"></label></td>
    <td> EDAD: 
          <?php echo $var6?></td>
		  <td> 
		  
		   <label> NACIONALIDAD</label>
   <select class="txt" name='nacio'>
     <option value="V">V</option>
     <option value="E">E</option>
    
   </select>
          
          </td>
  </tr>
  </table>
   
  <table  width="90%" border="0">
  <tr>
    <td width="100%">DIRECCION ACTUAL COMPLETA     
      <input name='direc_actual'  type='text'  size='142' maxlength='98'    value="<?php echo $var8 ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    
    <td width="50%">AVISAR EN CASO DE EMERGENCIAS A: <input name='avisara'  type='text'  size='45' maxlength='98'    value="<?php echo $var9 ?>"></td>
    <td width="50%">PARENTESCO <input name='parentesco'  type='text'  size='72' maxlength='98'    value="<?php echo $var10 ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td width="100%" > DIRECCION  <input name='direc2'  type='text'  size='162' maxlength='98'   value="<?php echo $var11 ?>"></td>
    
  </tr>
  </table>
  <table width="90%" border="0">
  <tr >
    <td width="30%">FECHA DE INGRESO  <input name='f_ingreso'  type='text'  size='' maxlength='98' required   value="<?php echo $fecha2?>"></td>
   <td width="30%">HORA<input name='hora'  type='hora'  size='' maxlength='98' required   value="<?php echo $hora2?>"> </td>
	 <td width="30%">FECHA DE ADMISION ANTERIOR <input name='f_admi_ante'  type='text'  size='' maxlength='98'   value="<?php echo $var12?>"></td>
   
  </tr>
  </table>
  
  <table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;MOTIVO DE LA CONSULTA</td>
   
  </tr>
</table>
<table width="90%" border="0">
  <tr>
    <td><input name='m_consul'   type='text'  size='180' maxlength='98' required   value="<?php echo $var13?>"></td>

  </tr>
</table>
 <table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;ENFERMEDAD ACTUAL   &nbsp;&nbsp;&nbsp;&nbsp;(hacer relato conciso y completo de las dolencias. indicando fecha de comienzo duracion y tratamento de cada una de ella)</td>
   
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td  width="100%"  ><textarea  name="e_actual"  class="element textarea medium" value="<?php echo $var14?>" ></textarea></td>
  
  </tr>
</table  >
<table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;</td>
   
  </tr>
</table>

<table  width="90%" border="0">
  <tr>
    <td width="75%"> DIAGNOSTICO PROVICIONAL &nbsp;&nbsp;&nbsp; <input name='diacno_p'  type='text'  size='95' maxlength='98'    value="<?php echo $var15?>"></td>
   <td width="30%" >
	
    <label> EGRESO DE CURACION </label>
   <select class="txt" name='agre_c'>
     <option value="MEJORAS">MEJORAS</option>
     <option value="MUERTE">MUERTE</option>
	 <option value="AUTOPSIA">AUTOPSIA</option>
	 <option value="OTRO">OTRO</option>
    
   </select>
		</td>
  </tr>
</table>


  
		
    
 
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO PRINCIPIO-FINAL &nbsp;&nbsp;&nbsp; <input name='diac_p_f'  type='text'  size='145' maxlength='98'    value="<?php echo $var16?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO ANATOMOPATOLOGICO &nbsp;&nbsp;&nbsp; <input name='d_anatomo'  type='text'  size='110' maxlength='98'   value="<?php echo $var17?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO ASOCIADO &nbsp;&nbsp;&nbsp; <input name='d_asoc'  type='text'  size='145' maxlength='98'   value="<?php echo $var18?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>INTERVENCION PRINCIPAL &nbsp;&nbsp;&nbsp; <input name='inter_p'  type='text'  size='145' maxlength='98'    value="<?php echo $var19?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>INTERVENCION SECUNDARIA &nbsp;&nbsp;&nbsp; <input name='inter_s'  type='text'  size='145' maxlength='98'    value="<?php echo $var20?>"></td>
 
  </tr>
</table>

	
	</center>
		
		
	
		
	

<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			</br>
				<ul>
					
					
					
					<li class="bg_none"><input type="submit" name="btn1" value="Agregar"/></li>
				</ul>
				</form>
			</nav>
		</div>
	</div>
</div>
    
    
   



<div class="body5">
	<div class="main">
		<footer>
			Av. Lucio Oquendo Nro. 3-51 La Concordia Diagonal  a La Funeraria CEICOTACH. San cristobal- Edo. Tachira<br>
			Telf:(0414)722.78.12 (044)706.11.74 (0416)67.655.47		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>
