<?php require_once('../Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
//@@UrlFormat@@('../Connections/dbsite.php'); 

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
$formValidation->addField("slider_titulo", true, "text", "", "", "", "Escreva um título!");
$formValidation->addField("slider_ordem", false, "numeric", "int", "", "", "");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("slider_img");
  $uploadObj->setDbFieldName("slider_img");
  $uploadObj->setFolder("../dados/slider/");
  $uploadObj->setResize("false", 680, 240);
  $uploadObj->setMaxSize(2048);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("sld{rs_upload.arquivo}.{KT_ext}");
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

if ((isset($_POST['del_slider_id'])) && ($_POST['del_slider_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_slider WHERE slider_id=%s",
                       GetSQLValueString($_POST['del_slider_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php?pg=slider";
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
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje FROM tb_usr";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$slider_rs_slideredit = "-1";
if (isset($_GET['slider_id'])) {
  $slider_rs_slideredit = $_GET['slider_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_slideredit = sprintf("SELECT t1.* FROM tb_slider AS t1 WHERE t1.slider_id = %s", GetSQLValueString($slider_rs_slideredit, "int"));
$rs_slideredit = mysql_query($query_rs_slideredit, $dbsite) or die(mysql_error());
$row_rs_slideredit = mysql_fetch_assoc($rs_slideredit);
$totalRows_rs_slideredit = mysql_num_rows($rs_slideredit);

// Make an update transaction instance
$upd_tb_slider = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_slider);
// Register triggers
$upd_tb_slider->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_slider->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_slider->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=slider");
$upd_tb_slider->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$upd_tb_slider->setTable("tb_slider");
$upd_tb_slider->addColumn("slider_sit", "STRING_TYPE", "POST", "slider_sit");
$upd_tb_slider->addColumn("slider_titulo", "STRING_TYPE", "POST", "slider_titulo");
$upd_tb_slider->addColumn("slider_img", "FILE_TYPE", "FILES", "slider_img");
$upd_tb_slider->addColumn("slider_ordem", "NUMERIC_TYPE", "POST", "slider_ordem");
$upd_tb_slider->addColumn("slider_detalhe", "STRING_TYPE", "POST", "slider_detalhe");
$upd_tb_slider->setPrimaryKey("slider_id", "NUMERIC_TYPE", "GET", "slider_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_slider = $tNGs->getRecordset("tb_slider");
$row_rstb_slider = mysql_fetch_assoc($rstb_slider);
$totalRows_rstb_slider = mysql_num_rows($rstb_slider);
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
      <input name="pg" type="hidden" id="pg" value="slidercad" />
    </form></td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="slider" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50"><?php if ($totalRows_rs_slideredit > 0) { // Show if recordset not empty ?>
      <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_sliderdel']=="S"){ ?>
        <form id="frmDel" name="frmDel" method="post" action="">
          <input name="del_slider_id" type="hidden" id="del_slider_id" value="<?php echo $row_rs_slideredit['slider_id']; ?>" />
          <input type="submit" onclick="GP_popupConfirmMsg('Est&acute seguro de que desea eliminar este registro?');return document.MM_returnValue" value="borrar" />
        </form>
          <?php } /*END_PHP_SIRFCIT*/ ?>
    <?php } // Show if recordset not empty ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">EDITAR SLIDESHOW</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_slideredit']!="S"){ ?>
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
  <?php if ($totalRows_rs_slideredit > 0) { // Show if recordset not empty ?>
  <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_slideredit']=="S"){ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td>&nbsp;
          <?php
	echo $tNGs->getErrorMsg();
?>
          <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
            <table width="700" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td><img src="../dados/slider/<?php echo $row_rs_slideredit['slider_img']; ?>" width="200" height="100" /></td>
              </tr>
            </table>
            <table width="700" cellpadding="5" cellspacing="0">
              <tr>
                <td width="150" class="KT_th"><label for="slider_sit">Situaci&oacute;n:</label></td>
                <td><select name="slider_sit" id="slider_sit">
                  <option value="Ativo" <?php if (!(strcmp("Ativo", KT_escapeAttribute($row_rstb_slider['slider_sit'])))) {echo "SELECTED";} ?>>Activo</option>
                  <option value="Desativado" <?php if (!(strcmp("Desativado", KT_escapeAttribute($row_rstb_slider['slider_sit'])))) {echo "SELECTED";} ?>>Discapacitado</option>
                  </select>
                  <?php echo $tNGs->displayFieldError("tb_slider", "slider_sit"); ?></td>
              </tr>
              <tr>
                <td class="KT_th"><label for="slider_titulo">Título:</label></td>
                <td><input name="slider_titulo" type="text" class="frmCad_100per" id="slider_titulo" value="<?php echo KT_escapeAttribute($row_rstb_slider['slider_titulo']); ?>" size="32" />
                  <?php echo $tNGs->displayFieldHint("slider_titulo");?> <?php echo $tNGs->displayFieldError("tb_slider", "slider_titulo"); ?></td>
              </tr>
              <tr>
                <td class="KT_th"><label for="slider_img">Foto (680x240 pixel):</label></td>
                <td><input type="file" name="slider_img" id="slider_img" />
                <?php echo $tNGs->displayFieldError("tb_slider", "slider_img"); ?></td>
              </tr>
              <tr>
                <td class="KT_th"><label for="slider_ordem">Orden:</label></td>
                <td><input name="slider_ordem" type="text" class="frmCad_50" id="slider_ordem" value="<?php echo KT_escapeAttribute($row_rstb_slider['slider_ordem']); ?>" size="32" />
                  <?php echo $tNGs->displayFieldHint("slider_ordem");?> <?php echo $tNGs->displayFieldError("tb_slider", "slider_ordem"); ?></td>
              </tr>
              <tr>
                <td class="KT_th">URL (enlace externo):</td>
                <td><input name="slider_url" type="text" class="frmCad_100per" id="slider_url" /></td>
              </tr>
              <tr>
                <td class="KT_th"><label for="slider_detalhe">Descripci&oacute;n:</label></td>
                <td><textarea name="slider_detalhe" cols="50" rows="5" class="frmCad_area" id="slider_detalhe"><?php echo KT_escapeAttribute($row_rstb_slider['slider_detalhe']); ?></textarea>
                  <?php echo $tNGs->displayFieldHint("slider_detalhe");?> <?php echo $tNGs->displayFieldError("tb_slider", "slider_detalhe"); ?></td>
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

mysql_free_result($rs_slideredit);
?>
