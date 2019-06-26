<?php
#	BuildNav for Dreamweaver MX v0.2
#              10-02-2002
#	Alessandro Crugnola [TMM]
#	sephiroth: alessandro@sephiroth.it
#	http://www.sephiroth.it
#	
#	Function for navigation build ::
function buildNavigation($pageNum_Recordset1,$totalPages_Recordset1,$prev_Recordset1,$next_Recordset1,$separator=" | ",$max_links=10, $show_page=true)
{
                GLOBAL $maxRows_rs_ficha,$totalRows_rs_ficha;
	$pagesArray = ""; $firstArray = ""; $lastArray = "";
	if($max_links<2)$max_links=2;
	if($pageNum_Recordset1<=$totalPages_Recordset1 && $pageNum_Recordset1>=0)
	{
		if ($pageNum_Recordset1 > ceil($max_links/2))
		{
			$fgp = $pageNum_Recordset1 - ceil($max_links/2) > 0 ? $pageNum_Recordset1 - ceil($max_links/2) : 1;
			$egp = $pageNum_Recordset1 + ceil($max_links/2);
			if ($egp >= $totalPages_Recordset1)
			{
				$egp = $totalPages_Recordset1+1;
				$fgp = $totalPages_Recordset1 - ($max_links-1) > 0 ? $totalPages_Recordset1  - ($max_links-1) : 1;
			}
		}
		else {
			$fgp = 0;
			$egp = $totalPages_Recordset1 >= $max_links ? $max_links : $totalPages_Recordset1+1;
		}
		if($totalPages_Recordset1 >= 1) {
			#	------------------------
			#	Searching for $_GET vars
			#	------------------------
			$_get_vars = '';			
			if(!empty($_GET) || !empty($HTTP_GET_VARS)){
				$_GET = empty($_GET) ? $HTTP_GET_VARS : $_GET;
				foreach ($_GET as $_get_name => $_get_value) {
					if ($_get_name != "pageNum_rs_ficha") {
						$_get_vars .= "&$_get_name=$_get_value";
					}
				}
			}
			$successivo = $pageNum_Recordset1+1;
			$precedente = $pageNum_Recordset1-1;
			$firstArray = ($pageNum_Recordset1 > 0) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_ficha=$precedente$_get_vars\">$prev_Recordset1</a>" :  "$prev_Recordset1";
			# ----------------------
			# page numbers
			# ----------------------
			for($a = $fgp+1; $a <= $egp; $a++){
				$theNext = $a-1;
				if($show_page)
				{
					$textLink = $a;
				} else {
					$min_l = (($a-1)*$maxRows_rs_ficha) + 1;
					$max_l = ($a*$maxRows_rs_ficha >= $totalRows_rs_ficha) ? $totalRows_rs_ficha : ($a*$maxRows_rs_ficha);
					$textLink = "$min_l - $max_l";
				}
				$_ss_k = floor($theNext/26);
				if ($theNext != $pageNum_Recordset1)
				{
					$pagesArray .= "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_ficha=$theNext$_get_vars\">";
					$pagesArray .= "$textLink</a>" . ($theNext < $egp-1 ? $separator : "");
				} else {
					$pagesArray .= "$textLink"  . ($theNext < $egp-1 ? $separator : "");
				}
			}
			$theNext = $pageNum_Recordset1+1;
			$offset_end = $totalPages_Recordset1;
			$lastArray = ($pageNum_Recordset1 < $totalPages_Recordset1) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_ficha=$successivo$_get_vars\">$next_Recordset1</a>" : "$next_Recordset1";
		}
	}
	return array($firstArray,$pagesArray,$lastArray);
}
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

$maxRows_rs_ficha = 10;
$pageNum_rs_ficha = 0;
if (isset($_GET['pageNum_rs_ficha'])) {
  $pageNum_rs_ficha = $_GET['pageNum_rs_ficha'];
}
$startRow_rs_ficha = $pageNum_rs_ficha * $maxRows_rs_ficha;

$nome_rs_ficha = "-1";
if (isset($_GET['txtbusca'])) {
  $nome_rs_ficha = $_GET['txtbusca'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_ficha = sprintf("SELECT t1.ficha_id, DATE_FORMAT(t1.ficha_dtsys,'%%d/%%m/%%Y') AS ficha_dtcad, t1.ficha_nome, t1.ficha_cpf, t1.ficha_fone1 FROM tb_ficha AS t1 WHERE t1.ficha_nome LIKE %s ORDER BY t1.ficha_dtsys DESC", GetSQLValueString("%" . $nome_rs_ficha . "%", "text"));
$query_limit_rs_ficha = sprintf("%s LIMIT %d, %d", $query_rs_ficha, $startRow_rs_ficha, $maxRows_rs_ficha);
$rs_ficha = mysql_query($query_limit_rs_ficha, $dbsite) or die(mysql_error());
$row_rs_ficha = mysql_fetch_assoc($rs_ficha);

if (isset($_GET['totalRows_rs_ficha'])) {
  $totalRows_rs_ficha = $_GET['totalRows_rs_ficha'];
} else {
  $all_rs_ficha = mysql_query($query_rs_ficha);
  $totalRows_rs_ficha = mysql_num_rows($all_rs_ficha);
}
$totalPages_rs_ficha = ceil($totalRows_rs_ficha/$maxRows_rs_ficha)-1;
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
function abrir_janela_popup(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">PESQUISA POR FICHA </td>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fichabusca']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_fichabusca']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="100" height="35" bgcolor="#cccccc" class="registro_titulo-col">Data</td>
          <td bgcolor="#cccccc" class="registro_titulo-col">Nome</td>
          <td width="150" bgcolor="#cccccc" class="registro_titulo-col">CPF</td>
          <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Telefone(s)</td>
          <td width="150" bgcolor="#cccccc">&nbsp;</td>
        </tr>
      </table>
        <?php do { ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
            <tr>
              <td width="100" height="35"><?php echo $row_rs_ficha['ficha_dtcad']; ?></td>
              <td><?php echo $row_rs_ficha['ficha_nome']; ?></td>
              <td width="150"><?php echo $row_rs_ficha['ficha_cpf']; ?></td>
              <td width="100"><?php echo $row_rs_ficha['ficha_fone1']; ?></td>
              <td width="150"><table border="0" align="right" cellpadding="4" cellspacing="0">
                <tr>
                  <td width="50"><input type="submit" onclick="abrir_janela_popup('relficha.php?ficha_id=<?php echo $row_rs_ficha['ficha_id']; ?>','imprimir','menubar=yes,scrollbars=yes,resizable=yes,width=870,height=600')" value="imprimir" /></td>
                  <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                    <input name="pg" type="hidden" id="pg" value="fichaedit" />
                    <input type="submit" class="registro_btedit" value="editar" />
                    <input name="ficha_id" type="hidden" id="ficha_id" value="<?php echo $row_rs_ficha['ficha_id']; ?>" />
                  </form></td>
                </tr>
              </table></td>
            </tr>
          </table>
          <?php } while ($row_rs_ficha = mysql_fetch_assoc($rs_ficha)); ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top:#666 2px solid;">
        <tr>
          <td><?php 
# variable declaration
$prev_rs_ficha = "« anterior(es)";
$next_rs_ficha = "proximo(s) »";
$separator = " | ";
$max_links = 5;
$pages_navigation_rs_ficha = buildNavigation($pageNum_rs_ficha,$totalPages_rs_ficha,$prev_rs_ficha,$next_rs_ficha,$separator,$max_links,false); 

print $pages_navigation_rs_ficha[0]; 
?>
            <?php print $pages_navigation_rs_ficha[1]; ?> <?php print $pages_navigation_rs_ficha[2]; ?>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">&nbsp;<?php echo $totalRows_rs_ficha ?> registro(s).</td>
        </tr>
      </table></td>
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
