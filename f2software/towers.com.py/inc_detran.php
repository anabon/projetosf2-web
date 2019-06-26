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

mysql_select_db($database_dbsite, $dbsite);
$query_rs_detran = "SELECT t1.detran_nome, t1.detran_url, t1.detran_img FROM tb_detran AS t1 WHERE t1.detran_sit = 'Ativo' ORDER BY t1.detran_nome ASC";
$rs_detran = mysql_query($query_rs_detran, $dbsite) or die(mysql_error());
$row_rs_detran = mysql_fetch_assoc($rs_detran);
$totalRows_rs_detran = mysql_num_rows($rs_detran);
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
    <td class="boby_titulo">Unidades Detran, Multas e IPVA</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="sobre_conteuto"></td>
  </tr>
</table>
<?php if ($totalRows_rs_detran > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table border="0" cellpadding="5" cellspacing="0">
        <tr>
          <?php
  do { // horizontal looper version 3
?>
            <td width="300"><table width="280" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="80" valign="top"><img src="dados/detran/<?php echo $row_rs_detran['detran_img']; ?>" width="80" height="60" /></td>
                <td valign="top"><span class="loopauto_modelo"><?php echo $row_rs_detran['detran_nome']; ?></span><br />
                  <a href="<?php echo $row_rs_detran['detran_url']; ?>" target="_blank"><?php echo $row_rs_detran['detran_url']; ?></a></td>
              </tr>
            </table></td>
            <?php
    $row_rs_detran = mysql_fetch_assoc($rs_detran);
    if (!isset($nested_rs_detran)) {
      $nested_rs_detran= 1;
    }
    if (isset($row_rs_detran) && is_array($row_rs_detran) && $nested_rs_detran++ % 2==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_detran); //end horizontal looper version 3
?>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
<?php if ($totalRows_rs_detran == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="box_atencao">
        <tr>
          <td>Lo sentimos, no hay resultados en este momento.</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rs_detran);
?>
