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

$info_rs_info = "-1";
if (isset($_GET['info_id'])) {
  $info_rs_info = $_GET['info_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_info = sprintf("SELECT t1.info_titulo, t1.info_desc FROM tb_info AS t1 WHERE t1.info_sit = 'Ativo' AND t1.info_id = %s", GetSQLValueString($info_rs_info, "int"));
$rs_info = mysql_query($query_rs_info, $dbsite) or die(mysql_error());
$row_rs_info = mysql_fetch_assoc($rs_info);
$totalRows_rs_info = mysql_num_rows($rs_info);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ios-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="boby_titulo"><?php echo $row_rs_info['info_titulo']; ?></td>
  </tr>
</table>
<?php if ($totalRows_rs_info > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td class="sobre_conteuto"><?php echo $row_rs_info['info_desc']; ?></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
<?php if ($totalRows_rs_info == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="box_atencao">
        <tr>
          <td>Desculpe, nenhum resultado no momento.</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rs_info);
?>
