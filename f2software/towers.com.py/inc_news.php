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

$noticia_rs_news = "-1";
if (isset($_GET['news_id'])) {
  $noticia_rs_news = $_GET['news_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_news = sprintf("SELECT DATE_FORMAT(t1.news_dtcad, '%%d/%%m/%%Y') AS news_dtcad, t1.news_id, t1.news_img, t1.news_titulo, t1.news_desc FROM tb_news AS t1 WHERE t1.news_sit = 'Ativo' AND t1.news_id = %s ", GetSQLValueString($noticia_rs_news, "int"));
$rs_news = mysql_query($query_rs_news, $dbsite) or die(mysql_error());
$row_rs_news = mysql_fetch_assoc($rs_news);
$totalRows_rs_news = mysql_num_rows($rs_news);

$maxRows_rs_newsultimas = 10;
$pageNum_rs_newsultimas = 0;
if (isset($_GET['pageNum_rs_newsultimas'])) {
  $pageNum_rs_newsultimas = $_GET['pageNum_rs_newsultimas'];
}
$startRow_rs_newsultimas = $pageNum_rs_newsultimas * $maxRows_rs_newsultimas;

$noticia_rs_newsultimas = "-1";
if (isset($_GET['news_id'])) {
  $noticia_rs_newsultimas = $_GET['news_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_newsultimas = sprintf("SELECT DATE_FORMAT(t1.news_dtcad, '%%d/%%m/%%Y') AS news_dtcad, t1.news_id, t1.news_img, t1.news_titulo FROM tb_news AS t1 WHERE t1.news_sit = 'Ativo' AND t1.news_id != %s ORDER BY t1.news_dtcad DESC", GetSQLValueString($noticia_rs_newsultimas, "int"));
$query_limit_rs_newsultimas = sprintf("%s LIMIT %d, %d", $query_rs_newsultimas, $startRow_rs_newsultimas, $maxRows_rs_newsultimas);
$rs_newsultimas = mysql_query($query_limit_rs_newsultimas, $dbsite) or die(mysql_error());
$row_rs_newsultimas = mysql_fetch_assoc($rs_newsultimas);

if (isset($_GET['totalRows_rs_newsultimas'])) {
  $totalRows_rs_newsultimas = $_GET['totalRows_rs_newsultimas'];
} else {
  $all_rs_newsultimas = mysql_query($query_rs_newsultimas);
  $totalRows_rs_newsultimas = mysql_num_rows($all_rs_newsultimas);
}
$totalPages_rs_newsultimas = ceil($totalRows_rs_newsultimas/$maxRows_rs_newsultimas)-1;
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
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="sobre_conteuto"></td>
  </tr>
</table>
<?php if ($totalRows_rs_news > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="260" height="90" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-right:#C00 2px solid;">
            <tr>
              <td align="left"><img src="dados/<?php echo $row_rs_news['news_img']; ?>" width="245" height="182" /></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <td height="50" valign="bottom" class="news-titulo">Veja tamb&eacute;m:</td>
              </tr>
              <tr>
                <td><?php do { ?>
                    <table width="100%" border="0" cellspacing="0" cellpadding="4" style="border-bottom:#CCC 1px dotted;">
                      <tr>
                        <td width="85" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-right:#C00 2px solid;">
                          <tr>
                            <td align="left"><a href="index.php?pg=news&amp;news_id=<?php echo $row_rs_newsultimas['news_id']; ?>"><img src="dados/<?php echo $row_rs_newsultimas['news_img']; ?>" alt="" width="80" height="60" border="0" title="Clique para ler." /></a></td>
                            </tr>
                          </table></td>
                        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="24"><span class="news-data"><?php echo $row_rs_newsultimas['news_dtcad']; ?></span></td>
                            </tr>
                          </table>
                          <span class="news-titulo"><?php echo $row_rs_newsultimas['news_titulo']; ?></span></td>
                        </tr>
                    </table>
                  <?php } while ($row_rs_newsultimas = mysql_fetch_assoc($rs_newsultimas)); ?></td>
              </tr>
            </table></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="85" height="24">Publicado em:</td>
              <td><span class="news-data"><?php echo $row_rs_news['news_dtcad']; ?></span></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td><span class="news-titulo"><strong><?php echo $row_rs_news['news_titulo']; ?></strong></span></td>
                </tr>
              </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td><span class="news-titulo"><?php echo $row_rs_news['news_desc']; ?></span></td>
                </tr>
            </table></td>
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

mysql_free_result($rs_newsultimas);
?>
