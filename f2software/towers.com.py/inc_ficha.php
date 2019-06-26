<?php require_once('Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
// Load the common classes
require_once('includes/common/KT_common.php');

// Load the tNG classes
require_once('includes/tng/tNG.inc.php');

// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("");

// Make unified connection variable
$conn_dbsite = new KT_connection($dbsite, $database_dbsite);

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("ficha_dtnasc", false, "date", "date", "", "", "");
$formValidation->addField("ficha_profdtadmissao", false, "date", "date", "", "", "");
$formValidation->addField("ficha_bancodesde", false, "date", "date", "", "", "");
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

@$dtnasc = implode("-", array_reverse(explode("/", $_POST['ficha_dtnasc']))); //converter a data par ao mysql
@$conjdtnasc = implode("-", array_reverse(explode("/", $_POST['ficha_conjdtnasc']))); //converter a data par ao mysql
@$profdtadmissao = implode("-", array_reverse(explode("/", $_POST['ficha_profdtadmissao']))); //converter a data par ao mysql
@$bancodesde = implode("-", array_reverse(explode("/", $_POST['ficha_bancodesde']))); //converter a data par ao mysql

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

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_ecivil = "SELECT * FROM tb_ecivil AS t1";
$rs_menu_ecivil = mysql_query($query_rs_menu_ecivil, $dbsite) or die(mysql_error());
$row_rs_menu_ecivil = mysql_fetch_assoc($rs_menu_ecivil);
$totalRows_rs_menu_ecivil = mysql_num_rows($rs_menu_ecivil);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_restipo = "SELECT * FROM tb_restipo";
$rs_menu_restipo = mysql_query($query_rs_menu_restipo, $dbsite) or die(mysql_error());
$row_rs_menu_restipo = mysql_fetch_assoc($rs_menu_restipo);
$totalRows_rs_menu_restipo = mysql_num_rows($rs_menu_restipo);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_cartoes = "SELECT * FROM tb_cartoes";
$rs_menu_cartoes = mysql_query($query_rs_menu_cartoes, $dbsite) or die(mysql_error());
$row_rs_menu_cartoes = mysql_fetch_assoc($rs_menu_cartoes);
$totalRows_rs_menu_cartoes = mysql_num_rows($rs_menu_cartoes);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_banco = "SELECT t1.banco_id, t1.banco_banco, t1.banco_cod FROM tb_banco AS t1 WHERE t1.banco_sit = 'Ativo'";
$rs_menu_banco = mysql_query($query_rs_menu_banco, $dbsite) or die(mysql_error());
$row_rs_menu_banco = mysql_fetch_assoc($rs_menu_banco);
$totalRows_rs_menu_banco = mysql_num_rows($rs_menu_banco);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_escolaridade = "SELECT * FROM tb_escolaridade";
$rs_menu_escolaridade = mysql_query($query_rs_menu_escolaridade, $dbsite) or die(mysql_error());
$row_rs_menu_escolaridade = mysql_fetch_assoc($rs_menu_escolaridade);
$totalRows_rs_menu_escolaridade = mysql_num_rows($rs_menu_escolaridade);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menu_ocupacao = "SELECT * FROM tb_cargo";
$rs_menu_ocupacao = mysql_query($query_rs_menu_ocupacao, $dbsite) or die(mysql_error());
$row_rs_menu_ocupacao = mysql_fetch_assoc($rs_menu_ocupacao);
$totalRows_rs_menu_ocupacao = mysql_num_rows($rs_menu_ocupacao);

$auto_rs_auto = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_auto = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_auto = sprintf("SELECT t1.auto_id, t2.autoimg_img, t1.auto_nome, t1.auto_modelo, t1.auto_marca, t1.auto_vlrvenda FROM tb_auto As t1 LEFT JOIN tb_autoimg AS t2 ON t2.autoimg_auto = t1.auto_id WHERE t1.auto_id = %s AND t1.auto_sit = 'Ativo' GROUP BY t1.auto_id", GetSQLValueString($auto_rs_auto, "int"));
$rs_auto = mysql_query($query_rs_auto, $dbsite) or die(mysql_error());
$row_rs_auto = mysql_fetch_assoc($rs_auto);
$totalRows_rs_auto = mysql_num_rows($rs_auto);

// Make an insert transaction instance
$ins_tb_ficha = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_ficha);
// Register triggers
$ins_tb_ficha->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_ficha->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_ficha->registerTrigger("END", "Trigger_Default_Redirect", 99, "index.php?pg=ficha_ok");
// Add columns
$ins_tb_ficha->setTable("tb_ficha");
$ins_tb_ficha->addColumn("ficha_nome", "STRING_TYPE", "POST", "ficha_nome");
$ins_tb_ficha->addColumn("ficha_auto", "NUMERIC_TYPE", "POST", "ficha_auto", "{rs_auto.auto_id}");
$ins_tb_ficha->addColumn("ficha_cpf", "STRING_TYPE", "POST", "ficha_cpf");
$ins_tb_ficha->addColumn("ficha_sexo", "STRING_TYPE", "POST", "ficha_sexo", "M");
$ins_tb_ficha->addColumn("ficha_dtnasc", "DATE_TYPE", "POST", "ficha_dtnasc");
$ins_tb_ficha->addColumn("ficha_rg", "STRING_TYPE", "POST", "ficha_rg");
$ins_tb_ficha->addColumn("ficha_rgemissor", "STRING_TYPE", "POST", "ficha_rgemissor");
$ins_tb_ficha->addColumn("ficha_rguf", "STRING_TYPE", "POST", "ficha_rguf");
$ins_tb_ficha->addColumn("ficha_ecivil", "STRING_TYPE", "POST", "ficha_ecivil", "CASADO");
$ins_tb_ficha->addColumn("ficha_nacionalidade", "STRING_TYPE", "POST", "ficha_nacionalidade", "Brasileiro");
$ins_tb_ficha->addColumn("ficha_naturalidade", "STRING_TYPE", "POST", "ficha_naturalidade");
$ins_tb_ficha->addColumn("ficha_naturalidadeuf", "STRING_TYPE", "POST", "ficha_naturalidadeuf");
$ins_tb_ficha->addColumn("ficha_escolaridade", "STRING_TYPE", "POST", "ficha_escolaridade", "Medio");
$ins_tb_ficha->addColumn("ficha_pai", "STRING_TYPE", "POST", "ficha_pai");
$ins_tb_ficha->addColumn("ficha_mae", "STRING_TYPE", "POST", "ficha_mae");
$ins_tb_ficha->addColumn("ficha_email", "STRING_TYPE", "POST", "ficha_email");
$ins_tb_ficha->addColumn("ficha_fone1", "STRING_TYPE", "POST", "ficha_fone1");
$ins_tb_ficha->addColumn("ficha_fone2", "STRING_TYPE", "POST", "ficha_fone2");
$ins_tb_ficha->addColumn("ficha_conjnome", "STRING_TYPE", "POST", "ficha_conjnome");
$ins_tb_ficha->addColumn("ficha_conjcpf", "STRING_TYPE", "POST", "ficha_conjcpf");
$ins_tb_ficha->addColumn("ficha_conjrg", "STRING_TYPE", "POST", "ficha_conjrg");
$ins_tb_ficha->addColumn("ficha_conjrgemissor", "STRING_TYPE", "POST", "ficha_conjrgemissor");
$ins_tb_ficha->addColumn("ficha_conjrguf", "STRING_TYPE", "POST", "ficha_conjrguf");
$ins_tb_ficha->addColumn("ficha_conjdtnasc", "STRING_TYPE", "POST", "ficha_conjdtnasc");
$ins_tb_ficha->addColumn("ficha_conjocupacao", "STRING_TYPE", "POST", "ficha_conjocupacao");
$ins_tb_ficha->addColumn("ficha_conjemp", "STRING_TYPE", "POST", "ficha_conjemp");
$ins_tb_ficha->addColumn("ficha_conjempcargo", "STRING_TYPE", "POST", "ficha_conjempcargo");
$ins_tb_ficha->addColumn("ficha_conjemprenda", "DOUBLE_TYPE", "POST", "ficha_conjemprenda");
$ins_tb_ficha->addColumn("ficha_conjfone1", "STRING_TYPE", "POST", "ficha_conjfone1");
$ins_tb_ficha->addColumn("ficha_endlogradouro", "STRING_TYPE", "POST", "ficha_endlogradouro");
$ins_tb_ficha->addColumn("ficha_endnumero", "STRING_TYPE", "POST", "ficha_endnumero");
$ins_tb_ficha->addColumn("ficha_endcep", "STRING_TYPE", "POST", "ficha_endcep");
$ins_tb_ficha->addColumn("ficha_endbairro", "STRING_TYPE", "POST", "ficha_endbairro");
$ins_tb_ficha->addColumn("ficha_endcidade", "STRING_TYPE", "POST", "ficha_endcidade");
$ins_tb_ficha->addColumn("ficha_enduf", "STRING_TYPE", "POST", "ficha_enduf");
$ins_tb_ficha->addColumn("ficha_endcorreio", "STRING_TYPE", "POST", "ficha_endcorreio", "Residencial");
$ins_tb_ficha->addColumn("ficha_endtempo", "STRING_TYPE", "POST", "ficha_endtempo");
$ins_tb_ficha->addColumn("ficha_endtipo", "STRING_TYPE", "POST", "ficha_endtipo", "PROPRIA");
$ins_tb_ficha->addColumn("ficha_endfone1", "STRING_TYPE", "POST", "ficha_endfone1");
$ins_tb_ficha->addColumn("ficha_endfone1sit", "STRING_TYPE", "POST", "ficha_endfone1sit", "Proprio");
$ins_tb_ficha->addColumn("ficha_profocupacao", "STRING_TYPE", "POST", "ficha_profocupacao");
$ins_tb_ficha->addColumn("ficha_profemp", "STRING_TYPE", "POST", "ficha_profemp");
$ins_tb_ficha->addColumn("ficha_profcnpj", "STRING_TYPE", "POST", "ficha_profcnpj");
$ins_tb_ficha->addColumn("ficha_profcargo", "STRING_TYPE", "POST", "ficha_profcargo");
$ins_tb_ficha->addColumn("ficha_profdtadmissao", "DATE_TYPE", "POST", "ficha_profdtadmissao");
$ins_tb_ficha->addColumn("ficha_proffone1", "STRING_TYPE", "POST", "ficha_proffone1");
$ins_tb_ficha->addColumn("ficha_proflogradouro", "STRING_TYPE", "POST", "ficha_proflogradouro");
$ins_tb_ficha->addColumn("ficha_profnumero", "STRING_TYPE", "POST", "ficha_profnumero");
$ins_tb_ficha->addColumn("ficha_profcep", "STRING_TYPE", "POST", "ficha_profcep");
$ins_tb_ficha->addColumn("ficha_profbairro", "STRING_TYPE", "POST", "ficha_profbairro");
$ins_tb_ficha->addColumn("ficha_profcidade", "STRING_TYPE", "POST", "ficha_profcidade");
$ins_tb_ficha->addColumn("ficha_profuf", "STRING_TYPE", "POST", "ficha_profuf");
$ins_tb_ficha->addColumn("ficha_profrendames", "DOUBLE_TYPE", "POST", "ficha_profrendames");
$ins_tb_ficha->addColumn("ficha_profrendaconj", "DOUBLE_TYPE", "POST", "ficha_profrendaconj");
$ins_tb_ficha->addColumn("ficha_profrendaaluguel", "DOUBLE_TYPE", "POST", "ficha_profrendaaluguel");
$ins_tb_ficha->addColumn("ficha_profrendaoutra", "DOUBLE_TYPE", "POST", "ficha_profrendaoutra");
$ins_tb_ficha->addColumn("ficha_refnome1", "STRING_TYPE", "POST", "ficha_refnome1");
$ins_tb_ficha->addColumn("ficha_reffone1", "STRING_TYPE", "POST", "ficha_reffone1");
$ins_tb_ficha->addColumn("ficha_refnome2", "STRING_TYPE", "POST", "ficha_refnome2");
$ins_tb_ficha->addColumn("ficha_reffone2", "STRING_TYPE", "POST", "ficha_reffone2");
$ins_tb_ficha->addColumn("ficha_refvisa", "STRING_TYPE", "POST", "ficha_refvisa", "N");
$ins_tb_ficha->addColumn("ficha_refmaster", "STRING_TYPE", "POST", "ficha_refmaster", "N");
$ins_tb_ficha->addColumn("ficha_refamex", "STRING_TYPE", "POST", "ficha_refamex", "N");
$ins_tb_ficha->addColumn("ficha_refdinners", "STRING_TYPE", "POST", "ficha_refdinners", "N");
$ins_tb_ficha->addColumn("ficha_reffininvest", "STRING_TYPE", "POST", "ficha_reffininvest", "N");
$ins_tb_ficha->addColumn("ficha_refoutros", "STRING_TYPE", "POST", "ficha_refoutros");
$ins_tb_ficha->addColumn("ficha_banco", "STRING_TYPE", "POST", "ficha_banco");
$ins_tb_ficha->addColumn("ficha_bancoconta", "STRING_TYPE", "POST", "ficha_bancoconta");
$ins_tb_ficha->addColumn("ficha_bancoagencia", "STRING_TYPE", "POST", "ficha_bancoagencia");
$ins_tb_ficha->addColumn("ficha_bancofone1", "STRING_TYPE", "POST", "ficha_bancofone1");
$ins_tb_ficha->addColumn("ficha_bancodesde", "DATE_TYPE", "POST", "ficha_bancodesde");
$ins_tb_ficha->addColumn("ficha_bemimovel", "STRING_TYPE", "POST", "ficha_bemimovel");
$ins_tb_ficha->addColumn("ficha_bemimovelvalor", "DOUBLE_TYPE", "POST", "ficha_bemimovelvalor");
$ins_tb_ficha->addColumn("ficha_bemauto", "STRING_TYPE", "POST", "ficha_bemauto");
$ins_tb_ficha->addColumn("ficha_bemautovalor", "DOUBLE_TYPE", "POST", "ficha_bemautovalor");
$ins_tb_ficha->setPrimaryKey("ficha_id", "NUMERIC_TYPE");

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
<!-- Scripts para formatacao e validacao de campos -->
<script language="javascript" type="text/javascript" src="js/formatacaoMoeda.js"> </script>
<script type="text/javascript" src="js/jquery.price_format.js"></script> <!--FORMATACAO CAMPOS MOEDA -->
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script>
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"> </script> <!-- VALIDA NUMEROS-->
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<!-- FIM Scripts para formatacao e validacao de campos -->
<!-- Editor html -->
<!-- MAscara formulario -->
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $("#cep").mask('99999999');
      $("#ficha_fone1").mask('(99) 9999-9999');
      $("#ficha_residfone1").mask('(99) 9999-9999');
      $("#ficha_residfone2").mask('(99) 9999-9999');
      $("#ficha_conjfone1").mask('(99) 9999-9999');
      $("#ficha_conjcpf").mask('999.999.999-99');
	  $("#ficha_conjdtnasc").mask('99/99/9999');
      $("#ficha_cpf").mask('999.999.999-99');
      $("#ficha_cnpj").mask('99.999.999/9999-99');
      $("#ficha_profcnpj").mask('99.999.999/9999-99');
      $("#ficha_proffone1").mask('(99) 9999-9999');
      $("#ficha_profdtadmissao").mask('99/99/9999');
      $("#ficha_reffone1").mask('(99) 9999-9999');
      $("#ficha_reffone2").mask('(99) 9999-9999');
      $("#ficha_bancodesde").mask('99/99/9999');
      $("#ficha_bancofone1").mask('(99) 9999-9999');
      $("#ficha_dtnasc").mask('99/99/9999');
      $("#ficha_endfone1").mask('(99) 9999-9999');
	  $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#ficha_rg").keypress(verificaNumero);
      $("#ficha_conjrg").keypress(verificaNumero);
      $("#ficha_conjemprenda").keypress(verificaNumero);
      $("#ficha_endtempo").keypress(verificaNumero);
      $("#ficha_endcep").keypress(verificaNumero);
      $("#ficha_profcep").keypress(verificaNumero);
      $("#ficha_profrendames").keypress(verificaNumero);
      $("#ficha_profrendaconj").keypress(verificaNumero);
      $("#ficha_profrendaaluguel").keypress(verificaNumero);
      $("#ficha_profrendaoutra").keypress(verificaNumero);
      $("#ficha_bancoconta").keypress(verificaNumero);
      $("#ficha_bancoagencia").keypress(verificaNumero);
	  $("#ficha_bemimovelvalor").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
      $("#ficha_bemautovalor").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
   });
</script>
<!-- MAscara formulario -->
<script type="text/javascript">
    $(document).ready(function(){
		$("input").not( $(":button") ).keypress(function (evt) {
			if (evt.keyCode == 13) {
				iname = $(this).val();
				if (iname !== 'Submit'){	
					var fields = $(this).parents('form:eq(0),body').find('button,input,textarea,select');
					var index = fields.index( this );
					if ( index > -1 && ( index + 1 ) < fields.length ) {
						fields.eq( index + 1 ).focus();
					}
					return false;
				}
			}
		});
    });
</script>
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
<link href="includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="includes/common/js/base.js" type="text/javascript"></script>
<script src="includes/common/js/utility.js" type="text/javascript"></script>
<script src="includes/skins/style.js" type="text/javascript"></script>
<?php echo $tNGs->displayValidationRules();?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="frmficha_titulo">FICHA CADASTRAL / FINANCIACI&Oacute;N</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><strong>Instrucciones para el llenado:</strong>:<br />
El llenado de este registro no garantiza la aprobación de su crédito para la financiación del vehículo. Los datos de esta ficha serán enviados para análisis de crédito de la institución financiera y así que recibimos el resultado entraremos en contacto por teléfono o e-mail informados en la ficha abajo.</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td>&nbsp;
      <?php
	echo $tNGs->getErrorMsg();
?>
      <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
        <?php if ($totalRows_rs_auto > 0) { // Show if recordset not empty ?>
  <table width="640" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td colspan="2" bgcolor="#EFEFEF"><strong>VEH&Iacute;CULO ELEGIDO</strong></td>
      </tr>
    <tr>
      <td width="150" height="90" align="center"><img src="dados/auto/<?php echo $row_rs_auto['autoimg_img']; ?>" width="140" height="105" /></td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td colspan="2" class="detalhe-auto-nome"><strong><?php echo $row_rs_auto['auto_nome']; ?></strong></td>
          </tr>
        <tr>
          <td colspan="2"><?php echo $row_rs_auto['auto_modelo']; ?></td>
          </tr>
        <tr>
          <td colspan="2"><?php echo $row_rs_auto['auto_marca']; ?></td>
          </tr>
        <tr>
          <td colspan="2" align="right" class="detalhe-auto-preco">R$ <?php echo number_format($row_rs_auto['auto_vlrvenda'],2,',','.'); ?></td>
          </tr>
        </table></td>
    </tr>
    </table>
  <?php } // Show if recordset not empty ?>
  <?php if ($totalRows_rs_auto == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="10" style="border:#F00 1px dotted;">
        <tr>
          <td>Para llenar la ficha de financiación, primero es necesario que escoge un vehículo. En la página de detalles del vehículo elegido, haga clic en el enlace para enviar la oferta.</td>
          </tr>
        </table></td>
      </tr>
  </table>
  <?php } // Show if recordset empty ?>
  <?php if ($totalRows_rs_auto > 0) { // Show if recordset not empty ?>
  <table width="640" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#efefef" class="KT_th"><strong>DATOS PERSONALES</strong></td>
      </tr>
    <tr>
      <td width="150" class="KT_th"><strong>
        <label for="ficha_nome">Nombre:
          </label>
        <input name="ficha_auto" type="hidden" id="ficha_auto" value="<?php echo $row_rs_auto['auto_id']; ?>" />
        </strong></td>
      <td><input name="ficha_nome" type="text" class="frmficha_100per" id="ficha_nome"  onkeyup="toUpper(this)" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_nome']); ?>" maxlength="100"/>
        <?php echo $tNGs->displayFieldHint("ficha_nome");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_nome"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_cpf">RUC:</label>
        </strong></td>
      <td><input name="ficha_cpf" type="text" class="frmficha_150px" id="ficha_cpf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_cpf']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_cpf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_cpf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_sexo">Sexo:</label>
        </strong></td>
      <td><select name="ficha_sexo" id="ficha_sexo">
        <option value="M" <?php if (!(strcmp("M", KT_escapeAttribute($row_rstb_ficha['ficha_sexo'])))) {echo "SELECTED";} ?>>M</option>
        <option value="F" <?php if (!(strcmp("F", KT_escapeAttribute($row_rstb_ficha['ficha_sexo'])))) {echo "SELECTED";} ?>>F</option>
        </select>
        <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_sexo"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_dtnasc">Fecha de nacimiento:</label>
        </strong></td>
      <td><input name="ficha_dtnasc" type="text" class="frmficha_100px" id="ficha_dtnasc" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_dtnasc']); ?>" size="32" />        <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_dtnasc"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_rg">RG:</label>
        </strong></td>
      <td><input name="ficha_rg" type="text" class="frmficha_150px" id="ficha_rg" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_rg']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_rg");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_rg"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_rgemissor">&Oacute;rgano emisor:</label>
        </strong></td>
      <td><input name="ficha_rgemissor" type="text" class="frmficha_100px" id="ficha_rgemissor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_rgemissor']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_rgemissor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_rgemissor"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_rguf">Provincia:</label>
        </strong></td>
      <td><input name="ficha_rguf" type="text" class="frmficha_50px" id="ficha_rguf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_rguf']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_rguf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_rguf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_ecivil">Estado Civil:</label>
        </strong></td>
      <td><select name="ficha_ecivil" id="ficha_ecivil">
        <option value="CASADO" <?php if (!(strcmp("CASADO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>CASADO</option>
        <option value="DIVORCIADO" <?php if (!(strcmp("DIVORCIADO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>DIVORCIADOS</option>
        <option value="SOLTEIRO" <?php if (!(strcmp("SOLTEIRO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>SOLTERO</option>
        <option value="VIUVO" <?php if (!(strcmp("VIUVO", KT_escapeAttribute($row_rstb_ficha['ficha_ecivil'])))) {echo "SELECTED";} ?>>VIUDO</option>
        </select>
        <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_ecivil"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_nacionalidade">Nacionalidad:</label>
        </strong></td>
      <td><select name="ficha_nacionalidade" id="ficha_nacionalidade">
        <option value="Brasileiro" <?php if (!(strcmp("Brasileiro", KT_escapeAttribute($row_rstb_ficha['ficha_nacionalidade'])))) {echo "SELECTED";} ?>>Paraguayo</option>
        <option value="Estrangeiro" <?php if (!(strcmp("Estrangeiro", KT_escapeAttribute($row_rstb_ficha['ficha_nacionalidade'])))) {echo "SELECTED";} ?>>Extranjero</option>
        </select>
        <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_nacionalidade"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_naturalidade">Nacionalidad:</label>
        </strong></td>
      <td><input name="ficha_naturalidade" type="text" class="frmficha_150px" id="ficha_naturalidade" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_naturalidade']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_naturalidade");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_naturalidade"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_naturalidadeuf">Provincia:</label>
        </strong></td>
      <td><input name="ficha_naturalidadeuf" type="text" class="frmficha_50px" id="ficha_naturalidadeuf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_naturalidadeuf']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_naturalidadeuf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_naturalidadeuf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_escolaridade">Educaci&oacute;n:</label>
        </strong></td>
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
      <td class="KT_th"><strong>
        <label for="ficha_pai">Nombre del Padre:</label>
        </strong></td>
      <td><input name="ficha_pai" type="text" class="frmficha_100per" id="ficha_pai" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_pai']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_pai");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_pai"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_mae">Nombre de la madre:</label>
        </strong></td>
      <td><input name="ficha_mae" type="text" class="frmficha_100per" id="ficha_mae" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_mae']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_mae");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_mae"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_email">E-mail:</label>
        </strong></td>
      <td><input name="ficha_email" type="text" class="frmficha_100per" id="ficha_email" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_email']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_email");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_email"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_fone1">tel&eacute;fono:</label>
        </strong></td>
      <td><input name="ficha_fone1" type="text" class="frmficha_100px" id="ficha_fone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_fone1']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_fone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_fone1"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><strong>
        <label for="ficha_fone2">Celular:</label>
        </strong></td>
      <td><input name="ficha_fone2" type="text" class="frmficha_100px" id="ficha_fone2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_fone2']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_fone2");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_fone2"); ?></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>DATOS DEL C&Oacute;NJUGUE</strong></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjnome">Nombre completo:</label></td>
      <td><input name="ficha_conjnome" type="text" class="frmficha_100per" id="ficha_conjnome" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjnome']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_conjnome");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjnome"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjcpf">RUC:</label></td>
      <td><input name="ficha_conjcpf" type="text" class="frmficha_150px" id="ficha_conjcpf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjcpf']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_conjcpf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjcpf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjrg">RG:</label></td>
      <td><input name="ficha_conjrg" type="text" class="frmficha_150px" id="ficha_conjrg" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjrg']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_conjrg");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjrg"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjrgemissor">Órgão Emissor:</label></td>
      <td><input name="ficha_conjrgemissor" type="text" class="frmficha_100px" id="ficha_conjrgemissor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjrgemissor']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_conjrgemissor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjrgemissor"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjrguf">Provincia:</label></td>
      <td><input name="ficha_conjrguf" type="text" class="frmficha_50px" id="ficha_conjrguf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjrguf']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_conjrguf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjrguf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjdtnasc">Fecha de nacimiento:</label></td>
      <td><input name="ficha_conjdtnasc" type="text" class="frmficha_100px" id="ficha_conjdtnasc" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjdtnasc']); ?>" size="32" />        <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjdtnasc"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjocupacao">Ocupaci&oacute;n:</label></td>
      <td><input name="ficha_conjocupacao" type="text" class="frmficha_100per" id="ficha_conjocupacao" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjocupacao']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_conjocupacao");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjocupacao"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjemp">Empresa donde trabaja:</label></td>
      <td><input name="ficha_conjemp" type="text" class="frmficha_100per" id="ficha_conjemp" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjemp']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_conjemp");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjemp"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjempcargo">Cargo o funci&oacute;n:</label></td>
      <td><input name="ficha_conjempcargo" type="text" class="frmficha_100per" id="ficha_conjempcargo" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjempcargo']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_conjempcargo");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjempcargo"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjemprenda">Ingresos mensuales:</label></td>
      <td><input name="ficha_conjemprenda" type="text" class="frmficha_Moeda150px" id="ficha_conjemprenda" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjemprenda']); ?>"  />
        <?php echo $tNGs->displayFieldHint("ficha_conjemprenda");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjemprenda"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_conjfone1">tel&eacute;fono:</label></td>
      <td><input name="ficha_conjfone1" type="text" class="frmficha_100px" id="ficha_conjfone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_conjfone1']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_conjfone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_conjfone1"); ?></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>DATOS RESIDENCIALES</strong></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endlogradouro">Calle:</label></td>
      <td><input name="ficha_endlogradouro" type="text" class="frmficha_100per" id="ficha_endlogradouro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endlogradouro']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_endlogradouro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endlogradouro"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endnumero">Número:</label></td>
      <td><input name="ficha_endnumero" type="text" class="frmficha_100px" id="ficha_endnumero" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endnumero']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_endnumero");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endnumero"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endcep">c&oacute;digo postal:</label></td>
      <td><input name="ficha_endcep" type="text" class="frmficha_100px" id="ficha_endcep" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endcep']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_endcep");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endcep"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endbairro">Barrio:</label></td>
      <td><input name="ficha_endbairro" type="text" class="frmficha_100per" id="ficha_endbairro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endbairro']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_endbairro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endbairro"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endcidade">Ciudad:</label></td>
      <td><input name="ficha_endcidade" type="text" class="frmficha_100per" id="ficha_endcidade" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endcidade']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_endcidade");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endcidade"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_enduf">Provincia:</label></td>
      <td><input name="ficha_enduf" type="text" class="frmficha_50px" id="ficha_enduf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_enduf']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_enduf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_enduf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endcorreio">Dirección/<br />
        correspondência:</label></td>
      <td><select name="ficha_endcorreio" id="ficha_endcorreio">
        <option value="Residencial" <?php if (!(strcmp("Residencial", KT_escapeAttribute($row_rstb_ficha['ficha_endcorreio'])))) {echo "SELECTED";} ?>>Residencial</option>
        <option value="Comercial" <?php if (!(strcmp("Comercial", KT_escapeAttribute($row_rstb_ficha['ficha_endcorreio'])))) {echo "SELECTED";} ?>>Comercial</option>
        </select>
        <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_endcorreio"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_endtempo">Tiempo de residencia:</label></td>
      <td><input name="ficha_endtempo" type="text" class="frmficha_150px" id="ficha_endtempo" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endtempo']); ?>" onkeyup="toUpper(this)" />
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
      <td><input name="ficha_endfone1" type="text" class="frmficha_100px" id="ficha_endfone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_endfone1']); ?>" size="32" />
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
      <td class="KT_th"><label for="ficha_profocupacao">Tipo de profesional:<br />
        (Empresario, Militar,...)
        </label></td>
      <td><input name="ficha_profocupacao" type="text" class="frmficha_100per" id="ficha_profocupacao" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profocupacao']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_profocupacao");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profocupacao"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profemp">Empresa donde trabaja:</label></td>
      <td><input name="ficha_profemp" type="text" class="frmficha_100per" id="ficha_profemp" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profemp']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_profemp");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profemp"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profcnpj">RUC:<br />
        (se for sócio ou proprietário):</label></td>
      <td><input name="ficha_profcnpj" type="text" class="frmficha_150px" id="ficha_profcnpj" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcnpj']); ?>" maxlength="18" />
        <?php echo $tNGs->displayFieldHint("ficha_profcnpj");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcnpj"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profcargo">Cargo / Funci&oacute;n:</label></td>
      <td><input name="ficha_profcargo" type="text" class="frmficha_100per" id="ficha_profcargo" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcargo']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_profcargo");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcargo"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profdtadmissao">Fecha de admisi&oacute;n:</label></td>
      <td><input name="ficha_profdtadmissao" type="text" class="frmficha_100px" id="ficha_profdtadmissao" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_profdtadmissao']); ?>" maxlength="10" />
        <?php echo $tNGs->displayFieldHint("ficha_profdtadmissao");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profdtadmissao"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_proffone1">Tel&eacute;fono Empresa:</label></td>
      <td><input name="ficha_proffone1" type="text" class="frmficha_100px" id="ficha_proffone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_proffone1']); ?>" maxlength="14" />
        <?php echo $tNGs->displayFieldHint("ficha_proffone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_proffone1"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_proflogradouro">Calle:</label></td>
      <td><input name="ficha_proflogradouro" type="text" class="frmficha_100per" id="ficha_proflogradouro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_proflogradouro']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_proflogradouro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_proflogradouro"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profnumero">Número:</label></td>
      <td><input name="ficha_profnumero" type="text" class="frmficha_100px" id="ficha_profnumero" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profnumero']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_profnumero");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profnumero"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profcep">C&oacute;digo postalcódigo postal:</label></td>
      <td><input name="ficha_profcep" type="text" class="frmficha_100px" id="ficha_profcep" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcep']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_profcep");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcep"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profbairro">Barrio:</label></td>
      <td><input name="ficha_profbairro" type="text" class="frmficha_100per" id="ficha_profbairro" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profbairro']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_profbairro");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profbairro"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profcidade">Ciudad:</label></td>
      <td><input name="ficha_profcidade" type="text" class="frmficha_100per" id="ficha_profcidade" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profcidade']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_profcidade");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profcidade"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profuf">Provincia:</label></td>
      <td><input name="ficha_profuf" type="text" class="frmficha_50px" id="ficha_profuf" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profuf']); ?>" onkeyup="toUpper(this)" />
        <?php echo $tNGs->displayFieldHint("ficha_profuf");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profuf"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profrendames">Ingresos mensuales principales:</label></td>
      <td><input name="ficha_profrendames" type="text" class="frmficha_Moeda150px" id="ficha_profrendames" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendames']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_profrendames");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendames"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profrendaconj">Renta del c&oacute;nyuge (opcional):</label></td>
      <td><input name="ficha_profrendaconj" type="text" class="frmficha_Moeda150px" id="ficha_profrendaconj" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendaconj']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_profrendaconj");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendaconj"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profrendaaluguel">Renta de alquiler (opcional):</label></td>
      <td><input name="ficha_profrendaaluguel" type="text" class="frmficha_Moeda150px" id="ficha_profrendaaluguel" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendaaluguel']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_profrendaaluguel");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendaaluguel"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_profrendaoutra">Otras rentas (opcional):</label></td>
      <td><input name="ficha_profrendaoutra" type="text" class="frmficha_Moeda150px" id="ficha_profrendaoutra" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_profrendaoutra']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_profrendaoutra");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_profrendaoutra"); ?></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>REFERENCIAS PERSONALES Y COMERCIALES</strong></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_refnome1">Nombre completo:</label></td>
      <td><input name="ficha_refnome1" type="text" class="frmficha_100per" id="ficha_refnome1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_refnome1']); ?>" onkeyup="toUpper(this)"/>
        <?php echo $tNGs->displayFieldHint("ficha_refnome1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refnome1"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_reffone1">Tel&eacute;fono:</label></td>
      <td><input name="ficha_reffone1" type="text" class="frmficha_100px" id="ficha_reffone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_reffone1']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_reffone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_reffone1"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_refnome2">Nombre completo:</label></td>
      <td><input name="ficha_refnome2" type="text" class="frmficha_100per" id="ficha_refnome2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_refnome2']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_refnome2");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refnome2"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_reffone2">Tel&eacute;fono:</label></td>
      <td><input name="ficha_reffone2" type="text" class="frmficha_100px" id="ficha_reffone2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_reffone2']); ?>" size="32" />
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
      <td><input name="ficha_refoutros" type="text" class="frmficha_100per" id="ficha_refoutros" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_refoutros']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_refoutros");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_refoutros"); ?></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#EFEFEF" class="KT_th"><strong>REFERENCIAS BANCARIAS Y BIENES PERSONALES</strong></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_banco">Banco:</label></td>
      <td><input name="ficha_banco" type="text" class="frmficha_100per" id="ficha_banco" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_banco']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_banco");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_banco"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_bancoconta">Cuenta corriente:</label></td>
      <td><input name="ficha_bancoconta" type="text" class="frmficha_100px" id="ficha_bancoconta" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bancoconta']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bancoconta");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancoconta"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_bancoagencia">Agencia:</label></td>
      <td><input name="ficha_bancoagencia" type="text" class="frmficha_100px" id="ficha_bancoagencia" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bancoagencia']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bancoagencia");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancoagencia"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_bancofone1">Tel&eacute;fono de la agencia:</label></td>
      <td><input name="ficha_bancofone1" type="text" class="frmficha_100px" id="ficha_bancofone1" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bancofone1']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bancofone1");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancofone1"); ?></td>
      </tr>
    <tr>
      <td class="KT_th"><label for="ficha_bancodesde">Cliente desde:</label></td>
      <td><input name="ficha_bancodesde" type="text" class="frmficha_100px" id="ficha_bancodesde" value="<?php echo KT_formatDate($row_rstb_ficha['ficha_bancodesde']); ?>" size="32" />              <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bancodesde"); ?></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><label for="ficha_bemimovel">¿Tiene inmuebles?Si es así, describa (s). Por ejemplo: casa, apartamento, sitio, etc ...</label></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><input name="ficha_bemimovel2" type="text" class="frmficha_100per" id="ficha_bemimovel2" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemimovel']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bemimovel");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemimovel"); ?></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><label for="ficha_bemimovelvalor">¿Cu&aacute;l es el valor total actual del (los) inmueble (s)?</label></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><input name="ficha_bemimovelvalor" type="text" class="frmficha_Moeda150px" id="ficha_bemimovelvalor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemimovelvalor']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bemimovelvalor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemimovelvalor"); ?></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><label for="ficha_bemauto">¿Tiene vehículos?Si es así, describa (s). Por ejemplo: VW Parati 1.6 2002.</label></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><input name="ficha_bemauto" type="text" class="frmficha_100per" id="ficha_bemauto" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemauto']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bemauto");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemauto"); ?></td>
      </tr>
    <tr>
      <td colspan="2" class="KT_th"><label for="ficha_bemautovalor">¿Cuál es el valor total actual del (los) veh&iacute;culo (s)?</label></td>
      </tr>
    <tr class="KT_buttons">
      <td colspan="2"><input name="ficha_bemautovalor" type="text" class="frmficha_150px" id="ficha_bemautovalor" value="<?php echo KT_escapeAttribute($row_rstb_ficha['ficha_bemautovalor']); ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("ficha_bemautovalor");?> <?php echo $tNGs->displayFieldError("tb_ficha", "ficha_bemautovalor"); ?></td>
      </tr>
    <tr class="KT_buttons">
      <td colspan="2" align="right"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Enviar un mensaje" /></td>
      </tr>
    </table>
  <?php } // Show if recordset not empty ?>
      </form></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" bgcolor="#FFFFFF">
    <table width="600" border="0" align="center" cellpadding="10" cellspacing="0" >
  <tr>
    <td valign="top"></td>
  </tr>
</table>
    </td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_menu_ecivil);

mysql_free_result($rs_menu_restipo);

mysql_free_result($rs_menu_cartoes);

mysql_free_result($rs_menu_banco);

mysql_free_result($rs_menu_escolaridade);

mysql_free_result($rs_menu_ocupacao);

mysql_free_result($rs_auto);

?>
