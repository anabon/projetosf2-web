<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ARTICULOS</title>
<meta charset="utf-8">
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
<body id="page4">
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
					<div class="text1"> </span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/pacienteslista.php">Historias Pediatricas </a></li>
						<li><a href="#">Pabellon</a></li>
						<li id="menu_active"><a href="indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
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
<div class="body3">
	<div class="main">
		<section id="content_top">
			<article class="pad_left2">
				<h2>RESPALDO DE LA BASE DE DATOS</h2>
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
<?php
/*
Copyright 2005 © insidephp@gmail.com

Se otorga el permiso para copiar, distribuir, y/o modificar este programa bajo los términos 
de la Licencia GNU de Documentación Libre (GFDL, GNU Free Documentation License) versión 2 
o posteriores publicadas por la Fundación Software Libre (FSF, Free Software Foundation).

Según esta licencia, cualquier trabajo derivado de esta documentación deberá ser notificado 
al autor, aunque la voluntad del mismo es otorgar la máxima libertad posible. 

Este programa se distribuye con la intención de ser útil, pero SIN NINGUNA GARANTÍA; incluso 
sin la garantía implícita de USABILIDAD o UTILIDAD PARA UN FIN PARTICULAR. Vea la Licencia 
Pública General GNU para más detalles.

Soporte y Updaters: http://insidephp.sytes.net
email: insidephp@gmail.com
*/
//------------------------------------------------------------------------------------------
//  Definiciones


	//  Conexión con la Base de Datos.
	
	$db_server			= "localhost"; 
	$db_name			= "clinica"; 
	$db_username		= "root"; 
	$db_password		= "1234"; 


	//  Acceso al script.
	
	$auth_user			= "root";
	$auth_password 	= "1234";


	//  Nombre del archivo.

	$filename 			= "clinica.sql";


//------------------------------------------------------------------------------------------
//  No tocar
	error_reporting( E_ALL & ~E_NOTICE );
	define( 'Str_VERS', "1.1.1" );
	define( 'Str_DATE', "18 de Marzo de 2005" );
//------------------------------------------------------------------------------------------
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML>
 <HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Restore la Base de Datos</title>
	<!-- no cache headers -->
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-store">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Cache-Control" content="must-revalidate">
    <link rel="icon"  href="img/logo2.jpg" type="image/x-icon"/>
<link href='stilos/estilos.css' rel='stylesheet' type='text/css'>
<link href='stilos/submenu.css' rel='stylesheet' type='text/css'>
	<!-- end no cache headers --> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 </HEAD>
<BODY>
<img src="img/cabecera_me.jpg"  width="100%"/>
<a href="index.php"><img src="img/atras.jpg" width="30" height="30"></a>
	<center><h1>Restaurar la Base de Datos</h1></center><br>
	<strong>
<?php
	@set_time_limit( 0 );

	echo( "- Base de Datos: '$db_name' en '$db_server'.<br>" );
	$error = false;

	if ( !@function_exists( 'gzopen' ) ) {
		$hay_Zlib = false;
		echo( "- Ya que no está disponible Zlib, usare el BackUp de la Base de Datos: '$filename'<br>" );
	}
	else {
		$hay_Zlib = true;
		$filename = $filename . ".gz";
		echo( "- Ya que está disponible Zlib, usaré el BackUp de la Base de Datos: '$filename'<br>" );
	}

	if( !$file = @fopen( $filename,"r" ) ) { 
	    echo ("<br>- CARGA DE DATOS COMPLETA: '$filename'.<br>");
	    $error = true;
	}
	else { 
	    if( fseek($file, 0, SEEK_END)==0 )
	        $filesize_comprimido = ftell( $file );
	    else { 
	       echo ("<br>- Lo siento, no puedo obtener las dimensiones de '$filename'.<br>");
	       $error = true;
	    }
	 	  fclose( $file );
	}

	if ( !$error ) {
		if( $hay_Zlib ) {
			if ( !$file = @gzopen( $filename, "rb" ) ) { 
				echo( "<br>- Lo siento, no encuentro o no puedo abrir: '$filename'.<br>" );
				$error = true;
			}
			else {
				gzrewind( $file );
			}
		}
		else {
			if ( !$file = @fopen( $filename, "rb" ) ) { 
				echo( "<br>- Lo siento, no encuentro o no puedo abrir: '$filename'.<br>" );
				$error = true;
			}
			else {
				rewind( $file );
			}
		}
	}

	if (!$error) { 
	    $dbconnection = @mysql_connect( $db_server, $db_username, $db_password ); 
	    if ($dbconnection) 
	        $db = mysql_select_db( $db_name );
	    if ( !$dbconnection || !$db ) { 
	        echo( "<br>" );
	        echo( "- Lo siento, la conexion con la Base de datos ha fallado: ".mysql_error()."<br>" );
	        $error = true;
	    }
	    else {
	        echo( "<br>" );
	        echo( "- He establecido conexion con la Base de datos.<br>" );
	    }
	}

	if (!$error) { 
	    $result = mysql_list_tables( $db_name );
			if (!$result) {
					print "<br>- Error, no puedo obtener la lista de las tablas.<br>";
					print '<br>- MySQL Error: ' . mysql_error(). '<br>';
					$error = true;
			}
			else {
					// $count es el número de tablas en la base de datos
					$count = mysql_num_rows($result);
					if( !$count ) {
							echo "- No ha sido necesario borrar la estructura de la Base de datos, estaba vacia.<br>";
					}
					else {
							while ($row = mysql_fetch_row($result)) {
									$deleteIt = mysql_query("DROP TABLE $row[0]");
									if( !$deleteIt ) {
	        						echo( "<br>" );
											print "- Lo siento, error al borrar la tabla $row[0].<br>";
											$error = true;
											break;
									}
							}
							echo "- He borrado la estructura de la Base de Datos.<br>";
					}
					mysql_free_result($result);
			}
	}

	if( !$error ) { 
	    $query = "";
	    $last_query = "";
	    $total_queries = 0;
	    $total_lineas = 0;
	
			$t_start = time();

			while( 1 ) {
				if( $hay_Zlib )
					$seacabo = gzeof( $file ) OR $error;
				else
					$seacabo = feof( $file ) OR $error;
				if( $seacabo )
					break;
				if( $hay_Zlib )
					$statement = gzgets( $file );
				else
					$statement = fgets( $file );
					
	        $statement = trim( $statement );
	        $total_lineas++;
	        // no se procesan comentarios ni lineas en blanco
	        if ( $statement=="--" || $statement=="" || strpos ($statement, "#") === 0) { 
	            continue;
	        }
	        // pasa a query
	        $query .= $statement;
	        // ejecuta query si esta completo
	        if( ereg( ";$", $statement ) ) { 
	            if ( !mysql_query( $query, $dbconnection) ) { 
	                echo(" <br>" );
	                echo("- Error en statement: $statement<br>" );
	                echo("- Query: $query<br>");
	                echo("- MySQL: ".mysql_error()."<br>" );
	                $error = true;
	                break;
	            }
	            $last_query = $query;
	            $query = "";
	            $total_queries++;
	        }
	    }

			if( $hay_Zlib )
				$file_offset = gztell($file);
	    else
	    	$file_offset = ftell($file);
	
	    echo( "<pre>" );
	    echo( "- Líneas procesadas......................... $total_lineas<br>" );
	    echo( "- Queries procesadas........................ $total_queries<br>" );
	    echo( "- Último Query procesado.................... '$last_query'<br>" );
			if( $hay_Zlib ) {
	    	echo( "- Base de Datos comprimida.................. $filesize_comprimido bytes<br>");
	    	echo( "- Base de Datos descomprimida y procesada... $file_offset bytes<br>" );
	  	}
	  	else {
	    	echo( "- Base de Datos procesada................... $file_offset bytes<br>" );
	  	}
	    echo( "</pre>" );
			$t_now = time();
			$t_delta = $t_now - $t_start;
			if( !$t_delta )
				$t_delta = 1;
			$t_delta = floor(($t_delta-(floor($t_delta/3600)*3600))/60)." minutos y "
			.floor($t_delta-(floor($t_delta/60))*60)." segundos.";
			echo( "- He completado el Restore de la Base de Datos en $t_delta<br>" );
	}

	if ( $dbconnection )
	    mysql_close();
	if ( $file )
		if( $hay_Zlib )
			gzclose($file);
	   else
	    fclose($file);

	echo( "</strong><br><br><hr><center><small>" );
	setlocale( LC_TIME,"spanish" );
	echo strftime( "%A %d %B %Y&nbsp;-&nbsp;%H:%M:%S", time() );
echo( "<br>&copy;2014 SISTEMA INTRA-HOSPITALARIO</a><br>" );
	echo( "vers." . Str_VERS . "<br>" );
	echo( "</small></center>" );
	echo( "</BODY>" );
	echo( "</HTML>" );

//------------------------------------------------------------------------------------------
//  END


///////  El área protegida acaba ANTES de la ANTERIOR línea  /////
	
?>
</div>
			
		</article>
	</section>
</div>
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			<ul>
					
					<li class="bg_none"><a href="../sistema/sistemamenu.php">REGRESAR</a></li>
					
					
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

