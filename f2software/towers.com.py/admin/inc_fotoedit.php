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
$formValidation->addField("foto_nome", true, "text", "", "", "", "Insira o Nome!");
$formValidation->addField("foto_ordem", true, "numeric", "int", "", "", "");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("foto_img");
  $uploadObj->setDbFieldName("foto_img");
  $uploadObj->setFolder("../dados/fotos/");
  $uploadObj->setResize("true", 640, 0);
  $uploadObj->setMaxSize(3056);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("{foto_id}-{rs_upload.arquivo}.{KT_ext}");
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

if ((isset($_POST['del_foto_id'])) && ($_POST['del_foto_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_foto WHERE foto_id=%s",
                       GetSQLValueString($_POST['del_foto_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php?pg=foto";
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
$query_rs_perm_usr = sprintf("SELECT t1.usr_id, t2.* FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo'", GetSQLValueString($usuario_rs_perm_usr, "text"));
$rs_perm_usr = mysql_query($query_rs_perm_usr, $dbsite) or die(mysql_error());
$row_rs_perm_usr = mysql_fetch_assoc($rs_perm_usr);
$totalRows_rs_perm_usr = mysql_num_rows($rs_perm_usr);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje, DATE_FORMAT(NOW(), '%d/%m/%Y') AS hojebr FROM tb_usr ORDER BY usr_id ASC LIMIT 1";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$foto_rs_foto = "-1";
if (isset($_GET['foto_id'])) {
  $foto_rs_foto = $_GET['foto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_foto = sprintf("SELECT t1.foto_id, t1.foto_nome, t1.foto_img, t1.foto_desc, t1.foto_ordem, t1.foto_sit FROM tb_foto AS t1 WHERE t1.foto_id = %s", GetSQLValueString($foto_rs_foto, "int"));
$rs_foto = mysql_query($query_rs_foto, $dbsite) or die(mysql_error());
$row_rs_foto = mysql_fetch_assoc($rs_foto);
$totalRows_rs_foto = mysql_num_rows($rs_foto);

// Make an update transaction instance
$upd_tb_foto = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_foto);
// Register triggers
$upd_tb_foto->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_foto->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_foto->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=foto");
$upd_tb_foto->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$upd_tb_foto->setTable("tb_foto");
$upd_tb_foto->addColumn("foto_sit", "STRING_TYPE", "POST", "foto_sit");
$upd_tb_foto->addColumn("foto_nome", "STRING_TYPE", "POST", "foto_nome");
$upd_tb_foto->addColumn("foto_ordem", "NUMERIC_TYPE", "POST", "foto_ordem");
$upd_tb_foto->addColumn("foto_img", "FILE_TYPE", "FILES", "foto_img");
$upd_tb_foto->setPrimaryKey("foto_id", "NUMERIC_TYPE", "GET", "foto_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_foto = $tNGs->getRecordset("tb_foto");
$row_rstb_foto = mysql_fetch_assoc($rstb_foto);
$totalRows_rstb_foto = mysql_num_rows($rstb_foto);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js" ></script> <!-- PLUGIN JQUERY-->
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script> <!-- COLOCAR EM CAIXA ALTA, UPPERCASE-->
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"> </script> <!-- VALIDA NUMEROS-->
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
		$("#foto_nome").focus();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<script type="text/javascript" src="calendario/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="calendario/calendario.js"></script>
<link rel="stylesheet" type=text/css href="calendario/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#foto_ordem").keypress(verificaNumero);
   });
function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
</script>
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script src="../includes/skins/style.js" type="text/javascript"></script>
<?php echo $tNGs->displayValidationRules();?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="cadastrar" />
      <input name="pg" type="hidden" id="pg" value="fotocad" />
    </form></td>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="foto" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50"><?php if ($totalRows_rs_foto > 0) { // Show if recordset not empty ?>
      <form id="frmDel" name="frmDel" method="post" action="">
        <input name="del_foto_id" type="hidden" id="del_foto_id" value="<?php echo $row_rs_foto['foto_id']; ?>" />
        <input type="submit" onclick="GP_popupConfirmMsg('¿Está seguro de que desea eliminar este registro?');return document.MM_returnValue" value="borrar" />
      </form>
      <?php } // Show if recordset not empty ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">EDITAR FOTO</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="fotobusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td>&nbsp;
      <?php
	echo $tNGs->getErrorMsg();
?>
      <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
        <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
          <tr>
            <td class="KT_th"><img src="../dados/fotos/<?php echo $row_rs_foto['foto_img']; ?>" width="100" height="75" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="150" class="KT_th"><label for="foto_sit">situaci&oacute;o:</label></td>
            <td><select name="foto_sit" id="foto_sit">
              <option value="Ativo" <?php if (!(strcmp("Ativo", $row_rs_foto['foto_sit']))) {echo "selected=\"selected\"";} ?>>Activo</option>
              <option value="Desativado" <?php if (!(strcmp("Desativado", $row_rs_foto['foto_sit']))) {echo "selected=\"selected\"";} ?>>Discapacitado</option>
            </select>
              <?php echo $tNGs->displayFieldError("tb_foto", "foto_sit"); ?></td>
          </tr>
          <tr>
            <td class="KT_th"><label for="foto_nome">Nombre:</label></td>
            <td><input name="foto_nome" type="text" class="frmCad_100per" id="foto_nome" value="<?php echo KT_escapeAttribute($row_rstb_foto['foto_nome']); ?>" size="32" />
              <?php echo $tNGs->displayFieldHint("foto_nome");?> <?php echo $tNGs->displayFieldError("tb_foto", "foto_nome"); ?></td>
          </tr>
          <tr>
            <td class="KT_th"><label for="foto_ordem">Orden:</label></td>
            <td><input name="foto_ordem" type="text" class="frmCad_50" id="foto_ordem" value="<?php echo KT_escapeAttribute($row_rstb_foto['foto_ordem']); ?>" maxlength="4" />
              <?php echo $tNGs->displayFieldHint("foto_ordem");?> <?php echo $tNGs->displayFieldError("tb_foto", "foto_ordem"); ?></td>
          </tr>
          <tr>
            <td class="KT_th"><label for="foto_img">Foto:</label></td>
            <td><input type="file" name="foto_img" id="foto_img" size="32" />
              <?php echo $tNGs->displayFieldError("tb_foto", "foto_img"); ?></td>
          </tr>
          <tr class="KT_buttons">
            <td colspan="2"><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_foto);
?>
