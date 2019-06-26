<?php require_once('../Connections/dbsite.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frmCad")) {
  $insertSQL = sprintf("INSERT INTO tb_forn (forn_usrcad, forn_nome, forn_desc, forn_cnpj, forn_ie, forn_cpf, forn_rg, forn_fone1, forn_fone2, forn_cep, forn_logradouro, forn_num, forn_complemento, forn_bairro, forn_cidade, forn_uf, forn_email, forn_obs) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['forn_usrcad'], "int"),
                       GetSQLValueString($_POST['forn_nome'], "text"),
                       GetSQLValueString($_POST['forn_desc'], "text"),
                       GetSQLValueString($_POST['forn_cnpj'], "text"),
                       GetSQLValueString($_POST['forn_ie'], "text"),
                       GetSQLValueString($_POST['forn_cpf'], "text"),
                       GetSQLValueString($_POST['forn_rg'], "text"),
                       GetSQLValueString($_POST['forn_fone1'], "text"),
                       GetSQLValueString($_POST['forn_fone2'], "text"),
                       GetSQLValueString($_POST['forn_cep'], "text"),
                       GetSQLValueString($_POST['forn_logradouro'], "text"),
                       GetSQLValueString($_POST['forn_numero'], "text"),
                       GetSQLValueString($_POST['forn_complemento'], "text"),
                       GetSQLValueString($_POST['forn_bairro'], "text"),
                       GetSQLValueString($_POST['forn_cidade'], "text"),
                       GetSQLValueString($_POST['forn_uf'], "text"),
                       GetSQLValueString($_POST['forn_email'], "text"),
                       GetSQLValueString($_POST['forn_obs'], "text"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($insertSQL, $dbsite) or die(mysql_error());

  $insertGoTo = "painel.php?pg=forn";
  if (isset($_SERVER['QUERY_STRING'])) {
  //  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  //  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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

$maxRows_rs_forn = 10;
$pageNum_rs_forn = 0;
if (isset($_GET['pageNum_rs_forn'])) {
  $pageNum_rs_forn = $_GET['pageNum_rs_forn'];
}
$startRow_rs_forn = $pageNum_rs_forn * $maxRows_rs_forn;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_forn = "SELECT t1.forn_id, t1.forn_nome, t1.forn_fone1, t1.forn_fone2, t1.forn_sit FROM tb_forn AS t1 ORDER BY t1.forn_nome ASC";
$query_limit_rs_forn = sprintf("%s LIMIT %d, %d", $query_rs_forn, $startRow_rs_forn, $maxRows_rs_forn);
$rs_forn = mysql_query($query_limit_rs_forn, $dbsite) or die(mysql_error());
$row_rs_forn = mysql_fetch_assoc($rs_forn);

if (isset($_GET['totalRows_rs_forn'])) {
  $totalRows_rs_forn = $_GET['totalRows_rs_forn'];
} else {
  $all_rs_forn = mysql_query($query_rs_forn);
  $totalRows_rs_forn = mysql_num_rows($all_rs_forn);
}
$totalPages_rs_forn = ceil($totalRows_rs_forn/$maxRows_rs_forn)-1;
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
		$("#forn_nome").focus();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<script type="text/javascript" src="ac/js/simpleAutoComplete.js"></script>
<link rel="stylesheet" type="text/css" href="ac/css/simpleAutoComplete.css" />
<script type="text/javascript">
	$(document).ready(function()
	{
	    $('#forn_logradouro').simpleAutoComplete('ac/ajax_query_cep.php',{
		autoCompleteClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCallBack: 'rel',
		identifier: 'endereco'
	    },enderecoCallback);
        });
	
	function enderecoCallback( par )
	{
	    $("#forn_cep").val( par[1] );
        $("#forn_bairro").val( par[2] );
        $("#forn_cidade").val( par[3] );
        $("#forn_uf").val( par[4] );
	}
</script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#forn_cep").mask('99999999');
      $("#forn_fone1").mask('(99) 9999-9999');
      $("#forn_fone2").mask('(99) 9999-9999');
      $("#forn_cnpj").mask("99.999.999/9999-99");
      $("#forn_cpf").mask('999.999.999-99');
	  $("#forn_ie").mask('999.999.999');
	  $("#forn_uf").mask('aa');
      $("#forn_rg").keypress(verificaNumero);
   });
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50">&nbsp;</td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="TODOS" />
      <input name="pg" type="hidden" id="pg" value="forn" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">REGISTRO DE SOCIOS</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_forncad']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_forncad']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><form id="frmCad" name="frmCad" method="POST" action="<?php echo $editFormAction; ?>">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="150"><input name="forn_usrcad" type="hidden" id="forn_usrcad" value="<?php echo $row_rs_perm_usr['usr_id']; ?>" />
              Raz&oacute;n Social:</td>
            <td><input name="forn_nome" type="text" class="frmCad_100per" id="forn_nome" maxlength="100" onkeyup="toUpper(this)" /></td>
            </tr>
          <tr>
            <td>Nombre de fantas&iacute;a:</td>
            <td><input name="forn_desc" type="text" class="frmCad_100per" id="forn_desc" maxlength="100" /></td>
            </tr>
          <tr>
            <td>RUC:</td>
            <td><input name="forn_cnpj" type="text" class="frmCad_150" id="forn_cnpj" maxlength="18" /></td>
            </tr>
          <tr>
            <td>Inscri&ccedil;&atilde;o Estadual:</td>
            <td><input name="forn_ie" type="text" class="frmCad_150" id="forn_ie" maxlength="18" /></td>
          </tr>
          <tr>
            <td>RUC:</td>
            <td><input name="forn_cpf" type="text" class="frmCad_150" id="forn_cpf" maxlength="14" /></td>
          </tr>
          <tr>
            <td>CI:</td>
            <td><input name="forn_rg" type="text" class="frmCad_150" id="forn_rg" maxlength="20" /></td>
          </tr>
          <tr>
            <td>Calle:</td>
            <td><input name="forn_logradouro" type="text" class="frmCad_100per" id="forn_logradouro" maxlength="100" /></td>
            </tr>
          <tr>
            <td>N&uacute;mero:</td>
            <td><input name="forn_numero" type="text" class="frmCad_100" id="forn_numero" maxlength="10" /></td>
            </tr>
          <tr>
            <td>C&oacute;digo Postal:</td>
            <td><input name="forn_cep" type="text" class="frmCad_100" id="forn_cep" maxlength="8" /></td>
            </tr>
          <tr>
            <td>Barrio:</td>
            <td><input name="forn_bairro" type="text" class="frmCad_100per" id="forn_bairro" maxlength="100" /></td>
            </tr>
          <tr>
            <td>Ciudad:</td>
            <td><input name="forn_cidade" type="text" class="frmCad_100per" id="forn_cidade" maxlength="100" /></td>
            </tr>
          <tr>
            <td>Provincia:</td>
            <td><input name="forn_uf" type="text" class="frmCad_50" id="forn_uf" maxlength="2" /></td>
            </tr>
          <tr>
            <td>Complemento:</td>
            <td><input name="forn_complemento" type="text" class="frmCad_100per" id="forn_complemento" maxlength="150" /></td>
            </tr>
          <tr>
            <td>Tel&eacute;fono 1:</td>
            <td><input name="forn_fone1" type="text" class="frmCad_100" id="forn_fone1" maxlength="14" /></td>
            </tr>
          <tr>
            <td>Tel&eacute;fono 2:</td>
            <td><input name="forn_fone2" type="text" class="frmCad_100" id="forn_fone2" maxlength="14" /></td>
            </tr>
          <tr>
            <td>E-mail:</td>
            <td><input name="forn_email" type="text" class="frmCad_100per" id="forn_email" maxlength="100" /></td>
            </tr>
          <tr>
            <td>Observaciones:</td>
            <td><textarea name="forn_obs" cols="45" rows="5" class="frmCad_area" id="forn_obs"></textarea></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="right"><input type="submit" value="Insertar Registro" /></td>
            </tr>
          </table>
        <input type="hidden" name="MM_insert" value="frmCad" />
      </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_forn);
?>
