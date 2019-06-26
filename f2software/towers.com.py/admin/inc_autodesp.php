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

if ((isset($_POST['del_autodesp_id'])) && ($_POST['del_autodesp_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_autodesp WHERE autodesp_id=%s",
                       GetSQLValueString($_POST['del_autodesp_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
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

$auto_rs_auto = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_auto = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_auto = sprintf("SELECT t1.auto_id, t1.auto_placa, t1.auto_modelo, t1.auto_marca, t1.auto_img, t1.auto_anofab, t1.auto_anomod, t1.auto_vlrvenda, t1.auto_vlrcompra FROM tb_auto AS t1 WHERE t1.auto_id = %s AND t1.auto_sitreg = 1", GetSQLValueString($auto_rs_auto, "int"));
$rs_auto = mysql_query($query_rs_auto, $dbsite) or die(mysql_error());
$row_rs_auto = mysql_fetch_assoc($rs_auto);
$totalRows_rs_auto = mysql_num_rows($rs_auto);

$auto_rs_autodesplist = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_autodesplist = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_autodesplist = sprintf("SELECT t1.autodesp_id, t1.autodesp_nome, DATE_FORMAT(t1.autodesp_dtcad,'%%d/%%m/%%Y') AS dtcad, DATE_FORMAT(t1.autodesp_dtvenc,'%%d/%%m/%%Y') AS dtvenc, DATE_FORMAT(t1.autodesp_dtpgto,'%%d/%%m/%%Y') AS dtpgto, t1.autodesp_desc, t1.autodesp_vlr, t1.autodesp_pgto, t1.autodesp_sit FROM tb_autodesp AS t1 WHERE t1.autodesp_auto = %s ORDER BY t1.autodesp_dtcad DESC", GetSQLValueString($auto_rs_autodesplist, "int"));
$rs_autodesplist = mysql_query($query_rs_autodesplist, $dbsite) or die(mysql_error());
$row_rs_autodesplist = mysql_fetch_assoc($rs_autodesplist);
$totalRows_rs_autodesplist = mysql_num_rows($rs_autodesplist);

$auto_rs_autodesptotal = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_autodesptotal = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_autodesptotal = sprintf("SELECT SUM(t1.autodesp_vlr) AS total FROM tb_autodesp AS t1 WHERE t1.autodesp_auto = %s GROUP BY t1.autodesp_auto", GetSQLValueString($auto_rs_autodesptotal, "int"));
$rs_autodesptotal = mysql_query($query_rs_autodesptotal, $dbsite) or die(mysql_error());
$row_rs_autodesptotal = mysql_fetch_assoc($rs_autodesptotal);
$totalRows_rs_autodesptotal = mysql_num_rows($rs_autodesptotal);

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
<script type="text/javascript" src="js/jquery.price_format.js"></script>
<script language="javascript" type="text/javascript" src="js/js_valnumeros.js"></script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
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
	    $("#auto_marca").val( par[2] );
	}
</script>
<script type="text/javascript">
    $(document).ready(function(){
		$("input").not( $(":button") ).keypress(function (evt) {
			if (evt.keyCode == 13) {
				iname = $(this).val();
				if (iname !== 'Inserir registro'){	
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
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#autodesp_vlr").priceFormat({
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
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="100"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="auto" />
    </form></td>
    <td width="150"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="edicion" />
      <input name="pg" type="hidden" id="pg" value="autoedit" />
      <input name="auto_id" type="hidden" id="auto_id" value="<?php echo $row_rs_auto['auto_id']; ?>" />
    </form></td>
    <td width="150"><form id="frm2" name="frm01" method="get" action="painel.php">
      <input type="submit" value="+ GASTOS" />
      <input name="pg" type="hidden" id="pg" value="autodespcad" />
      <input name="auto_id" type="hidden" id="auto_id" value="<?php echo $row_rs_auto['auto_id']; ?>" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">GASTOS X VEH&Iacute;CULO </td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autodesp']!="S"){ ?>
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
  <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autodesp']=="S"){ ?>
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
              <td valign="bottom"><strong> USD <?php echo number_format($row_rs_auto['auto_vlrcompra'],2,',','.'); ?></strong></td>
            </tr>
            <tr>
              <td align="right" valign="bottom">                Valor de Venta: </td>
              <td valign="bottom"><strong>USD <?php echo number_format($row_rs_auto['auto_vlrvenda'],2,',','.'); ?></strong></td>
            </tr>
            <tr>
              <td align="right" valign="bottom">Total Gastos: </td>
              <td valign="bottom"><strong>USD <?php echo number_format($row_rs_autodesptotal['total'],2,',','.'); ?></strong></td>
            </tr>
          </table></td>
        </tr>
        </table></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="10" style="border-bottom:#666 2px solid;">
    <tr>
      <td><strong>RELACI&Oacute;N DE GASTOS CON EL VEH&Iacute;CULO::</strong></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
  <?php if ($totalRows_rs_autodesplist > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="100" height="35" bgcolor="#cccccc" class="registro_titulo-col">Fecha</td>
          <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Madurez</td>
          <td bgcolor="#cccccc" class="registro_titulo-col">Nombre</td>
          <td width="100" align="right" bgcolor="#cccccc" class="registro_titulo-col">Valor</td>
          <td width="100" align="right" bgcolor="#cccccc" class="registro_titulo-col">Valor Pagado</td>
          <td width="100" align="right" bgcolor="#cccccc" class="registro_titulo-col">Fecha Pagado</td>
          <td width="100" align="right" bgcolor="#cccccc" class="registro_titulo-col">Situaci&oacute;n</td>
          <td width="100" bgcolor="#cccccc">&nbsp;</td>
          </tr>
      </table>
        <?php do { ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onmouseover="bgColor='#EFEFEF'" onmouseout="bgColor='#FFFFFF'">
            <tr>
              <td width="100"><?php echo $row_rs_autodesplist['dtcad']; ?></td>
              <td width="100"><?php echo $row_rs_autodesplist['dtvenc']; ?></td>
              <td><?php echo $row_rs_autodesplist['autodesp_nome']; ?></td>
              <td width="100" align="right"><?php echo number_format($row_rs_autodesplist['autodesp_vlr'],2,',','.'); ?></td>
              <td width="100" align="right"><?php echo number_format($row_rs_autodesplist['autodesp_pgto'],2,',','.'); ?></td>
              <td width="100" align="right"><?php echo $row_rs_autodesplist['dtpgto']; ?></td>
              <td width="100" align="right"><?php echo $row_rs_autodesplist['autodesp_sit']; ?></td>
              <td width="100"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td align="right"><form id="frmDeldesp" name="frmDeldesp" method="post" action="">
                    <input name="del_autodesp_id" type="hidden" id="del_autodesp_id" value="<?php echo $row_rs_autodesplist['autodesp_id']; ?>" />
                    <input type="submit" value="del" />
                  </form></td>
                </tr>
              </table></td>
            </tr>
            </table>
          <?php } while ($row_rs_autodesplist = mysql_fetch_assoc($rs_autodesplist)); ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td>&nbsp;</td>
            <td align="right"><strong>Total:</strong></td>
            <td width="150" align="right"><strong>USD<?php echo number_format($row_rs_autodesptotal['total'],2,',','.'); ?></strong></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
  <?php if ($totalRows_rs_autodesplist == 0) { // Show if recordset empty ?>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td class="sem_permissao">Ning&uacute;n registro.</td>
      </tr>
    </table></td>
  </tr>
</table>
<?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_auto);

mysql_free_result($rs_autodesplist);

mysql_free_result($rs_autodesptotal);
?>
