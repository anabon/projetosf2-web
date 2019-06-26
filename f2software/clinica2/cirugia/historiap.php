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
						<li id="menu_active" class="bg_none"><a href="pacienteslista.php">Historia Pediatrica </a></li>
						<li><a href="#">Pabellon</a></li>
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
	if($var4=="M"){
		$var4="selected";
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
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	///aqui corta

if($btn=="Agregar Paciente Nuevo"){

$sql="select count(cod_alu),Max(cod_alu)  from pacientep ";
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
$nom=$_POST["txtnom"];
$ape=$_POST["txtape"];
$p_lugarn=$_POST["p_lugarn"];
$direc=$_POST["direc"];
$sex=$_POST["sex"];
$pedad=$_POST["$edad_Quetiene"];
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
$fechac2=$_POST["$fechac"];
$b1=$_POST["$b"];
$imagen=$_POST["imagen"];

$sql="insert into pacientep values('$cod','$nom','$ape','$p_lugarn',
'$direc','$sex','$edad_Quetiene','$nmadre','$edadm','$profm','$telm','$npadre',
'$edadp','$profp','$telp','$mc','$ea','$ant_p','$ant_f','$peso',
'$talla','$pc','$diacno','$trat','$fecha','$fechac','$b','$imagen')";



$cs=mysql_query($sql,$cn);
echo "<script> alert('se inserto correctamente')</script>";
		}
		
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

	




$nameimagen = $_FILES['imagen']['name'];
$tmpimagen = $_FILES['imagen']['tmp_name'];
$extimagen = pathinfo ($nameimagen);
$ext = array("png","gif","jpg");
$urlnueva="../perfil/".$nameimagen;

if(is_uploaded_file($tmpimagen)){
	if(array_search($extimagen['extension'],$ext)){
	copy($tmpimagen,$urlnueva);
	
	}
}



?>



<div class="body3">
	<div class="main">
		
			
				
<section id="content_top"><h2>Historia Clinica Pediatrica</h2>
			
			
		</section>
			
		
	</div>
</div>
<section id="content">
		<div class="wrapper pad_bot1">
	
		
		
	
		
	
<form name="fe" action="" method="post" id="ContactForm">
		<br>
		
				
				
			<TABLE style="border:1px  #666666; color:# 666666 ; width:900px; text-align:center;"> 
				
     <TR> 
			<TD><a></a><a></a><a></a><a></a><a></a>BUSCAR</TD>
          <TD><input type="text" placeholder="A0000" name="txtbus"/></TD>
          <TD><input type="submit" name="btn1" value="Buscar" /></TD>
		  <td>  <input  name="btn1" type="submit" value="Agregar Paciente Nuevo"></td>
		  
		  </form>
		  <td> <div  input type="submit"><a href="pacienteslista.php">Listar</a></div>
		  </td>
          
          
         
 </TR>

 </TABLE> 



  <center>
<form name="fe" action="" method="post" id="ContactForm" enctype="multipart/form-data">
		
	<table style="border:1px  #666666; color:# 666666 ; width:900px;"><tr>			
		<td>Foto de Perfil:		
	<input type="file" value="<?php echo $nameimagen ?>" placeholder="<?php echo $nameimagen ?>" name="imagen"/></td>
	<td><td><a></a>Expediente creado:		
	<input type="text" placeholder="<?php echo $fecha ?>"name="fechac"  size="20" maxlength="20"   value="<?php echo $var25?>"/>
	CODIGO:<input type="text" placeholder="..............................."name="txtcod"  size="10" maxlength="10"  required value="<?php echo $var?>"/> </td>
</tr>
</table>


<table style="border:1px  #666666; color:# 666666 ; width:900px;  ">
        <tr>
          <td>Nombre:
          <input name='txtnom'  placeholder=".........................................................................................................."  type='text' maxlength='55' required  size='55' value="<?php echo $var1 ?>">
		     
		  
          Apellido:
          <input name='txtape'  placeholder=".........................................................................................................." type='text' maxlength='55' required  size='55' value="<?php echo $var2 ?>"></td>
        </tr>
		<td>Lugar de nacimiento:
          <input type="text" name="p_lugarn"  placeholder="....................................................................................................................."  size="60" maxlength="60" value="<?php echo $var3?>"/>
           
		   Fecha de Nacimiento:
		   <select name="dia" id="dia">
		   
		   
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
		  
		  
		  </TD> 


     </TR>
    
    
     <TR> 
          <TD>Direccion:
          <input type="text" name="direc"  placeholder="....................................................................................................................................................................." size="92" maxlength="93" value="<?php echo $var4?>"/>
	
	  <a></a> Edad: 
          <?php echo $var6?>
     
	<label> Sexo:</label>
   <select class="txt" name='sex'>
     <option value="M">M</option>
     <option value="F">F</option>
    
   </select>
                               
     	 
</TD> 
        </TR>  
      <TR> 
        <TD>Madre:
          <input type="text" name="nmadre"  placeholder="................................................................" size="47" maxlength="45" value="<?php echo $var7?>"/>
          Edad:
          <input  type="number" name="edadm"  id="miCampo2" placeholder="00..." size="2" maxlength="2" min="30" max="100"  value="<?php echo $var8?>"/>
		  
          Profesion:
         <input type="text" name="profm"  placeholder="................................................................"size="30" maxlength="30"  value="<?php echo $var9?>"/>
          Telf:
          <input type="text" name="telm" id="miCampo2"  placeholder="............................" size="15" maxlength="15" value="<?php echo $var10?>" onKeyPress="return permite(event, \'num\')" />    </TD>  
     </TR>
     <TR> 
          <TD>Padre:
          <input type="text" name="npadre"  placeholder="................................................................" size="47" maxlength="45" value="<?php echo $var11?>"/>
          Edad:
         <input  type="number" id="miCampo3" name="edadp" placeholder="00..." size="2" maxlength="2" min="30" max="100"  value="<?php echo $var12?>"/>
          Profesion:
          <input type="text" name="profp" placeholder="................................................................" size="30" maxlength="15"  value="<?php echo $var13?>"/>
          Telf:
          <input type="text" name="telp"  placeholder="............................" size="15" maxlength="11"  value="<?php echo $var14?>"/></TD>  
     </TR>
    
     
     <TR> 
          <TD>M:C
          <input type="text" name="mc"  placeholder="........................................................................................................................................................................................................................................................................................................"  size="133" maxlength="133" value="<?php echo $var15?>"/></TD>
          
     </TR>
     <TR> 
          <TD>E:A:
         <input type="text" name="ea"  placeholder="......................................................................................................................................................................................................................................................................"  size="133" maxlength="133" value="<?php echo $var16?>"/></TD>
          
     </TR>
     
    
     <TR> 
          <TD>ANTE.PER:
          <input type="text" name="ant_p"  placeholder="......................................................................................................................................................................................................................................................................................................................................................................"  size="125" maxlength="125" value="<?php echo $var17?>"/></TD>
          
     </TR>
     
     <TR> 
          <TD>ANTE.FLIARES:
          <input type="text" name="ant_f"  placeholder="............................................................................................................................................................................................................................................................................................................................................................."  size="120" maxlength="200" value="<?php echo $var18?>"/></TD>
          
     </TR>
     
     <TR> 
          <TD>EXAMEN FISICO:
          <A> </A> PESO:
          <input type="text" name="peso" placeholder="................................................" size="20" maxlength="20"  value="<?php echo $var19?>"/>
          <A> </A> TALLA
          <input type="text" name="talla"  placeholder="................................................."size="28" maxlength="30"  value="<?php echo $var20?>"/>
          <A> </A> P.C
          <input type="text" name="pc"  placeholder="................................................................" size="29" maxlength="30"  value="<?php echo $var21?>"/></TD>
     </TR>
    
     <TR> 
          <TD>DIAGNOSTICO:
          <input type="text" name="diacno"  placeholder="................................................................................................................................................................................................................................................................................................................................................................"  size="120" maxlength="128" value="<?php echo $var22?>"/></TD>
          
     </TR>
     
   
     <TR> 
          <TD>TRATAMIENTO:
          <input type="text" name="trat" placeholder="................................................................................................................................................................................................................................................................................................................................................................" size="121" maxlength="121" value="<?php echo $var23?>"/></TD>
		  <? echo '<td><input value=" '.$fecha.' " name="fecha" type="hidden" /></label></td>';
		 ?> 
		 
     </TR>
     
    </TABLE>
	</option>
	</div>
	</div>
	
	
	</div>
    <div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			</br>
				<ul>
					
					
					<li></li>
					<li><input type="submit" name="btn1" value="Agregar"/></li>
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

</body>
</html>
