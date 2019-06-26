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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE tb_perfil SET perfil_nome=%s, perfil_info=%s, perfil_infocad=%s, perfil_infoedit=%s, perfil_infodel=%s, perfil_slider=%s, perfil_slidercad=%s, perfil_slideredit=%s, perfil_sliderdel=%s, perfil_auto=%s, perfil_autocad=%s, perfil_autoedit=%s, perfil_autodel=%s, perfil_autobusca=%s, perfil_autoimg=%s, perfil_autoimgcad=%s, perfil_autoimgdel=%s, perfil_autodesp=%s, perfil_autodespcad=%s, perfil_autodespdel=%s, perfil_autodespbusca=%s, perfil_forn=%s, perfil_forncad=%s, perfil_fornedit=%s, perfil_forndel=%s, perfil_usr=%s, perfil_usrcad=%s, perfil_usredit=%s, perfil_usrdel=%s, perfil_usrpass=%s, perfil_perfil=%s, perfil_perfilcad=%s, perfil_perfiledit=%s, perfil_perfildel=%s, perfil_detran=%s, perfil_detrancad=%s, perfil_detranedit=%s, perfil_detrandel=%s, perfil_ficha=%s, perfil_fichacad=%s, perfil_fichaedit=%s, perfil_fichadel=%s, perfil_fichabusca=%s, perfil_inc=%s, perfil_incedit=%s, perfil_news=%s, perfil_newscad=%s, perfil_newsedit=%s, perfil_newsdel=%s, perfil_newsbusca=%s, perfil_video=%s, perfil_videocad=%s, perfil_videoedit=%s, perfil_videodel=%s, perfil_videobusca=%s, perfil_sit=%s WHERE perfil_id=%s",
                       GetSQLValueString($_POST['perfil_nome'], "text"),
                       GetSQLValueString($_POST['perfil_info'], "text"),
                       GetSQLValueString($_POST['perfil_infocad'], "text"),
                       GetSQLValueString($_POST['perfil_infoedit'], "text"),
                       GetSQLValueString($_POST['perfil_infodel'], "text"),
                       GetSQLValueString($_POST['perfil_slider'], "text"),
                       GetSQLValueString($_POST['perfil_slidercad'], "text"),
                       GetSQLValueString($_POST['perfil_slideredit'], "text"),
                       GetSQLValueString($_POST['perfil_sliderdel'], "text"),
                       GetSQLValueString($_POST['perfil_auto'], "text"),
                       GetSQLValueString($_POST['perfil_autocad'], "text"),
                       GetSQLValueString($_POST['perfil_autoedit'], "text"),
                       GetSQLValueString($_POST['perfil_autodel'], "text"),
                       GetSQLValueString($_POST['perfil_autobusca'], "text"),
                       GetSQLValueString($_POST['perfil_autoimg'], "text"),
                       GetSQLValueString($_POST['perfil_autoimgcad'], "text"),
                       GetSQLValueString($_POST['perfil_autoimgdel'], "text"),
                       GetSQLValueString($_POST['perfil_autodesp'], "text"),
                       GetSQLValueString($_POST['perfil_autodespcad'], "text"),
                       GetSQLValueString($_POST['perfil_autodespdel'], "text"),
                       GetSQLValueString($_POST['perfil_autodespbusca'], "text"),
                       GetSQLValueString($_POST['perfil_configedit'], "text"),
                       GetSQLValueString($_POST['perfil_forn'], "text"),
                       GetSQLValueString($_POST['perfil_forncad'], "text"),
                       GetSQLValueString($_POST['perfil_fornedit'], "text"),
                       GetSQLValueString($_POST['perfil_forndel'], "text"),
                       GetSQLValueString($_POST['perfil_usr'], "text"),
                       GetSQLValueString($_POST['perfil_usrcad'], "text"),
                       GetSQLValueString($_POST['perfil_usredit'], "text"),
                       GetSQLValueString($_POST['perfil_usrdel'], "text"),
                       GetSQLValueString($_POST['perfil_usrpass'], "text"),
                       GetSQLValueString($_POST['perfil_perfil'], "text"),
                       GetSQLValueString($_POST['perfil_perfilcad'], "text"),
                       GetSQLValueString($_POST['perfil_perfiledit'], "text"),
                       GetSQLValueString($_POST['perfil_lojabusca'], "text"),
                       GetSQLValueString($_POST['perfil_detran'], "text"),
                       GetSQLValueString($_POST['perfil_detrancad'], "text"),
                       GetSQLValueString($_POST['perfil_detranedit'], "text"),
                       GetSQLValueString($_POST['perfil_detrandel'], "text"),
                       GetSQLValueString($_POST['perfil_dpto'], "text"),
                       GetSQLValueString($_POST['perfil_dptocad'], "text"),
                       GetSQLValueString($_POST['perfil_dptoedit'], "text"),
                       GetSQLValueString($_POST['perfil_dptodel'], "text"),
                       GetSQLValueString($_POST['perfil_ficha'], "text"),
                       GetSQLValueString($_POST['perfil_fichacad'], "text"),
                       GetSQLValueString($_POST['perfil_foto'], "text"),
                       GetSQLValueString($_POST['perfil_fotocad'], "text"),
                       GetSQLValueString($_POST['perfil_fotoedit'], "text"),
                       GetSQLValueString($_POST['perfil_fotodel'], "text"),
                       GetSQLValueString($_POST['perfil_fotobusca'], "text"),
                       GetSQLValueString($_POST['perfil_fichaedit'], "text"),
                       GetSQLValueString($_POST['perfil_fichadel'], "text"),
                       GetSQLValueString($_POST['perfil_fichabusca'], "text"),
                       GetSQLValueString($_POST['perfil_inc'], "text"),
                       GetSQLValueString($_POST['perfil_incedit'], "text"),
                       GetSQLValueString($_POST['perfil_video'], "text"),
                       GetSQLValueString($_POST['perfil_videocad'], "text"));

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

$perfil_rs_perfiledit = "-1";
if (isset($_GET['perfil_id'])) {
  $perfil_rs_perfiledit = $_GET['perfil_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_perfiledit = sprintf("SELECT t1.* FROM tb_perfil AS t1 WHERE t1.perfil_id = %s", GetSQLValueString($perfil_rs_perfiledit, "int"));
$rs_perfiledit = mysql_query($query_rs_perfiledit, $dbsite) or die(mysql_error());
$row_rs_perfiledit = mysql_fetch_assoc($rs_perfiledit);
$totalRows_rs_perfiledit = mysql_num_rows($rs_perfiledit);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="REGISTRO" title="Cadastrar nova página" />
      <input name="pg" type="hidden" id="pg" value="perfilcad" />
    </form></td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos"  title="Listar todas"/>
      <input name="pg" type="hidden" id="pg" value="perfil" />
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">Edición de perfiles</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_perfiledit']!="S"){ ?>
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
  <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_perfiledit']=="S"){ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td><form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
          <table border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="140">Nombre del perfil:
              <input name="perfil_id" type="hidden" id="perfil_id" value="<?php echo $row_rs_perfiledit['perfil_id']; ?>" /></td>
              <td width="540"><input name="perfil_nome" type="text" class="frmCad_100per" id="perfil_nome" value="<?php echo $row_rs_perfiledit['perfil_nome']; ?>" maxlength="50" /></td>
            </tr>
          </table>
          <table border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td><strong>Situaci&oacute;n:</strong></td>
              <td colspan="5"><select name="perfil_sit" id="perfil_sit">
                <option value="Ativo" <?php if (!(strcmp("Ativo", $row_rs_perfiledit['perfil_sit']))) {echo "selected=\"selected\"";} ?>>Activo</option>
                <option value="Desativado" <?php if (!(strcmp("Desativado", $row_rs_perfiledit['perfil_sit']))) {echo "selected=\"selected\"";} ?>>Discapacitado</option>
              </select></td>
            </tr>
            <tr>
              <td width="140">&nbsp;</td>
              <td width="100"><strong>Visualizar</strong></td>
              <td width="100"><strong>Registro</strong></td>
              <td width="100"><strong>Editar</strong></td>
              <td width="100"><strong>Borrar</strong></td>
              <td width="100"><strong>b&uacute;squeda</strong></td>
            </tr>
            <tr bgcolor="#efefef">
              <td><strong>Ajustes:</strong></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><select name="perfil_configedit" id="perfil_configedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_configedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_configedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#efefef">
              <td bgcolor="#FFFFFF"><strong>Hojas:</strong></td>
              <td bgcolor="#FFFFFF"><select name="perfil_ficha" id="perfil_ficha">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_ficha']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_ficha']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_fichacad" id="perfil_fichacad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fichacad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fichacad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_fichaedit" id="perfil_fichaedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fichaedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fichaedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_fichadel" id="perfil_fichadel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fichadel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fichadel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_fichabusca" id="perfil_fichabusca">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fichabusca']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fichabusca']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
            <tr bgcolor="#efefef">
              <td><strong>P&aacute;ginas din&acirc;micas:</strong></td>
              <td><select name="perfil_info" id="perfil_info">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_info']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_info']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_infocad" id="perfil_infocad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_infocad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_infocad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_infoedit" id="perfil_infoedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_infoedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_infoedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_infodel" id="perfil_infodel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_infodel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_infodel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Slider (banner):</strong></td>
              <td><select name="perfil_slider" id="perfil_slider">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_slider']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_slider']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_slidercad" id="perfil_slidercad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_slidercad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_slidercad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_slideredit" id="perfil_slideredit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_slideredit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_slideredit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_sliderdel" id="perfil_sliderdel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_sliderdel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_sliderdel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><strong>Veh&iacute;culos:</strong></td>
              <td><select name="perfil_auto" id="perfil_auto">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_auto']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_auto']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autocad" id="perfil_autocad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autocad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autocad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autoedit" id="perfil_autoedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autoedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autoedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autodel" id="perfil_autodel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autodel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autodel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autobusca" id="perfil_autobusca">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autobusca']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autobusca']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
            <tr>
              <td><strong>Veh&iacute;culos Gastos:</strong></td>
              <td><select name="perfil_autodesp" id="perfil_autodesp">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autodesp']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autodesp']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autodespcad" id="perfil_autodespcad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autodespcad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autodespcad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
              <td><select name="perfil_autodespdel" id="perfil_autodespdel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autodespdel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autodespdel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autodespbusca" id="perfil_autodespbusca">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autodespbusca']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autodespbusca']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
            <tr bgcolor="#efefef">
              <td><strong>Veh&iacute;culos Fotos:</strong></td>
              <td><select name="perfil_autoimg" id="perfil_autoimg">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autoimg']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autoimg']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_autoimgcad" id="perfil_autoimgcad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autoimgcad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autoimgcad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
              <td><select name="perfil_autoimgdel" id="perfil_autoimgdel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_autoimgdel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_autoimgdel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Dinatran:</strong></td>
              <td><select name="perfil_detran" id="perfil_detran">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_detran']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_detran']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_detrancad" id="perfil_detrancad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_detrancad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_detrancad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_detranedit" id="perfil_detranedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_detranedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_detranedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_detrandel" id="perfil_detrandel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_detrandel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_detrandel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><strong>Proveedor:</strong></td>
              <td bgcolor="#EFEFEF"><select name="perfil_forn" id="perfil_forn">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_forn']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_forn']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_forncad" id="perfil_forncad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_forncad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_forncad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_fornedit" id="perfil_fornedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fornedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fornedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_forndel" id="perfil_forndel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_forndel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_forndel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF">&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Usu&aacute;rios:</strong></td>
              <td><select name="perfil_usr" id="perfil_usr">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_usr']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_usr']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_usrcad" id="perfil_usrcad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_usrcad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_usrcad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_usredit" id="perfil_usredit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_usredit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_usredit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_usrdel" id="perfil_usrdel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_usrdel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_usrdel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_usrpass" id="perfil_usrpass">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_usrpass']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_usrpass']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
            <tr bgcolor="#efefef">
              <td><strong>Perfiles:</strong></td>
              <td><select name="perfil_perfil" id="perfil_perfil">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_perfil']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_perfil']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_perfilcad" id="perfil_perfilcad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_perfilcad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_perfilcad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_perfiledit" id="perfil_perfiledit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_perfiledit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_perfiledit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td><select name="perfil_perfildel" id="perfil_perfildel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_perfildel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_perfildel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#efefef">
              <td bgcolor="#FFFFFF"><strong>Tags SEO</strong></td>
              <td bgcolor="#FFFFFF"><select name="perfil_inc" id="perfil_inc">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_inc']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_inc']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF"><select name="perfil_incedit" id="perfil_incedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_incedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_incedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><strong>Fotos:</strong></td>
              <td bgcolor="#EFEFEF"><select name="perfil_foto" id="perfil_foto">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_foto']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_foto']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_fotocad" id="perfil_fotocad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fotocad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fotocad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_fotoedit" id="perfil_fotoedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fotoedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fotoedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_fotodel" id="perfil_fotodel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fotodel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fotodel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_fotobusca" id="perfil_fotobusca">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_fotobusca']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_fotobusca']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
            <tr bgcolor="#efefef">
              <td bgcolor="#FFFFFF"><strong>V&iacute;deos:</strong></td>
              <td bgcolor="#FFFFFF"><select name="perfil_video" id="perfil_video">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_video']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_video']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_videocad" id="perfil_videocad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_videocad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_videocad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_videoedit" id="perfil_videoedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_videoedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_videoedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_videodel" id="perfil_videodel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_videodel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_videodel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#FFFFFF"><select name="perfil_videobusca" id="perfil_videobusca">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_videobusca']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_videobusca']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><strong>Not&iacute;cias:</strong></td>
              <td bgcolor="#EFEFEF"><select name="perfil_news" id="perfil_news">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_news']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_news']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_newscad" id="perfil_newscad">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_newscad']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_newscad']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_newsedit" id="perfil_newsedit">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_newsedit']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_newsedit']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_newsdel" id="perfil_newsdel">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_newsdel']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_newsdel']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
              <td bgcolor="#EFEFEF"><select name="perfil_newsbusca" id="perfil_newsbusca">
                <option value="S" <?php if (!(strcmp("S", $row_rs_perfiledit['perfil_newsbusca']))) {echo "selected=\"selected\"";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", $row_rs_perfiledit['perfil_newsbusca']))) {echo "selected=\"selected\"";} ?>>N</option>
              </select></td>
            </tr>
          </table>
          <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td><input type="submit" value="guardar registro" /></td>
            </tr>
          </table>
          <input type="hidden" name="MM_update" value="form1" />
        </form></td>
      </tr>
    </table>
    <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_perfiledit);
?>
