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
	<section id="content"><?

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
$a=date("d-m-Y");
$b=date("H-m-s");

	//  Conexión con la Base de Datos.
	
	$db_server			= "localhost"; 
	$db_name				= "clinica"; 
	$db_username		= "root"; 
	$db_password		= "1234"; 


	//  Acceso al script.
	
	$auth_user			= "root";
	$auth_password 	= "1234";


	//  Nombre del archivo.

	$filename = "clinica_$a._.$b.sql";


//------------------------------------------------------------------------------------------
//  No tocar
	error_reporting( E_ALL & ~E_NOTICE );
	define( 'Str_VERS', "1.1.1" );
	define( 'Str_DATE', "18 de Marzo de 2005" );
//------------------------------------------------------------------------------------------
?>
<?php
//------------------------------------------------------------------------------------------
//  Funciones

	error_reporting( E_ALL & ~E_NOTICE );

	function fetch_table_dump_sql($table, $fp = 0) {
		$tabledump = "--\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	
		$tabledump = "-- Table structure for table `$table`\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	
		$tabledump = "--\n\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	

		$tabledump = query_first("SHOW CREATE TABLE $table");
		strip_backticks($tabledump['Create Table']);
		$tabledump = "DROP TABLE IF EXISTS $table;\n" . $tabledump['Create Table'] . ";\n\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	

		$tabledump = "--\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	
		$tabledump = "-- Dumping data for table `$table`\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	
		$tabledump = "--\n\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	

		$tabledump = "LOCK TABLES $table WRITE;\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	

		$rows = query("SELECT * FROM $table");
		$numfields=mysql_num_fields($rows);
		while ($row = fetch_array($rows, DBARRAY_NUM)) {
			$tabledump = "INSERT INTO $table VALUES(";
			$fieldcounter = -1;
			$firstfield = 1;
			// campos
			while (++$fieldcounter < $numfields) {
				if( !$firstfield) {
					$tabledump .= ', ';
				}
				else {
					$firstfield = 0;
				}
				if( !isset($row["$fieldcounter"])) {
					$tabledump .= 'NULL';
				}
				else {
					$tabledump .= "'" . mysql_escape_string($row["$fieldcounter"]) . "'";
				}
			}
			$tabledump .= ");\n";
			if( !$hay_Zlib ) 
				fwrite($fp, $tabledump);
			else
				gzwrite($fp, $tabledump);	
		}
		free_result($rows);
		$tabledump = "UNLOCK TABLES;\n";
		if( !$hay_Zlib ) 
			fwrite($fp, $tabledump);
		else
			gzwrite($fp, $tabledump);	
	}

	function strip_backticks(&$text) {
		return $text;
	}

	function fetch_array($query_id=-1) {
		if( $query_id!=-1) {
			$query_id=$query_id;
		}
		$record = mysql_fetch_array($query_id);
		return $record;
	}

	function problemas($msg) {
		$errdesc = mysql_error();
    $errno = mysql_errno();
    $message  = "<br>";
    $message .= "- Ha habido un problema accediendo a la Base de Datos<br>";
    $message .= "- Error $appname: $msg<br>";
    $message .= "- Error mysql: $errdesc<br>";
    $message .= "- Error número mysql: $errno<br>";
    $message .= "- Script: ".getenv("REQUEST_URI")."<br>";
    $message .= "- Referer: ".getenv("HTTP_REFERER")."<br>";

		echo( "</strong><br><br><hr><center><small>" );
		setlocale( LC_TIME,"spanish" );
		echo strftime( "%A %d %B %Y&nbsp;-&nbsp;%H:%M:%S", time() );
		echo( "<br>&copy;2005 <a href=\"mailto:insidephp@gmail.com\">Inside PHP</a><br>" );
		echo( "vers." . Str_VERS . "<br>" );
		echo( "</small></center>" );
		echo( "</BODY>" );
		echo( "</HTML>" );
		die("");
  }

	function free_result($query_id=-1) {
    if( $query_id!=-1) {
      $query_id=$query_id;
    }
    return @mysql_free_result($query_id);
  }

  function query_first($query_string) {
    $res = query($query_string);
    $returnarray = fetch_array($res);
    free_result($res);
    return $returnarray;
  }

	function query($query_string) {
    $query_id = mysql_query($query_string);
    if( !$query_id) {
      problemas("Invalid SQL: ".$query_string);
    }
    return $query_id;
  }


//------------------------------------------------------------------------------------------
//  Main
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML>
 <HEAD>
	<title>Respaldo y Descarga de la Base de Datos</title>
	<!-- no cache headers -->
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-store">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Cache-Control" content="must-revalidate">
    <link rel="icon"  href="../img/logo2.jpg" type="image/x-icon"/>
<link href='../stilos/estilos.css' rel='stylesheet' type='text/css'>
<link href='../stilos/submenu.css' rel='stylesheet' type='text/css'>
	<!-- end no cache headers --> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 </HEAD>
<BODY>
<img src="../img/cabecera_me.jpg"  width="100%" id="tra"/>
<a href="../index.php"><img src="../img/atras.jpg" width="2%"></a>
<center><h1>Dump y Download la Base de Datos</h1></center>
<br>
<strong>
<?php
	@set_time_limit( 0 );

	echo( "- Base de Datos: '$db_name' en '$db_server'.<br>" );
	$error = false;
	$tablas = 0;

	if( !@function_exists( 'gzopen' ) ) {
		$hay_Zlib = false;
		echo( "- Ya que no esta disponible Zlib, salvare la Base de Datos sin comprimir, como '$filename'<br>" );
	}
	else {
		$filename = $filename . ".gz";
		$hay_Zlib = true;
		echo( "- Ya que esta disponible Zlib, salvare la Base de Datos comprimida, como '$filename'<br>" );
	}
	
	if( !$error ) { 
	    $dbconnection = @mysql_connect( $db_server, $db_username, $db_password ); 
	    if( $dbconnection) 
	        $db = mysql_select_db( $db_name );
	    if( !$dbconnection || !$db ) { 
	        echo( "<br>" );
	        echo( "- La conexion con la Base de datos ha fallado: ".mysql_error()."<br>" );
	        $error = true;
	    }
	    else {
	        echo( "<br>" );
	        echo( "- He establecido conexion con la Base de datos.<br>" );
	    }
	}

	if( !$error ) { 
		//  MySQL versión
		$result = mysql_query( 'SELECT VERSION() AS version' );
		if( $result != FALSE && @mysql_num_rows($result) > 0 ) {
			$row   = mysql_fetch_array($result);
		} else {
			$result = @mysql_query( 'SHOW VARIABLES LIKE \'version\'' );
			if( $result != FALSE && @mysql_num_rows($result) > 0 ){
				$row   = mysql_fetch_row( $result );
			}
		}
		if(! isset($row) ) {
			$row['version'] = '3.21.0';
		}
	}

	if( !$error ) { 
		$el_path = getenv("REQUEST_URI");
		$el_path = substr($el_path, strpos($el_path, "/"), strrpos($el_path, "/"));

		$result = mysql_list_tables( $db_name );
		if( !$result ) {
			print "- Error, no puedo obtener la lista de las tablas.<br>";
			print '- MySQL Error: ' . mysql_error(). '<br><br>';
			$error = true;
		}
		else {
			$t_start = time();
			
			if( !$hay_Zlib ) 
				$filehandle = fopen( $filename, 'w' );
			else
				$filehandle = gzopen( $filename, 'w6' );	//  nivel de compresión
				
			if( !$filehandle ) {
				$el_path = getenv("REQUEST_URI");
				$el_path = substr($el_path, strpos($el_path, "/"), strrpos($el_path, "/"));
				echo( "<br>" );
				echo( "- No he podido crear '$filename' en '$el_path/'. Por favor, asegurese de<br>" );
				echo( "&nbsp;&nbsp;que dispone de privilegios de escritura.<br>" );
			}
			else {					
				$tabledump = "-- Dump de la Base de Datos\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				setlocale( LC_TIME,"spanish" );
				$tabledump = "-- Fecha: " . strftime( "%A %d %B %Y - %H:%M:%S", time() ) . "\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "--\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "-- Version: " . Str_VERS . ", del " . Str_DATE . ", insidephp@gmail.com\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "-- Soporte y Updaters: http://insidephp.sytes.net\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "--\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "-- Host: `$db_server`    Database: `$db_name`\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "-- ------------------------------------------------------\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				$tabledump = "-- Server version	". $row['version'] . "\n\n";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	

				$result = query( 'SHOW tables' );
				while( $currow = fetch_array($result, DBARRAY_NUM) ) {
					fetch_table_dump_sql( $currow[0], $filehandle );
					fwrite( $filehandle, "\n" );
					if( !$hay_Zlib ) 
						fwrite( $filehandle, "\n" );
					else
						gzwrite( $filehandle, "\n" );
						$tablas++;
				}
				$tabledump = "\n-- Dump de la Base de Datos Completo.";
				if( !$hay_Zlib ) 
					fwrite( $filehandle, $tabledump );
				else
					gzwrite( $filehandle, $tabledump );	
				if( !$hay_Zlib ) 
					fclose( $filehandle );
				else
					gzclose( $filehandle );
	
				$t_now = time();
				$t_delta = $t_now - $t_start;
				if( !$t_delta )
					$t_delta = 1;
				$t_delta = floor(($t_delta-(floor($t_delta/3600)*3600))/60)." minutos y "
				.floor($t_delta-(floor($t_delta/60))*60)." segundos.";
				echo( "- He salvado las $tablas tablas en $t_delta<br>" );
				echo( "<br>" );
				echo( "- El Dump de la Base de Datos esta completo.<br>" );
				echo( "- He salvado la Base de Datos en: $el_path/$filename<br>" );
				echo( "<br>" );
				echo( "- Puede descargarsela  directamente: </strong><a href=\"$filename\">$filename</a>" );
				$size = filesize($filename);
				$size = number_format( $size );
				$size = str_replace( ",",".",$size );
				echo( "&nbsp;&nbsp;&nbsp;<small>($size bytes)</small><br>" );
			}
		}
	}

	if( $dbconnection )
	    mysql_close();

	echo( "</strong><br><br><hr><center><small>" );
	setlocale( LC_TIME,"spanish" );
	echo strftime( "%A %d %B %Y&nbsp;", time() );
	echo( "<br>&copy;2014 SISTEMA INTRA-HOSPITALARIO</a><br>" );
	echo( "vers." . Str_VERS . "<br>" );
	echo( "</small></center>" );
	echo( "</BODY>" );
	echo( "</HTML>" );
	
//------------------------------------------------------------------------------------------
//  END
?>


<?php
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

