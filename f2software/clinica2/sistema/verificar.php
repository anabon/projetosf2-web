<?php

session_start();
include("../conexion2.php");
$link=conectarse();

if(isset ($_GET ['n1']) && !empty ($_GET ['n1']) &&
isset ($_GET ['n2']) && !empty ($_GET ['n2']))

$contra2=$_GET['n2'];
$contra = md5 ($contra2);
{

$sel="SELECT * FROM administrador WHERE USER like '".$_GET['n1']."' order by CEDULA";
$row=mysql_fetch_array(mysql_query($sel));
if($contra == $row[PW]){
$_SESSION['admin'] = $_GET['n1'];
$_SESSION['nameadmin'] = $row[NOMBRE];
echo"si1";
	
}
else{

echo "<p>$_GET[n1] no se encuentra registrado o la Contrase&ntilde;a es Invalida";
}
}




?>




