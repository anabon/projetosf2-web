<?php require_once('Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_foto = 20;
$pageNum_rs_foto = 0;
if (isset($_GET['pageNum_rs_foto'])) {
  $pageNum_rs_foto = $_GET['pageNum_rs_foto'];
}
$startRow_rs_foto = $pageNum_rs_foto * $maxRows_rs_foto;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_foto = "SELECT t1.foto_nome, t1.foto_img, t1.foto_desc FROM tb_foto AS t1 WHERE t1.foto_sit = 'Ativo' ORDER BY t1.foto_ordem ASC";
$query_limit_rs_foto = sprintf("%s LIMIT %d, %d", $query_rs_foto, $startRow_rs_foto, $maxRows_rs_foto);
$rs_foto = mysql_query($query_limit_rs_foto, $dbsite) or die(mysql_error());
$row_rs_foto = mysql_fetch_assoc($rs_foto);

if (isset($_GET['totalRows_rs_foto'])) {
  $totalRows_rs_foto = $_GET['totalRows_rs_foto'];
} else {
  $all_rs_foto = mysql_query($query_rs_foto);
  $totalRows_rs_foto = mysql_num_rows($all_rs_foto);
}
$totalPages_rs_foto = ceil($totalRows_rs_foto/$maxRows_rs_foto)-1;

$queryString_rs_foto = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_foto") == false && 
        stristr($param, "totalRows_rs_foto") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_foto = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_foto = sprintf("&totalRows_rs_foto=%d%s", $totalRows_rs_foto, $queryString_rs_foto);
$query_rs_foto = "SELECT t1.foto_nome, t1.foto_desc, t1.foto_img FROM tb_foto AS t1 WHERE t1.foto_sit = 'Ativo' ORDER BY t1.foto_ordem ASC";
$rs_foto = mysql_query($query_rs_foto, $dbsite) or die(mysql_error());
$row_rs_foto = mysql_fetch_assoc($rs_foto);
$totalRows_rs_foto = mysql_num_rows($rs_foto);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ios-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
  $("a[rel^='prettyPhoto']").prettyPhoto();
});
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="boby_titulo">Galeria de fotos</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>&nbsp;Clique nas fotos para ampliar.</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="sobre_conteuto"></td>
  </tr>
</table>
<?php if ($totalRows_rs_foto > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>
      <div id="foto-mini">
      	<ul>
        	<?php do { ?>
        	  <li><a href="dados/fotos/<?php echo $row_rs_foto['foto_img']; ?>" rel="prettyPhoto[gallery2]" title="<?php echo $row_rs_foto['foto_desc']; ?>"><img src="dados/fotos/<?php echo $row_rs_foto['foto_img']; ?>" width="100" height="75" border="0" /></a></li>
        	<?php } while ($row_rs_foto = mysql_fetch_assoc($rs_foto)); ?>
        </ul>
      
      </div>
      <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top:#CCC 2px solid;">
        <tr>
          <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_foto=%d%s", $currentPage, 0, $queryString_rs_foto); ?>">primeiro(s)</a></td>
          <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_foto=%d%s", $currentPage, max(0, $pageNum_rs_foto - 1), $queryString_rs_foto); ?>">anterior(es)</a></td>
          <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_foto=%d%s", $currentPage, min($totalPages_rs_foto, $pageNum_rs_foto + 1), $queryString_rs_foto); ?>">pr&oacute;ximo(s)</a></td>
          <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_foto=%d%s", $currentPage, $totalPages_rs_foto, $queryString_rs_foto); ?>">&uacute;ltimo(s)</a></td>
          <td>P&aacute;gina <?php echo ($pageNum_rs_foto + 1) ?> de <?php echo ($totalPages_rs_foto + 1) ?>.</td>
          <td align="right">&nbsp;<strong><?php echo $totalRows_rs_foto ?></strong> foto(s).</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
<?php if ($totalRows_rs_foto == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="box_atencao">
        <tr>
          <td>Desculpe, nenhum v&iacute;deo dispon&iacute;vel no momento.</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rs_foto);
?>
