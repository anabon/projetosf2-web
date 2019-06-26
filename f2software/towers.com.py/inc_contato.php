<?php require_once('Connections/dbsite.php'); ?>
<?php require_once('Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
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

mysql_select_db($database_dbsite, $dbsite);
$query_rs_contatoinfo = "SELECT t1.config_email, t1.config_endereco1, t1.config_endereco2, t1.config_mapacod FROM tb_config AS t1";
$rs_contatoinfo = mysql_query($query_rs_contatoinfo, $dbsite) or die(mysql_error());
$row_rs_contatoinfo = mysql_fetch_assoc($rs_contatoinfo);
$totalRows_rs_contatoinfo = mysql_num_rows($rs_contatoinfo);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_fonelist = "SELECT t1.fone_nome, t1.fone_num FROM tb_fone AS t1 WHERE t1.fone_sit = 'Ativo' AND t1.fone_tipo = 'SITE' ORDER BY t1.fone_ordem ASC";
$rs_fonelist = mysql_query($query_rs_fonelist, $dbsite) or die(mysql_error());
$row_rs_fonelist = mysql_fetch_assoc($rs_fonelist);
$totalRows_rs_fonelist = mysql_num_rows($rs_fonelist);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script> <!-- COLOCAR EM CAIXA ALTA, UPPERCASE-->
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').ajaxForm({
            success: function(resposta) {
                alert(resposta);
				document.getElementById('frmContato').reset();
            }
        });
    });
</script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $("#fone").mask('(99) 9999-9999');
   });
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="boby_titulo">CONTACTO Y UBICACI&Oacute;N</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="350"><form id="frmContato" name="frmContato" method="post" action="contato.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td class="frmContato_rotulo">Nombre:
            <input name="destinatario" type="hidden" id="destinatario" value="<?php echo $row_rs_contatoinfo['config_email']; ?>" /></td>
        </tr>
        <tr>
          <td><input name="nome" type="text" class="frmContato_nome" id="nome" maxlength="50" onkeyup="toUpper(this)" /></td>
        </tr>
        <tr>
          <td class="frmContato_rotulo">E-mail:</td>
        </tr>
        <tr>
          <td><input name="email" type="text" class="frmContato_email" id="email" maxlength="50" /></td>
        </tr>
        <tr>
          <td class="frmContato_rotulo">tel&eacute;fono:</td>
        </tr>
        <tr>
          <td><input name="fone" type="text" class="frmContato_fone" id="fone" maxlength="14" /></td>
        </tr>
        <tr>
          <td class="frmContato_rotulo">Mensaje:</td>
        </tr>
        <tr>
          <td><textarea name="comentario" cols="45" rows="5" class="frmContato_comentario" id="comentario"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" class="frmContato_submit" value="Enviar" /></td>
        </tr>
      </table>
    </form></td>
    <td align="right" valign="top"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="35" align="right" valign="top" class="contato_email"><?php echo $row_rs_contatoinfo['config_email']; ?></td>
      </tr>
      <tr>
        <td height="50" align="right" valign="top" class="contato_endereco"><?php echo $row_rs_contatoinfo['config_endereco1']; ?><br />
          <?php echo $row_rs_contatoinfo['config_endereco2']; ?>.</td>
      </tr>
      <tr>
        <td height="40" valign="top"><?php if ($totalRows_rs_fonelist > 0) { // Mostrar se o conjunto de registros não está vazio ?>
            <?php do { ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;">
                <tr>
                  <td align="right"><strong><?php echo $row_rs_fonelist['fone_nome']; ?>:</strong></td>
                  <td width="100" align="right" class="contato_fone"><?php echo $row_rs_fonelist['fone_num']; ?></td>
                </tr>
              </table>
              <?php } while ($row_rs_fonelist = mysql_fetch_assoc($rs_fonelist)); ?>
          <?php } // Mostrar se o conjunto de registros não está vazio?></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC"><?php echo $row_rs_contatoinfo['config_mapacod']; ?></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_contatoinfo);

mysql_free_result($rs_fonelist);
?>
