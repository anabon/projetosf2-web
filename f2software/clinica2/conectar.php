<?php
$host="localhost";
$user="root";
$pw="";
$db="pet1";

mysql_connect("localhost", "root", "") OR DIE("error al conectarse con la tabla");
@mysql_query("SET NAMES 'utf8'"); //solucion caracteres especiales como la ñ
mysql_select_db("pet1")OR DIE("No ha sido posible conectar a la Base de Datos");
?>
