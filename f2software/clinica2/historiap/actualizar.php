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


<!DOCTYPE html>
<html lang="en">
<head>
<title>Historia Pediatrica</title>
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
				$('#miCampo5').validCampoFranz('0123456789');
				$('#miCampo6').validCampoFranz('0123456789');
                    
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

	if($btn=="Editar"){

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
$fecha=strtoupper($_POST["fecha"]);	 
$diacno=strtoupper($_POST["diacno"]);
$trat=strtoupper($_POST["trat"]);
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
$cod=strtoupper($_POST["txtcod"]);
$nom=strtoupper($_POST["txtnom"]);
$ape=strtoupper($_POST["txtape"]);
$p_lugarn=strtoupper($_POST["p_lugarn"]);
$direc=strtoupper($_POST["direc"]);
$sex=strtoupper($_POST["sex"]);
$nmadre=strtoupper($_POST["nmadre"]);
$edadm=strtoupper($_POST["edadm"]);
$profm=strtoupper($_POST["profm"]);
$telm=strtoupper($_POST["telm"]);
$npadre=strtoupper($_POST["npadre"]);
$edadp=strtoupper($_POST["edadp"]);
$profp=strtoupper($_POST["profp"]);
$telp=strtoupper($_POST["telp"]);
$mc=strtoupper($_POST["mc"]);
$ea=strtoupper($_POST["ea"]);
$ant_p=strtoupper($_POST["ant_p"]);
$ant_f=strtoupper($_POST["ant_f"]);
$peso=strtoupper($_POST["peso"]);
$talla=strtoupper($_POST["talla"]);
$pc=strtoupper($_POST["pc"]);
$diacno=strtoupper($_POST["diacno"]);
$trat=strtoupper($_POST["trat"]);
$fecha=$_POST["fecha"];
$f_nacimiento=$_POST["f_nacimiento"];
if($cod=="" or $nom=="" )
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {

$sql="update pacientep set p_nom='$nom',p_ape='$ape',p_lugarn='$p_lugarn',f_nacimiento='$f_nacimiento',direc='$direc',p_sex='$sex'  ,nmadre='$nmadre' 
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



<div class="body3">
	<div class="main">
		
			
				
<section id="content_top"><h2>EDITAR HISTORIA</h2>
			
			
		</section>
			
		
	</div>
</div>
<section id="content">
		<div class="wrapper pad_bot1">
	
		
		
	
		<? $x1=$_GET['codigo'];
	$query="SELECT * FROM pacientep WHERE cod_alu='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	

	while($Rs=mysql_fetch_array($result)) {
	 
	?>	
	

</br>



<form name="fe" action="" method="post" id="ContactForm" enctype="multipart/form-data">
		<center>
	<table style="border:1px  #666666; color:# 666666 ; width:90%;"><tr>			
		<td><strong>FOTO DE PERFIL:		</strong>
	<input type="file" placeholder="<?php echo $fecha ?>"name="imagen"/></td>
	<td><td><a></a><strong>EXPEDIENTE CREADO:	</strong>	
	<input type="text" placeholder="<?php echo $fecha ?>"name="fechac"  size="20" maxlength="20"   value="<?php echo $Rs['fechac']; ?>"/>
	<strong>CODIGO:</strong><input type="text" placeholder="..............................."name="txtcod"  size="10" maxlength="10"  required value="<?php echo $Rs['cod_alu']; ?>"/> </td>
</tr>
</table>


<table style="border:1px  #666666; color:# 666666 ; width:90%;  ">
        <tr>
          <td><strong>NOMBRE:</strong>
          <input name='txtnom' required placeholder=".........................................................................................................."  type='text' maxlength='55'  size='55' value="<?php echo $Rs['p_nom']; ?>">
	<? echo "$nameimagen" ?>
         <strong> APELLIDO:</strong>
          <input name='txtape' required placeholder=".........................................................................................................." type='text' maxlength='55'  size='55' value="<?php echo $Rs['p_ape']; ?>"></td>
        </tr>
		<td><strong>LUGARA DE NACIMIENTO:</strong>
          <input type="text" name="p_lugarn"  placeholder="....................................................................................................................."  size="60" maxlength="60" value="<?php echo $Rs['p_lugarn']; ?>"/>
           
		   <strong>FECHA DE NACIMIENTO:</strong><input type="text" name="f_nacimiento"  placeholder="....................................................................................................................."  size="20" maxlength="20" value="<?php echo $Rs['f_nacimiento']; ?>"/>
		   
		  
		  
		  </TD> 


     </TR>
    
    
     <TR> 
          <TD><strong>DIRECCION:</strong>
          <input type="text" name="direc"  placeholder="....................................................................................................................................................................." size="92" maxlength="93" value="<?php echo $Rs['direc']; ?>"/>
	
	  <a></a> <strong>EDAD: </strong>
          <?php echo $Rs['p_edad']; ?>
     
	<strong>SEXO:</strong>
    <input type="text" name="sex"  placeholder="....................................................................................................................................................................." size="2" maxlength="2" value="<?php echo $Rs['p_sex']; ?>"/>
                     
     	 
</TD> 
        </TR>  
      <TR> 
        <TD><strong>MADRE:</strong>
          <input type="text" name="nmadre"  placeholder="................................................................" size="47" maxlength="45" value="<?php echo $Rs['nmadre']; ?>"/>
         <strong> EDAD:</strong>
    <input type="number" id="miCampo4" type="text" name="edadm" placeholder="00..." size="2" maxlength="2" min="0" max="100" value="<?php echo $Rs['edadm'];?>"/>
		  
         <strong> PROFESION:</strong>
         <input type="text" name="profm"  placeholder="................................................................"size="30" maxlength="30"  value="<?php echo $Rs['profm']; ?>"/>
         <strong> TELF:</strong>
          <input type="text" name="telm" id="miCampo5"  placeholder="............................" size="15" maxlength="15" value="<?php echo $Rs['telm']; ?>" onKeyPress="return permite(event, \'num\')" />    </TD>  
     </TR>
     <TR> 
          <TD><strong>PADRE:</strong>
          <input type="text" name="npadre"  placeholder="................................................................" size="47" maxlength="45" value="<?php echo $Rs['npadre']; ?>"/>
          <strong>EDAD:</strong>
         <input type="number" id="miCampo3" type="text" name="edadp" placeholder="00..." size="2" maxlength="2" min="10" max="100" value="<?php echo $Rs['edadp']; ?>"/>
          <strong>PROFESION:</strong>
          <input type="text" name="profp" placeholder="................................................................" size="30" maxlength="15"  value="<?php echo $Rs['profp']; ?>"/>
          <strong>TELF:</strong>
          <input type="text" name="telp" id="miCampo6"   placeholder="............................" size="15" maxlength="11"  value="<?php echo $Rs['telp']; ?>"/></TD>  
     </TR>
    
     
     <TR> 
          <TD><strong>M:C</strong>
          <input type="text"  placeholder="......................................................................................................................................................................................................................................................................" name="mc"  size="133" maxlength="85" value="<?php echo $Rs['mc']; ?>"/></TD>
          
     </TR>
     <TR> 
          <TD><strong>E:A:</strong>
         <input type="text" name="ea"  placeholder="......................................................................................................................................................................................................................................................................"  size="133" maxlength="85" value="<?php echo $Rs['ea']; ?>"/></TD>
          
     </TR>
     
    
     <TR> 
          <TD><strong>ANTE.PER:</strong>
          <input type="text" name="ant_p"  placeholder="......................................................................................................................................................................................................................................................................................................................................................................"  size="125" maxlength="125" value="<?php echo $Rs['ant_p']; ?>"/></TD>
          
     </TR>
     
     <TR> 
          <TD><strong>ANTE.FLIARES:</strong>
          <input type="text" name="ant_f"  placeholder="............................................................................................................................................................................................................................................................................................................................................................."  size="120" maxlength="200" value="<?php echo $Rs['ant_f']; ?>"/></TD>
          
     </TR>
     
     <TR> 
          <TD><strong>EXAMEN FISICO:</strong>
          <A> </A> PESO:</strong>
          <input type="text" name="peso" placeholder="................................................" size="20" maxlength="20"  value="<?php echo $Rs['peso']; ?>"/>
          <A> </A> <strong>TALLA</strong>
          <input type="text" name="talla"  placeholder="................................................."size="28" maxlength="30"  value="<?php echo $Rs['talla']; ?>"/>
          <A> </A> <strong>P.C</strong>
          <input type="text" name="pc"  placeholder="................................................................" size="29" maxlength="30"  value="<?php echo $Rs['pc']; ?>"/></TD>
     </TR>
    
     <TR> 
          <TD><strong>DIAGNOSTICO:</strong>
          <input type="text" name="diacno"  placeholder="................................................................................................................................................................................................................................................................................................................................................................"  size="120" maxlength="128" value="<?php echo $Rs['diacno']; ?>"/></TD>
          
     </TR>
     
   
     <TR> 
          <TD><strong>TRATAMIENTO:</strong>
          <input type="text" name="trat" placeholder="................................................................................................................................................................................................................................................................................................................................................................" size="121" maxlength="121" value="<?php echo $Rs['trat']; ?>"/></TD>
		  <? echo '<td><input value=" '.$fecha.' " name="fecha" type="hidden" /></label></td>';
		 ?> 
		 
     </TR>
     
    </TABLE>
	</option>
	
	<div  input type="submit"><a href="pacienteslista.php">Regresar a Lista De Pacientes</a></div>
	</div>
	</div>
	
	
	</div>
    <div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			</br>
				<ul>
						<? echo   "<li><a href=modificar.php?codigo=".$x1.">Regresar</a></li>"; ?>
					<li class="bg_none"><input type="submit"  onClick="return confirm('Esta seguro que desea Editar este paciente?');" name="btn1" value="Actualizar"/></li>
					
					
					
				</ul>
			</nav>
		</div>
	</div>
</div>
    
    
   
</form>


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
<?php }  ?>
</body>
</html>
