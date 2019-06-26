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
                GLOBAL $maxRows_rs_forn,$totalRows_rs_forn;
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
					if ($_get_name != "pageNum_rs_forn") {
						$_get_vars .= "&$_get_name=$_get_value";
					}
				}
			}
			$successivo = $pageNum_Recordset1+1;
			$precedente = $pageNum_Recordset1-1;
			$firstArray = ($pageNum_Recordset1 > 0) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_forn=$precedente$_get_vars\">$prev_Recordset1</a>" :  "$prev_Recordset1";
			# ----------------------
			# page numbers
			# ----------------------
			for($a = $fgp+1; $a <= $egp; $a++){
				$theNext = $a-1;
				if($show_page)
				{
					$textLink = $a;
				} else {
					$min_l = (($a-1)*$maxRows_rs_forn) + 1;
					$max_l = ($a*$maxRows_rs_forn >= $totalRows_rs_forn) ? $totalRows_rs_forn : ($a*$maxRows_rs_forn);
					$textLink = "$min_l - $max_l";
				}
				$_ss_k = floor($theNext/26);
				if ($theNext != $pageNum_Recordset1)
				{
					$pagesArray .= "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_forn=$theNext$_get_vars\">";
					$pagesArray .= "$textLink</a>" . ($theNext < $egp-1 ? $separator : "");
				} else {
					$pagesArray .= "$textLink"  . ($theNext < $egp-1 ? $separator : "");
				}
			}
			$theNext = $pageNum_Recordset1+1;
			$offset_end = $totalPages_Recordset1;
			$lastArray = ($pageNum_Recordset1 < $totalPages_Recordset1) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_forn=$successivo$_get_vars\">$next_Recordset1</a>" : "$next_Recordset1";
		}
	}
	return array($firstArray,$pagesArray,$lastArray);
}
?>
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
$query_rs_forn = "SELECT t1.forn_id, t1.forn_nome, t1.forn_fone1, t1.forn_fone2, t1.forn_sit FROM tb_forn AS t1 WHERE t1.forn_sitreg = 1 ORDER BY t1.forn_nome ASC";
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
<script src="js/jquery.js" type="text/javascript"></script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="forncad" />
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
    <td class="body_titulo2">PARTES / PROVEEDORES</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="60" height="35" bgcolor="#cccccc" class="registro_titulo-col">ID</td>
        <td bgcolor="#cccccc" class="registro_titulo-col">Nombre</td>
        <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Tel&eacute;fono 1:</td>
        <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Tel&eacute;fono  2:</td>
        <td width="80" align="center" bgcolor="#cccccc" class="registro_titulo-col">Situaci&oacute;n</td>
        <td width="100" bgcolor="#cccccc">&nbsp;</td>
      </tr>
    </table>
      <?php do { ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
          <tr>
            <td width="60" height="35"><?php echo $row_rs_forn['forn_id']; ?></td>
            <td><?php echo $row_rs_forn['forn_nome']; ?></td>
            <td width="100" align="center"><?php echo $row_rs_forn['forn_fone1']; ?></td>
            <td width="100" align="center"><?php echo $row_rs_forn['forn_fone2']; ?></td>
            <td width="80" align="center"><?php echo $row_rs_forn['forn_sit']; ?></td>
            <td width="100"><table border="0" align="right" cellpadding="4" cellspacing="0">
              <tr>
                <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                  <input name="pg" type="hidden" id="pg" value="fornedit" />
                  <input type="submit" class="registro_btedit" value="editar" />
                  <input name="forn_id" type="hidden" id="forn_id" value="<?php echo $row_rs_forn['forn_id']; ?>" />
                </form></td>
                </tr>
            </table></td>
          </tr>
        </table>
        <?php } while ($row_rs_forn = mysql_fetch_assoc($rs_forn)); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td><?php 
# variable declaration
$prev_rs_forn = "« anterior";
$next_rs_forn = "proximo »";
$separator = " | ";
$max_links = 5;
$pages_navigation_rs_forn = buildNavigation($pageNum_rs_forn,$totalPages_rs_forn,$prev_rs_forn,$next_rs_forn,$separator,$max_links,true); 

print $pages_navigation_rs_forn[0]; 
?>
          <?php print $pages_navigation_rs_forn[1]; ?> <?php print $pages_navigation_rs_forn[2]; ?>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">&nbsp;<?php echo $totalRows_rs_forn ?> registro(s).</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_forn);
?>
