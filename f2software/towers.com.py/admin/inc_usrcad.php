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

//start Trigger_CheckPasswords trigger
//remove this line if you want to edit the code by hand
function Trigger_CheckPasswords(&$tNG) {
  $myThrowError = new tNG_ThrowError($tNG);
  $myThrowError->setErrorMsg("Passwords do not match.");
  $myThrowError->setField("usr_senha");
  $myThrowError->setFieldErrorMsg("The two passwords do not match.");
  return $myThrowError->Execute();
}
//end Trigger_CheckPasswords trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("usr_foto");
  $uploadObj->setDbFieldName("usr_foto");
  $uploadObj->setFolder("../dados/");
  $uploadObj->setResize("false", 150, 150);
  $uploadObj->setMaxSize(2048);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("usr{usr_id}_{rs_upload.arquivo}.{KT_ext}");
  return $uploadObj->Execute();
}
//end Trigger_ImageUpload trigger

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("usr_perfil", false, "numeric", "int", "", "", "");
$formValidation->addField("usr_nome", true, "text", "", "3", "", "Insira o nome.");
$formValidation->addField("usr_email", false, "text", "email", "", "", "E-mail inválido!");
$formValidation->addField("usr_login", true, "text", "", "3", "", "Crie um login!");
$formValidation->addField("usr_senha", true, "text", "", "3", "", "Informe uma senha.");
$tNGs->prepareValidation($formValidation);
// End trigger

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
$query_rs_perm_usr = sprintf("SELECT t1.usr_id, t2.* FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo'", GetSQLValueString($usuario_rs_perm_usr, "text"));
$rs_perm_usr = mysql_query($query_rs_perm_usr, $dbsite) or die(mysql_error());
$row_rs_perm_usr = mysql_fetch_assoc($rs_perm_usr);
$totalRows_rs_perm_usr = mysql_num_rows($rs_perm_usr);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje, DATE_FORMAT(NOW(), '%d/%m/%Y') AS hojebr FROM tb_usr ORDER BY usr_id ASC LIMIT 1";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_perfil = "SELECT t1.perfil_id, t1.perfil_nome FROM tb_perfil AS t1 WHERE t1.perfil_id != 1 ORDER BY t1.perfil_nome ASC";
$rs_menu_perfil = mysql_query($query_rs_menu_perfil, $dbsite) or die(mysql_error());
$row_rs_menu_perfil = mysql_fetch_assoc($rs_menu_perfil);
$totalRows_rs_menu_perfil = mysql_num_rows($rs_menu_perfil);

// Make an insert transaction instance
$ins_tb_usr = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_usr);
// Register triggers
$ins_tb_usr->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_usr->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_usr->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=usr");
$ins_tb_usr->registerConditionalTrigger("{POST.usr_senha} != {POST.re_usr_senha}", "BEFORE", "Trigger_CheckPasswords", 50);
$ins_tb_usr->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$ins_tb_usr->setTable("tb_usr");
$ins_tb_usr->addColumn("usr_perfil", "NUMERIC_TYPE", "POST", "usr_perfil", "{rs_usr.perfil_id}");
$ins_tb_usr->addColumn("usr_nome", "STRING_TYPE", "POST", "usr_nome");
$ins_tb_usr->addColumn("usr_email", "STRING_TYPE", "POST", "usr_email");
$ins_tb_usr->addColumn("usr_login", "STRING_TYPE", "POST", "usr_login");
$ins_tb_usr->addColumn("usr_senha", "STRING_TYPE", "POST", "usr_senha");
$ins_tb_usr->addColumn("usr_foto", "FILE_TYPE", "FILES", "usr_foto");
$ins_tb_usr->setPrimaryKey("usr_id", "NUMERIC_TYPE");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_usr = $tNGs->getRecordset("tb_usr");
$row_rstb_usr = mysql_fetch_assoc($rstb_usr);
$totalRows_rstb_usr = mysql_num_rows($rstb_usr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
		$("#usr_nome").focus();
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
      <input name="pg" type="hidden" id="pg" value="usr" />
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
    <td class="body_titulo2">Usuarios registrados</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_usrcad']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_usrcad']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
          <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
            <tr>
              <td width="150" align="right" class="KT_th"><label for="usr_perfil">Perfil:</label></td>
              <td><select name="usr_perfil" id="usr_perfil">
                <?php
do {  
?>
                <option value="<?php echo $row_rs_menu_perfil['perfil_id']?>"<?php if (!(strcmp($row_rs_menu_perfil['perfil_id'], $row_rs_menu_perfil['perfil_id']))) {echo "selected=\"selected\"";} ?>><?php echo $row_rs_menu_perfil['perfil_nome']?></option>
                <?php
} while ($row_rs_menu_perfil = mysql_fetch_assoc($rs_menu_perfil));
  $rows = mysql_num_rows($rs_menu_perfil);
  if($rows > 0) {
      mysql_data_seek($rs_menu_perfil, 0);
	  $row_rs_menu_perfil = mysql_fetch_assoc($rs_menu_perfil);
  }
?>
              </select>
                <?php echo $tNGs->displayFieldError("tb_usr", "usr_perfil"); ?></td>
            </tr>
            <tr>
              <td width="150" align="right" class="KT_th"><label for="usr_nome">Nombre:</label></td>
              <td><input name="usr_nome" type="text" class="frmCad_100per" id="usr_nome" value="<?php echo KT_escapeAttribute($row_rstb_usr['usr_nome']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("usr_nome");?> <?php echo $tNGs->displayFieldError("tb_usr", "usr_nome"); ?></td>
            </tr>
            <tr>
              <td width="150" align="right" class="KT_th"><label for="usr_email">E-mail:</label></td>
              <td><input name="usr_email" type="text" class="frmCad_100per" id="usr_email" value="<?php echo KT_escapeAttribute($row_rstb_usr['usr_email']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("usr_email");?> <?php echo $tNGs->displayFieldError("tb_usr", "usr_email"); ?></td>
            </tr>
            <tr>
              <td width="150" align="right" class="KT_th"><label for="usr_login">Login:</label></td>
              <td><input name="usr_login" type="text" class="frmCad_100" id="usr_login" value="<?php echo KT_escapeAttribute($row_rstb_usr['usr_login']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("usr_login");?> <?php echo $tNGs->displayFieldError("tb_usr", "usr_login"); ?></td>
            </tr>
            <tr>
              <td width="150" align="right" class="KT_th"><label for="usr_senha">contrase&ntilde;a:</label></td>
              <td><input name="usr_senha" type="password" class="frmCad_100" id="usr_senha" value="" size="32" />
                <?php echo $tNGs->displayFieldHint("usr_senha");?> <?php echo $tNGs->displayFieldError("tb_usr", "usr_senha"); ?></td>
            </tr>
            <tr>
              <td width="150" align="right" class="KT_th"><label for="re_usr_senha">Volver a escribir contrase&ntilde;a:</label></td>
              <td><input name="re_usr_senha" type="password" class="frmCad_100" id="re_usr_senha" value="" size="32" /></td>
            </tr>
            <tr>
              <td width="150" align="right" class="KT_th"><label for="usr_foto">Foto:</label></td>
              <td><input type="file" name="usr_foto" id="usr_foto" size="32" />
                <?php echo $tNGs->displayFieldError("tb_usr", "usr_foto"); ?></td>
            </tr>
            <tr align="right" class="KT_buttons">
              <td colspan="2"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Insertar registro" /></td>
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

mysql_free_result($rs_menu_perfil);
?>
