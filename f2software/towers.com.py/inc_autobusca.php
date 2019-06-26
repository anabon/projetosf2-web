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

$maxRows_rs_loopauto = 10;
$pageNum_rs_loopauto = 0;
if (isset($_GET['pageNum_rs_loopauto'])) {
  $pageNum_rs_loopauto = $_GET['pageNum_rs_loopauto'];
}
$startRow_rs_loopauto = $pageNum_rs_loopauto * $maxRows_rs_loopauto;

$modelo_rs_loopauto = "-1";
if (isset($_GET['txtbusca'])) {
  $modelo_rs_loopauto = $_GET['txtbusca'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_loopauto = sprintf("SELECT t1.auto_id, t1.auto_img, t1.auto_marca, t1.auto_modelo, t1.auto_cor, t1.auto_anofab, t1.auto_anomod, t1.auto_vlrsit, t1.auto_vlrvenda, t2.comb_img, t2.comb_nome FROM tb_auto AS t1 LEFT JOIN tb_comb AS t2 ON t2.comb_id = t1.auto_comb WHERE t1.auto_modelo LIKE %s ORDER BY t1.auto_modelo ASC, t1.auto_vlrvenda ASC", GetSQLValueString("%" . $modelo_rs_loopauto . "%", "text"));
$query_limit_rs_loopauto = sprintf("%s LIMIT %d, %d", $query_rs_loopauto, $startRow_rs_loopauto, $maxRows_rs_loopauto);
$rs_loopauto = mysql_query($query_limit_rs_loopauto, $dbsite) or die(mysql_error());
$row_rs_loopauto = mysql_fetch_assoc($rs_loopauto);

if (isset($_GET['totalRows_rs_loopauto'])) {
  $totalRows_rs_loopauto = $_GET['totalRows_rs_loopauto'];
} else {
  $all_rs_loopauto = mysql_query($query_rs_loopauto);
  $totalRows_rs_loopauto = mysql_num_rows($all_rs_loopauto);
}
$totalPages_rs_loopauto = ceil($totalRows_rs_loopauto/$maxRows_rs_loopauto)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="boby_titulo">HOME \ BUSCA - resultado da pesquisa por &quot;<?php echo $_GET['txtbusca']; ?>&quot;</td>
  </tr>
</table>
<?php if ($totalRows_rs_loopauto > 0) { // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:#999 1px solid;">
          <tr>
            <td width="100" height="25" bgcolor="#EFEFEF">&nbsp;</td>
            <td bgcolor="#EFEFEF"><strong>Informa&ccedil;&otilde;es do ve&iacute;culo:</strong></td>
            <td width="100" align="center" bgcolor="#EFEFEF"><strong>Ano Fab./Mod.</strong></td>
            <td width="100" align="center" bgcolor="#EFEFEF"><strong>Pre&ccedil;o:</strong></td>
          </tr>
        </table>
        <?php do { ?>
        <a href="index.php?pg=auto&amp;auto_id=<?php echo $row_rs_loopauto['auto_id']; ?>" class="lnk_loop">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:#CCC 1px dotted;" onmouseover="bgColor='#EFEFEF'" onmouseout="bgColor='#FFFFFF'">
            <tr>
              <td width="100" height="70" align="center" bgcolor="#FFFFFF"><img src="dados/auto/<?php echo $row_rs_loopauto['auto_img']; ?>" width="80" height="55" border="0" /></td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                  <tr>
                    <td class="loopauto_cor">C&oacute;d.: <?php echo $row_rs_loopauto['auto_id']; ?></td>
                  </tr>
                  <tr>
                    <td><span class="loopauto_marca"><?php echo $row_rs_loopauto['auto_marca']; ?></span> \ <span class="loopauto_modelo"><?php echo $row_rs_loopauto['auto_modelo']; ?></span></td>
                  </tr>
                  <tr>
                    <td><span class="loopauto_preco"><img src="imagens/<?php echo $row_rs_loopauto['comb_img']; ?>" border="0" title="<?php echo $row_rs_loopauto['comb_nome']; ?>" alt="" /></span></td>
                  </tr>
              </table></td>
              <td width="100" align="center" class="loopauto_preco"><?php echo $row_rs_loopauto['auto_anofab']; ?> - <?php echo $row_rs_loopauto['auto_anomod']; ?></td>
              <td width="100" align="right" class="loopauto_preco"><?php
	if ($row_rs_loopauto['auto_vlrsit']=="S")
      echo number_format($row_rs_loopauto['auto_vlrvenda'],2,',','.'); else
      echo "Consulte."; ?></td>
            </tr>
          </table>  </a>
          <?php } while ($row_rs_loopauto = mysql_fetch_assoc($rs_loopauto)); ?>
      
        <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top:#CCC 2px solid;">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset not empty ?>
<?php if ($totalRows_rs_loopauto == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="box_atencao">
        <tr>
          <td>Desculpe, nenhum resultado no momento.</td>
          </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rs_loopauto);
?>
