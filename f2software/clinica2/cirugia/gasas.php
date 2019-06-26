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
						<li ><a href="../historiap/pacienteslista.php">Historia Pediatrica </a></li>
						<li id="menu_active" class="bg_none"><a href="#">Pabellon</a></li>
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
	<div class="main">
		<section id="content_top">
			<article class="pad_left2">
				<h2>CONTOL DE GASAS Y COMPRESAS </h2>
				
			
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>




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

	if($btn=="REGISTRAR CONTROL"){

$sql="select * from gasas where p_nom='$bus'";


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

	if($btn=="REGISTRAR CONTROL"){

$sql="select * from gasas where cod_alu='$bus'";


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

if($btn=="REGISTRAR CONTROL"){

$sql="select count(cod_alu),Max(cod_alu)  from gasas ";
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
	
$cod_alu=$_POST["cod_alu"];
$fecha=strtoupper($_POST["fecha"]);
$p_nom = strtoupper($_POST["p_nom"]); //guardar en mayusculas
$t_i=strtoupper($_POST["t_i"]);
$ciru=strtoupper($_POST["ciru"]);
$p_a=strtoupper($_POST["$p_a"]);
$s_a=strtoupper($_POST["s_a"]);
$aneste=strtoupper($_POST["aneste"]);
$instru=strtoupper($_POST["instru"]);
$circu=strtoupper($_POST["circu"]);
$compre=strtoupper($_POST["compre"]);
$cantidad_c=strtoupper($_POST["cantidad_c"]);
$gasas=strtoupper($_POST["gasas"]);
$cantidad_g=strtoupper($_POST["cantidad_g"]);
$c_c=strtoupper($_POST["c_c"]);
$n_c=strtoupper($_POST["n_c"]);
$obser=strtoupper($_POST["obser"]);
$biop=strtoupper($_POST["biop"]);
$dren=strtoupper($_POST["dren"]);
$recu=strtoupper($_POST["recu"]);

$sql="insert into gasas values('$cod_alu','$fecha','$p_nom','$t_i','$ciru','$p_a'
,'$s_a','$aneste','$instru','$circu','$compre','$cantidad_c','$gasas','$cantidad_g','$c_c'
,'$n_c','$obser','$biop','$dren','$recu')";



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

	




	
$x1=$_GET['codigo'];
	$query="SELECT * FROM pacientep WHERE cod_alu='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	

	while($Rs=mysql_fetch_array($result)) {
	 
	?>


<form name="fe" action="" method="post" >

<center>
  <table width="90%" border="0">
  <tr  style="background: #CCCCCC">
   
    <td width="100%"> &nbsp; &nbsp; DATOS DEL PACIENTE 
	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FECHA DE INGRESO  <input name='fecha'  type='text'  size='' maxlength='98' required   value="<?php echo $fecha2?>">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N DE HISTORIA 
      <input name='cod_alu'  placeholder=".........................................................................................................."  type='text' maxlength='55' required   value="<?php echo $Rs['cod_alu']; ?>"></td>
	  
  </tr>

  
  </table>
  <table width="90%" border="0">
  <tr>
   
    <td width="50%"> NOMBRE DE USUARIO
      <input name='p_nom'    type='text' maxlength='80' required  size='' value="<?php echo $Rs['p_nom']; ?>"></td>
    <td width="50%"> TIPO DE INTERVENCION
      <input name='t_i'  type='text' maxlength='98' required  size='' value="<?php echo $Rs['t_i']; ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
   
   


    <td width="40%"> CIRUJANO<input name='ciru'  type='text'  size='' maxlength='98'   value="<?php echo $Rs['circu']; ?>"></td>
    <td width="50%"> PRIMER AYUDANTE<input name='p_a'  type='text'  size='' maxlength='98'    value="<?php echo $Rs['p_a']; ?>"></td>
	
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td>SEGUNDO AYUDANTE<input name='s_a'  type='text'  size='' maxlength='98' required   value="<?php echo $Rs['s_a']; ?>"></td>
  
		  <td> ANESTESIOLOGO:<input name='aneste'  type='text'  size='' maxlength='98'    value="<?php echo $Rs['aneste']; ?>"> 
          </td>
  </tr>

  </table>
   
  <table  width="90%" border="0">
  <tr>
    <td width="50%">INSTRUMENTISTA     
      <input name='instru'  type='text'  size='' maxlength=''    value="<?php echo $Rs['instru']; ?>"></td>
  
  
  
    
    <td width="50%">CIRCULANTE: <input name='circu'  type='text'  size='' maxlength='98'    value="<?php echo $Rs['circu']; ?>"></td>
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
    <td><input name='compe'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='compe'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='compe'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='compe'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='cantidad_c'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='cantidad_c'  type='text'     value="<?php echo $var9 ?>"></td>
    <td><input name='cantidad_c'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='cantidad_c'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='gasas'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='gasas'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='gasas'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='gasas'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  <tr>
    <td><input name='cantidad_g'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='cantidad_g'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='cantidad_g'  type='text'      value="<?php echo $var9 ?>"></td>
    <td><input name='cantidad_g'  type='text'      value="<?php echo $var9 ?>"></td>
  </tr>
  

</table>

<table>
<tr>
<td>
<label class="description" for="element_7">CUENTA COMPLETA</label>
		<span>
			<input id="element_7_1" name="c_c" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="agre_c" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>

<td>
<label class="description" for="element_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SE NOTIFICO AL CIRUJANO</label>
		<span>
			<input id="element_7_1" name="n_c" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="agre_c" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>
</tr>

</table>

    <table  width="90%" border="0">
  <tr>
    <td width="100">OBSERVACION     
      <input name='obser'  type='text'  size='150%' maxlength=''    value="<?php echo $var8 ?>"></td>

	</tr>
	</table>
	<table>
<tr>
<td>
<label class="description" for="element_7">BIOPSIA:</label>
		<span>
			<input id="element_7_1" name="biop" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="agre_c" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>
<td>
<label class="description" for="element_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DREN:</label>
		<span>
			<input id="element_7_1" name="dren" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="agre_c" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>
<td>
<label class="description" for="element_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECUPERACION:</label>
		<span>
			<input id="element_7_1" name="recu" class="element checkbox" type="checkbox" value="SI" />
<label class="choice" for="element_7_1">SI</label>
<input id="element_7_2" name="agre_c" class="element checkbox" type="checkbox" value="NO" />
<label class="choice" for="element_7_2">NO</label>

</td>
</tr>

</table>	
		
	
	<div  input type="submit"><a href="pacienteslista.php">volver a lista de pacientes</a></div>


</div>
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
	
<?
}

?>
</body>
</html>