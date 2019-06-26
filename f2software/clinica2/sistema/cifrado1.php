
<html lang="en">
<head>
<title>clave</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>

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
					<li><center><figure class="left marg_right1"></figure>
					</center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li ><a href="../inventario/indexinventario.php">Inventario</a></li>
						<li id="menu_active"><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li class="bg_none"><a href="../cerrar.php">Salir</a></li>
					</ul>
				</nav>
				
				
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
			<article class="col1 pad_left2">
				<ul class="list1"></li>
				</ul>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
	
				<h2>INTRODUCE TU ID Y CLAVE PARA CREAR O ELIMINAR  USUARIOS </h2>
			<center>	
				<? 
				//inicio de seccion
				echo'<section class="loginform cf">';
				echo"<form action='' method='post' name='prin' accept-charset='utf-8'>";
	echo'<ul>';
				echo'<li>';

	 echo'<label for="usermail">usuario</label>';
	echo"<input type='text' name='user' placeholder='...........................................' required/> ";
echo'</li>';
				echo'<li>';
				echo'<label for="password">Clave</label>';
	echo"<input type='password' name='pw' placeholder='...............................................' required />";
	echo'</li>';

echo'<li>';
echo"</br>";

	   echo"&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button'onClick='principal(),validar(this.form)'  value='Ingresar' />";
	echo"<div id='mensaje'></div>";
	  echo'</li>';
	 
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
			info . del sistema jond_14@gmail.com</br>
yonathan suarez 
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
