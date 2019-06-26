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
$formValidation->addField("fone_nome", true, "text", "", "", "", "Insira o Nome!");
$formValidation->addField("fone_num", true, "text", "", "", "", "Insira o Número!");
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
$query_rs_fone = "SELECT t1.* FROM tb_fone AS t1 ORDER BY t1.fone_ordem ASC";
$rs_fone = mysql_query($query_rs_fone, $dbsite) or die(mysql_error());
$row_rs_fone = mysql_fetch_assoc($rs_fone);
$totalRows_rs_fone = mysql_num_rows($rs_fone);

// Make an insert transaction instance
$ins_tb_fone = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_fone);
// Register triggers
$ins_tb_fone->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_fone->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_fone->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=fone");
// Add columns
$ins_tb_fone->setTable("tb_fone");
$ins_tb_fone->addColumn("fone_ordem", "NUMERIC_TYPE", "POST", "fone_ordem");
$ins_tb_fone->addColumn("fone_tipo", "STRING_TYPE", "POST", "fone_tipo", "");
$ins_tb_fone->addColumn("fone_nome", "STRING_TYPE", "POST", "fone_nome");
$ins_tb_fone->addColumn("fone_num", "STRING_TYPE", "POST", "fone_num");
$ins_tb_fone->addColumn("fone_sit", "STRING_TYPE", "POST", "fone_sit", "Ativo");
$ins_tb_fone->setPrimaryKey("fone_id", "NUMERIC_TYPE");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_fone = $tNGs->getRecordset("tb_fone");
$row_rstb_fone = mysql_fetch_assoc($rstb_fone);
$totalRows_rstb_fone = mysql_num_rows($rstb_fone);
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
		$("#fone_nome").focus();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">

<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $("#fone_num").mask('(99) 99999-9999');
   });
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
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="cadastrar" />
      <input name="pg" type="hidden" id="pg" value="fonecad" />
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
    <td class="body_titulo2">CADASTRO DE TELEFONES</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="fonebusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fonecad']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fonecad']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
          <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
            <tr>
              <td width="150" class="KT_th"><label for="fone_ordem">Ordem:
                <input name="fone_tipo" type="hidden" id="fone_tipo" value="SITE" />
              </label></td>
              <td><input name="fone_ordem" type="text" class="frmCad_50" id="fone_ordem" value="9999" maxlength="4" />
                <?php echo $tNGs->displayFieldHint("fone_ordem");?> <?php echo $tNGs->displayFieldError("tb_fone", "fone_ordem"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="fone_nome">Nome:</label></td>
              <td><input name="fone_nome" type="text" class="frmCad_100per" id="fone_nome" value="<?php echo KT_escapeAttribute($row_rstb_fone['fone_nome']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("fone_nome");?> <?php echo $tNGs->displayFieldError("tb_fone", "fone_nome"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="fone_num">Número:</label></td>
              <td><input name="fone_num" type="text" class="frmCad_150" id="fone_num" value="<?php echo KT_escapeAttribute($row_rstb_fone['fone_num']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("fone_num");?> <?php echo $tNGs->displayFieldError("tb_fone", "fone_num"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="fone_sit">Situação:</label></td>
              <td><select name="fone_sit" id="fone_sit">
                <option value="Ativo" <?php if (!(strcmp("Ativo", KT_escapeAttribute($row_rstb_fone['fone_sit'])))) {echo "SELECTED";} ?>>Ativo</option>
                <option value="Desativado" <?php if (!(strcmp("Desativado", KT_escapeAttribute($row_rstb_fone['fone_sit'])))) {echo "SELECTED";} ?>>Desativado</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_fone", "fone_sit"); ?></td>
            </tr>
            <tr class="KT_buttons">
              <td colspan="2" align="right"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Inserir registro" /></td>
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

mysql_free_result($rs_fone);
?>
