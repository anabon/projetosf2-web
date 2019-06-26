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
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje, DATE_FORMAT(NOW(), '%d/%m/%Y') AS hojebr FROM tb_usr ORDER BY usr_id ASC LIMIT 1";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$video_rs_video = "-1";
if (isset($_GET['video_id'])) {
  $video_rs_video = $_GET['video_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_video = sprintf("SELECT t1.video_id, t1.video_img, t1.video_nome, DATE_FORMAT(t1.video_dtcad, '%%d/%%m/%%Y') AS video_dtcad, video_sit FROM tb_video AS t1 WHERE t1.video_id = %s", GetSQLValueString($video_rs_video, "int"));
$rs_video = mysql_query($query_rs_video, $dbsite) or die(mysql_error());
$row_rs_video = mysql_fetch_assoc($rs_video);
$totalRows_rs_video = mysql_num_rows($rs_video);

// Make an update transaction instance
$upd_tb_video = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_video);
// Register triggers
$upd_tb_video->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_video->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_video->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=video");
// Add columns
$upd_tb_video->setTable("tb_video");
$upd_tb_video->addColumn("video_usrcad", "NUMERIC_TYPE", "POST", "video_usrcad");
$upd_tb_video->addColumn("video_sit", "STRING_TYPE", "POST", "video_sit");
$upd_tb_video->addColumn("video_dtcad", "DATE_TYPE", "POST", "video_dtcad");
$upd_tb_video->addColumn("video_nome", "STRING_TYPE", "POST", "video_nome");
$upd_tb_video->addColumn("video_img", "STRING_TYPE", "POST", "video_img");
$upd_tb_video->setPrimaryKey("video_id", "NUMERIC_TYPE", "GET", "video_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_video = $tNGs->getRecordset("tb_video");
$row_rstb_video = mysql_fetch_assoc($rstb_video);
$totalRows_rstb_video = mysql_num_rows($rstb_video);
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
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="videocad" />
    </form></td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="video" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50"><?php if ($totalRows_rs_video > 0) { // Show if recordset not empty ?>
      <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_videodel']=="S"){ ?>
        <form id="frmDel" name="frmDel" method="post" action="">
          <input name="del_video_id" type="hidden" id="del_video_id" value="<?php echo $row_rs_video['video_id']; ?>" />
          <input type="submit" onclick="GP_popupConfirmMsg('Está seguro de que desea eliminar este registro?');return document.MM_returnValue" value="borrar" />
        </form>
        <?php } /*END_PHP_SIRFCIT*/ ?>
      <?php } // Show if recordset not empty ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">EDITAR V&Iacute;DEO</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="videobusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_cli']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_cli']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
          <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
            <tr>
              <td width="150" class="KT_th"><label for="video_sit">Situaci&oacute;n:</label></td>
              <td><select name="video_sit" id="video_sit">
                <option value="Ativo" <?php if (!(strcmp("Ativo", $row_rs_video['video_sit']))) {echo "selected=\"selected\"";} ?>>Ativo</option>
                <option value="Desativado" <?php if (!(strcmp("Desativado", $row_rs_video['video_sit']))) {echo "selected=\"selected\"";} ?>>Desativado</option>
              </select>
                <?php echo $tNGs->displayFieldError("tb_video", "video_sit"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="video_dtcad">Fecha de registro:</label></td>
              <td><input name="video_dtcad" type="text" class="frmCad_100" id="video_dtcad" value="<?php echo $row_rs_video['video_dtcad']; ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("video_dtcad");?> <?php echo $tNGs->displayFieldError("tb_video", "video_dtcad"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="video_nome">Título del vídeo:</label></td>
              <td><input name="video_nome" type="text" class="frmCad_100per" id="video_nome" value="<?php echo KT_escapeAttribute($row_rstb_video['video_nome']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("video_nome");?> <?php echo $tNGs->displayFieldError("tb_video", "video_nome"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="video_img">ID Youtube:</label></td>
              <td><input name="video_img" type="text" class="frmCad_100" id="video_img" value="<?php echo KT_escapeAttribute($row_rstb_video['video_img']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("video_img");?> <?php echo $tNGs->displayFieldError("tb_video", "video_img"); ?></td>
            </tr>
            <tr class="KT_buttons">
              <td colspan="2"><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
            </tr>
          </table>
          <input type="hidden" name="video_usrcad" id="video_usrcad" value="<?php echo $row_rs_perm_usr['usr_id']; ?>" />
        </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_video);
?>
