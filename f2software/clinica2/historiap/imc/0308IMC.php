<!DOCTYPE html>
<html>
<head>
   <title>C&aacute;lculo del IMC</title>
 <link rel="stylesheet" href="../../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../../js/Myriad_Pro_400.font.js"></script>
 <style>
   fieldset {
     border: 1px solid #781351;
     margin:auto;
     padding: 0em, 0em, 0.4em, 0.8em;
     width: 310px;
   }
   fieldset label { 
     display     : block;
     float       : left;
     font-weight : bold;
     margin-right: 0.5em;
     text-align  : left;
     width       : 65px;
   }
   fieldset legend {
      background:  #666666;
      border: 1px solid #781351;
      color: #fff;  
      padding: 2px 2px 2px 2px;
   } 
   img {
	 border: 0px;
   }
   p.centrado {
	 text-align:center;
   }
 </style>
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
					<li><center><figure class="left marg_right1"></figure>
					</center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="../../index.php">Inicio</a></li>
						<li ><a href="../../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="../../cirugia/pabellonmenu.php">Pabellon</a></li>
						<li ><a href="../../inventario/indexinventario.php">Inventario</a></li>
						<li id="menu_active"><a href="../../sistema/sistemamenu.php">Sistema</a></li>
						<li class="bg_none"><a href="../../cerrar.php">Salir</a></li>
					</ul>
				</nav>
				
				
			</div>
			<div class="wrapper">
				
				</article>
			</div>
		</header>
	</div>
</div>

<div class="body3">
	<div class="main">
		<section id="content_top">
			<article class="pad">
				<h2>INDICE DE MASA CORPORAL</h2>
				
			</article>
		</section>
	</div>
</div>
	<div class="main">
		<section id="content_top">
		<article class="pad_left2">
			
				</br>
				
					
					
<?php
  function valoracion($imc) {
    if ($imc >= 18.5 and  $imc <= 24.99) {
         $valoracion = 'NORMAL';
    } elseif ($imc >= 25 and $imc <= 29.99) {
        $valoracion = 'PREOBESO';
    } elseif ($imc >= 30) {
        $valoracion = 'OBESO';
    } elseif ($imc < 18.5) { $valoracion = 'INFRAPESO'; }
    return $valoracion;
  }
  
  function imc($peso, $altura) { return $peso/($altura * $altura); }
echo "<center>";
  function resultado ($peso, $altura, $imc){
	$html = '<h5>IMC</p></h5>'; 
    $html.= '<table>';
    $html.= '<tr><td><strong>Peso</strong></td><td>';
    $html.= $peso.'</td><td>Kg</td></tr>';
	$html.= '<tr><td><b>Altura</b></td>';
    $html.= '<td>'.$altura.'</td><td>Mt</td></tr>';
	$html.= '<tr><td><b>IMC</b></td>';
    $html.= '<td>'.number_format($imc, 2).'</td><td>kg/m<sup>2</sup></td></tr>';
    $html.= '<tr><td><b>Valoraci&oacute;n&nbsp;&nbsp;&nbsp;</b></td><td>'.valoracion($imc);
	$html.= '</td><td></td></tr></table>';
    return $html.'<br';
  }

  if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	  $peso   = $_POST['peso'];
      $altura =  $_POST['altura']; 
      $html = resultado($peso, $altura, imc($peso, $altura));
      $html.= '<p class="centrado">';
      $html.= '<a href="0308IMC.php"><img src="../../images/icon-home.gif" /><br>CALCULO NUEVO</a></p>';
      echo $html;
  } else { 
     ?><center>
       <form action='0308IMC.php' method='post' >
       <fieldset>
         <legend>INDICE DE MASA CORPORAL</legend>
         <p>
            <label for='peso'>Peso</label>
            <input min='30' max='500' name='peso' type='number' value='80' /> Kg
         </p>
         <p>
            <label for='altura'>Altura</label>
            <input min='1' max='3' step='0.01' name='altura' type='number' value='1.78' /> mts
         </p>
         <p>  
            <input type='submit' name='calcular' value='Calcular' id='calcular' />
         </p>
       </fieldset>
       </form>
	   </center>
     <?
  }
?>
		</article>
		</div>
				
				</br>
					
								
			</article>
			
		</section>
	</div>
</div>

		
	</section>
</div>




<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					<li><a href="../../sistema/sistemamenu.php">REGRESAR</a></li>
					<li><? echo "Bienvenido Dr. <b>".$_SESSION['admin']." </b>"; ?> </li>
					
					<li class="bg_none"><? echo "<b>$fecha </b>"; ?></li>
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
