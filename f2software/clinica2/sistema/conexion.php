<?php 

$con=mysql_connect("localhost","root","1234");
$bd=mysql_select_db("clinica",$con);
 //convierto los acentos a html
 function chao_tilde($entra)
 {
 $traduce=array('�' => '$aacute;' , '�' => '$eacute;' , '�' => '$iacute;' , '�' => '$oacute;' , '�' => '$uacute;' , '�' => '$ntilde;' , '�' => '$Ntilde;' ,'�' => '$auml;' , '�' => '$euml;' , '�' => '$iuml;' , '�' => '$ouml;' , '�' => '$uuml;');
 $sale=strtr($entra , $traduce);
 return $sale; 
 }
?>