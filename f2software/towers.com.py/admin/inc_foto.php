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
                GLOBAL $maxRows_rs_foto,$totalRows_rs_foto;
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
					if ($_get_name != "pageNum_rs_foto") {
						$_get_vars .= "&$_get_name=$_get_value";
					}
				}
			}
			$successivo = $pageNum_Recordset1+1;
			$precedente = $pageNum_Recordset1-1;
			$firstArray = ($pageNum_Recordset1 > 0) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_foto=$precedente$_get_vars\">$prev_Recordset1</a>" :  "$prev_Recordset1";
			# ----------------------
			# page numbers
			# ----------------------
			for($a = $fgp+1; $a <= $egp; $a++){
				$theNext = $a-1;
				if($show_page)
				{
					$textLink = $a;
				} else {
					$min_l = (($a-1)*$maxRows_rs_foto) + 1;
					$max_l = ($a*$maxRows_rs_foto >= $totalRows_rs_foto) ? $totalRows_rs_foto : ($a*$maxRows_rs_foto);
					$textLink = "$min_l - $max_l";
				}
				$_ss_k = floor($theNext/26);
				if ($theNext != $pageNum_Recordset1)
				{
					$pagesArray .= "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_foto=$theNext$_get_vars\">";
					$pagesArray .= "$textLink</a>" . ($theNext < $egp-1 ? $separator : "");
				} else {
					$pagesArray .= "$textLink"  . ($theNext < $egp-1 ? $separator : "");
				}
			}
			$theNext = $pageNum_Recordset1+1;
			$offset_end = $totalPages_Recordset1;
			$lastArray = ($pageNum_Recordset1 < $totalPages_Recordset1) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_rs_foto=$successivo$_get_vars\">$next_Recordset1</a>" : "$next_Recordset1";
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

$maxRows_rs_foto = 10;
$pageNum_rs_foto = 0;
if (isset($_GET['pageNum_rs_foto'])) {
  $pageNum_rs_foto = $_GET['pageNum_rs_foto'];
}
$startRow_rs_foto = $pageNum_rs_foto * $maxRows_rs_foto;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_foto = "SELECT t1.foto_id, t1.foto_img, t1.foto_nome, t1.foto_desc, t1.foto_sit FROM tb_foto AS t1 WHERE t1.foto_sit = 'Ativo' ORDER BY t1.foto_ordem ASC, t1.foto_dtsys DESC";
$query_limit_rs_foto = sprintf("%s LIMIT %d, %d", $query_rs_foto, $startRow_rs_foto, $maxRows_rs_foto);
$rs_foto = mysql_query($query_limit_rs_foto, $dbsite) or die(mysql_error());
$row_rs_foto = mysql_fetch_assoc($rs_foto);

if (isset($_GET['totalRows_rs_foto'])) {
  $totalRows_rs_foto = $_GET['totalRows_rs_foto'];
} else {
  $all_rs_foto = mysql_query($query_rs_foto);
  $totalRows_rs_foto = mysql_num_rows($all_rs_foto);
}
$totalPages_rs_foto = ceil($totalRows_rs_foto/$maxRows_rs_foto)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js" ></script> <!-- PLUGIN JQUERY-->
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
		$('input[title!=""]').hint();
		$("#txtbusca").focus();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="fotocad" />
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
    <td class="body_titulo2">REGISTRO DE FOTOS</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="fotobusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php if ($totalRows_rs_foto == 0) { // Show if recordset empty ?>
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
  <?php if ($totalRows_rs_foto > 0) { // Show if recordset not empty ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="60" height="35" bgcolor="#cccccc" class="registro_titulo-col">ID</td>
              <td width="100" bgcolor="#cccccc" class="registro_titulo-col">Foto</td>
              <td bgcolor="#cccccc" class="registro_titulo-col">Nombre</td>
              <td width="100" align="center" bgcolor="#cccccc" class="registro_titulo-col">Situaci&oacute;n</td>
              <td width="100" bgcolor="#cccccc">&nbsp;</td>
            </tr>
          </table>
            <?php do { ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="2" style="border-bottom:#CCC 1px dotted;" onMouseOver="bgColor='#EFEFEF'" onMouseOut="bgColor='#FFFFFF'">
                <tr>
                  <td width="60" height="35"><?php echo $row_rs_foto['foto_id']; ?></td>
                  <td width="100"><img src="../dados/fotos/<?php echo $row_rs_foto['foto_img']; ?>" width="80" height="60" /></td>
                  <td><strong><?php echo $row_rs_foto['foto_nome']; ?></strong><br />
                    <?php echo $row_rs_foto['foto_desc']; ?></td>
                  <td width="100" align="center"><?php echo $row_rs_foto['foto_sit']; ?></td>
                  <td width="100"><table border="0" align="right" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="50"><form id="frmbt_edit" name="frmbt_edit" method="get" action="painel.php">
                        <input name="pg" type="hidden" id="pg" value="fotoedit" />
                        <input type="submit" class="registro_btedit" value="editar" />
                        <input name="foto_id" type="hidden" id="foto_id" value="<?php echo $row_rs_foto['foto_id']; ?>" />
                      </form></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              <?php } while ($row_rs_foto = mysql_fetch_assoc($rs_foto)); ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-top: #CCC 2px solid;">
              <tr>
                <td>&nbsp;
                  <?php 
# variable declaration
$prev_rs_foto = "« anterior";
$next_rs_foto = "proximo »";
$separator = " | ";
$max_links = 5;
$pages_navigation_rs_foto = buildNavigation($pageNum_rs_foto,$totalPages_rs_foto,$prev_rs_foto,$next_rs_foto,$separator,$max_links,false); 

print $pages_navigation_rs_foto[0]; 
?>
                  <?php print $pages_navigation_rs_foto[1]; ?> <?php print $pages_navigation_rs_foto[2]; ?></td>
                <td>&nbsp;</td>
                <td align="right">&nbsp;<?php echo $totalRows_rs_foto ?> registro(s).</td>
              </tr>
            </table></td>
        </tr>
      </table>
<?php } // Show if recordset not empty ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_foto);
?>
