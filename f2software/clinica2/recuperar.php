<?php
include('conexion.php');
if($_SESSION["logeado"] == "SI"){ 
header ("Location: inicio.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>principal</title>
<meta charset="utf-8">
<link rel="icon"  href="images/logito.png" type="image/x-icon"/>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<body id="page1">
<div class="body1"></div>
<div class="body2">
	<div class="main"><div class="ic"></div>
<!--header -->
		<header>
			<div class="wrapper">
				<nav>
					
					<ul id="menu">
						
						<li><figure class="left marg_right1"></figure>
						</li><li></span></li>
						
					</ul>
				
				</nav>
				
			</div>
			<div class="wrapper">
			</div>
		</header>
	</div>
</div>
<!--header end-->
<!--content -->
<div class="body3">
<div class="main">
	<section id="content">
	  <div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
				<h2>Acceso Restringido </h2>
	  
<? 


if($_POST['button']){
	if($_POST['mail']){
		
		$mail = htmlentities($_POST['mail']);
		
		$link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);
		
		$queEmp = "SELECT * FROM administrador WHERE EMAIL='$mail'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp == 0){
		echo "El mail ingresado no existe";
		exit();
		}		
		
		$row = mysql_fetch_assoc($resEmp);
		$hash = md5(md5($row['username']).md5($row['password']));

		$headers .= "From:Recuperar password <info@webmaster.com>\r\n";  
		$message = "Para recuperar tu contrasenia dar click en la url de abajo.
		http://www.tuweb.com/pass.php?id=".$hash."&mail=".$mail."";
		
		if (mail($mail,"Recuperar password",$message,$headers)){
		$msg = "Se te envio un link a tu mail para cambiar la password";
		}
	}
}
?>
<em><?=$msg?></em>
<form id="form1" name="form1" method="post" action="recuperar.php">
  Tu email<br />
  <input type="text" name="mail" id="mail" />
  <br />
  <br />
<input type="submit" name="button" id="button" value="Recuperar" />
<li class='bg_none'> <input name="button" type="button" onClick="window.close();" value="Cerrar esta ventana" /> </li>
</form>
</div>
</div>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					
					<li class="bg_none">PAGINA PRINCIPAL</a></li>
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