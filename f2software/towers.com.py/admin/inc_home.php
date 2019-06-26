<?php require_once('../Connections/dbsite.php'); ?>
<?php
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

$maxRows_rs_fichalist = 10;
$pageNum_rs_fichalist = 0;
if (isset($_GET['pageNum_rs_fichalist'])) {
  $pageNum_rs_fichalist = $_GET['pageNum_rs_fichalist'];
}
$startRow_rs_fichalist = $pageNum_rs_fichalist * $maxRows_rs_fichalist;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_fichalist = "SELECT DATE_FORMAT(t1.ficha_dtsys,'%d/%m/%Y') AS dtcad, t1.* FROM tb_ficha AS t1";
$query_limit_rs_fichalist = sprintf("%s LIMIT %d, %d", $query_rs_fichalist, $startRow_rs_fichalist, $maxRows_rs_fichalist);
$rs_fichalist = mysql_query($query_limit_rs_fichalist, $dbsite) or die(mysql_error());
$row_rs_fichalist = mysql_fetch_assoc($rs_fichalist);

if (isset($_GET['totalRows_rs_fichalist'])) {
  $totalRows_rs_fichalist = $_GET['totalRows_rs_fichalist'];
} else {
  $all_rs_fichalist = mysql_query($query_rs_fichalist);
  $totalRows_rs_fichalist = mysql_num_rows($all_rs_fichalist);
}
$totalPages_rs_fichalist = ceil($totalRows_rs_fichalist/$maxRows_rs_fichalist)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js" ></script> <!-- PLUGIN JQUERY-->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
      });
function abrir_janela_popup(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
</head>

<body>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">REGISTRO M&Aacute;S RECIENTES</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="fichabusca" />
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20" /></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="60" height="35" bgcolor="#cccccc" class="registro_titulo-col">ID</td>
        <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Fecha</td>
        <td bgcolor="#cccccc" class="registro_titulo-col">Nombre</td>
        <td width="120" bgcolor="#cccccc" class="registro_titulo-col">RUC</td>
        <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Tel&eacute;fono(s)</td>
        <td width="100" align="center" bgcolor="#cccccc" class="registro_titulo-col">Situaci&oacute;n</td>
        <td width="200" bgcolor="#cccccc">&nbsp;</td>
      </tr>
    </table>
      <?php do { ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
          <tr>
            <td width="60" height="35"><?php echo $row_rs_fichalist['ficha_id']; ?></td>
            <td width="100"><?php echo $row_rs_fichalist['dtcad']; ?></td>
            <td><?php echo $row_rs_fichalist['ficha_nome']; ?></td>
            <td width="120"><?php echo $row_rs_fichalist['ficha_cpf']; ?></td>
            <td width="100"><?php echo $row_rs_fichalist['ficha_fone1']; ?></td>
            <td width="100" align="center"><?php echo $row_rs_fichalist['ficha_sit']; ?></td>
            <td width="200"><table border="0" align="right" cellpadding="4" cellspacing="0">
              <tr>
                <td width="50"><input type="submit" onclick="abrir_janela_popup('relficha.php?ficha_id=<?php echo $row_rs_fichalist['ficha_id']; ?>','imprimir','menubar=yes,scrollbars=yes,resizable=yes,width=870,height=600')" value="impresi&oacute;n" /></td>
                <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                  <input name="pg" type="hidden" id="pg" value="fichaedit" />
                  <input type="submit" class="registro_btedit" value="editar" />
                  <input name="ficha_id" type="hidden" id="ficha_id" value="<?php echo $row_rs_fichalist['ficha_id']; ?>" />
                </form></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <?php } while ($row_rs_fichalist = mysql_fetch_assoc($rs_fichalist)); ?></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_fichalist);
?>
