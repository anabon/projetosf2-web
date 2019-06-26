<?php
$cn=mysql_connect("localhost","root","") or die("error en conexion");
$db=mysql_select_db("pet1")or die("error en db");
return($cn);
return($db);
?>
