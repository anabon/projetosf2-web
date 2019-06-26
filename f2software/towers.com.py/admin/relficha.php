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

$ficha_rs_ficha = "-1";
if (isset($_GET['ficha_id'])) {
  $ficha_rs_ficha = $_GET['ficha_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_ficha = sprintf("SELECT t1.* FROM tb_ficha AS t1 WHERE t1.ficha_id = %s", GetSQLValueString($ficha_rs_ficha, "int"));
$rs_ficha = mysql_query($query_rs_ficha, $dbsite) or die(mysql_error());
$row_rs_ficha = mysql_fetch_assoc($rs_ficha);
$totalRows_rs_ficha = mysql_num_rows($rs_ficha);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_fichaheader = "SELECT t1.config_nome, t1.config_endereco1, t1.config_endereco2, t1.config_url FROM tb_config AS t1";
$rs_fichaheader = mysql_query($query_rs_fichaheader, $dbsite) or die(mysql_error());
$row_rs_fichaheader = mysql_fetch_assoc($rs_fichaheader);
$totalRows_rs_fichaheader = mysql_num_rows($rs_fichaheader);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_fones = "SELECT t1.fone_nome, t1.fone_num FROM tb_fone AS t1 WHERE t1.fone_tipo = 'SITE' ORDER BY t1.fone_ordem ASC";
$rs_fones = mysql_query($query_rs_fones, $dbsite) or die(mysql_error());
$row_rs_fones = mysql_fetch_assoc($rs_fones);
$totalRows_rs_fones = mysql_num_rows($rs_fones);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10" style="border-bottom:#000 2px solid;">
  <tr>
    <td valign="top" class="body_titulo2"><?php echo $row_rs_fichaheader['config_nome']; ?> - FICHA CADASTRAL<br />
      <span class="relsrv_titulo"><?php echo $row_rs_fichaheader['config_endereco1']; ?>, <?php echo $row_rs_fichaheader['config_endereco2']; ?>. <?php echo $row_rs_fichaheader['config_url']; ?></span></td>
    <td width="150" valign="top">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="24" bgcolor="#CCCCCC"><strong>DATOS DE REGISTRO</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="170" align="right" class="relsrv_info"><span class="relsrv_info">Nombre:</span></td>
        <td class="relsrv_info"><strong><span class="relsrv_info"><?php echo strtoupper($row_rs_ficha['ficha_nome']); ?></span></strong></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info"><span class="relsrv_info">RUC, CI:</span></td>
        <td class="relsrv_info"><strong><span class="relsrv_info"><?php echo $row_rs_ficha['ficha_cpf']; ?>, <?php echo $row_rs_ficha['ficha_rg']; ?> / <?php echo $row_rs_ficha['ficha_rgemissor']; ?> - <?php echo $row_rs_ficha['ficha_rguf']; ?></span></strong></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info"><span class="relsrv_info">Sexo:</span></td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_sexo']; ?></strong></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info"><span class="relsrv_info">Fecha de nacimiento:</span></td>
        <td class="relsrv_info"><strong><?php echo date('d/m/Y', strtotime($row_rs_ficha['ficha_dtnasc']));?></strong></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Estado Civil:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_ecivil']; ?></strong></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Nacionalidad:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_nacionalidade']; ?></strong></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Naturalidade:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_naturalidade']; ?> - <?php echo $row_rs_ficha['ficha_naturalidadeuf']; ?></strong></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Escolaridade:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_escolaridade']; ?></strong></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Nome do Pai:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_pai']; ?></strong></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Nome da M&atilde;e:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_mae']; ?></strong></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">E-mail:</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_email']; ?></strong></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Telefone(s):</td>
        <td class="relsrv_info"><strong><?php echo $row_rs_ficha['ficha_fone1']; ?>&nbsp;&nbsp;<?php echo $row_rs_ficha['ficha_fone2']; ?></strong></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="24" bgcolor="#CCCCCC"><strong>DADOS DO C&Ocirc;NJUGUE</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="170" align="right" class="relsrv_info">Nome:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_conjnome']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">CPF, RG:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_conjcpf']; ?>, <?php echo $row_rs_ficha['ficha_conjrg']; ?> / <?php echo $row_rs_ficha['ficha_conjrgemissor']; ?> - <?php echo $row_rs_ficha['ficha_conjrguf']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Data nascimento:</td>
        <td class="relsrv_info"><?php echo date('d/m/Y',strtotime($row_rs_ficha['ficha_conjdtnasc'])); ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Ocupa&ccedil;&atilde;o:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_conjocupacao']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Empresa onde trabalha:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_conjemp']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Cargo ou Fun&ccedil;&atilde;o:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_conjempcargo']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Renda mensal:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_conjemprenda'],2,',','.'); ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Telefone:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_conjfone1']; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="24" bgcolor="#CCCCCC"><strong>DADOS RESIDENCIAIS</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="170" align="right" class="relsrv_info">Endere&ccedil;o:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_endlogradouro']; ?>, <?php echo $row_rs_ficha['ficha_endnumero']; ?>- <?php echo $row_rs_ficha['ficha_endbairro']; ?>, <?php echo $row_rs_ficha['ficha_endcidade']; ?> - <?php echo $row_rs_ficha['ficha_enduf']; ?>. <?php echo $row_rs_ficha['ficha_endcep']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Correspond&ecirc;ncia:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_endcorreio']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Tempo:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_endtempo']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Tipo:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_endtipo']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Telefone/Tipo:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_endfone1']; ?> / <?php echo $row_rs_ficha['ficha_endfone1sit']; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="24" bgcolor="#CCCCCC"><strong>DADOS PROFISSIONAIS E RENDIMENTOS</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="170" align="right" class="relsrv_info">Tipo de profissional:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_profocupacao']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Empresa:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_profemp']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">CNPJ:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_profcnpj']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Cargo / Fun&ccedil;&atilde;o:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_profcargo']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Admiss&atilde;o:</td>
        <td class="relsrv_info"><?php echo date('d/m/Y', strtotime($row_rs_ficha['ficha_profdtadmissao'])); ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Telefone empresa:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_proffone1']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Endere&ccedil;o:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_proflogradouro']; ?>, <?php echo $row_rs_ficha['ficha_profnumero']; ?> - <?php echo $row_rs_ficha['ficha_profbairro']; ?>, <?php echo $row_rs_ficha['ficha_profcidade']; ?> - <?php echo $row_rs_ficha['ficha_profuf']; ?></td>
      </tr>
      <tr bgcolor="#EFEFEF">
        <td align="right" class="relsrv_info">Renda mensal:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_profrendames'],2,',','.'); ?></td>
      </tr>
      <tr >
        <td align="right" class="relsrv_info">Renda do C&ocirc;njugue:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_profrendaconj'],2,',','.'); ?></td>
      </tr>
      <tr bgcolor="#EFEFEF" >
        <td align="right" class="relsrv_info">Renda de aluguel:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_profrendaaluguel'],2,',','.'); ?></td>
      </tr>
      <tr >
        <td align="right" class="relsrv_info">Outras rendas:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_profrendaoutra'],2,',','.'); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="24" bgcolor="#CCCCCC"><strong>REFER&Ecirc;NCIAS PESSOAIS E COMERCIAIS</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="170" align="right" class="relsrv_info">Nome / Telefone:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_refnome1']; ?>, <?php echo $row_rs_ficha['ficha_reffone1']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Nome / Telefone:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_refnome2']; ?>, <?php echo $row_rs_ficha['ficha_reffone2']; ?></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="relsrv_info">Cart&otilde;es:</td>
        <td class="relsrv_info"><table border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="50">Visa</td>
            <td width="50">Master</td>
            <td width="50">Amex</td>
            <td width="50">Dinners</td>
            <td width="50">Fininvest</td>
          </tr>
          <tr>
            <td><?php echo $row_rs_ficha['ficha_refvisa']; ?></td>
            <td><?php echo $row_rs_ficha['ficha_refmaster']; ?></td>
            <td><?php echo $row_rs_ficha['ficha_refamex']; ?></td>
            <td><?php echo $row_rs_ficha['ficha_refdinners']; ?></td>
            <td><?php echo $row_rs_ficha['ficha_reffininvest']; ?></td>
          </tr>
        </table></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Outros:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_refoutros']; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="24" bgcolor="#CCCCCC"><strong>REFER&Ecirc;NCIAS BANC&Aacute;RIAS E BENS PESSOAIS</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="170" align="right" class="relsrv_info">Banco:</td>
        <td class="relsrv_info">&nbsp;</td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Conta / Agencia:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_bancoconta']; ?> / <?php echo $row_rs_ficha['ficha_bancoagencia']; ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Telefone:</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_bancofone1']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Cliente desde:</td>
        <td class="relsrv_info"><?php echo date('d/m/Y',strtotime($row_rs_ficha['ficha_bancodesde'])); ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Possui imoveis?</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_bemimovel']; ?></td>
      </tr>
      <tr bgcolor="#efefef">
        <td align="right" class="relsrv_info">Valor atual:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_bemimovelvalor'],2,',','.'); ?></td>
      </tr>
      <tr>
        <td align="right" class="relsrv_info">Possui veiculos?</td>
        <td class="relsrv_info"><?php echo $row_rs_ficha['ficha_bemauto']; ?></td>
      </tr>
      <tr bgcolor="#EFEFEF">
        <td align="right" class="relsrv_info">Valor atual:</td>
        <td class="relsrv_info"><?php echo number_format($row_rs_ficha['ficha_bemautovalor'],2,',','.'); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_ficha);

mysql_free_result($rs_fichaheader);

mysql_free_result($rs_fones);
?>
