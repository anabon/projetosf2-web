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
$query_rs_detranlist = "SELECT t1.detran_id, t1.detran_nome, t1.detran_img, t1.detran_url, t1.detran_sit FROM tb_detran AS t1 ";
$rs_detranlist = mysql_query($query_rs_detranlist, $dbsite) or die(mysql_error());
$row_rs_detranlist = mysql_fetch_assoc($rs_detranlist);
$totalRows_rs_detranlist = mysql_num_rows($rs_detranlist);

// Make an insert transaction instance
$ins_tb_detran = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_detran);
// Register triggers
$ins_tb_detran->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_detran->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_detran->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=detran");
$ins_tb_detran->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$ins_tb_detran->setTable("tb_detran");
$ins_tb_detran->addColumn("detran_nome", "STRING_TYPE", "POST", "detran_nome");
$ins_tb_detran->addColumn("detran_url", "STRING_TYPE", "POST", "detran_url");
$ins_tb_detran->addColumn("detran_img", "FILE_TYPE", "FILES", "detran_img");
$ins_tb_detran->addColumn("detran_desc", "STRING_TYPE", "POST", "detran_desc");
$ins_tb_detran->setPrimaryKey("detran_id", "NUMERIC_TYPE");

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
      <input name="pg" type="hidden" id="pg" value="detran" />
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
    <td class="body_titulo2">CADASTRO DE DINATRAN</td>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_detrancad']!="S"){ ?>
  <table width="100%" border="0" cellspacing="10" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>USTED NO PUEDE PERMISI&OCuate;N PARA ESTE CONTENIDO!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_detrancad']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
          <table width="700" cellpadding="5" cellspacing="0">
            <tr>
              <td width="150" class="KT_th"><label for="detran_nome">Nombre:</label></td>
              <td><input name="detran_nome" type="text" class="frmCad_100per" id="detran_nome" value="<?php echo KT_escapeAttribute($row_rstb_detran['detran_nome']); ?>" />
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
              <td align="right"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Insertar registro" /></td>
            </tr>
          </table>
        </form>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_detranlist);
?>
