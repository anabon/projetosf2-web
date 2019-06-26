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

$inc_rs_inc = "-1";
if (isset($_GET['inc_id'])) {
  $inc_rs_inc = $_GET['inc_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_inc = sprintf("SELECT t1.* FROM tb_inc AS t1 WHERE t1.inc_id = %s", GetSQLValueString($inc_rs_inc, "int"));
$rs_inc = mysql_query($query_rs_inc, $dbsite) or die(mysql_error());
$row_rs_inc = mysql_fetch_assoc($rs_inc);
$totalRows_rs_inc = mysql_num_rows($rs_inc);

// Make an update transaction instance
$upd_tb_inc = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_inc);
// Register triggers
$upd_tb_inc->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_inc->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_inc->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=inc");
// Add columns
$upd_tb_inc->setTable("tb_inc");
$upd_tb_inc->addColumn("inc_pagetitle", "STRING_TYPE", "POST", "inc_pagetitle");
$upd_tb_inc->addColumn("inc_metakey", "STRING_TYPE", "POST", "inc_metakey");
$upd_tb_inc->addColumn("inc_metadesc", "STRING_TYPE", "POST", "inc_metadesc");
$upd_tb_inc->setPrimaryKey("inc_id", "NUMERIC_TYPE", "GET", "inc_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_inc = $tNGs->getRecordset("tb_inc");
$row_rstb_inc = mysql_fetch_assoc($rstb_inc);
$totalRows_rstb_inc = mysql_num_rows($rstb_inc);
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script> <!-- CKEDITOR-->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script> <!-- COLOCAR EM CAIXA ALTA, UPPERCASE-->
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"> </script> <!-- VALIDA NUMEROS-->
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
		$("#frota_nome").focus();
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
	    $('#cli_logradouro').simpleAutoComplete('ac/ajax_query_cep.php',{
		autoCompleteClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCallBack: 'rel',
		identifier: 'endereco'
	    },enderecoCallback);
        });
	
	function enderecoCallback( par )
	{
	    $("#cli_cep").val( par[1] );
        $("#cli_bairro").val( par[2] );
        $("#cli_cidade").val( par[3] );
        $("#cli_uf").val( par[4] );
	}
</script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#cli_cep").mask('99999999');
      $("#cli_fone1").mask('(99) 9999-9999');
      $("#cli_fone2").mask('(99) 9999-9999');
	  $("#cli_fone3").mask('(99) 9999-9999');
      $("#cli_cnpj").mask("99.999.999/9999-99");
      $("#cli_cpf").mask('999.999.999-99');
	  $("#cli_ie").mask('999.999.999');
	  $("#cli_uf").mask('aa');
      $("#cli_rg").keypress(verificaNumero);
	  $("#cli_comissao").keypress(verificaNumero);
	  $("#srv_vlr").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
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
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="inc" />
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
    <td class="body_titulo2">EDITAR TAG SEO</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_incedit']=="N"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>USTED NO PUEDE PERMISIÓN PARA ESTE CONTENIDO!</td>
          </tr>
      </table></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<?php if ($totalRows_rs_inc == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>Ning&uacute;n registro!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
<?php if ($totalRows_rs_inc > 0) { // Show if recordset not empty ?>
  <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_incedit']=="S"){ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td>&nbsp;
          <?php
	echo $tNGs->getErrorMsg();
?>
          <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
            <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
              <tr>
                <td width="160" align="right" class="KT_th"><label for="inc_pagetitle">T&iacute;tulo de la página:</label></td>
                <td><input name="inc_pagetitle" type="text" class="frmCad_100per" id="inc_pagetitle" value="<?php echo KT_escapeAttribute($row_rstb_inc['inc_pagetitle']); ?>" size="32" />
                  <?php echo $tNGs->displayFieldHint("inc_pagetitle");?> <?php echo $tNGs->displayFieldError("tb_inc", "inc_pagetitle"); ?></td>
              </tr>
              <tr>
                <td align="right" class="KT_th"><label for="inc_metakey">Palabras clave (meta-keys):</label></td>
                <td><input name="inc_metakey" type="text" class="frmCad_100per" id="inc_metakey" value="<?php echo KT_escapeAttribute($row_rstb_inc['inc_metakey']); ?>" size="32" />
                  <?php echo $tNGs->displayFieldHint("inc_metakey");?> <?php echo $tNGs->displayFieldError("tb_inc", "inc_metakey"); ?></td>
              </tr>
              <tr>
                <td align="right" class="KT_th"><label for="inc_metadesc">Descripci&oacute;n (meta-description):</label></td>
                <td><input name="inc_metadesc" type="text" class="frmCad_100per" id="inc_metadesc" value="<?php echo KT_escapeAttribute($row_rstb_inc['inc_metadesc']); ?>" size="32" />
                  <?php echo $tNGs->displayFieldHint("inc_metadesc");?> <?php echo $tNGs->displayFieldError("tb_inc", "inc_metadesc"); ?></td>
              </tr>
              <tr class="KT_buttons">
                <td colspan="2"><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
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

mysql_free_result($rs_inc);
?>
