<?   

 
require '../conectar.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HISTORIA PEDIATRICA</title>
<meta charset="utf-8">
<link rel="icon"  href="../images/logito.png" type="image/x-icon"/>
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
						<li ><a href="index2.php">Inicio</a></li>
						<li id="menu_active"><a href="pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="pabellonmenu.php">Pabellon</a></li>
						<li ><a href="indexinventario.php">Inventario</a></li>
						<li class="bg_none"><a href="../cerrar.php">Salir</a></li>
					</ul>
				</nav>
				</br>
				<img src='../images/user106.png' width='70' alt='Edicion' title='MANUAL DE USUARIO'></a>
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
				<h2>PACIENTE PEDIATRIA</h2>
				<div class="wrapper marg_top">

				</div>
			</article>
		</section>
	</div>
</div>


   <?php
  include_once('../inventario/conexion.php');
  $link=conectarse() ;

if(isset($_POST["submit"])){

	$query = "UPDATE pacientep SET  p_nom='".$_POST["p_nom"]."' , p_ape='".$_POST["p_ape"]."' WHERE cod_alu='".$_POST["cod_alu"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo"</br>";
	echo"</br>";
	echo"<center>";
	echo "Se ha modificado el producto con exito ".$x1;
	 echo"</center>";

}else{


	$x1=$_GET['codigo'];
	$query="SELECT * FROM pacientep WHERE cod_alu='".$x1."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	
	if(mysql_num_rows($result) > 0){

	while($Rs=mysql_fetch_array($result)) {
	 
	?>
	
	
		
	


<div class="body4">
	<div class="main">
		<div id="footer_menu">
		
		
		<?php
 //no se
  
  include_once('../inventario/conexion.php');
  $link=conectarse() ;
     
     
  ?>
			</nav>
		</div>
	</div>
</div>

 </div>
 </center>
 </div>
 </div>
 <div class="main">
 <center>
 
 
	<form  method=Post name=frm action="modificar.php">
	  <table style="border:1px  #666666; color:# 666666 ; width:90%;  ">
        <tr><td><a  href="#"><img src='../webcam/fotos/<?php echo $Rs['imagen']; ?>' width='100'  ></a>
          Expediente Creado:
          <?php echo $Rs['fechac']; ?>
		 	</td>
        </tr>
		<tr>
          <td ><strong>NOMBRE:</strong>
          <input name='modelo'  type='text' maxlength='50'  size='' value="<?php echo $Rs['p_nom']; ?>">
	
        <strong>APELLIDO:</strong>
          <input name='modelo'  type='text' maxlength='45'  size='' value="<?php echo $Rs['p_ape']; ?>"></td>
        </tr>
		
        <tr>
          <td><strong>LUGAR DE NACI.</strong>
          <input name='modelo'  type='text' maxlength='80'  size="80" value="<?php echo $Rs['p_lugarn']; ?>"></td>
		  <tr>
           <td><strong>FECHA DE NACI</strong>
          <input name='modelo'  type='text' maxlength='20'  size="20" value="<?php echo $Rs['f_nacimiento']; ?>">
		<strong> EDAD</strong>
          <input name='modelo'  type='text' maxlength='30'  size="40" value="<?php echo $Rs['p_edad']; ?>">
		   <strong> SEXO</strong>
          <input name='modelo'  type='text' maxlength='2'  size="2" value="<?php echo $Rs['p_sex']; ?>">
		  </td>
        </tr>
        <tr>
          <td> <strong>DIRECCION</strong>
          <?php echo $Rs['direc']; ?>
         
        </td>
        </tr>
        <tr>
		<TD>
          <strong>MADRE</strong>
          <input name='modelo'  type='text' maxlength='20'  size="" value="<?php echo $Rs['nmadre']; ?>">
        <strong> EDAD</strong>
          <input name='modelo'  type='text' maxlength='2'  size="" value="<?php echo $Rs['edadm']; ?>">
          <strong>PROFESION</strong>
          <input name='modelo'  type='text' maxlength='30'  size="" value="<?php echo $Rs['profm']; ?>">
         <strong>TELEFONO</strong>
          <input name='modelo'  type='text' maxlength='11'  size="" value="<?php echo $Rs['telm']; ?>"></td>
        </tr>
        <tr>
          <td> <strong>PADRE</strong>
          <input name='modelo'  type='text' maxlength='20'  size="" value="<?php echo $Rs['npadre']; ?>">
          <strong>EDAD:</strong>
          <input name='modelo'  type='text' maxlength='2'  size="" value="<?php echo $Rs['edadp']; ?>">
          <strong> PROFESION</strong>
          <input name='modelo'  type='text' maxlength='30'  size="" value="<?php echo $Rs['profp']; ?>">
         <strong> TELEFONO:</strong>
          <input name='modelo'  type='text' maxlength='11'  size="" value="<?php echo $Rs['telp']; ?>"></td>
        </tr>
        <tr>
          <td> <strong> M:C:</strong>
          <?php echo $Rs['mc']; ?></td>
        </tr>
        <tr>
          <td><strong> E:A:</strong>
          <?php echo $Rs['ea']; ?></td>
        </tr>
        <tr>
          <td> <strong>ANTECEDENTES PERSONALES:</strong>
         <?php echo $Rs['ant_p']; ?></td>
        </tr>
        <tr>
          <td> <strong> ANTECEDENTES FAMILIARES:</strong>
         <?php echo $Rs['ant_f']; ?></td>
        </tr>
        <tr>
                    <td><strong>EXAMEN FISICO / </a><a> </a><a> </a><a> </a><a> </a> PESO:</strong>
            <input name='modelo'  type='text' maxlength='15'  size="" value="<?php echo $Rs['peso']; ?>">
         <strong>TALLA: </strong>
         <input name='modelo'  type='text' maxlength='15'  size="" value="<?php echo $Rs['talla']; ?>">
        <strong> P.C:</strong>
          <input name='modelo'  type='text' maxlength='15'  size="" value="<?php echo $Rs['pc']; ?>"></td>
        </tr>
        <tr>
          <td> <strong>DIACNOSTICO:</strong>
          <?php echo $Rs['diacno']; ?></td>
        </tr>
        <tr>
          <td> <strong>TRATAMIENTO:</strong>
          <?php echo $Rs['trat']; ?></td>
        </tr>
      </table>
	  
	  


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
<div class="main">
<center>
<a href="pacienteslista.php">volver a lista de pacientes</a>
  </center>	
  
	</div>
  
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
   echo   "<li></li>";
  
		?>

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