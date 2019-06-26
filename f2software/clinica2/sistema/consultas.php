<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
echo "Bienvenido <b>".$_SESSION['admin']."</b>"; 
?>
<?php require '../conectar.php'; ?>


<!doctype html>  
   <head>
   <meta charset="UTF-8">
   <title>Busqueda</title>

   

   <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
  	<link rel="stylesheet" href="../jquery/temas/base/jquery.ui.all.css">
	<script src="../jquery/jquery-1.9.1.js"></script>
	<script src="../jquery/ui/jquery.ui.core.js"></script>
	<script src="../jquery/ui/jquery.ui.widget.js"></script>
	<script src="../jquery/ui/jquery.ui.datepicker.js"></script>
    	<script src="../jquery/ui/jquery.ui.mouse.js"></script>
	<script src="../jquery/ui/jquery.ui.draggable.js"></script>
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
   </head>
   <body>

  </br>
   <div id="pagina">

   
   <header>

   <a href="#" id="logo"><img src="images/logo2.png" width="221" height="84" alt="logo"/></a>    
   

    <nav>
   <ul>
   <li><a href="articulosmenu.php" >Articulos</a></li>
   <li><a href="transacciones.php">Transacciones</a></li>
   <li><a href="informesmenu.php" class="current">Informes</a></li>
   <li><a href="sistemamenu.php">sistema</a></li>
   <li><a href="cerrar.php">Salir</a></li>
   </ul>
   </nav>
  
   </header>

<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
echo "</b>"; 
?>

 


 <fieldset>
     
	<legend>Busqueda de movimiento por fecha</legend>
    <br>

<div id="draggable" class="ui-widget-content">
	<center><p>Por favor colocar </p><p>la fecha en el modo </p><p>año-mes-dia</p>

</div>
<center>
<p>Format options:<br />
	<select id="format">
	<option value="mm/dd/yy"></option>
		
		<option value="yy-mm-dd"> año/mes/dia- yy-mm-dd</option>
	
	</select>
<form action="consultas.php" method="get">
<center>

   <b>Busqueda Por Fecha</b><br><br>
  <p> <input type="text"name="busqueda" id="datepicker"   size="30"/> </p>
    
 </center> 
 

 <center>  
    <input type=submit value="Buscar">


</p>
 </center>
    
    
   
  </form>
  
  
 <?php
 //iniciamos buscador 
trim($busqueda); //Evitar espacios en blanco en la busqueda

if (!$busqueda)
  {
   //  echo "No se ha ingresado ningun valor a buscar";
     exit;
  }

  $busqueda = addslashes($busqueda); //Marca una cadena con barras
  
  //comenzamos la consulta 
  $consulta = "SELECT * FROM pacientep WHERE fecha like '%".$busqueda."%' ORDER BY fecha ASC";
  $resultado = mysql_query($consulta) or die(mysql_error());

?>

<table style="border:1px #FF0000; color:#000000; width:900px; text-align:center;">
<tr style="background:#FFD700;">
    
	<td>codigo</td>
    <td>nombre</td>
	
	</tr> 

<?php  
  
     while($row = mysql_fetch_array($resultado)){
     echo "<tr bgcolor='#FFF'>";
	
     echo "<td>".stripslashes($row["cod_alu"])."</td>";
	 echo "<td>".stripslashes($row["p_nom"])."</td>";
	
     echo "</tr>";
	
	 
  }
  
  echo"</div>";
?>

</table><br />
<div id="formulario" style="display:none;"></div>
<div id="resultado"></div>
</center>
<center>
  <div class="button black"><a href="index.php">Inicio</a></div>
   </center>

 

   </div>
   

<footer>
   <div class="pagina">  
   <div id="FooterTwo"> © 2013 distribuciones Jimenez Lualcar </div>
   <div id="FooterTree"> Yonathan Suarez, Gustabo Lobo, Richard Pedraza </a>   </div> 
   </div>
   </footer>
 
   </body>
</html>



<?php mysql_free_result($resultado); ?>

