<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 


	date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');

?></br>
 
<!doctype html>  
   <head>
   <meta charset="UTF-8">
   <title>lualcar</title>

   

   <link rel="stylesheet" type="text/css" href="css/styles.css"/>
   </head>
   <body>


  
   <div id="pagina">

   
   <header>

   <a href="#" id="logo"><img src="images/logo2.png" width="221" height="84" alt="logo"/></a>    
   

   <nav>
   <ul>
   <li><a href="articulosmenu.php" >Articulos</a></li>
   <li><a href="transacciones.php">Transacciones</a></li>
   <li><a href="informesmenu.php">Informes</a></li>
   <li><a href="sistemamenu.php">sistema</a></li>
   <li><a href="cerrar.php">Salir</a></li>
   </ul>
   </nav>
  
   </header>

   

   <div id="intro">
   <img src="images/banner1.png"  alt="baner">
   </div>
   <!--end intro-->

   <header class="group_bannner_left">
   <hgroup>
   <h1>Jimenez Lualcar</h1>
   <h2>sistema de control de inventario. 
   </h2>
   </hgroup>
   <div class="button black"><a href="detal/detal.php">Administracion Del Detal</a></div>
   <div class="button black"><a href="descricciondeta.php">&nbsp;&nbsp;&nbsp;&nbsp;Manual De Productos&nbsp;&nbsp;&nbsp;</a></div>
   </header>

   

  
   

   </div>
   

   <footer>
   <div class="pagina">  
   <div id="FooterTwo"><? echo "Bienvenido <b>".$_SESSION['admin']." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$fecha </b>"; ?>  </a>   </div> 
   <div id="FooterTree"> © 2013 distribuciones Jimenez Lualcar </div>
   </div>
   </footer>
 
   </body>
</html>
