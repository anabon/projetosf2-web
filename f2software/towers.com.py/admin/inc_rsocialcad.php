<?php require_once('../Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
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
$formValidation->addField("rsocial_nome", true, "text", "", "", "", "Insira o Nome!");
$formValidation->addField("rsocial_url", true, "text", "url", "", "", "Insira o Link");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("rsocial_img");
  $uploadObj->setDbFieldName("rsocial_img");
  $uploadObj->setFolder("../dados/");
  $uploadObj->setResize("false", 32, 32);
  $uploadObj->setMaxSize(1024);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("icon{rs_upload.arquivo}.{KT_ext}");
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

mysql_select_db($database_dbsite, $dbsite);
$query_rs_rsociallist = "SELECT t1.rsocial_id, t1.rsocial_nome, t1.rsocial_img, t1.rsocial_sit FROM tb_rsocial AS t1";
$rs_rsociallist = mysql_query($query_rs_rsociallist, $dbsite) or die(mysql_error());
$row_rs_rsociallist = mysql_fetch_assoc($rs_rsociallist);
$totalRows_rs_rsociallist = mysql_num_rows($rs_rsociallist);

// Make an insert transaction instance
$ins_tb_rsocial = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_rsocial);
// Register triggers
$ins_tb_rsocial->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_rsocial->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_rsocial->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=rsocial");
$ins_tb_rsocial->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$ins_tb_rsocial->setTable("tb_rsocial");
$ins_tb_rsocial->addColumn("rsocial_nome", "STRING_TYPE", "POST", "rsocial_nome");
$ins_tb_rsocial->addColumn("rsocial_url", "STRING_TYPE", "POST", "rsocial_url");
$ins_tb_rsocial->addColumn("rsocial_img", "FILE_TYPE", "FILES", "rsocial_img");
$ins_tb_rsocial->addColumn("rsocial_ordem", "NUMERIC_TYPE", "POST", "rsocial_ordem", "0001");
$ins_tb_rsocial->setPrimaryKey("rsocial_id", "NUMERIC_TYPE");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_rsocial = $tNGs->getRecordset("tb_rsocial");
$row_rstb_rsocial = mysql_fetch_assoc($rstb_rsocial);
$totalRows_rstb_rsocial = mysql_num_rows($rstb_rsocial);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js" ></script> <!-- PLUGIN JQUERY-->
<script type="text/javascript" src="js/jquery.price_format.js"></script> <!--FORMATACAO CAMPOS MOEDA -->
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script> <!-- COLOCAR EM CAIXA ALTA, UPPERCASE-->
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"> </script> <!-- VALIDA NUMEROS-->
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
		$("#rsocial_nome").focus();
      });
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
      <input name="pg" type="hidden" id="pg" value="rsocial" />
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
    <td class="body_titulo2">REGISTRO DE REDES SOCIALES</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
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
            <td width="150" class="KT_th"><label for="rsocial_nome">Nombre:</label></td>
            <td><input name="rsocial_nome" type="text" class="frmCad_100per" id="rsocial_nome" value="<?php echo KT_escapeAttribute($row_rstb_rsocial['rsocial_nome']); ?>" size="32" />
              <?php echo $tNGs->displayFieldHint("rsocial_nome");?> <?php echo $tNGs->displayFieldError("tb_rsocial", "rsocial_nome"); ?></td>
          </tr>
          <tr>
            <td class="KT_th"><label for="rsocial_url">URL:</label></td>
            <td><input name="rsocial_url" type="text" class="frmCad_100per" id="rsocial_url" value="<?php echo KT_escapeAttribute($row_rstb_rsocial['rsocial_url']); ?>" size="32" />              <?php echo $tNGs->displayFieldError("tb_rsocial", "rsocial_url"); ?></td>
          </tr>
          <tr>
            <td class="KT_th"><label for="rsocial_img">Icono:</label></td>
            <td><input type="file" name="rsocial_img" id="rsocial_img" size="32" />
              <?php echo $tNGs->displayFieldError("tb_rsocial", "rsocial_img"); ?></td>
          </tr>
          <tr>
            <td class="KT_th"><label for="rsocial_ordem">Orden:</label></td>
            <td><input name="rsocial_ordem" type="text" class="frmCad_50" id="rsocial_ordem" value="<?php echo KT_escapeAttribute($row_rstb_rsocial['rsocial_ordem']); ?>" size="32" />
              <?php echo $tNGs->displayFieldHint("rsocial_ordem");?> <?php echo $tNGs->displayFieldError("tb_rsocial", "rsocial_ordem"); ?></td>
          </tr>
          <tr class="KT_buttons">
            <td colspan="2" align="right"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Insertar registro" /></td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_rsociallist);
?>
