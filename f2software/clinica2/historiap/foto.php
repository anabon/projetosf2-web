<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 

?>
<?php require '../conexion2.php'; ?>

<?

include ("../conexion.php");


date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fechac = date('y-m-d ');


require '../inventario/select.php'; 

?>

<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fechac = date('y-m-d H:i:s',$tiempo); 
?>
<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fecha = date('y-m-d H:i:s',$tiempo); 
?>
 <?php


  include_once('../conexion2.php');
  $link=conectarse() ;
?>
<?

$foto = $_FILES['imagen'];
$nameimagen = $_FILES['imagen']['name'];
$tmpimagen = $_FILES['imagen']['tmp_name'];
$extimagen = pathinfo ($nameimagen);
$ext = array("png","gif","jpg");
$urlnueva="../perfil/".$nameimagen;

if(is_uploaded_file($tmpimagen)){
	if(array_search($extimagen['extension'],$ext)){
	copy($tmpimagen,$urlnueva);
	 "INSERT INTO `clinica`.`perfil` (`cod_alu` ,`foto`)VALUES ('$cod', '$foto')";
	 
	}
}


?>