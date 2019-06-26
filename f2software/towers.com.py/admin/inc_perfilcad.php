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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tb_perfil (perfil_nome) VALUES (%s)",
                       GetSQLValueString($_POST['perfil_nome'], "text"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($insertSQL, $dbsite) or die(mysql_error());

  $insertGoTo = "painel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
    <td class="body_titulo2">REGISTRO DE PERFIL</td>
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
          <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="140">Nombre del perfil:              </td>
              <td><input name="perfil_nome" type="text" class="frmCad_100per" id="perfil_nome" maxlength="50" onkeyup="toUpper(this)" /></td>
              <td width="100"><input type="submit" value="Insertar registro" /></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1" />
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
