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
$formValidation->addField("auto_dtcad", false, "date", "date", "", "", "");
$formValidation->addField("auto_nome", true, "text", "", "", "", "Insira um título para o veiculo. Pode ser igual ao modelo.");
$formValidation->addField("auto_modelo", true, "text", "", "", "", "Informe o Modelo!");
$formValidation->addField("auto_marca", true, "text", "", "", "", "Informe a Marca!");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("auto_img");
  $uploadObj->setDbFieldName("auto_img");
  $uploadObj->setFolder("../dados/auto/");
  $uploadObj->setResize("true", 800, 0);
  $uploadObj->setMaxSize(3000);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("{auto_id}{rs_upload.arquivo}.{KT_ext}");
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
$query_rs_upload = "SELECT usr_id, DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje, DATE_FORMAT(NOW(), '%d/%m/%Y') AS hojebr FROM tb_usr ORDER BY usr_id ASC LIMIT 1";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menucomb = "SELECT t1.comb_id, t1.comb_nome FROM tb_comb AS t1";
$rs_menucomb = mysql_query($query_rs_menucomb, $dbsite) or die(mysql_error());
$row_rs_menucomb = mysql_fetch_assoc($rs_menucomb);
$totalRows_rs_menucomb = mysql_num_rows($rs_menucomb);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_forn = "SELECT t1.forn_id, t1.forn_nome FROM tb_forn AS t1 ORDER BY t1.forn_nome ASC";
$rs_forn = mysql_query($query_rs_forn, $dbsite) or die(mysql_error());
$row_rs_forn = mysql_fetch_assoc($rs_forn);
$totalRows_rs_forn = mysql_num_rows($rs_forn);

// Make an insert transaction instance
$ins_tb_auto = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_auto);
// Register triggers
$ins_tb_auto->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_auto->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_auto->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=auto");
$ins_tb_auto->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$ins_tb_auto->setTable("tb_auto");
$ins_tb_auto->addColumn("auto_usrcad", "NUMERIC_TYPE", "POST", "auto_usrcad");
$ins_tb_auto->addColumn("auto_dtcad", "DATE_TYPE", "POST", "auto_dtcad");
$ins_tb_auto->addColumn("auto_nome", "STRING_TYPE", "POST", "auto_nome");
$ins_tb_auto->addColumn("auto_modelo", "STRING_TYPE", "POST", "auto_modelo");
$ins_tb_auto->addColumn("auto_marca", "STRING_TYPE", "POST", "auto_marca");
$ins_tb_auto->addColumn("auto_placa", "STRING_TYPE", "POST", "auto_placa");
$ins_tb_auto->addColumn("auto_chassi", "STRING_TYPE", "POST", "auto_chassi");
$ins_tb_auto->addColumn("auto_renavan", "STRING_TYPE", "POST", "auto_renavan");
$ins_tb_auto->addColumn("auto_portas", "STRING_TYPE", "POST", "auto_portas");
$ins_tb_auto->addColumn("auto_km", "STRING_TYPE", "POST", "auto_km");
$ins_tb_auto->addColumn("auto_comb", "NUMERIC_TYPE", "POST", "auto_comb", "{rs_menucomb.comb_id}");
$ins_tb_auto->addColumn("auto_cor", "STRING_TYPE", "POST", "auto_cor");
$ins_tb_auto->addColumn("auto_anofab", "DATE_TYPE", "POST", "auto_anofab");
$ins_tb_auto->addColumn("auto_anomod", "DATE_TYPE", "POST", "auto_anomod");
$ins_tb_auto->addColumn("auto_vlrfipe", "DOUBLE_TYPE", "POST", "auto_vlrfipe");
$ins_tb_auto->addColumn("auto_vlrcompra", "DOUBLE_TYPE", "POST", "auto_vlrcompra");
$ins_tb_auto->addColumn("auto_vlrsit", "STRING_TYPE", "POST", "auto_vlrsit", "S");
$ins_tb_auto->addColumn("auto_vlrvenda", "DOUBLE_TYPE", "POST", "auto_vlrvenda");
$ins_tb_auto->addColumn("auto_forn", "NUMERIC_TYPE", "POST", "auto_forn");
$ins_tb_auto->addColumn("auto_img", "FILE_TYPE", "FILES", "auto_img");
$ins_tb_auto->addColumn("auto_opc", "STRING_TYPE", "POST", "auto_opc");
$ins_tb_auto->addColumn("auto_obs", "STRING_TYPE", "POST", "auto_obs");
$ins_tb_auto->addColumn("auto_segapp", "DOUBLE_TYPE", "POST", "auto_segapp");
$ins_tb_auto->addColumn("auto_segauto", "DOUBLE_TYPE", "POST", "auto_segauto");
$ins_tb_auto->addColumn("auto_deternum", "STRING_TYPE", "POST", "auto_deternum");
$ins_tb_auto->addColumn("auto_deterdtvenc", "DATE_TYPE", "POST", "auto_deterdtvenc");
$ins_tb_auto->addColumn("auto_ntransnum", "STRING_TYPE", "POST", "auto_ntransnum");
$ins_tb_auto->addColumn("auto_ntransdtvenc", "DATE_TYPE", "POST", "auto_ntransdtvenc");
$ins_tb_auto->addColumn("auto_antnum", "STRING_TYPE", "POST", "auto_antnum");
$ins_tb_auto->addColumn("auto_antdtvenc", "DATE_TYPE", "POST", "auto_antdtvenc");
$ins_tb_auto->addColumn("auto_estoque", "STRING_TYPE", "POST", "auto_estoque", "DISPONIVEL");
$ins_tb_auto->addColumn("auto_ordem", "NUMERIC_TYPE", "POST", "auto_ordem");
$ins_tb_auto->setPrimaryKey("auto_id", "NUMERIC_TYPE");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_auto = $tNGs->getRecordset("tb_auto");
$row_rstb_auto = mysql_fetch_assoc($rstb_auto);
$totalRows_rstb_auto = mysql_num_rows($rstb_auto);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/capslock.js"></script>
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script type="text/javascript" src="js/jquery.price_format.js"></script>
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"></script>
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
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
		$('#auto_fornnome').simpleAutoComplete('ac/ajax_query_forn.php',{
		autoCompleteClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCallBack: 'rel',
		identifier: 'fornecedor'
	    },fornecedorCallback);

		$('#auto_modelo').simpleAutoComplete('ac/ajax_query_auto.php',{
		autoCompleteClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCallBack: 'rel',
		identifier: 'auto'
	    },autoCallback);
		
        });
	
	function fornecedorCallback( par )
	{
	    $("#auto_forn").val( par[0] );
        $("#auto_fornnome").val( par[1] );
	}
	
	function autoCallback( par )
	{
	    $("#auto_marca").val( par[4] );
		$("#auto_vlrfipe").val( par[5] );
	}
</script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#auto_dtcad").mask('99/99/9999');
	  $("#auto_deterdtvenc").mask('99/99/9999');
	  $("#auto_ntransdtvenc").mask('99/99/9999');
	  $("#auto_antdtvenc").mask('99/99/9999');
	  $("#auto_anofab").mask('9999');
	  $("#auto_anomod").mask('9999');
	  $("#auto_placa").mask('aaa-999');
	  $("#auto_portas").keypress(verificaNumero);
	  $("#auto_km").keypress(verificaNumero);
	  $("#auto_segapp").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#auto_segauto").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#auto_vlrfipe").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#auto_vlrcompra").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#auto_vlrvenda").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  })
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
      <input name="pg" type="hidden" id="pg" value="auto" />
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
    <td class="body_titulo2">REGISTRO DE VEH&Iacute;CULO</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="autobusca" />
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20" title="Gol, corsa, ..." /></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autocad']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autocad']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
          <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
            <tr>
              <td width="150" class="KT_th"><label for="auto_dtcad">Data cadastro:</label></td>
              <td><input name="auto_dtcad" type="text" class="frmCad_100" id="auto_dtcad" value="<?php echo $row_rs_upload['hojebr']; ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_dtcad");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_dtcad"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_nome">Título del registro:</label></td>
              <td><input name="auto_nome" type="text" class="frmCad_100per" id="auto_nome" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_nome']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("auto_nome");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_nome"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_modelo">Modelo (fipe):</label></td>
              <td><input name="auto_modelo" type="text" class="frmCad_100per" id="auto_modelo" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_modelo']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_modelo");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_modelo"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_marca">Marca:</label></td>
              <td><input name="auto_marca" type="text" class="frmCad_150" id="auto_marca" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_marca']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_marca");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_marca"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_placa">Chapa:</label></td>
              <td><input name="auto_placa" type="text" class="frmCad_100" id="auto_placa" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_placa']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_placa");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_placa"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_chassi">Chassi:</label></td>
              <td><input name="auto_chassi" type="text" class="frmCad_150" id="auto_chassi" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_chassi']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_chassi");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_chassi"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_renavan"></label></td>
              <td><input name="auto_renavan" type="text" class="frmCad_150" id="auto_renavan" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_renavan']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_renavan");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_renavan"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_portas">Nº de Puertas:</label></td>
              <td><input name="auto_portas" type="text" class="frmCad_50" id="auto_portas" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_portas']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_portas");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_portas"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_km">Km:</label></td>
              <td><input name="auto_km" type="text" class="frmCad_150" id="auto_km" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_km']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_km");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_km"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_comb">Combustible:</label></td>
              <td><select name="auto_comb" id="auto_comb">
                <?php 
do {  
?>
                <option value="<?php echo $row_rs_menucomb['comb_id']?>"<?php if (!(strcmp($row_rs_menucomb['comb_id'], $row_rstb_auto['auto_comb']))) {echo "SELECTED";} ?>><?php echo $row_rs_menucomb['comb_nome']?></option>
                <?php
} while ($row_rs_menucomb = mysql_fetch_assoc($rs_menucomb));
  $rows = mysql_num_rows($rs_menucomb);
  if($rows > 0) {
      mysql_data_seek($rs_menucomb, 0);
	  $row_rs_menucomb = mysql_fetch_assoc($rs_menucomb);
  }
?>
              </select>
                <?php echo $tNGs->displayFieldError("tb_auto", "auto_comb"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_cor">Color:</label></td>
              <td><input name="auto_cor" type="text" class="frmCad_150" id="auto_cor" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_cor']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("auto_cor");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_cor"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_anofab">A&ntilde;o de fabricaci&oacute;n:</label></td>
              <td><input name="auto_anofab" type="text" class="frmCad_50" id="auto_anofab" value="<?php echo KT_formatDate($row_rstb_auto['auto_anofab']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_anofab");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_anofab"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_anomod">A&ntilde;o Modelo:</label></td>
              <td><input name="auto_anomod" type="text" class="frmCad_50" id="auto_anomod" value="<?php echo KT_formatDate($row_rstb_auto['auto_anomod']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_anomod");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_anomod"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_vlrfipe">Valor fipe:</label></td>
              <td><input name="auto_vlrfipe" type="text" class="frmCad_moeda" id="auto_vlrfipe" value="0.00" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_vlrfipe");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_vlrfipe"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_vlrcompra">Valor de compra:</label></td>
              <td><input name="auto_vlrcompra" type="text" class="frmCad_moeda" id="auto_vlrcompra" value="0.00" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_vlrcompra");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_vlrcompra"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_vlrsit">Mostrar Precios:</label></td>
              <td><select name="auto_vlrsit" id="auto_vlrsit">
                <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_auto['auto_vlrsit'])))) {echo "SELECTED";} ?>>S</option>
                <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_auto['auto_vlrsit'])))) {echo "SELECTED";} ?>>N</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_auto", "auto_vlrsit"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_vlrvenda">Valor de Venta:</label></td>
              <td><input name="auto_vlrvenda" type="text" class="frmCad_moeda" id="auto_vlrvenda" value="0.00" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_vlrvenda");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_vlrvenda"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_forn">Proveedor:</label></td>
              <td><select name="auto_forn" id="auto_forn">
                <?php
do {  
?>
                <option value="<?php echo $row_rs_forn['forn_id']?>"<?php if (!(strcmp($row_rs_forn['forn_id'], $row_rs_forn['forn_id']))) {echo "selected=\"selected\"";} ?>><?php echo $row_rs_forn['forn_nome']?></option>
                <?php
} while ($row_rs_forn = mysql_fetch_assoc($rs_forn));
  $rows = mysql_num_rows($rs_forn);
  if($rows > 0) {
      mysql_data_seek($rs_forn, 0);
	  $row_rs_forn = mysql_fetch_assoc($rs_forn);
  }
?>
              </select></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_img">Foto de Lista:</label></td>
              <td><input type="file" name="auto_img" id="auto_img" size="32" />
                <?php echo $tNGs->displayFieldError("tb_auto", "auto_img"); ?></td>
            </tr>
            <tr>
              <td colspan="2" class="KT_th"><label for="auto_opc">Opcional:</label></td>
            </tr>
            <tr>
              <td colspan="2" class="KT_th"><textarea name="auto_opc" cols="50" rows="5" class="frmCad_area" id="auto_opc"><?php echo KT_escapeAttribute($row_rstb_auto['auto_opc']); ?></textarea>
              <?php echo $tNGs->displayFieldHint("auto_opc");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_opc"); ?></td>
            </tr>
            <tr>
              <td colspan="2" class="KT_th"><label for="auto_obs2">Observaciones (no es visible en el sitio s&oacutelo en ADMIN):):</label></td>
            </tr>
            <tr>
              <td colspan="2" class="KT_th"><textarea name="auto_obs" cols="50" rows="5" class="frmCad_area" id="auto_obs"><?php echo KT_escapeAttribute($row_rstb_auto['auto_obs']); ?></textarea>
              <?php echo $tNGs->displayFieldHint("auto_obs");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_obs"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_segapp">Seguro APP:</label></td>
              <td><input name="auto_segapp" type="text" class="frmCad_moeda" id="auto_segapp" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_segapp']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_segapp");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_segapp"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_segauto">Seguro Auto:</label></td>
              <td><input name="auto_segauto" type="text" class="frmCad_moeda" id="auto_segauto" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_segauto']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_segauto");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_segauto"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_deternum">Nº DETER:</label></td>
              <td><input name="auto_deternum" type="text" class="frmCad_150" id="auto_deternum" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_deternum']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_deternum");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_deternum"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_deterdtvenc">Venc. DETER:</label></td>
              <td><input name="auto_deterdtvenc" type="text" class="frmCad_100" id="auto_deterdtvenc" value="<?php echo KT_formatDate($row_rstb_auto['auto_deterdtvenc']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_deterdtvenc");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_deterdtvenc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_ntransnum">Nº Núcleo de Transportes:</label></td>
              <td><input name="auto_ntransnum" type="text" class="frmCad_150" id="auto_ntransnum" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_ntransnum']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_ntransnum");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_ntransnum"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_ntransdtvenc">Venc. Núcleo de Transp:</label></td>
              <td><input name="auto_ntransdtvenc" type="text" class="frmCad_100" id="auto_ntransdtvenc" value="<?php echo KT_formatDate($row_rstb_auto['auto_ntransdtvenc']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_ntransdtvenc");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_ntransdtvenc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_antnum">Nº ANT:</label></td>
              <td><input name="auto_antnum" type="text" class="frmCad_150" id="auto_antnum" value="<?php echo KT_escapeAttribute($row_rstb_auto['auto_antnum']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_antnum");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_antnum"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_antdtvenc">Venc. ANT:</label></td>
              <td><input name="auto_antdtvenc" type="text" class="frmCad_100" id="auto_antdtvenc" value="<?php echo KT_formatDate($row_rstb_auto['auto_antdtvenc']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("auto_antdtvenc");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_antdtvenc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_estoque">Situaci&oacute;n Stock:</label></td>
              <td><select name="auto_estoque" id="auto_estoque">
                <option value="DISPONIVEL" <?php if (!(strcmp("DISPONIVEL", KT_escapeAttribute($row_rstb_auto['auto_estoque'])))) {echo "SELECTED";} ?>>DISPONIBLE</option>
                <option value="VENDIDO" <?php if (!(strcmp("VENDIDO", KT_escapeAttribute($row_rstb_auto['auto_estoque'])))) {echo "SELECTED";} ?>>VENDIDO</option>
                <option value="DEVOLVIDO" <?php if (!(strcmp("DEVOLVIDO", KT_escapeAttribute($row_rstb_auto['auto_estoque'])))) {echo "SELECTED";} ?>>DEVUELTO</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_auto", "auto_estoque"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="auto_ordem">Ordem:</label></td>
              <td><input name="auto_ordem" type="text" class="frmCad_50" id="auto_ordem" value="0001" maxlength="4" />
                <?php echo $tNGs->displayFieldHint("auto_ordem");?> <?php echo $tNGs->displayFieldError("tb_auto", "auto_ordem"); ?></td>
            </tr>
            <tr class="KT_buttons">
              <td colspan="2"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Inserir registro" /></td>
            </tr>
          </table>
          <input type="hidden" name="auto_usrcad" id="auto_usrcad" value="<?php echo $row_rs_perm_usr['usr_id']; ?>" />
      </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_menucomb);

mysql_free_result($rs_forn);
?>
