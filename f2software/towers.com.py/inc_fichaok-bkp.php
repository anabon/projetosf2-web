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
$query_rs_recentes = "SELECT t1.auto_id, t2.autoimg_img, t1.auto_marca, t1.auto_nome, t1.auto_vlrvenda FROM tb_auto AS t1 LEFT JOIN tb_autoimg AS t2 ON t2.autoimg_auto = t1.auto_id WHERE t1.auto_sit = 'Ativo' GROUP BY t1.auto_id ORDER BY t1.auto_dtcad DESC LIMIT 6";
$rs_recentes = mysql_query($query_rs_recentes, $dbsite) or die(mysql_error());
$row_rs_recentes = mysql_fetch_assoc($rs_recentes);
$totalRows_rs_recentes = mysql_num_rows($rs_recentes);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_sobre = "SELECT t1.config_fichaok FROM tb_config AS t1";
$rs_sobre = mysql_query($query_rs_sobre, $dbsite) or die(mysql_error());
$row_rs_sobre = mysql_fetch_assoc($rs_sobre);
$totalRows_rs_sobre = mysql_num_rows($rs_sobre);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="home">
    <div id="home-left">
      <h2>Mais recentes</h2>
      <ul>
        <?php do { ?>
        <li>
          <a href="index.php?pg=auto&amp;auto_id=<?php echo $row_rs_recentes['auto_id']; ?>">
           <img src="dados/auto/<?php echo $row_rs_recentes['autoimg_img']; ?>" alt="<?php echo $row_rs_recentes['auto_nome']; ?>" title="<?php echo $row_rs_recentes['auto_nome']; ?>"/>
           <span class="home-left-marca"><?php echo $row_rs_recentes['auto_marca']; ?></span>
           <span class="home-left-modelo"><?php echo $row_rs_recentes['auto_nome']; ?></span>
           <span class="home-left-preco">R$ <?php echo number_format($row_rs_recentes['auto_vlrvenda'],2,',','.'); ?></span>
          </a>
        </li>
          <?php } while ($row_rs_recentes = mysql_fetch_assoc($rs_recentes)); ?>
      </ul>
    </div><!--// home-left //-->
    <div id="home-divisoria"></div>
    <div id="home-right">
      <h2>Ficha cadastral para financiamento</h2>
      <div id="sobre-desc"><?php echo $row_rs_sobre['config_fichaok']; ?></div>
    </div><!--// home-right //-->
  </div><!--// home //-->
</body>
</html>
<?php
mysql_free_result($rs_recentes);

mysql_free_result($rs_sobre);
?>
