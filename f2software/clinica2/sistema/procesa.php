<?
require("conexion.php");

$usuario=$_POST["user"];
$contrasenia=$_POST["pass"];
$cedula1=$_POST["cedula"];

$contra=md5 ($contrasenia);

$sql="insert into administrador (CEDULA,USER,PW) values ('$cedula','$usuario','$contra')";
$res=mysql_query($sql, $con);

?>
