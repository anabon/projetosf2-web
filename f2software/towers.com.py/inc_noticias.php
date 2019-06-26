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

$maxRows_rs_news = 10;
$pageNum_rs_news = 0;
if (isset($_GET['pageNum_rs_news'])) {
  $pageNum_rs_news = $_GET['pageNum_rs_news'];
}
$startRow_rs_news = $pageNum_rs_news * $maxRows_rs_news;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_news = "SELECT DATE_FORMAT(t1.news_dtcad, '%d/%m/%Y') AS news_dtcad, t1.news_id, t1.news_img, t1.news_titulo FROM tb_news AS t1 WHERE t1.news_sit = 'Ativo' ORDER BY t1.news_dtcad DESC";
$query_limit_rs_news = sprintf("%s LIMIT %d, %d", $query_rs_news, $startRow_rs_news, $maxRows_rs_news);
$rs_news = mysql_query($query_limit_rs_news, $dbsite) or die(mysql_error());
$row_rs_news = mysql_fetch_assoc($rs_news);

if (isset($_GET['totalRows_rs_news'])) {
  $totalRows_rs_news = $_GET['totalRows_rs_news'];
} else {
  $all_rs_news = mysql_query($query_rs_news);
  $totalRows_rs_news = mysql_num_rows($all_rs_news);
}
$totalPages_rs_news = ceil($totalRows_rs_news/$maxRows_rs_news)-1;

$queryString_rs_news = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_news") == false && 
        stristr($param, "totalRows_rs_news") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_news = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_news = sprintf("&totalRows_rs_news=%d%s", $totalRows_rs_news, $queryString_rs_news);
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
    <td class="boby_titulo">Not&iacute;cias</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Para ler uma not&iacute;cia, clique na(s) foto(s).</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="sobre_conteuto"></td>
  </tr>
</table>
<?php if ($totalRows_rs_news > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td valign="top"><?php do { ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:#CCC 1px dotted;">
            <tr>
              <td width="115" height="90" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-right:#C00 2px solid;">
                <tr>
                  <td align="left"><a href="index.php?pg=news&amp;news_id=<?php echo $row_rs_news['news_id']; ?>"><img src="dados/<?php echo $row_rs_news['news_img']; ?>" width="100" height="75" border="0" alt="" title="Clique para ler." /></a></td>
                  </tr>
              </table></td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="24"><span class="news-data"><?php echo $row_rs_news['news_dtcad']; ?></span></td>
                  </tr>
                </table>
              <span class="news-titulo"><?php echo $row_rs_news['news_titulo']; ?></span></td>
            </tr>
          </table>
          <?php } while ($row_rs_news = mysql_fetch_assoc($rs_news)); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top:#CCC 2px solid;">
            <tr>
              <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_news=%d%s", $currentPage, 0, $queryString_rs_news); ?>">primeiro(s)</a></td>
              <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_news=%d%s", $currentPage, max(0, $pageNum_rs_news - 1), $queryString_rs_news); ?>">anterior(es)</a></td>
              <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_news=%d%s", $currentPage, min($totalPages_rs_news, $pageNum_rs_news + 1), $queryString_rs_news); ?>">pr&oacute;ximo(s)</a></td>
              <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_news=%d%s", $currentPage, $totalPages_rs_news, $queryString_rs_news); ?>">&uacute;ltimo(s)</a></td>
              <td>P&aacute;gina <?php echo ($pageNum_rs_news + 1) ?> de <?php echo ($totalPages_rs_news + 1) ?>.</td>
              <td align="right">&nbsp;<strong><?php echo $totalRows_rs_news ?></strong> not&iacute;cia(s).</td>
            </tr>
          </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
<?php if ($totalRows_rs_news == 0) { // Show if recordset empty ?>
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
mysql_free_result($rs_news);
?>
