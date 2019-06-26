<?php 

$con=mysql_connect("localhost","root","1234");
$bd=mysql_select_db("clinica",$con);
 //convierto los acentos a html
 function chao_tilde($entra)
 {
 $traduce=array('á' => '$aacute;' , 'é' => '$eacute;' , 'í' => '$iacute;' , 'ó' => '$oacute;' , 'ú' => '$uacute;' , 'ñ' => '$ntilde;' , 'Ñ' => '$Ntilde;' ,'ä' => '$auml;' , 'ë' => '$euml;' , 'ï' => '$iuml;' , 'ö' => '$ouml;' , 'ü' => '$uuml;');
 $sale=strtr($entra , $traduce);
 return $sale; 
 }
?>