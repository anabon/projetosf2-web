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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "frmEdit")) {
  $updateSQL = sprintf("UPDATE tb_banco SET banco_cod=%s, banco_banco=%s, banco_url=%s, banco_sit=%s WHERE banco_id=%s",
                       GetSQLValueString($_POST['banco_cod'], "text"),
                       GetSQLValueString($_POST['banco_banco'], "text"),
                       GetSQLValueString($_POST['banco_url'], "text"),
                       GetSQLValueString($_POST['banco_sit'], "text"),
                       GetSQLValueString($_POST['banco_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($updateSQL, $dbsite) or die(mysql_error());

  $updateGoTo = "painel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
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

$banco_rs_bancoedit = "-1";
if (isset($_GET['banco_id'])) {
  $banco_rs_bancoedit = $_GET['banco_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_bancoedit = sprintf("SELECT t1.* FROM tb_banco AS t1 WHERE t1.banco_id = %s", GetSQLValueString($banco_rs_bancoedit, "int"));
$rs_bancoedit = mysql_query($query_rs_bancoedit, $dbsite) or die(mysql_error());
$row_rs_bancoedit = mysql_fetch_assoc($rs_bancoedit);
$totalRows_rs_bancoedit = mysql_num_rows($rs_bancoedit);
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
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="banco" />
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
    <td class="body_titulo2">EDITAR BANCO</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="clibusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_bancoedit']!="S"){ ?>
  <table width="100%" border="0" cellspacing="10" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>Voc&ecirc; n&atilde;o possui permiss&atilde;o para este conte&uacute;do!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_bancoedit']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><form id="frmEdit" name="frmEdit" method="POST" action="<?php echo $editFormAction; ?>">
        <table width="600" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td>Situa&ccedil;&atilde;o:
              <input name="banco_id" type="hidden" id="banco_id" value="<?php echo $row_rs_bancoedit['banco_id']; ?>" /></td>
            <td><select name="banco_sit" id="banco_sit">
              <option value="Ativo" <?php if (!(strcmp("Ativo", $row_rs_bancoedit['banco_sit']))) {echo "selected=\"selected\"";} ?>>Ativo</option>
              <option value="Desativado" <?php if (!(strcmp("Desativado", $row_rs_bancoedit['banco_sit']))) {echo "selected=\"selected\"";} ?>>Desativado</option>
            </select></td>
          </tr>
          <tr>
            <td width="150">C&oacute;digo do banco:</td>
            <td><input name="banco_cod" type="text" class="frmCad_100" id="banco_cod" value="<?php echo $row_rs_bancoedit['banco_cod']; ?>" maxlength="10" /></td>
          </tr>
          <tr>
            <td>Nome do Banco:</td>
            <td><input name="banco_banco" type="text" class="frmCad_100per" id="banco_banco" value="<?php echo $row_rs_bancoedit['banco_banco']; ?>" maxlength="100" /></td>
          </tr>
          <tr>
            <td>Website:</td>
            <td><input name="banco_url" type="text" class="frmCad_100per" id="banco_url" value="<?php echo $row_rs_bancoedit['banco_url']; ?>" maxlength="100" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="right"><input type="submit" value="Salvar registro" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="frmEdit" />
      </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_bancoedit);
?>
