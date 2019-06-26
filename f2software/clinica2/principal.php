<?php
session_start();
include("conexion2.php");
if(isset($_SESSION['admin'])){
	date_default_timezone_set('America/caracas');
$hora = date('H:i:s');
mysql_query("UPDATE historial set HSALIDA = '$hora' WHERE HENTRADA = '$_SESSION[horaini]' AND USER = '$_SESSION[admin]'");
session_destroy();
header("location: principal.php");
}
if(isset($_SESSION['username'])){
	date_default_timezone_set('America/caracas');
$hora = date('H:i:s');
mysql_query("UPDATE historial set HSALIDA = '$hora' WHERE HENTRADA = '$_SESSION[horaini]' AND USER = '$_SESSION[username]'");
session_destroy();
header("location: principal.php");
}
session_destroy();
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

<? 


echo"  <script type='text/javascript' src='ajax.js'></script>";
?>
</head>
<?
echo"<script language='javascript'>
function validar(form)
{
 
     if(form.user.value.length<1)
	 {
	      alert('Ingrese el Login');
		  form.user.focus();
		  return false;
	  }
	       if(form.pw.value.length<1)
	 {
	      alert('ingrese la clave');
		  form.pw.focus();
		  return false;
	  }
	form.button;
}
</script>";
?>
<body id="page1">
<div class="body1"></div>
<div class="body2">
	<div class="main"><div class="ic"></div>
<!--header -->
		<header>
			<div class="wrapper">
				<nav>
					
					<ul id="menu">
						
						<li><figure class="left marg_right1"><img src="images/logo18.png"  width='98' alt=""> </figure></li><li><div class="text1">Centro Medico Quirurgico MEDIC-GLOBAL </span></div></li>
	
						
						
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
		<section id="content_top">
			<article class="col1 pad_left2">
				<ul class="list1"></li>
				</ul>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
	  <div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
				<h2>Acceso Restringido </h2>
				
				<? 
				//inicio de seccion
				echo'<section class="loginform cf">';
				echo"<form action='' method='post' name='prin' accept-charset='utf-8'>";
	echo'<ul>';
				echo'<li>';

	 echo'<label for="usermail">usuario</label>';
	echo $ad1="<input type='text' name='user' placeholder='.........................................' required/> ";
echo'</li>';
				echo'<li>';
				echo'<label for="password">Clave</label>';
	echo $ad2="<input type='password' name='pw' placeholder='...............................................' required />";
	echo'</li>';

echo'<li>';
echo"</br>";

	   echo"&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button'onClick='principal(),validar(this.form)'  value='Ingresar' />";
	echo"<div id='mensaje'></div>";
	   echo'</li>';
	 ?>
	 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
<!--//BEGIN Script

function new_window(url) {

link = window.open(url,"Link","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=yes,resizable=0,width=430,height=300,left=80,top=180");

}
//END Script-->
</script>
                 <a href="javascript:new_window('recuperar.php')"> 
                    olvido su clave?</a>
	 <?
	
    echo'</ul>';
 
echo"</form>";
echo'</section>';






	 
	 echo"<div id='mensaje'></div>";
	
	 
	   
?>	
			</article>
			
			<article class="col2 pad_left1">
					<h2 class="color1"></h2>
					<figure></figure>
					
					
			</article>
			<article class="col2 pad_left1">
				<h2 class="color1">Entrar Como INVITADO</h2>
				<figure><img alt="" src="images/page1_img2.jpg" class="pad_bot1 marg_top"></figure>
				
		<a href="invitado/index2.php" class="link1">Entrar</a></div>
	</section>
</div>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					<li class="bg_none"><a target='_blank' href=manualpdf.php><img src='images/32742.png' width='40' alt='Edicion' title='MANUAL DE USUARIO'></a></li>
					<li class="bg_none">PAGINA PRINCIPAL</a></li>
					<li class="bg_none"><a target='_blank' href=sistema/respaldomenu2.php><img src='images/38870.png' width='40' alt='Edicion' title='SOLUCIONAR EN CASO DE UN ERROR CON LA BASE DE DATOS'></a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<div class="body5">
	<div class="main">
		<footer>
				info . del sistema jond_14@gmail.com 
		<br>yonathan suarez
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
