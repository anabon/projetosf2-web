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
$query_rs_inc = "SELECT t1.inc_id, t1.inc_pagetitle, t1.inc_metadesc, t1.inc_metakey FROM tb_inc AS t1 ORDER BY t1.inc_pagetitle ASC";
$rs_inc = mysql_query($query_rs_inc, $dbsite) or die(mysql_error());
$row_rs_inc = mysql_fetch_assoc($rs_inc);
$totalRows_rs_inc = mysql_num_rows($rs_inc);
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
</head>

<body>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">TAGS SEO</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_inc']=="N"){ ?>
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
            <td>Ning&uacute;n registro.</td>
          </tr>
        </table></td>
      </tr>
    </table>
    <?php } // Show if recordset empty ?>
  <?php if ($totalRows_rs_inc > 0) { // Show if recordset not empty ?>
    <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_inc']=="S"){ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
            <tr>
              <td>El TAG referente a la p&aacute;gina de inicio se repite 2 veces y usted debe repetir el mismo contenido 2 veces..</td>
            </tr>
        </table></td>
      </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="200" height="35" bgcolor="#cccccc" class="registro_titulo-col">T&iacute;tulo de la p&aacute;gina</td>
              <td bgcolor="#cccccc" class="registro_titulo-col">Description</td>
              <td width="250" bgcolor="#cccccc" class="registro_titulo-col">palabras clave</td>
              <td width="100" bgcolor="#cccccc">&nbsp;</td>
            </tr>
            </table>
          <?php do { ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
              <tr>
                <td width="200" height="35"><?php echo $row_rs_inc['inc_pagetitle']; ?></td>
                <td><?php echo $row_rs_inc['inc_metadesc']; ?></td>
                <td width="250" align="left"><?php echo $row_rs_inc['inc_metakey']; ?></td>
                <td width="100"><table border="0" align="right" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                        <input name="pg" type="hidden" id="pg" value="incedit" />
                        <input type="submit" class="registro_btedit" value="editar" />
                        <input name="inc_id" type="hidden" id="inc_id" value="<?php echo $row_rs_inc['inc_id']; ?>" />
                      </form></td>
                    </tr>
                </table></td>
              </tr>
            </table>
            <?php } while ($row_rs_inc = mysql_fetch_assoc($rs_inc)); ?></td>
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
