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

$maxRows_rs_video = 12;
$pageNum_rs_video = 0;
if (isset($_GET['pageNum_rs_video'])) {
  $pageNum_rs_video = $_GET['pageNum_rs_video'];
}
$startRow_rs_video = $pageNum_rs_video * $maxRows_rs_video;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_video = "SELECT DATE_FORMAT(t1.video_dtcad, '%d/%m/%Y' ) AS video_dtcad, t1.video_nome, t1.video_img FROM tb_video AS t1 WHERE t1.video_sit = 'Ativo' ORDER BY t1.video_dtcad DESC";
$query_limit_rs_video = sprintf("%s LIMIT %d, %d", $query_rs_video, $startRow_rs_video, $maxRows_rs_video);
$rs_video = mysql_query($query_limit_rs_video, $dbsite) or die(mysql_error());
$row_rs_video = mysql_fetch_assoc($rs_video);

if (isset($_GET['totalRows_rs_video'])) {
  $totalRows_rs_video = $_GET['totalRows_rs_video'];
} else {
  $all_rs_video = mysql_query($query_rs_video);
  $totalRows_rs_video = mysql_num_rows($all_rs_video);
}
$totalPages_rs_video = ceil($totalRows_rs_video/$maxRows_rs_video)-1;

$queryString_rs_video = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_video") == false && 
        stristr($param, "totalRows_rs_video") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_video = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_video = sprintf("&totalRows_rs_video=%d%s", $totalRows_rs_video, $queryString_rs_video);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
    <td class="boby_titulo">V&iacute;deos</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td>Clique nas fotos para exibir o v&iacute;deo.</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="sobre_conteuto"></td>
  </tr>
</table>
<?php if ($totalRows_rs_video > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table border="0" cellpadding="5" cellspacing="0">
        <tr>
          <?php
do { // horizontal looper version 3
?>
            <td><table width="220" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <td width="100" height="75" align="center" bgcolor="#CCCCCC"><a href="http://www.youtube.com/watch?v=<?php echo $row_rs_video['video_img']; ?>" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/<?php echo $row_rs_video['video_img']; ?>/default.jpg" alt="<?php echo $row_rs_video['video_nome']; ?>" width="100" /></a></td>
                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                  <tr>
                    <td height="24" valign="top"><?php echo $row_rs_video['video_dtcad']; ?></td>
                  </tr>
                  <tr>
                    <td valign="top"><strong><?php echo $row_rs_video['video_nome']; ?></strong></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <?php
$row_rs_video = mysql_fetch_assoc($rs_video);
    if (!isset($nested_rs_video)) {
      $nested_rs_video= 1;
    }
    if (isset($row_rs_video) && is_array($row_rs_video) && $nested_rs_video++ % 3==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_video); //end horizontal looper version 3
?>
        </tr>
      </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top: #ccc 2px solid;">
          <tr>
            <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_video=%d%s", $currentPage, 0, $queryString_rs_video); ?>">Primeiro(s)</a></td>
            <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_video=%d%s", $currentPage, max(0, $pageNum_rs_video - 1), $queryString_rs_video); ?>">Anterior(es)</a></td>
            <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_video=%d%s", $currentPage, min($totalPages_rs_video, $pageNum_rs_video + 1), $queryString_rs_video); ?>">Pr&oacute;ximo(s)</a></td>
            <td width="70" align="center"><a href="<?php printf("%s?pageNum_rs_video=%d%s", $currentPage, $totalPages_rs_video, $queryString_rs_video); ?>">&Uacute;ltimo(s)</a></td>
            <td>P&aacute;gina <?php echo ($pageNum_rs_video + 1) ?> de <?php echo ($totalPages_rs_video + 1) ?>.</td>
            <td align="right">&nbsp;<strong><?php echo $totalRows_rs_video ?></strong> v&iacute;deo(s).</td>
          </tr>
        </table>
        <table border="0" cellpadding="5" cellspacing="0">
          <tr> </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
<?php if ($totalRows_rs_video == 0) { // Show if recordset empty ?>
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
mysql_free_result($rs_video);
?>
