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
$formValidation->addField("autodesp_dtcad", false, "date", "date", "", "", "");
$formValidation->addField("autodesp_dtvenc", true, "date", "date", "", "", "Insira a data do vencimento!");
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

$auto_rs_auto = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_auto = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_auto = sprintf("SELECT t1.auto_id, t1.auto_placa, t1.auto_modelo, t1.auto_marca, t1.auto_img, t1.auto_anofab, t1.auto_anomod, t1.auto_vlrvenda, t1.auto_vlrcompra FROM tb_auto AS t1 WHERE t1.auto_id = %s", GetSQLValueString($auto_rs_auto, "int"));
$rs_auto = mysql_query($query_rs_auto, $dbsite) or die(mysql_error());
$row_rs_auto = mysql_fetch_assoc($rs_auto);
$totalRows_rs_auto = mysql_num_rows($rs_auto);

$auto_rs_autodesptotal = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_autodesptotal = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_autodesptotal = sprintf("SELECT SUM(t1.autodesp_vlr) AS total FROM tb_autodesp AS t1 WHERE t1.autodesp_auto = %s GROUP BY t1.autodesp_auto", GetSQLValueString($auto_rs_autodesptotal, "int"));
$rs_autodesptotal = mysql_query($query_rs_autodesptotal, $dbsite) or die(mysql_error());
$row_rs_autodesptotal = mysql_fetch_assoc($rs_autodesptotal);
$totalRows_rs_autodesptotal = mysql_num_rows($rs_autodesptotal);

// Make an insert transaction instance
$ins_tb_autodesp = new tNG_insert($conn_dbsite);
$tNGs->addTransaction($ins_tb_autodesp);
// Register triggers
$ins_tb_autodesp->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Insert1");
$ins_tb_autodesp->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_tb_autodesp->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=autodesp&auto_id={rs_auto.auto_id}");
// Add columns
$ins_tb_autodesp->setTable("tb_autodesp");
$ins_tb_autodesp->addColumn("autodesp_usrcad", "NUMERIC_TYPE", "POST", "autodesp_usrcad", "{rs_perm_usr.usr_id}");
$ins_tb_autodesp->addColumn("autodesp_auto", "NUMERIC_TYPE", "POST", "autodesp_auto", "{rs_auto.auto_id}");
$ins_tb_autodesp->addColumn("autodesp_dtcad", "DATE_TYPE", "POST", "autodesp_dtcad");
$ins_tb_autodesp->addColumn("autodesp_nome", "STRING_TYPE", "POST", "autodesp_nome");
$ins_tb_autodesp->addColumn("autodesp_desc", "STRING_TYPE", "POST", "autodesp_desc");
$ins_tb_autodesp->addColumn("autodesp_dtvenc", "DATE_TYPE", "POST", "autodesp_dtvenc");
$ins_tb_autodesp->addColumn("autodesp_vlr", "DOUBLE_TYPE", "POST", "autodesp_vlr");
$ins_tb_autodesp->addColumn("autodesp_dtpgto", "DATE_TYPE", "POST", "autodesp_dtpgto");
$ins_tb_autodesp->addColumn("autodesp_pgto", "DOUBLE_TYPE", "POST", "autodesp_pgto");
$ins_tb_autodesp->setPrimaryKey("autodesp_id", "NUMERIC_TYPE");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_autodesp = $tNGs->getRecordset("tb_autodesp");
$row_rstb_autodesp = mysql_fetch_assoc($rstb_autodesp);
$totalRows_rstb_autodesp = mysql_num_rows($rstb_autodesp);

isset($startRow_rs_autoimglist)? $rs_autoimglist_orderNum=$startRow_rs_autoimglist:$rs_autoimglist_orderNum=0;
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
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#autodesp_dtcad").mask('99/99/9999');
	  $("#autodesp_dtvenc").mask('99/99/9999');
	  $("#autodesp_dtpgto").mask('99/99/9999');
	  $("#autodesp_vlr").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  });
	  $("#autodesp_pgto").priceFormat({
		prefix: 'R$ ',
		centsSeparator: '.',
		thousandsSeparator: '',
		clearPrefix: true
	  })
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
    <td width="100"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="auto" />
    </form></td>
    <td width="100"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="regreso" />
      <input name="pg" type="hidden" id="pg" value="autodesp" />
      <input name="auto_id" type="hidden" id="auto_id" value="<?php echo $row_rs_auto['auto_id']; ?>" />
    </form></td>
    <td width="150">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">REGISTRO DE GASTOS</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autodespcad']!="S"){ ?>
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
  <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autodespcad']=="S"){ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:#CCC 2px solid;">
          <tr>
            <td width="150" valign="top"><a href="painel.php?pg=autoedit?auto_id=<?php echo $row_rs_auto['auto_id']; ?>"></a><a href="painel.php?pg=autoedit&amp;auto_id=<?php echo $row_rs_auto['auto_id']; ?>"><img src="../dados/auto/<?php echo $row_rs_auto['auto_img']; ?>" width="150" height="110" border="0" title="Voltar e editar veiculo" /></a></td>
            <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td colspan="2" align="left" class="body_titulo2"><?php echo $row_rs_auto['auto_marca']; ?>\<strong> <?php echo $row_rs_auto['auto_modelo']; ?></strong></td>
              </tr>
              <tr>
                <td width="120" align="right">Chapa:</td>
                <td><strong><?php echo $row_rs_auto['auto_placa']; ?></strong></td>
              </tr>
              <tr>
                <td align="right" valign="bottom">Valor de Compra:</td>
                <td valign="bottom"><strong>USD <?php echo number_format($row_rs_auto['auto_vlrcompra'],2,',','.'); ?></strong></td>
              </tr>
              <tr>
                <td align="right" valign="bottom"> Valor de venta: </td>
                <td valign="bottom"><strong>USD <?php echo number_format($row_rs_auto['auto_vlrvenda'],2,',','.'); ?></strong></td>
              </tr>
              <tr>
                <td align="right" valign="bottom">Total gastos: </td>
                <td valign="bottom"><strong>USD<?php echo number_format($row_rs_autodesptotal['total'],2,',','.'); ?></strong></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
  </table>

  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
          <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
            <tr>
              <td width="150" class="KT_th"><label for="autodesp_dtcad">Fecha de registro:</label></td>
              <td><input name="autodesp_dtcad" type="text" class="frmCad_100" id="autodesp_dtcad" value="<?php echo KT_formatDate($row_rstb_autodesp['autodesp_dtcad']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("autodesp_dtcad");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_dtcad"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="autodesp_nome">Nombre:</label></td>
              <td><input name="autodesp_nome" type="text" class="frmCad_100per" id="autodesp_nome" value="<?php echo KT_escapeAttribute($row_rstb_autodesp['autodesp_nome']); ?>" onkeyup="toUpper(this)" />
                <?php echo $tNGs->displayFieldHint("autodesp_nome");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_nome"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="autodesp_desc">Detalhes:</label></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" class="KT_th"><textarea name="autodesp_desc" cols="50" rows="5" class="frmCad_area" id="autodesp_desc"><?php echo KT_escapeAttribute($row_rstb_autodesp['autodesp_desc']); ?></textarea>
              <?php echo $tNGs->displayFieldHint("autodesp_desc");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_desc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="autodesp_dtvenc">Fecha de vencimiento:</label></td>
              <td><input name="autodesp_dtvenc" type="text" class="frmCad_100" id="autodesp_dtvenc" value="<?php echo KT_formatDate($row_rstb_autodesp['autodesp_dtvenc']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("autodesp_dtvenc");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_dtvenc"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="autodesp_vlr">Valor:</label></td>
              <td><input name="autodesp_vlr" type="text" class="frmCad_moeda" id="autodesp_vlr" value="<?php echo KT_escapeAttribute($row_rstb_autodesp['autodesp_vlr']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("autodesp_vlr");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_vlr"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="autodesp_dtpgto">Fecha Pgto:</label></td>
              <td><input name="autodesp_dtpgto" type="text" class="frmCad_100" id="autodesp_dtpgto" value="<?php echo KT_formatDate($row_rstb_autodesp['autodesp_dtpgto']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("autodesp_dtpgto");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_dtpgto"); ?></td>
            </tr>
            <tr>
              <td class="KT_th"><label for="autodesp_pgto">Valor Pagado:</label></td>
              <td><input name="autodesp_pgto" type="text" class="frmCad_moeda" id="autodesp_pgto" value="<?php echo KT_escapeAttribute($row_rstb_autodesp['autodesp_pgto']); ?>" size="32" />
                <?php echo $tNGs->displayFieldHint("autodesp_pgto");?> <?php echo $tNGs->displayFieldError("tb_autodesp", "autodesp_pgto"); ?></td>
            </tr>
            <tr class="KT_buttons">
              <td colspan="2" align="right"><input type="submit" name="KT_Insert1" id="KT_Insert1" value="Insertar registro" /></td>
            </tr>
          </table>
          <input type="hidden" name="autodesp_usrcad" id="autodesp_usrcad" value="<?php echo KT_escapeAttribute($row_rstb_autodesp['autodesp_usrcad']); ?>" />
          <input type="hidden" name="autodesp_auto" id="autodesp_auto" value="<?php echo KT_escapeAttribute($row_rstb_autodesp['autodesp_auto']); ?>" />
        </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_auto);

mysql_free_result($rs_autodesptotal);
?>
