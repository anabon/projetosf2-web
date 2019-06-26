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
                GLOBAL $maxRows_rs_auto,$totalRows_rs_auto;
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
					if ($_get_name != "pageNum_rs_auto") {
						$_get_vars .= "&$_get_name=$_get_value";
					}
				}
			}
			$successivo = $pageNum_Recordset1+1;
			$precedente = $pageNum_Recordset1-1;
			$firstArray = ($pageNum_Recordset1 > 0) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_auto=$precedente$_get_vars\">$prev_Recordset1</a>" :  "$prev_Recordset1";
			# ----------------------
			# page numbers
			# ----------------------
			for($a = $fgp+1; $a <= $egp; $a++){
				$theNext = $a-1;
				if($show_page)
				{
					$textLink = $a;
				} else {
					$min_l = (($a-1)*$maxRows_rs_auto) + 1;
					$max_l = ($a*$maxRows_rs_auto >= $totalRows_rs_auto) ? $totalRows_rs_auto : ($a*$maxRows_rs_auto);
					$textLink = "$min_l - $max_l";
				}
				$_ss_k = floor($theNext/26);
				if ($theNext != $pageNum_Recordset1)
				{
					$pagesArray .= "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_auto=$theNext$_get_vars\">";
					$pagesArray .= "$textLink</a>" . ($theNext < $egp-1 ? $separator : "");
				} else {
					$pagesArray .= "$textLink"  . ($theNext < $egp-1 ? $separator : "");
				}
			}
			$theNext = $pageNum_Recordset1+1;
			$offset_end = $totalPages_Recordset1;
			$lastArray = ($pageNum_Recordset1 < $totalPages_Recordset1) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_auto=$successivo$_get_vars\">$next_Recordset1</a>" : "$next_Recordset1";
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

$maxRows_rs_auto = 10;
$pageNum_rs_auto = 0;
if (isset($_GET['pageNum_rs_auto'])) {
  $pageNum_rs_auto = $_GET['pageNum_rs_auto'];
}
$startRow_rs_auto = $pageNum_rs_auto * $maxRows_rs_auto;

$modelo_rs_auto = "-1";
if (isset($_GET['txtbusca'])) {
  $modelo_rs_auto = $_GET['txtbusca'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_auto = sprintf("SELECT t1.auto_id, t1.auto_img, t1.auto_placa, t1.auto_nome, t1.auto_modelo, t2.comb_nome, t1.auto_vlrvenda, t1.auto_vlrfipe, t1.auto_sit FROM tb_auto AS t1 LEFT JOIN tb_comb AS t2 ON t2.comb_id = t1.auto_comb WHERE t1.auto_sitreg = 1 AND t1.auto_modelo LIKE %s ORDER BY t1.auto_dtcad DESC", GetSQLValueString("%" . $modelo_rs_auto . "%", "text"));
$query_limit_rs_auto = sprintf("%s LIMIT %d, %d", $query_rs_auto, $startRow_rs_auto, $maxRows_rs_auto);
$rs_auto = mysql_query($query_limit_rs_auto, $dbsite) or die(mysql_error());
$row_rs_auto = mysql_fetch_assoc($rs_auto);

if (isset($_GET['totalRows_rs_auto'])) {
  $totalRows_rs_auto = $_GET['totalRows_rs_auto'];
} else {
  $all_rs_auto = mysql_query($query_rs_auto);
  $totalRows_rs_auto = mysql_num_rows($all_rs_auto);
}
$totalPages_rs_auto = ceil($totalRows_rs_auto/$maxRows_rs_auto)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="cadastro" />
      <input name="pg" type="hidden" id="pg" value="autocad" />
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
    <td class="body_titulo2">VE&Iacute;CULOS BUSCA</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="autobusca" />
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20" title="Corsa, Gol,..." /></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autobusca']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_autobusca']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="60" height="35" bgcolor="#cccccc" class="registro_titulo-col">ID</td>
          <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Foto</td>
          <td width="80" bgcolor="#cccccc" class="registro_titulo-col">Placa</td>
          <td bgcolor="#cccccc" class="registro_titulo-col">Modelo</td>
          <td width="100" align="center" bgcolor="#cccccc" class="registro_titulo-col">Valor R$</td>
          <td width="100" align="center" bgcolor="#cccccc" class="registro_titulo-col">Situa&ccedil;&atilde;o</td>
          <td width="150" bgcolor="#cccccc">&nbsp;</td>
        </tr>
      </table>
        <?php if ($totalRows_rs_auto == 0) { // Show if recordset empty ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="10">
            <tr>
              <td class="sem_permissao">Nenhum registro.</td>
            </tr>
          </table>
          <?php } // Show if recordset empty ?>
        <?php if ($totalRows_rs_auto > 0) { // Show if recordset not empty ?>
  <?php do { ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
      <tr>
        <td width="60" height="35"><?php echo $row_rs_auto['auto_id']; ?></td>
        <td width="100"><img src="../dados/auto/<?php echo $row_rs_auto['auto_img']; ?>" width="90" height="70" /></td>
        <td width="80"><?php echo $row_rs_auto['auto_placa']; ?></td>
        <td><?php echo $row_rs_auto['auto_modelo']; ?></td>
        <td width="100" align="right"><?php echo number_format($row_rs_auto['auto_vlrvenda'],2,',','.'); ?></td>
        <td width="100" align="center"><?php echo $row_rs_auto['auto_sit']; ?></td>
        <td width="150"><table border="0" align="right" cellpadding="4" cellspacing="0">
          <tr>
            <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
              <input name="pg" type="hidden" id="pg" value="autoedit" />
              <input type="submit" class="registro_btedit" value="editar" />
              <input name="auto_id" type="hidden" id="auto_id" value="<?php echo $row_rs_auto['auto_id']; ?>" />
            </form></td>
            </tr>
          </table></td>
        </tr>
    </table>
    <?php } while ($row_rs_auto = mysql_fetch_assoc($rs_auto)); ?>
          <?php } // Show if recordset not empty ?>
<table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top:#CCC 2px solid;">
            <tr>
              <td><?php 
# variable declaration
$prev_rs_auto = '« anterior(es)';
$next_rs_auto = 'proximo(s) »';
$separator = ' | ';
$max_links = 5;
$pages_navigation_rs_auto = buildNavigation($pageNum_rs_auto,$totalPages_rs_auto,$prev_rs_auto,$next_rs_auto,$separator,$max_links,false); 

print $pages_navigation_rs_auto[0]; 
?>
              <?php print $pages_navigation_rs_auto[1]; ?> <?php print $pages_navigation_rs_auto[2]; ?></td>
              <td>P&aacute;g.: <?php echo ($pageNum_rs_auto + 1) ?> de <?php echo ($totalPages_rs_auto + 1) ?></td>
              <td align="right"><?php echo $totalRows_rs_auto ?> &nbsp; registros.</td>
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

mysql_free_result($rs_auto);
?>
