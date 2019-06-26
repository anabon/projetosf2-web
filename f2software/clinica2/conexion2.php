<?php
function conectarse()
	{
	$bd_host = "localhost";
	$bd_usuario = "root";	
	$bd_password = "";
	$bd_base = "pet1";
	$con = mysql_connect ($bd_host, $bd_usuario, $bd_password);
	if(!$con)
		{
			mysql_error();
		}
		else
		{
		@mysql_query("SET NAMES 'utf8'");
			mysql_select_db($bd_base,$con);
		}
	return $con;
	}
	 function chao_tilde($entra)
 {
 $traduce=array('á' => '$aacute;' , 'é' => '$eacute;' , 'í' => '$iacute;' , 'ó' => '$oacute;' , 'ú' => '$uacute;' , 'ñ' => '$ntilde;' , 'Ñ' => '$Ntilde;' ,'ä' => '$auml;' , 'ë' => '$euml;' , 'ï' => '$iuml;' , 'ö' => '$ouml;' , 'ü' => '$uuml;');
 $sale=strtr($entra , $traduce);
 return $sale; 
 }
?>
