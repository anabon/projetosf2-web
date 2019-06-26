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
$formValidation->addField("detran_url", false, "text", "url", "", "", "Insira o site");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("detran_img");
  $uploadObj->setDbFieldName("detran_img");
  $uploadObj->setFolder("../dados/detran/");
  $uploadObj->setResize("true", 300, 0);
  $uploadObj->setMaxSize(1024);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png, JPG");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("detran{rs_upload.arquivo}.{KT_ext}");
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

if ((isset($_POST['del_detran_id'])) && ($_POST['del_detran_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_detran WHERE detran_id=%s",
                       GetSQLValueString($_POST['del_detran_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php?pg=detran";
  if (isset($_SERVER['QUERY_STRING'])) {
  //  $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
  //  $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$usuario_rs_perm_usr = "-1";
if (isset($_SESSION['MM_Username'])) {
  $usuario_rs_perm_usr = $_SESSION['MM_Username'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_perm_usr = sprintf("SELECT t1.usr_id, t2.perfil_detranedit, t2.perfil_detrandel FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo'", GetSQLValueString($usuario_rs_perm_usr, "text"));
$rs_perm_usr = mysql_query($query_rs_perm_usr, $dbsite) or die(mysql_error());
$row_rs_perm_usr = mysql_fetch_assoc($rs_perm_usr);
$totalRows_rs_perm_usr = mysql_num_rows($rs_perm_usr);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje FROM tb_usr";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$detran_rs_detranlist = "-1";
if (isset($_GET['detran_id'])) {
  $detran_rs_detranlist = $_GET['detran_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_detranlist = sprintf("SELECT t1.detran_id, t1.detran_nome, t1.detran_img, t1.detran_url, t1.detran_sit FROM tb_detran AS t1  WHERE t1.detran_id = %s", GetSQLValueString($detran_rs_detranlist, "int"));
$rs_detranlist = mysql_query($query_rs_detranlist, $dbsite) or die(mysql_error());
$row_rs_detranlist = mysql_fetch_assoc($rs_detranlist);
$totalRows_rs_detranlist = mysql_num_rows($rs_detranlist);

// Make an update transaction instance
$upd_tb_detran = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_detran);
// Register triggers
$upd_tb_detran->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_detran->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_detran->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=detranedit&detran_id={rs_detranlist.detran_id}");
$upd_tb_detran->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$upd_tb_detran->setTable("tb_detran");
$upd_tb_detran->addColumn("detran_sit", "STRING_TYPE", "POST", "detran_sit");
$upd_tb_detran->addColumn("detran_nome", "STRING_TYPE", "POST", "detran_nome");
$upd_tb_detran->addColumn("detran_url", "STRING_TYPE", "POST", "detran_url");
$upd_tb_detran->addColumn("detran_img", "FILE_TYPE", "FILES", "detran_img");
$upd_tb_detran->addColumn("detran_desc", "STRING_TYPE", "POST", "detran_desc");
$upd_tb_detran->setPrimaryKey("detran_id", "NUMERIC_TYPE", "GET", "detran_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_detran = $tNGs->getRecordset("tb_detran");
$row_rstb_detran = mysql_fetch_assoc($rstb_detran);
$totalRows_rstb_detran = mysql_num_rows($rstb_detran);
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
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="detrancad" />
    </form></td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="detran" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50"><?php if ($totalRows_rs_detranlist > 0) { // Show if recordset not empty ?>
        <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_detrandel']=="S"){ ?>
          <form id="frmDel" name="frmDel" method="post" action="">
            <input name="del_detran_id" type="hidden" id="del_detran_id" value="<?php echo $row_rs_detranlist['detran_id']; ?>" />
            <input type="submit" onclick="GP_popupConfirmMsg('Tem certeza de que deseja excluir este registro?');return document.MM_returnValue" value="excluir" />
          </form>
          <?php } /*END_PHP_SIRFCIT*/ ?>
        <?php } // Show if recordset not empty ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">EDITAR DINATRAM</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_detranedit']!="S"){ ?>
  <table width="100%" border="0" cellspacing="10" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>USTED NO PUEDE PERMISI&Oacute;N PARA ESTE CONTENIDO!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
  <?php if ($totalRows_rs_detranlist == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="10" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>Ning&uacute;n registro o ya; suprimido!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
<?php if ($totalRows_rs_detranlist > 0) { // Show if recordset not empty ?>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_detranedit']=="S"){ ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td>&nbsp;
            <?php
	echo $tNGs->getErrorMsg();
?>
            <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
              <table width="700" cellpadding="5" cellspacing="0">
                <tr>
                  <td class="KT_th"><img src="../dados/detran/<?php echo $row_rs_detranlist['detran_img']; ?>" width="100" height="75" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="150" class="KT_th"><label for="detran_sit">Situaci&oacute;n:</label></td>
                  <td><select name="detran_sit" id="detran_sit">
                    <option value="Ativo" <?php if (!(strcmp("Ativo", KT_escapeAttribute($row_rstb_detran['detran_sit'])))) {echo "SELECTED";} ?>>Activo</option>
                    <option value="Desativado" <?php if (!(strcmp("Desativado", KT_escapeAttribute($row_rstb_detran['detran_sit'])))) {echo "SELECTED";} ?>>Discapacitado</option>
                  </select>
                    <?php echo $tNGs->displayFieldError("tb_detran", "detran_sit"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="detran_nome">Nombre:</label></td>
                  <td><input name="detran_nome" type="text" class="frmCad_100per" id="detran_nome" value="<?php echo KT_escapeAttribute($row_rstb_detran['detran_nome']); ?>" size="32" />
                    <?php echo $tNGs->displayFieldHint("detran_nome");?> <?php echo $tNGs->displayFieldError("tb_detran", "detran_nome"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="detran_url">URL del sitio:</label></td>
                  <td><input name="detran_url" type="text" class="frmCad_100per" id="detran_url" value="<?php echo KT_escapeAttribute($row_rstb_detran['detran_url']); ?>" size="32" />
                    <?php echo $tNGs->displayFieldHint("detran_url");?> <?php echo $tNGs->displayFieldError("tb_detran", "detran_url"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="detran_img">Bandera:</label></td>
                  <td><input type="file" name="detran_img" id="detran_img" size="32" />
                    <?php echo $tNGs->displayFieldError("tb_detran", "detran_img"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="detran_desc">Descripci&oacute;n:</label></td>
                  <td><textarea name="detran_desc" cols="50" rows="5" class="frmCad_area" id="detran_desc"><?php echo KT_escapeAttribute($row_rstb_detran['detran_desc']); ?></textarea>
                    <?php echo $tNGs->displayFieldHint("detran_desc");?> <?php echo $tNGs->displayFieldError("tb_detran", "detran_desc"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th">&nbsp;</td>
                  <td align="right"><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table>
      <?php } /*END_PHP_SIRFCIT*/ ?>
    <?php } // Show if recordset not empty ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_detranlist);
?>
