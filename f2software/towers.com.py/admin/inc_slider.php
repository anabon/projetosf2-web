<?php require_once('../Connections/dbsite.php'); ?>
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

$usuario_rs_perm_usr = "-1";
if (isset($_SESSION['MM_Username'])) {
  $usuario_rs_perm_usr = $_SESSION['MM_Username'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_perm_usr = sprintf("SELECT t1.usr_id, t2.* FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo' AND t1.usr_sitreg = 1", GetSQLValueString($usuario_rs_perm_usr, "text"));
$rs_perm_usr = mysql_query($query_rs_perm_usr, $dbsite) or die(mysql_error());
$row_rs_perm_usr = mysql_fetch_assoc($rs_perm_usr);
$totalRows_rs_perm_usr = mysql_num_rows($rs_perm_usr);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje FROM tb_usr";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$maxRows_rs_sliderlist = 10;
$pageNum_rs_sliderlist = 0;
if (isset($_GET['pageNum_rs_sliderlist'])) {
  $pageNum_rs_sliderlist = $_GET['pageNum_rs_sliderlist'];
}
$startRow_rs_sliderlist = $pageNum_rs_sliderlist * $maxRows_rs_sliderlist;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_sliderlist = "SELECT t1.slider_id, t1.slider_titulo, t1.slider_sit, t1.slider_img FROM tb_slider AS t1 ";
$query_limit_rs_sliderlist = sprintf("%s LIMIT %d, %d", $query_rs_sliderlist, $startRow_rs_sliderlist, $maxRows_rs_sliderlist);
$rs_sliderlist = mysql_query($query_limit_rs_sliderlist, $dbsite) or die(mysql_error());
$row_rs_sliderlist = mysql_fetch_assoc($rs_sliderlist);

if (isset($_GET['totalRows_rs_sliderlist'])) {
  $totalRows_rs_sliderlist = $_GET['totalRows_rs_sliderlist'];
} else {
  $all_rs_sliderlist = mysql_query($query_rs_sliderlist);
  $totalRows_rs_sliderlist = mysql_num_rows($all_rs_sliderlist);
}
$totalPages_rs_sliderlist = ceil($totalRows_rs_sliderlist/$maxRows_rs_sliderlist)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="slidercad" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">SLAIDE</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_slider']!="S"){ ?>
  <table width="100%" border="0" cellspacing="10" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>USTED NO PUEDE PERMISIÓN PARA ESTE CONTENIDO!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_slider']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="60" height="35" bgcolor="#cccccc" class="registro_titulo-col">ID</td>
          <td width="120" bgcolor="#cccccc" class="registro_titulo-col">Foto</td>
          <td bgcolor="#cccccc" class="registro_titulo-col">T&iacute;tulo</td>
          <td width="100" align="left" bgcolor="#cccccc" class="registro_titulo-col">Situaci&oacute;n</td>
          <td width="150" bgcolor="#cccccc">&nbsp;</td>
        </tr>
      </table>
        <?php do { ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onmouseover="bgColor='#EFEFEF'" onmouseout="bgColor='#FFFFFF'">
            <tr>
              <td width="60" height="35"><?php echo $row_rs_sliderlist['slider_id']; ?></td>
              <td width="120"><img src="../dados/slider/<?php echo $row_rs_sliderlist['slider_img']; ?>" width="100" height="40" /></td>
              <td><?php echo $row_rs_sliderlist['slider_titulo']; ?></td>
              <td width="100" align="left"><?php echo $row_rs_sliderlist['slider_sit']; ?></td>
              <td width="150"><table border="0" align="right" cellpadding="4" cellspacing="0">
                <tr>
                  <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                    <input name="pg" type="hidden" id="pg" value="slideredit" />
                    <input type="submit" class="registro_btedit" value="editar" />
                    <input name="slider_id" type="hidden" id="slider_id" value="<?php echo $row_rs_sliderlist['slider_id']; ?>" />
                  </form></td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <?php } while ($row_rs_sliderlist = mysql_fetch_assoc($rs_sliderlist)); ?></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_sliderlist);
?>
