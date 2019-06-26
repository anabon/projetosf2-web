<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
#	BuildNav for Dreamweaver MX v0.2
#              10-02-2002
#	Alessandro Crugnola [TMM]
#	sephiroth: alessandro@sephiroth.it
#	http://www.sephiroth.it
#	
#	Function for navigation build ::
function buildNavigation($pageNum_Recordset1,$totalPages_Recordset1,$prev_Recordset1,$next_Recordset1,$separator=" | ",$max_links=10, $show_page=true)
{
                GLOBAL $maxRows_rs_news,$totalRows_rs_news;
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
					if ($_get_name != "pageNum_rs_news") {
						$_get_vars .= "&$_get_name=$_get_value";
					}
				}
			}
			$successivo = $pageNum_Recordset1+1;
			$precedente = $pageNum_Recordset1-1;
			$firstArray = ($pageNum_Recordset1 > 0) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_news=$precedente$_get_vars\">$prev_Recordset1</a>" :  "$prev_Recordset1";
			# ----------------------
			# page numbers
			# ----------------------
			for($a = $fgp+1; $a <= $egp; $a++){
				$theNext = $a-1;
				if($show_page)
				{
					$textLink = $a;
				} else {
					$min_l = (($a-1)*$maxRows_rs_news) + 1;
					$max_l = ($a*$maxRows_rs_news >= $totalRows_rs_news) ? $totalRows_rs_news : ($a*$maxRows_rs_news);
					$textLink = "$min_l - $max_l";
				}
				$_ss_k = floor($theNext/26);
				if ($theNext != $pageNum_Recordset1)
				{
					$pagesArray .= "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_news=$theNext$_get_vars\">";
					$pagesArray .= "$textLink</a>" . ($theNext < $egp-1 ? $separator : "");
				} else {
					$pagesArray .= "$textLink"  . ($theNext < $egp-1 ? $separator : "");
				}
			}
			$theNext = $pageNum_Recordset1+1;
			$offset_end = $totalPages_Recordset1;
			$lastArray = ($pageNum_Recordset1 < $totalPages_Recordset1) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_news=$successivo$_get_vars\">$next_Recordset1</a>" : "$next_Recordset1";
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
$query_rs_perm_usr = sprintf("SELECT t1.usr_id, t2.perfil_news FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo'", GetSQLValueString($usuario_rs_perm_usr, "text"));
$rs_perm_usr = mysql_query($query_rs_perm_usr, $dbsite) or die(mysql_error());
$row_rs_perm_usr = mysql_fetch_assoc($rs_perm_usr);
$totalRows_rs_perm_usr = mysql_num_rows($rs_perm_usr);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje FROM tb_usr";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$maxRows_rs_news = 10;
$pageNum_rs_news = 0;
if (isset($_GET['pageNum_rs_news'])) {
  $pageNum_rs_news = $_GET['pageNum_rs_news'];
}
$startRow_rs_news = $pageNum_rs_news * $maxRows_rs_news;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_news = "SELECT t1.news_id, DATE_FORMAT(news_dtcad, '%d/%m/%Y') AS news_dtcad, t1.news_titulo, t1.news_img, t1.news_sit FROM tb_news AS t1 ORDER BY t1.news_dtcad DESC";
$query_limit_rs_news = sprintf("%s LIMIT %d, %d", $query_rs_news, $startRow_rs_news, $maxRows_rs_news);
$rs_news = mysql_query($query_limit_rs_news, $dbsite) or die(mysql_error());
$row_rs_news = mysql_fetch_assoc($rs_news);

if (isset($_GET['totalRows_rs_news'])) {
  $totalRows_rs_news = $_GET['totalRows_rs_news'];
} else {
  $all_rs_news = mysql_query($query_rs_news);
  $totalRows_rs_news = mysql_num_rows($all_rs_news);
}
$totalPages_rs_news = ceil($totalRows_rs_news/$maxRows_rs_news)-1;
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
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="newscad" />
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
    <td class="body_titulo2">NOT&Iacute;CIAS</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="newsbusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_news']!="S"){ ?>
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
  <?php if ($totalRows_rs_news == 0) { // Show if recordset empty ?>
    <table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
          <tr>
            <td>Ning&uacute;n registro.</td>
          </tr>
        </table></td>
      </tr>
    </table>
    <?php } // Show if recordset empty ?>
  <?php if ($totalRows_rs_news > 0) { // Show if recordset not empty ?>
    <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_news']=="S"){ ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="60" height="35" bgcolor="#cccccc" class="registro_titulo-col">ID</td>
              <td width="90" bgcolor="#cccccc" class="registro_titulo-col">&nbsp;</td>
              <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Fecha</td>
              <td bgcolor="#cccccc" class="registro_titulo-col">T&iacute;tulo de las noticias</td>
              <td width="80" align="center" bgcolor="#cccccc" class="registro_titulo-col">situaci&oacute;n</td>
              <td width="100" bgcolor="#cccccc">&nbsp;</td>
            </tr>
          </table>
            <?php do { ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
                <tr>
                  <td width="60" height="35"><?php echo $row_rs_news['news_id']; ?></td>
                  <td width="90" align="center"><img src="../dados/<?php echo $row_rs_news['news_img']; ?>" width="50" height="50" /></td>
                  <td width="100"><?php echo $row_rs_news['news_dtcad']; ?></td>
                  <td><?php echo $row_rs_news['news_titulo']; ?></td>
                  <td width="80" align="center"><?php echo $row_rs_news['news_sit']; ?></td>
                  <td width="100"><table border="0" align="right" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                        <input name="pg" type="hidden" id="pg" value="newsedit" />
                        <input type="submit" class="registro_btedit" value="editar" />
                        <input name="news_id" type="hidden" id="news_id" value="<?php echo $row_rs_news['news_id']; ?>" />
                      </form></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              <?php } while ($row_rs_news = mysql_fetch_assoc($rs_news)); ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td>&nbsp;
                  <?php 
# variable declaration
$prev_rs_news = "« anterior";
$next_rs_news = "proximo »";
$separator = " | ";
$max_links = 5;
$pages_navigation_rs_news = buildNavigation($pageNum_rs_news,$totalPages_rs_news,$prev_rs_news,$next_rs_news,$separator,$max_links,false); 

print $pages_navigation_rs_news[0]; 
?>
                  <?php print $pages_navigation_rs_news[1]; ?> <?php print $pages_navigation_rs_news[2]; ?></td>
                <td>&nbsp;</td>
                <td align="right"><?php echo $totalRows_rs_news ?> &nbsp; registro(s)</td>
              </tr>
          </table></td>
        </tr>
      </table>
      <?php } /*END_PHP_SIRFCIT*/ ?>
    <?php } // Show if recordset not empty ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_news);
?>
