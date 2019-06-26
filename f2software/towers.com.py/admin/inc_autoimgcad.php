<?php require_once('../Connections/dbsite.php'); ?>
<?php require_once('../Connections/dbsite.php'); ?>
<?php require_once('../Connections/dbsite.php'); ?>
<?php require_once('../Connections/dbsite.php'); ?>
<?php require_once('../Connections/dbsite.php'); ?>
<?php
// Load the common classes
require_once('../includes/common/KT_common.php');

// Load the tNG classes
require_once('../includes/tng/tNG.inc.php');

// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("../");

// Make unified connection variable
$conn_dbsite = new KT_connection($dbsite, $database_dbsite);

// Start trigger
$formValidation = new tNG_FormValidation();
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("autoimg_img");
  $uploadObj->setDbFieldName("autoimg_img");
  $uploadObj->setFolder("../dados/auto/");
  $uploadObj->setResize("true", 800, 0);
  $uploadObj->setMaxSize(2048);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png, JPG");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("EX{rs_upload.arquivo}.{KT_ext}");
  return $uploadObj->Execute();
}
//end Trigger_ImageUpload trigger

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

if ((isset($_POST['del_autoimg_id'])) && ($_POST['del_autoimg_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_autoimg WHERE autoimg_id=%s",
                       GetSQLValueString($_POST['del_autoimg_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
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
$query_rs_upload = "SELECT usr_id, DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje, DATE_FORMAT(NOW(), '%d/%m/%Y') AS hojebr FROM tb_usr ORDER BY usr_id ASC LIMIT 1";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$auto_rs_auto = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_auto = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_auto = sprintf("SELECT t1.auto_id, t1.auto_placa, t1.auto_modelo, t1.auto_marca, t1.auto_img, t1.auto_anofab, t1.auto_anomod, t1.auto_portas FROM tb_auto AS t1 WHERE t1.auto_id = %s AND t1.auto_sitreg = 1", GetSQLValueString($auto_rs_auto, "int"));
$rs_auto = mysql_query($query_rs_auto, $dbsite) or die(mysql_error());
$row_rs_auto = mysql_fetch_assoc($rs_auto);
$totalRows_rs_auto = mysql_num_rows($rs_auto);

$auto_rs_autoimglist = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_autoimglist = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_autoimglist = sprintf("SELECT t1.autoimg_id, t1.autoimg_img FROM tb_autoimg AS t1 WHERE t1.autoimg_auto = %s ORDER BY t1.autoimg_id ASC", GetSQLValueString($auto_rs_autoimglist, "int"));
$rs_autoimglist = mysql_query($query_rs_autoimglist, $dbsite) or die(mysql_error());
$row_rs_autoimglist = mysql_fetch_assoc($rs_autoimglist);
$totalRows_rs_autoimglist = mysql_num_rows($rs_autoimglist);

isset($startRow_rs_autoimglist)? $rs_autoimglist_orderNum=$startRow_rs_autoimglist:$rs_autoimglist_orderNum=0;

// Make an insert transaction instance
$ins_tb_autoimg = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_autoimg);
// Register triggers
$ins_tb_autoimg->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_autoimg->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_autoimg->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=autoimgcad&auto_id={rs_auto.auto_id}");
$ins_tb_autoimg->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$ins_tb_autoimg->setTable("tb_autoimg");
$ins_tb_autoimg->addColumn("autoimg_auto", "NUMERIC_TYPE", "POST", "autoimg_auto", "{rs_auto.auto_id}");
$ins_tb_autoimg->addColumn("autoimg_img", "FILE_TYPE", "FILES", "autoimg_img");
$ins_tb_autoimg->setPrimaryKey("autoimg_id", "NUMERIC_TYPE");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_autoimg = $tNGs->getRecordset("tb_autoimg");
$row_rstb_autoimg = mysql_fetch_assoc($rstb_autoimg);
$totalRows_rstb_autoimg = mysql_num_rows($rstb_autoimg);
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
function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script src="../includes/skins/style.js" type="text/javascript"></script>
<?php echo $tNGs->displayValidationRules();?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="auto" />
    </form></td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="VOLVER" />
      <input name="pg" type="hidden" id="pg" value="autoedit" />
      <input name="auto_id" type="hidden" id="auto_id" value="<?php echo $row_rs_auto['auto_id']; ?>" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">REGISTRO DE FOTOS EXTRA</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autoedit']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autoedit']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:#CCC 2px solid;">
        <tr>
          <td width="150" valign="top"><a href="painel.php?pg=autoedit?auto_id=<?php echo $row_rs_auto['auto_id']; ?>"></a><a href="painel.php?pg=autoedit&amp;auto_id=<?php echo $row_rs_auto['auto_id']; ?>"><img src="../dados/auto/<?php echo $row_rs_auto['auto_img']; ?>" width="150" height="110" border="0" title="Voltar e editar veiculo" /></a></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td colspan="2" align="left" class="body_titulo2"><?php echo $row_rs_auto['auto_marca']; ?>\<strong> <?php echo $row_rs_auto['auto_modelo']; ?></strong></td>
            </tr>
            <tr>
              <td width="120" align="right" bgcolor="#efefef">Chapa:</td>
              <td bgcolor="#efefef"><strong><?php echo $row_rs_auto['auto_placa']; ?></strong></td>
            </tr>
            <tr>
              <td align="right">A&ntilde;o:</td>
              <td><strong><?php echo $row_rs_auto['auto_anofab']; ?> - <?php echo $row_rs_auto['auto_anomod']; ?></strong></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#efefef">Puertas:</td>
              <td bgcolor="#efefef"><strong><?php echo $row_rs_auto['auto_portas']; ?></strong></td>
            </tr>
            </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
          <tr>
            <td><form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
              <table width="500" cellpadding="5" cellspacing="0">
                <tr>
                  <td class="KT_th"><label for="autoimg_img">Foto extra:</label></td>
                  <td><input type="file" name="autoimg_img" id="autoimg_img" />
                    <?php echo $tNGs->displayFieldError("tb_autoimg", "autoimg_img"); ?></td>
                  <td><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Inserir registro" /></td>
                </tr>
              </table>
              <input type="hidden" name="autoimg_auto" id="autoimg_auto" value="<?php echo KT_escapeAttribute($row_rstb_autoimg['autoimg_auto']); ?>" />
            </form></td>
          </tr>
        </table>
<?php if ($totalRows_rs_autoimglist > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table border="0" cellpadding="5" cellspacing="0">
        <tr>
          <?php
  do { // horizontal looper version 3
?>
            <td><table width="150" border="0" cellspacing="0" cellpadding="5" onmouseover="bgColor='#EFEFEF'" onmouseout="bgColor='#FFFFFF'">
              <tr>
                <td><form id="frmDel" name="frmDel" method="post" action="">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center"><?php echo ++$rs_autoimglist_orderNum; ?></td>
                    </tr>
                    <tr>
                      <td align="center"><img src="../dados/auto/<?php echo $row_rs_autoimglist['autoimg_img']; ?>" width="100" height="80" /></td>
                      </tr>
                    <tr>
                      <td align="center"><input name="del_autoimg_id" type="hidden" id="del_autoimg_id" value="<?php echo $row_rs_autoimglist['autoimg_id']; ?>" />
                        <input type="submit" onclick="GP_popupConfirmMsg('Tem certeza de que deseja excluir esta foto?');return document.MM_returnValue" value="excluir" /></td>
                      </tr>
                    </table>
                  </form></td>
                </tr>
            </table></td>
            <?php
    $row_rs_autoimglist = mysql_fetch_assoc($rs_autoimglist);
    if (!isset($nested_rs_autoimglist)) {
      $nested_rs_autoimglist= 1;
    }
    if (isset($row_rs_autoimglist) && is_array($row_rs_autoimglist) && $nested_rs_autoimglist++ % 4==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_autoimglist); //end horizontal looper version 3
?>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_autoimglist);

mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_auto);

mysql_free_result($rs_autoimglist);
?>
