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
$formValidation->addField("ficha_dtnasc", false, "date", "date", "", "", "");
$formValidation->addField("ficha_conjdtnasc", false, "date", "date", "", "", "");
$formValidation->addField("ficha_profdtadmissao", false, "date", "date", "", "", "");
$formValidation->addField("ficha_bancodesde", false, "date", "date", "", "", "");
$tNGs->prepareValidation($formValidation);
// End trigger
?>
<?php require_once('../Connections/dbsite.php'); ?>
<?php
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

if ((isset($_POST['del_ficha_id'])) && ($_POST['del_ficha_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_ficha WHERE ficha_id=%s",
                       GetSQLValueString($_POST['del_ficha_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
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

$ficha_rs_ficha = "-1";
if (isset($_GET['ficha_id'])) {
  $ficha_rs_ficha = $_GET['ficha_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_ficha = sprintf("SELECT DATE_FORMAT(t1.ficha_dtnasc,'%%d/%%m/%%Y') AS dtnasc, DATE_FORMAT(t1.ficha_conjdtnasc,'%%d/%%m/%%Y') AS conjdtnasc, DATE_FORMAT(t1.ficha_profdtadmissao,'%%d/%%m/%%Y') AS profdtadmissao, DATE_FORMAT(t1.ficha_bancodesde,'%%d/%%m/%%Y') AS bancodesde, t1.* FROM tb_ficha AS t1 WHERE t1.ficha_id = %s", GetSQLValueString($ficha_rs_ficha, "int"));
$rs_ficha = mysql_query($query_rs_ficha, $dbsite) or die(mysql_error());
$row_rs_ficha = mysql_fetch_assoc($rs_ficha);
$totalRows_rs_ficha = mysql_num_rows($rs_ficha);

// Make an update transaction instance
$upd_tb_ficha = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_ficha);
// Register triggers
$upd_tb_ficha->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_ficha->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_ficha->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=fichaedit&ficha_id={rs_ficha.ficha_id}");
// Add columns
$upd_tb_ficha->setTable("tb_ficha");
$upd_tb_ficha->addColumn("ficha_sit", "STRING_TYPE", "POST", "ficha_sit");
$upd_tb_ficha->addColumn("ficha_nome", "STRING_TYPE", "POST", "ficha_nome");
$upd_tb_ficha->addColumn("ficha_cpf", "STRING_TYPE", "POST", "ficha_cpf");
$upd_tb_ficha->addColumn("ficha_sexo", "STRING_TYPE", "POST", "ficha_sexo");
$upd_tb_ficha->addColumn("ficha_dtnasc", "DATE_TYPE", "POST", "ficha_dtnasc");
$upd_tb_ficha->addColumn("ficha_rg", "STRING_TYPE", "POST", "ficha_rg");
$upd_tb_ficha->addColumn("ficha_rgemissor", "STRING_TYPE", "POST", "ficha_rgemissor");
$upd_tb_ficha->addColumn("ficha_rguf", "STRING_TYPE", "POST", "ficha_rguf");
$upd_tb_ficha->addColumn("ficha_ecivil", "STRING_TYPE", "POST", "ficha_ecivil");
$upd_tb_ficha->addColumn("ficha_nacionalidade", "STRING_TYPE", "POST", "ficha_nacionalidade");
$upd_tb_ficha->addColumn("ficha_naturalidade", "STRING_TYPE", "POST", "ficha_naturalidade");
$upd_tb_ficha->addColumn("ficha_naturalidadeuf", "STRING_TYPE", "POST", "ficha_naturalidadeuf");
$upd_tb_ficha->addColumn("ficha_escolaridade", "STRING_TYPE", "POST", "ficha_escolaridade");
$upd_tb_ficha->addColumn("ficha_pai", "STRING_TYPE", "POST", "ficha_pai");
$upd_tb_ficha->addColumn("ficha_mae", "STRING_TYPE", "POST", "ficha_mae");
$upd_tb_ficha->addColumn("ficha_email", "STRING_TYPE", "POST", "ficha_email");
$upd_tb_ficha->addColumn("ficha_fone1", "STRING_TYPE", "POST", "ficha_fone1");
$upd_tb_ficha->addColumn("ficha_fone2", "STRING_TYPE", "POST", "ficha_fone2");
$upd_tb_ficha->addColumn("ficha_conjnome", "STRING_TYPE", "POST", "ficha_conjnome");
$upd_tb_ficha->addColumn("ficha_conjcpf", "STRING_TYPE", "POST", "ficha_conjcpf");
$upd_tb_ficha->addColumn("ficha_conjrg", "STRING_TYPE", "POST", "ficha_conjrg");
$upd_tb_ficha->addColumn("ficha_conjrgemissor", "STRING_TYPE", "POST", "ficha_conjrgemissor");
$upd_tb_ficha->addColumn("ficha_conjrguf", "STRING_TYPE", "POST", "ficha_conjrguf");
$upd_tb_ficha->addColumn("ficha_conjdtnasc", "DATE_TYPE", "POST", "ficha_conjdtnasc");
$upd_tb_ficha->addColumn("ficha_conjocupacao", "STRING_TYPE", "POST", "ficha_conjocupacao");
$upd_tb_ficha->addColumn("ficha_conjemp", "STRING_TYPE", "POST", "ficha_conjemp");
$upd_tb_ficha->addColumn("ficha_conjempcargo", "STRING_TYPE", "POST", "ficha_conjempcargo");
$upd_tb_ficha->addColumn("ficha_conjemprenda", "DOUBLE_TYPE", "POST", "ficha_conjemprenda");
$upd_tb_ficha->addColumn("ficha_conjfone1", "STRING_TYPE", "POST", "ficha_conjfone1");
$upd_tb_ficha->addColumn("ficha_endlogradouro", "STRING_TYPE", "POST", "ficha_endlogradouro");
$upd_tb_ficha->addColumn("ficha_endnumero", "STRING_TYPE", "POST", "ficha_endnumero");
$upd_tb_ficha->addColumn("ficha_endcep", "STRING_TYPE", "POST", "ficha_endcep");
$upd_tb_ficha->addColumn("ficha_endbairro", "STRING_TYPE", "POST", "ficha_endbairro");
$upd_tb_ficha->addColumn("ficha_endcidade", "STRING_TYPE", "POST", "ficha_endcidade");
$upd_tb_ficha->addColumn("ficha_enduf", "STRING_TYPE", "POST", "ficha_enduf");
$upd_tb_ficha->addColumn("ficha_endcorreio", "STRING_TYPE", "POST", "ficha_endcorreio");
$upd_tb_ficha->addColumn("ficha_endtempo", "STRING_TYPE", "POST", "ficha_endtempo");
$upd_tb_ficha->addColumn("ficha_endtipo", "STRING_TYPE", "POST", "ficha_endtipo");
$upd_tb_ficha->addColumn("ficha_endfone1", "STRING_TYPE", "POST", "ficha_endfone1");
$upd_tb_ficha->addColumn("ficha_endfone1sit", "STRING_TYPE", "POST", "ficha_endfone1sit");
$upd_tb_ficha->addColumn("ficha_profocupacao", "STRING_TYPE", "POST", "ficha_profocupacao");
$upd_tb_ficha->addColumn("ficha_profemp", "STRING_TYPE", "POST", "ficha_profemp");
$upd_tb_ficha->addColumn("ficha_profcnpj", "STRING_TYPE", "POST", "ficha_profcnpj");
$upd_tb_ficha->addColumn("ficha_profcargo", "STRING_TYPE", "POST", "ficha_profcargo");
$upd_tb_ficha->addColumn("ficha_profdtadmissao", "DATE_TYPE", "POST", "ficha_profdtadmissao");
$upd_tb_ficha->addColumn("ficha_proffone1", "STRING_TYPE", "POST", "ficha_proffone1");
$upd_tb_ficha->addColumn("ficha_profcep", "STRING_TYPE", "POST", "ficha_profcep");
$upd_tb_ficha->addColumn("ficha_proflogradouro", "STRING_TYPE", "POST", "ficha_proflogradouro");
$upd_tb_ficha->addColumn("ficha_profnumero", "STRING_TYPE", "POST", "ficha_profnumero");
$upd_tb_ficha->addColumn("ficha_profbairro", "STRING_TYPE", "POST", "ficha_profbairro");
$upd_tb_ficha->addColumn("ficha_profcidade", "STRING_TYPE", "POST", "ficha_profcidade");
$upd_tb_ficha->addColumn("ficha_profuf", "STRING_TYPE", "POST", "ficha_profuf");
$upd_tb_ficha->addColumn("ficha_profrendames", "DOUBLE_TYPE", "POST", "ficha_profrendames");
$upd_tb_ficha->addColumn("ficha_profrendaconj", "DOUBLE_TYPE", "POST", "ficha_profrendaconj");
$upd_tb_ficha->addColumn("ficha_profrendaaluguel", "DOUBLE_TYPE", "POST", "ficha_profrendaaluguel");
$upd_tb_ficha->addColumn("ficha_profrendaoutra", "DOUBLE_TYPE", "POST", "ficha_profrendaoutra");
$upd_tb_ficha->addColumn("ficha_refnome1", "STRING_TYPE", "POST", "ficha_refnome1");
$upd_tb_ficha->addColumn("ficha_reffone1", "STRING_TYPE", "POST", "ficha_reffone1");
$upd_tb_ficha->addColumn("ficha_refnome2", "STRING_TYPE", "POST", "ficha_refnome2");
$upd_tb_ficha->addColumn("ficha_reffone2", "STRING_TYPE", "POST", "ficha_reffone2");
$upd_tb_ficha->addColumn("ficha_refvisa", "STRING_TYPE", "POST", "ficha_refvisa");
$upd_tb_ficha->addColumn("ficha_refmaster", "STRING_TYPE", "POST", "ficha_refmaster");
$upd_tb_ficha->addColumn("ficha_refamex", "STRING_TYPE", "POST", "ficha_refamex");
$upd_tb_ficha->addColumn("ficha_refdinners", "STRING_TYPE", "POST", "ficha_refdinners");
$upd_tb_ficha->addColumn("ficha_reffininvest", "STRING_TYPE", "POST", "ficha_reffininvest");
$upd_tb_ficha->addColumn("ficha_refoutros", "STRING_TYPE", "POST", "ficha_refoutros");
$upd_tb_ficha->addColumn("ficha_banco", "STRING_TYPE", "POST", "ficha_banco");
$upd_tb_ficha->addColumn("ficha_bancoconta", "STRING_TYPE", "POST", "ficha_bancoconta");
$upd_tb_ficha->addColumn("ficha_bancoagencia", "STRING_TYPE", "POST", "ficha_bancoagencia");
$upd_tb_ficha->addColumn("ficha_bancofone1", "STRING_TYPE", "POST", "ficha_bancofone1");
$upd_tb_ficha->addColumn("ficha_bancodesde", "DATE_TYPE", "POST", "ficha_bancodesde");
$upd_tb_ficha->addColumn("ficha_bemimovel", "STRING_TYPE", "POST", "ficha_bemimovel");
$upd_tb_ficha->addColumn("ficha_bemimovelvalor", "DOUBLE_TYPE", "POST", "ficha_bemimovelvalor");
$upd_tb_ficha->addColumn("ficha_bemauto", "STRING_TYPE", "POST", "ficha_bemauto");
$upd_tb_ficha->addColumn("ficha_bemautovalor", "DOUBLE_TYPE", "POST", "ficha_bemautovalor");
$upd_tb_ficha->setPrimaryKey("ficha_id", "NUMERIC_TYPE", "GET", "ficha_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_ficha = $tNGs->getRecordset("tb_ficha");
$row_rstb_ficha = mysql_fetch_assoc($rstb_ficha);
$totalRows_rstb_ficha = mysql_num_rows($rstb_ficha);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.price_format.js"></script> <!--FORMATACAO CAMPOS MOEDA -->
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script> <!-- CKEDITOR-->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script> <!-- COLOCAR EM CAIXA ALTA, UPPERCASE-->
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"> </script> <!-- VALIDA NUMEROS-->
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
		$("#ficha_nome").focus();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<script type="text/javascript" src="calendario/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="calendario/calendario.js"></script>
<link rel="stylesheet" type=text/css href="calendario/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="ac/js/simpleAutoComplete.js"></script>
<link rel="stylesheet" type="text/css" href="ac/css/simpleAutoComplete.css" />
<script type="text/javascript">
	$(document).ready(function()
	{
	    $('#ficha_endlogradouro').simpleAutoComplete('ac/ajax_query_cep.php',{
		autoCompleteClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCallBack: 'rel',
		identifier: 'endereco'
	    },enderecoCallback);
        });
	
	function enderecoCallback( par )
	{
	    $("#ficha_endcep").val( par[1] );
        $("#ficha_endbairro").val( par[2] );
        $("#ficha_endcidade").val( par[3] );
        $("#ficha_enduf").val( par[4] );
	}
</script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#ficha_cep").mask('99999999');
      $("#ficha_fone1").mask('(99) 9999-9999');
      $("#ficha_fone2").mask('(99) 9999-9999');
      $("#ficha_cnpj").mask("99.999.999/9999-99");
      $("#ficha_cpf").mask('999.999.999-99');
	  $("#ficha_ie").mask('999.999.999');
	  $("#ficha_uf").mask('aa');
      $("#ficha_rg").keypress(verificaNumero);
  	  $("#ficha_rguf").mask('aa');
	  $("#ficha_naturalidadeuf").mask('aa');
	  $("#ficha_dtnasc").mask('99/99/9999');
	  $("#ficha_conjcpf").mask('999.999.999-99');
	  $("#ficha_conjdtnasc").mask('99/99/9999');
	  $("#ficha_conjrguf").mask('aa');
	  $("#ficha_conjfone1").mask('(99) 9999-9999');
	  $("#ficha_bancodesde").mask('99/99/9999');
	  $("#ficha_profdtadmissao").mask('99/99/9999');
	  $("#ficha_endcep").mask('99999999');
	  $("#ficha_endfone1").mask('(99) 9999-9999');
	  $("#ficha_bancofone1").mask('(99) 9999-9999');
	  $("#ficha_reffone1").mask('(99) 9999-9999');
	  $("#ficha_reffone2").mask('(99) 9999-9999');
	  $("#ficha_conjemprenda").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#ficha_profrendames").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#ficha_profrendaconj").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#ficha_profrendaaluguel").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#ficha_profrendaoutra").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  })
   });
function abrir_janela_popup(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
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
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="regreso" />
      <input name="pg" type="hidden" id="pg" value="ficha" />
    </form></td>
    <td width="50"><?php if ($totalRows_rs_ficha > 0) { // Show if recordset not empty ?>
      <input type="submit" onclick="abrir_janela_popup('relficha.php?ficha_id=<?php echo $row_rs_ficha['ficha_id']; ?>','imprimir','menubar=yes,scrollbars=yes,resizable=yes,width=870,height=600')" value="impresi&oacute;n" />
      <?php } // Show if recordset not empty ?></td>
    <td width="50"><?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fichadel']=="S"){ ?>
        <form id="frmDel" name="frmDel" method="post" action="">
          <input name="del_ficha_id" type="hidden" id="del_ficha_id" value="<?php echo $row_rs_ficha['ficha_id']; ?>" />
          <input type="submit" onclick="GP_popupConfirmMsg('Tem certeza de que deseja excluir esta ficha?');return document.MM_returnValue" value="borrar" />
        </form>
        <?php } /*END_PHP_SIRFCIT*/ ?></td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">EDITAR FICHA</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="fichabusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fichaedit']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fichaedit']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
          <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
            <tr>
              <td width="150" class="KT_th"><label for="ficha_sit">Situaci&oacute;n:</label></td>
              <td><select name="ficha_sit" id="ficha_sit">
                <option value="Ativo" <?php if (!(strcmp("Ativo", KT_escapeAttribute($row_rstb_ficha['ficha_sit'])))) {echo "SELECTED";} ?>>Ativo</option>
                <option value="Desativado" <?php if (!(strcmp("Desativado", KT_escapeAttribute($row_rstb_ficha['ficha_sit'])))) {echo "SELECTED";} ?>>Desativado</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_sit"); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>DATOS PERSONALES</strong></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_nome">Nombre:</label></td>
              <td><input name="ficha_nome" type="text" class="frmCad_100per" id="ficha_nome" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_nome']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_nome");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_nome"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_cpf">RUC:</label></td>
              <td><input name="ficha_cpf" type="text" class="frmCad_150" id="ficha_cpf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_cpf']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_cpf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_cpf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_sexo">Sexo:</label></td>
              <td><select name="ficha_sexo" id="ficha_sexo">
                <option value="M" <?php if (!(strcmp("M", KT_escapeAttribute($row_rstb_ficha['ficha_sexo'])))) {echo "SELECTED";} ?>>M</option>
                <option value="F" <?php if (!(strcmp("F", KT_escapeAttribute($row_rstb_ficha['ficha_sexo'])))) {echo "SELECTED";} ?>>F</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_sexo"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_dtnasc">Fecha de nacimiento:</label></td>
              <td><input name="ficha_dtnasc" type="text" class="frmCad_100" id="ficha_dtnasc" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_dtnasc']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_dtnasc");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_dtnasc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_rg">CI:</label></td>
              <td><input name="ficha_rg" type="text" class="frmCad_150" id="ficha_rg" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_rg']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_rg");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_rg"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_rgemissor">Órgão Emisor:</label></td>
              <td><input name="ficha_rgemissor" type="text" class="frmCad_50" id="ficha_rgemissor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_rgemissor']); ?>" maxlength="10" onkeyup="toUpper(this)" />
              <?php echo $tNGs->displayFieldHint("ficha_rgemissor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_rgemissor"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_rguf">Provincia:</label></td>
              <td><input name="ficha_rguf" type="text" class="frmCad_50" id="ficha_rguf" onkeyup="toUpper(this)" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_rguf']); ?>" maxlength="2" />
              <?php echo $tNGs->displayFieldHint("ficha_rguf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_rguf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_ecivil">Estado Civil:</label></td>
              <td><select name="ficha_ecivil" id="ficha_ecivil">
                <option value="CASADO" <?php if (!(strcmp("CASADO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>CASADO</option>
                <option value="DIVORCIADO" <?php if (!(strcmp("DIVORCIADO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>DIVORCIADO</option>
                <option value="SOLTEIRO" <?php if (!(strcmp("SOLTEIRO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>SOLTEIRO</option>
                <option value="VIUVO" <?php if (!(strcmp("VIUVO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>VIUVO</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_ecivil"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_nacionalidade">Nacionalidad:</label></td>
              <td><select name="ficha_nacionalidade" id="ficha_nacionalidade">
                <option value="Brasileiro" <?php if (!(strcmp("Brasileiro", KT_escapeAttribute($row_rstb_ficha['ficha_nacionalidade'])))) {echo "SELECTED";} ?>>Brasileiro</option>
                <option value="Estrangeiro" <?php if (!(strcmp("Estrangeiro", KT_escapeAttribute($row_rstb_ficha['ficha_nacionalidade'])))) {echo "SELECTED";} ?>>Estrangeiro</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_nacionalidade"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_naturalidade">Nacionalidad:</label></td>
              <td><input name="ficha_naturalidade" type="text" class="frmCad_150" id="ficha_naturalidade" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_naturalidade']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_naturalidade");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_naturalidade"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_naturalidadeuf">Provincia:</label></td>
              <td><input name="ficha_naturalidadeuf" type="text" class="frmCad_50" id="ficha_naturalidadeuf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_naturalidadeuf']); ?>" onkeyup="toUpper(this)"/>
                <?php echo $tNGs->displayFieldHint("ficha_naturalidadeuf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_naturalidadeuf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_escolaridade">Educaci&oacute;n:</label></td>
              <td><select name="ficha_escolaridade" id="ficha_escolaridade">
                <option value="Fundamental" <?php if (!(strcmp("Fundamental", KT_escapeAttribute($row_rstb_ficha['ficha_escolaridade'])))) {echo "SELECTED";} ?>>Fundamental</option>
                <option value="Medio" <?php if (!(strcmp("Medio", KT_escapeAttribute($row_rstb_ficha['ficha_escolaridade'])))) {echo "SELECTED";} ?>>Promedio</option>
                <option value="Superior incompleto" <?php if (!(strcmp("Superior incompleto", KT_escapeAttribute($row_rstb_ficha['ficha_escolaridade'])))) {echo "SELECTED";} ?>>Superior incompleto</option>
                <option value="Superior completo" <?php if (!(strcmp("Superior completo", KT_escapeAttribute($row_rstb_ficha['ficha_escolaridade'])))) {echo "SELECTED";} ?>>Superior completo</option>
                <option value="Pos graduado" <?php if (!(strcmp("Pos graduado", KT_escapeAttribute($row_rstb_ficha['ficha_escolaridade'])))) {echo "SELECTED";} ?>>Postgrado</option>
                <option value="Outros" <?php if (!(strcmp("Outros", KT_escapeAttribute($row_rstb_ficha['ficha_escolaridade'])))) {echo "SELECTED";} ?>>Otro</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_escolaridade"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_pai">Nombre del Padre:</label></td>
              <td><input name="ficha_pai" type="text" class="frmCad_100per" id="ficha_pai" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_pai']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_pai");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_pai"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_mae">Nombre de la madre:</label></td>
              <td><input name="ficha_mae" type="text" class="frmCad_100per" id="ficha_mae" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_mae']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_mae");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_mae"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_email">E-mail:</label></td>
              <td><input name="ficha_email" type="text" class="frmCad_100per" id="ficha_email" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_email']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_email");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_email"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_fone1">tel&eacute;fono:</label></td>
              <td><input name="ficha_fone1" type="text" class="frmCad_150" id="ficha_fone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_fone1']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_fone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_fone1"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_fone2">Celular:</label></td>
              <td><input name="ficha_fone2" type="text" class="frmCad_150" id="ficha_fone2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_fone2']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_fone2");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_fone2"); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>DATOS DEL C&Oacute;NJUGUE</strong></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjnome">Nombre completo:</label></td>
              <td><input name="ficha_conjnome" type="text" class="frmCad_100per" id="ficha_conjnome" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjnome']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_conjnome");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjnome"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjcpf">RUC:</label></td>
              <td><input name="ficha_conjcpf" type="text" class="frmCad_150" id="ficha_conjcpf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjcpf']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_conjcpf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjcpf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjrg">CI:</label></td>
              <td><input name="ficha_conjrg" type="text" class="frmCad_150" id="ficha_conjrg" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjrg']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_conjrg");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjrg"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjrgemissor">Órgão Emisor:</label></td>
              <td><input name="ficha_conjrgemissor" type="text" class="frmCad_50" id="ficha_conjrgemissor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjrgemissor']); ?>" onkeyup="toUpper(this)"/>
                <?php echo $tNGs->displayFieldHint("ficha_conjrgemissor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjrgemissor"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjrguf">Provincia:</label></td>
              <td><input name="ficha_conjrguf" type="text" class="frmCad_50" id="ficha_conjrguf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjrguf']); ?>"onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_conjrguf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjrguf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjdtnasc">Fecha de nacimiento:</label></td>
              <td><input name="ficha_conjdtnasc" type="text" class="frmCad_100" id="ficha_conjdtnasc" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_conjdtnasc']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_conjdtnasc");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjdtnasc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjocupacao">ocupaci&oacute;n:</label></td>
              <td><input name="ficha_conjocupacao" type="text" class="frmCad_100per" id="ficha_conjocupacao" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjocupacao']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_conjocupacao");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjocupacao"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjemp">Empresa donde trabaja:</label></td>
              <td><input name="ficha_conjemp" type="text" class="frmCad_100per" id="ficha_conjemp" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjemp']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_conjemp");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjemp"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjempcargo">Cargo o funci&oacute;n:</label></td>
              <td><input name="ficha_conjempcargo" type="text" class="frmCad_100per" id="ficha_conjempcargo" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjempcargo']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_conjempcargo");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjempcargo"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjemprenda">Ingresos mensuales:</label></td>
              <td><input name="ficha_conjemprenda" type="text" class="frmCad_moeda" id="ficha_conjemprenda" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjemprenda']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_conjemprenda");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjemprenda"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_conjfone1">Tel&eacute;fono:</label></td>
              <td><input name="ficha_conjfone1" type="text" class="frmCad_150" id="ficha_conjfone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjfone1']); ?>" maxlength="14"/>
              <?php echo $tNGs->displayFieldHint("ficha_conjfone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjfone1"); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>DATOS RESIDENCIALES</strong></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endlogradouro">Calle:</label></td>
              <td><input name="ficha_endlogradouro" type="text" class="frmCad_100per" id="ficha_endlogradouro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endlogradouro']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_endlogradouro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endlogradouro"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endnumero">Número:</label></td>
              <td><input name="ficha_endnumero" type="text" class="frmCad_100" id="ficha_endnumero" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endnumero']); ?>" onkeyup="toUpper(this)"/>
                <?php echo $tNGs->displayFieldHint("ficha_endnumero");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endnumero"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endcep">C&oacute;digo postal:</label></td>
              <td><input name="ficha_endcep" type="text" class="frmCad_100" id="ficha_endcep" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endcep']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_endcep");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endcep"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endbairro">Barrio:</label></td>
              <td><input name="ficha_endbairro" type="text" class="frmCad_100per" id="ficha_endbairro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endbairro']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_endbairro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endbairro"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endcidade">Ciudad:</label></td>
              <td><input name="ficha_endcidade" type="text" class="frmCad_100per" id="ficha_endcidade" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endcidade']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_endcidade");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endcidade"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_enduf">Provincia:</label></td>
              <td><input name="ficha_enduf" type="text" class="frmCad_50" id="ficha_enduf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_enduf']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_enduf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_enduf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endcorreio">Direcci&oacute;n para correspondencia:</label></td>
              <td><select name="ficha_endcorreio" id="ficha_endcorreio">
                <option value="Residencial" <?php if (!(strcmp("Residencial", KT_escapeAttribute($row_rstb_ficha['ficha_endcorreio'])))) {echo "SELECTED";} ?>>Residencial</option>
                <option value="Comercial" <?php if (!(strcmp("Comercial", KT_escapeAttribute($row_rstb_ficha['ficha_endcorreio'])))) {echo "SELECTED";} ?>>Comercial</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endcorreio"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endtempo">Tiempo de residencia:</label></td>
              <td><input name="ficha_endtempo" type="text" class="frmCad_150" id="ficha_endtempo" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endtempo']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_endtempo");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endtempo"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endtipo">Tipo de residencia:</label></td>
              <td><select name="ficha_endtipo" id="ficha_endtipo">
                <option value="ALUGADA" <?php if (!(strcmp("ALUGADA", KT_escapeAttribute($row_rstb_ficha['ficha_endtipo'])))) {echo "SELECTED";} ?>>ALQUILADO</option>
                <option value="FAMILIAR" <?php if (!(strcmp("FAMILIAR", KT_escapeAttribute($row_rstb_ficha['ficha_endtipo'])))) {echo "SELECTED";} ?>>FAMILIAR</option>
                <option value="FUNCIONAL" <?php if (!(strcmp("FUNCIONAL", KT_escapeAttribute($row_rstb_ficha['ficha_endtipo'])))) {echo "SELECTED";} ?>>FUNCIONAL</option>
                <option value="FINANCIADA" <?php if (!(strcmp("FINANCIADA", KT_escapeAttribute($row_rstb_ficha['ficha_endtipo'])))) {echo "SELECTED";} ?>>FINANCIADA</option>
                <option value="PROPRIA" <?php if (!(strcmp("PROPRIA", KT_escapeAttribute($row_rstb_ficha['ficha_endtipo'])))) {echo "SELECTED";} ?>>PROPIA</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endtipo"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endfone1">Tel&eacute;fono:</label></td>
              <td><input name="ficha_endfone1" type="text" class="frmCad_150" id="ficha_endfone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endfone1']); ?>" maxlength="14" />
              <?php echo $tNGs->displayFieldHint("ficha_endfone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endfone1"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_endfone1sit">Especie:</label></td>
              <td><select name="ficha_endfone1sit" id="ficha_endfone1sit">
                <option value="Proprio" <?php if (!(strcmp("Proprio", KT_escapeAttribute($row_rstb_ficha['ficha_endfone1sit'])))) {echo "SELECTED";} ?>>Propio</option>
                <option value="Recado" <?php if (!(strcmp("Recado", KT_escapeAttribute($row_rstb_ficha['ficha_endfone1sit'])))) {echo "SELECTED";} ?>>Mensaje</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endfone1sit"); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>DATOS PROFESIONALES Y RENDIMENTOS</strong></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profocupacao">Tipo de profesional:</label></td>
              <td><input name="ficha_profocupacao" type="text" class="frmCad_100per" id="ficha_profocupacao" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profocupacao']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profocupacao");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profocupacao"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profemp">Empresa donde trabaja:</label></td>
              <td><input name="ficha_profemp" type="text" class="frmCad_100per" id="ficha_profemp" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profemp']); ?>" onkeyup="toUpper(this)"/>
                   <?php echo $tNGs->displayFieldHint("ficha_profemp");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profemp"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profcnpj">RUC:</label></td>
              <td><input name="ficha_profcnpj" type="text" class="frmCad_150" id="ficha_profcnpj" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcnpj']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profcnpj");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcnpj"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profcargo">Cargo / Funci&oacute;n:</label></td>
              <td><input name="ficha_profcargo" type="text" class="frmCad_100per" id="ficha_profcargo" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcargo']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_profcargo");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcargo"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profdtadmissao">Fecha de admisi&oacute;n:</label></td>
              <td><input name="ficha_profdtadmissao" type="text" class="frmCad_100" id="ficha_profdtadmissao" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_profdtadmissao']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profdtadmissao");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profdtadmissao"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_proffone1">Tel&eacute;fono Empresa:</label></td>
              <td><input name="ficha_proffone1" type="text" class="frmCad_150" id="ficha_proffone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_proffone1']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_proffone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_proffone1"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profcep">c&oacute;digo postal:</label></td>
              <td><input name="ficha_profcep" type="text" class="frmCad_100" id="ficha_profcep" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcep']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profcep");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcep"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_proflogradouro">Calle:</label></td>
              <td><input name="ficha_proflogradouro" type="text" class="frmCad_100per" id="ficha_proflogradouro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_proflogradouro']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_proflogradouro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_proflogradouro"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profnumero">Número:</label></td>
              <td><input name="ficha_profnumero" type="text" class="frmCad_100" id="ficha_profnumero" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profnumero']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profnumero");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profnumero"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profbairro">Barrio:</label></td>
              <td><input name="ficha_profbairro" type="text" class="frmCad_100per" id="ficha_profbairro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profbairro']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_profbairro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profbairro"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profcidade">Ciudad:</label></td>
              <td><input name="ficha_profcidade" type="text" class="frmCad_100per" id="ficha_profcidade" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcidade']); ?>" onkeyup="toUpper(this)"/>
                <?php echo $tNGs->displayFieldHint("ficha_profcidade");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcidade"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profuf">Provincia:</label></td>
              <td><input name="ficha_profuf" type="text" class="frmCad_50" id="ficha_profuf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profuf']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_profuf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profuf"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profrendames">Ingresos mensuales principales:</label></td>
              <td><input name="ficha_profrendames" type="text" class="frmCad_moeda" id="ficha_profrendames" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendames']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profrendames");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendames"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profrendaconj">Renta del c&oacute;nyuge (opcional):</label></td>
              <td><input name="ficha_profrendaconj" type="text" class="frmCad_moeda" id="ficha_profrendaconj" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendaconj']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profrendaconj");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendaconj"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profrendaaluguel">Renta de alquiler (opcional):</label></td>
              <td><input name="ficha_profrendaaluguel" type="text" class="frmCad_moeda" id="ficha_profrendaaluguel" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendaaluguel']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profrendaaluguel");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendaaluguel"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_profrendaoutra">Otras rentas (opcional):</label></td>
              <td><input name="ficha_profrendaoutra" type="text" class="frmCad_moeda" id="ficha_profrendaoutra" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendaoutra']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_profrendaoutra");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendaoutra"); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>REFERENCIAS PERSONALES Y COMERCIALES</strong></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refnome1">Nombre completo:</label></td>
              <td><input name="ficha_refnome1" type="text" class="frmCad_100per" id="ficha_refnome1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_refnome1']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_refnome1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refnome1"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_reffone1">tel&eacute;fono:</label></td>
              <td><input name="ficha_reffone1" type="text" class="frmCad_150" id="ficha_reffone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_reffone1']); ?>" maxlength="14" />
              <?php echo $tNGs->displayFieldHint("ficha_reffone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_reffone1"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refnome2">Nombre completo:</label></td>
              <td><input name="ficha_refnome2" type="text" class="frmCad_100per" id="ficha_refnome2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_refnome2']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_refnome2");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refnome2"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_reffone2">Tel&eacute;fono:</label></td>
              <td><input name="ficha_reffone2" type="text" class="frmCad_150" id="ficha_reffone2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_reffone2']); ?>" maxlength="14" />
              <?php echo $tNGs->displayFieldHint("ficha_reffone2");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_reffone2"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refvisa">Visa:</label></td>
              <td><select name="ficha_refvisa" id="ficha_refvisa">
                <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_ficha['ficha_refvisa'])))) {echo "SELECTED";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_ficha['ficha_refvisa'])))) {echo "SELECTED";} ?>>N</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refvisa"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refmaster">Master:</label></td>
              <td><select name="ficha_refmaster" id="ficha_refmaster">
                <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_ficha['ficha_refmaster'])))) {echo "SELECTED";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_ficha['ficha_refmaster'])))) {echo "SELECTED";} ?>>N</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refmaster"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refamex">Amex:</label></td>
              <td><select name="ficha_refamex" id="ficha_refamex">
                <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_ficha['ficha_refamex'])))) {echo "SELECTED";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_ficha['ficha_refamex'])))) {echo "SELECTED";} ?>>N</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refamex"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refdinners">Dinners:</label></td>
              <td><select name="ficha_refdinners" id="ficha_refdinners">
                <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_ficha['ficha_refdinners'])))) {echo "SELECTED";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_ficha['ficha_refdinners'])))) {echo "SELECTED";} ?>>N</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refdinners"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_reffininvest">Fininvest:</label></td>
              <td><select name="ficha_reffininvest" id="ficha_reffininvest">
                <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_ficha['ficha_reffininvest'])))) {echo "SELECTED";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_ficha['ficha_reffininvest'])))) {echo "SELECTED";} ?>>N</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_reffininvest"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_refoutros">Otro:</label></td>
              <td><input name="ficha_refoutros" type="text" class="frmCad_100per" id="ficha_refoutros" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_refoutros']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_refoutros");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refoutros"); ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>REFERENCIAS BANCARIAS Y BIENES PERSONALES</strong></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_banco">Banco:</label></td>
              <td><input name="ficha_banco" type="text" class="frmCad_100per" id="ficha_banco" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_banco']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_banco");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_banco"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bancoconta">Cuenta corriente:</label></td>
              <td><input name="ficha_bancoconta" type="text" class="frmCad_150" id="ficha_bancoconta" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bancoconta']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_bancoconta");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancoconta"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bancoagencia">Agencia:</label></td>
              <td><input name="ficha_bancoagencia" type="text" class="frmCad_150" id="ficha_bancoagencia" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bancoagencia']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_bancoagencia");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancoagencia"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bancofone1">Tel&eacute;fono de la agencia:</label></td>
              <td><input name="ficha_bancofone1" type="text" class="frmCad_150" id="ficha_bancofone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bancofone1']); ?>" maxlength="14" />
              <?php echo $tNGs->displayFieldHint("ficha_bancofone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancofone1"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bancodesde">Cliente desde:</label></td>
              <td><input name="ficha_bancodesde" type="text" class="frmCad_100" id="ficha_bancodesde" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_bancodesde']); ?>" size="32" maxlength="10" />
              <?php echo $tNGs->displayFieldHint("ficha_bancodesde");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancodesde"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bemimovel">¿Tiene inmuebles?:</label></td>
              <td><input name="ficha_bemimovel" type="text" class="frmCad_100per" id="ficha_bemimovel" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemimovel']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("ficha_bemimovel");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemimovel"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bemimovelvalor">¿Cual es el valor?:</label></td>
              <td><input name="ficha_bemimovelvalor" type="text" class="frmCad_moeda" id="ficha_bemimovelvalor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemimovelvalor']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_bemimovelvalor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemimovelvalor"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bemauto">¿Tiene veh&iacute;culos?:</label></td>
              <td><input name="ficha_bemauto" type="text" class="frmCad_100per" id="ficha_bemauto" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemauto']); ?>" onkeyup="toUpper(this)"/>
                <?php echo $tNGs->displayFieldHint("ficha_bemauto");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemauto"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="ficha_bemautovalor">¿Cual es el valor?:</label></td>
              <td><input name="ficha_bemautovalor" type="text" class="frmCad_moeda" id="ficha_bemautovalor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemautovalor']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("ficha_bemautovalor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemautovalor"); ?></td>
            </tr>
            <tr class="KT_buttons">
              <td colspan="2" align="right"><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
            </tr>
          </table>
        </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_ficha);
?>
