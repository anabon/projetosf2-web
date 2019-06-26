<?php require_once('Connections/dbsite.php'); ?>
<?php require_once('Connections/dbsite.php'); ?>
<?php require_once('Connections/dbsite.php'); ?>
<?php

// Exigir as classes do MXI
require_once ('includes/mxi/MXI.php');

// Tornar a variável de conexão unificada
$conn_dbsite = new KT_connection($dbsite, $database_dbsite);

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

// Incluir várias páginas dinâmicas
$mxiObj = new MXI_Includes("pg");
$mxiObj->IncludeDynamic($conn_dbsite, "tb_inc", "inc_urlvalue", "inc_filename", "inc_pagetitle", "inc_metakey", "inc_metadesc");

$maxRows_rs_headerfone = 4;
$pageNum_rs_headerfone = 0;
if (isset($_GET['pageNum_rs_headerfone'])) {
  $pageNum_rs_headerfone = $_GET['pageNum_rs_headerfone'];
}
$startRow_rs_headerfone = $pageNum_rs_headerfone * $maxRows_rs_headerfone;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_headerfone = "SELECT t1.fone_nome, t1.fone_num FROM tb_fone AS t1 WHERE t1.fone_sit = 'Ativo' AND t1.fone_tipo = 'SITE' ORDER BY t1.fone_ordem ASC";
$query_limit_rs_headerfone = sprintf("%s LIMIT %d, %d", $query_rs_headerfone, $startRow_rs_headerfone, $maxRows_rs_headerfone);
$rs_headerfone = mysql_query($query_limit_rs_headerfone, $dbsite) or die(mysql_error());
$row_rs_headerfone = mysql_fetch_assoc($rs_headerfone);

if (isset($_GET['totalRows_rs_headerfone'])) {
  $totalRows_rs_headerfone = $_GET['totalRows_rs_headerfone'];
} else {
  $all_rs_headerfone = mysql_query($query_rs_headerfone);
  $totalRows_rs_headerfone = mysql_num_rows($all_rs_headerfone);
}
$totalPages_rs_headerfone = ceil($totalRows_rs_headerfone/$maxRows_rs_headerfone)-1;

$maxRows_rs_headerrsocial = 4;
$pageNum_rs_headerrsocial = 0;
if (isset($_GET['pageNum_rs_headerrsocial'])) {
  $pageNum_rs_headerrsocial = $_GET['pageNum_rs_headerrsocial'];
}
$startRow_rs_headerrsocial = $pageNum_rs_headerrsocial * $maxRows_rs_headerrsocial;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_headerrsocial = "SELECT t1.rsocial_nome, t1.rsocial_url, t1.rsocial_img FROM tb_rsocial AS t1 WHERE t1.rsocial_sit = 'Ativo' ORDER BY t1.rsocial_ordem ASC";
$query_limit_rs_headerrsocial = sprintf("%s LIMIT %d, %d", $query_rs_headerrsocial, $startRow_rs_headerrsocial, $maxRows_rs_headerrsocial);
$rs_headerrsocial = mysql_query($query_limit_rs_headerrsocial, $dbsite) or die(mysql_error());
$row_rs_headerrsocial = mysql_fetch_assoc($rs_headerrsocial);

if (isset($_GET['totalRows_rs_headerrsocial'])) {
  $totalRows_rs_headerrsocial = $_GET['totalRows_rs_headerrsocial'];
} else {
  $all_rs_headerrsocial = mysql_query($query_rs_headerrsocial);
  $totalRows_rs_headerrsocial = mysql_num_rows($all_rs_headerrsocial);
}
$totalPages_rs_headerrsocial = ceil($totalRows_rs_headerrsocial/$maxRows_rs_headerrsocial)-1;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_footerinfo = "SELECT t1.config_nome, t1.config_endereco1, t1.config_endereco2 FROM tb_config AS t1";
$rs_footerinfo = mysql_query($query_rs_footerinfo, $dbsite) or die(mysql_error());
$row_rs_footerinfo = mysql_fetch_assoc($rs_footerinfo);
$totalRows_rs_footerinfo = mysql_num_rows($rs_footerinfo);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_menuinfo = "SELECT t1.info_id, t1.info_titulomenu FROM tb_info AS t1 WHERE t1.info_sit = 'Ativo' ORDER BY t1.info_ordem ASC";
$rs_menuinfo = mysql_query($query_rs_menuinfo, $dbsite) or die(mysql_error());
$row_rs_menuinfo = mysql_fetch_assoc($rs_menuinfo);
$totalRows_rs_menuinfo = mysql_num_rows($rs_menuinfo);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_recentes = "SELECT t1.auto_id, t1.auto_img, t1.auto_marca, SUBSTRING_INDEX(t1.auto_modelo, ' ', 1) AS auto_modelo, t1.auto_vlrsit, t1.auto_vlrvenda, t1.auto_anofab, t1.auto_anomod FROM tb_auto AS t1 WHERE t1.auto_sit = 'Ativo' ORDER BY t1.auto_dtcad DESC LIMIT 4";
$rs_recentes = mysql_query($query_rs_recentes, $dbsite) or die(mysql_error());
$row_rs_recentes = mysql_fetch_assoc($rs_recentes);
$totalRows_rs_recentes = mysql_num_rows($rs_recentes);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_indexvideo = "SELECT t1.video_id, t1.video_img FROM tb_video AS t1 WHERE t1.video_sit = 'Ativo' ORDER BY t1.video_id DESC LIMIT 1";
$rs_indexvideo = mysql_query($query_rs_indexvideo, $dbsite) or die(mysql_error());
$row_rs_indexvideo = mysql_fetch_assoc($rs_indexvideo);
$totalRows_rs_indexvideo = mysql_num_rows($rs_indexvideo);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $row_rs_footerinfo['config_nome']; ?> - <?php echo $mxiObj->getTitle(); ?></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.hint.js"></script>
<script type="text/javascript" charset="iso-8859-1">
	$(function(){ 
	    // encontre todos os elementos de entrada com atributos de título
		$('input[title!=""]').hint();
	});
</script>
<meta name="keywords" content="<?php echo $mxiObj->getKeywords(); ?>" />
<meta name="description" content="<?php echo $mxiObj->getDescription(); ?>" />
<base href="<?php echo mxi_getBaseURL(); ?>" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" style="background:url(imagens/pg_bg-x-top.jpg) repeat-x top center;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="219" valign="top" style="background: url(imagens/header_theme-center.jpg) no-repeat top center;"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="170" align="center"><a href="#"><img src="imagens/logo.png" width="490" height="121" border="0" /></a></td>
          </tr>
		  
          <tr>
            <td height="48"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="25%" align="center"><a href="./" class="lnk_menu-sup">HOME</a></td>
                <td width="25%" align="center"><a href="index.php?pg=estoque" class="lnk_menu-sup">STOCK</a></td>
                <td width="25%" align="center"><a href="index.php?pg=ficha" class="lnk_menu-sup">FINANZAS</a></td>
                <td width="25%" align="center"><a href="index.php?pg=contato" class="lnk_menu-sup">CONTACTO</a></td>
				<td width="25%" align="center"><a href="http://www.f2software.com.br/towers.com.py/admin/" class="lnk_menu-sup">ADMINISTRACION</a></td>
              </tr>
            </table></td>
          </tr>
          </table></td>
      </tr>
	  <tr>
	  
	  </tr>
	  

      <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
		       
          <td width="360" height="52" style="background:url(imagens/header_busca-bg.jpg) no-repeat left;">
          <form id="frmBusca" name="frmBusca" method="get" action="index.php" style="margin:0px;">
            <table width="255" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr align="right">
                <td><img src="imagens/header_busca-left.png" width="10" height="30" /></td>
                <td align="left" style="background:url(imagens/header_busca-bg-x.png) repeat-x;"><input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20" title="escriba el modelo ..." />
                  <input name="pg" type="hidden" id="pg" value="autobusca" /></td>
                <td width="30" align="left"><input type="submit" class="frmBusca_submit" value=" " /></td>
                <td width="20" align="left">&nbsp;</td>
              </tr>
			  
            </table>
			
          </form></td>
          <td ><table border="0" cellpadding="0" cellspacing="0"  >
            <tr>
              <?php
  do { // horizontal looper version 3
?>
                <td width="120" height="50" style="background:url(imagens/header_fone-bg-left.jpg) repeat-x top left;"><table width="105" border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="16" valign="top" class="header-fone-nome">&nbsp;&nbsp;<?php echo strtoupper($row_rs_headerfone['fone_nome']); ?></td>
                  </tr>
                  <tr>
                    <td align="center" class="header-fone-numero"><?php echo $row_rs_headerfone['fone_num']; ?></td>
                  </tr>
                </table></td>
                <?php
    $row_rs_headerfone = mysql_fetch_assoc($rs_headerfone);
    if (!isset($nested_rs_headerfone)) {
      $nested_rs_headerfone= 1;
    }
    if (isset($row_rs_headerfone) && is_array($row_rs_headerfone) && $nested_rs_headerfone++ % 4==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_headerfone); //end horizontal looper version 3
?>
            </tr>
          </table></td>
          <td align="right"><table width="50" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <?php
  do { // horizontal looper version 3
?>
                <td align="right"><table width="100%" height="50" border="0" cellpadding="5" cellspacing="0"  style="background:url(imagens/header_rsocial-bg-right.jpg) no-repeat top right;" >
                  <tr>
                    <td align="center"><a href="<?php echo $row_rs_headerrsocial['rsocial_url']; ?>" target="_blank"><img src="dados/<?php echo $row_rs_headerrsocial['rsocial_img']; ?>" width="30" height="30" border="0" alt="" title="<?php echo $row_rs_headerrsocial['rsocial_nome']; ?>" /></a></td>
                    </tr>
                  </table></td>
                <?php
    $row_rs_headerrsocial = mysql_fetch_assoc($rs_headerrsocial);
    if (!isset($nested_rs_headerrsocial)) {
      $nested_rs_headerrsocial= 1;
    }
    if (isset($row_rs_headerrsocial) && is_array($row_rs_headerrsocial) && $nested_rs_headerrsocial++ % 4==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_headerrsocial); //end horizontal looper version 3
?>
              </tr>
          </table>          </td>
        </tr>
    </table>
      <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center" >
        <tr>
          <td height="400" valign="top" style="background:url(imagens/body-bg-center-top.jpg) no-repeat top center;"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20">&nbsp;</td>
              <td height="400" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="240" valign="top"><table width="230" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td height="60" valign="top"><?php do { ?>
                       <table width="100%" border="0" cellpadding="0" cellspacing="0" class="menu-info" style="border-bottom:#FFF 1px solid;">
                          <tr>
                            <td height="28" ><a href="index.php?pg=info&amp;info_id=<?php echo $row_rs_menuinfo['info_id']; ?>" class="lnk_menu-left" ><?php echo strtoupper($row_rs_menuinfo['info_titulomenu']); ?></a></td>
                            </tr>
                          </table>
                          
                        <?php } while ($row_rs_menuinfo = mysql_fetch_assoc($rs_menuinfo)); ?>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="menu-info" style="border-bottom:#FFF 1px solid;">
                          <tr>
                            <td height="28" ><a href="index.php?pg=detran" class="lnk_menu-left" >DINATRAN</a></td>
                          </tr>
                        </table>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="menu-info" style="border-bottom:#FFF 1px solid;">
                          <tr>
                            <td height="28" ><a href="http://www.fipe.com.br/web/indices/ipr/index.aspx" class="lnk_menu-left" target="_blank" >TABELA FIPE </a></td>
                          </tr>
                        </table>
                        <br /></td>
                      </tr>
                    </table>
					
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:#CCC 1px dotted; border-top:#CCC 1px dotted;">
                      <tr>
                        <td width="20" align="center"><img src="imagens/icone-fotos.png" width="16" height="16" /></td>
                        <td height="35"><a href="index.php?pg=fotos" class="lnk_menu-icone">FOTOS</a></td>
                        <td width="20" align="center"><img src="imagens/icone-videos.png" width="16" height="16" /></td>
                        <td><a href="index.php?pg=videos" class="lnk_menu-icone">V&Iacute;DEOS</a></td>
                        <td width="20" align="center"><img src="imagens/icone-news.png" width="16" height="16" /></td>
                        <td><a href="index.php?pg=noticias" class="lnk_menu-icone">NOT&Iacute;CIAS</a></td>
                      </tr>
                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td class="boby_titulo">MÁS RECIENTE:</td>
                      </tr>
                    </table>
                    <?php do { ?>
                      <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:#CCC 1px dotted;" onmouseover="bgColor='#EFEFEF'"  onmouseout="bgColor='#FFFFFF'">
                        <tr>
                          <td width="120" height="90" align="center"><table width="100" border="0" cellspacing="0" cellpadding="5" style="border:#ccc 1px solid;">
                            <tr>
                              <td align="center" bgcolor="#FFFFFF"><a href="index.php?pg=auto&amp;auto_id=<?php echo $row_rs_recentes['auto_id']; ?>"><img src="dados/auto/<?php echo $row_rs_recentes['auto_img']; ?>" width="107" height="80" border="0" /></a></td>
                              </tr>
                            </table></td>
                          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="loopauto_marca"><?php echo $row_rs_recentes['auto_marca']; ?></td>
                              </tr>
                            <tr>
                              <td class="loopauto_modelo"><?php echo $row_rs_recentes['auto_modelo']; ?></td>
                              </tr>
                            <tr>
                              <td class="loopauto_ano"><?php echo $row_rs_recentes['auto_anofab']; ?> - <?php echo $row_rs_recentes['auto_anomod']; ?></td>
                              </tr>
                            </table>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="30" valign="bottom" class="loopauto_preco">R$ <?php echo number_format($row_rs_recentes['auto_vlrvenda'],2,',','.'); ?></td>
                                </tr>
                              </table></td>
                          </tr>
                      </table>

                      <?php } while ($row_rs_recentes = mysql_fetch_assoc($rs_recentes)); ?>
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
                        <tr>
                          <td><span class="boby_titulo">V&Iacute;DEOS:</span></td>
                        </tr>
                        <tr>
                          <td><iframe width="240" height="160" src="http://www.youtube.com/embed/<?php echo $row_rs_indexvideo['video_img']; ?>?rel=0" frameborder="0" allowfullscreen></iframe></td>
                        </tr>
                        <tr>
                          <td><a href="index.php?pg=videos">Haga clic aquí para otros.</a></td>
                        </tr>
                      </table>
					  </td>
					<table style="text-align: left; width: 28%;" border="0"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr align="center">
      <td>
	   <!--INICIO COTAÇÃO DOLAR  -->
<!--Currency Converter widget by FreeCurrencyRates.com -->

<div id='gcw_mainFUR4wFNB1' class='gcw_mainFUR4wFNB1' align = "left"></div>
<a id='gcw_siteFUR4wFNB1' 
href='https://f2software.com.br'>F2 Software</a>
<script>function reloadFUR4wFNB1(){ var sc = document.getElementById('scFUR4wFNB1');
if (sc) sc.parentNode.removeChild(sc);
sc = document.createElement('script');
sc.type = 'text/javascript';sc.charset = 'UTF-8';
sc.async = true;
sc.id='scFUR4wFNB1';
sc.src = 'https://freecurrencyrates.com/es/widget-vertical?iso=USDEURPYGBRL&df=2&p=FUR4wFNB1&v=fit&source=fcr&width=200&width_title=0&firstrowvalue=1&thm=eeeeee,ffffff,E3A1A1,CC0000,FFFFFF,eeeeee,ffffff,CC0000,000000&title=Convertidor%20de%20Moneda&tzo=180';
var div = document.getElementById('gcw_mainFUR4wFNB1');
div.parentNode.insertBefore(sc, div);
} reloadFUR4wFNB1(); 
</script>
</div>
<!-- put custom styles here: .gcw_mainFUR4wFNB1{}, .gcw_headerFUR4wFNB1{}, .gcw_ratesFUR4wFNB1{}, .gcw_sourceFUR4wFNB1{} -->
<!--End of Currency Converter widget by FreeCurrencyRates.com -->
<!-- put custom styles here: .gcw_mainFUR4wFNB1{}, .gcw_headerFUR4wFNB1{}, .gcw_ratesFUR4wFNB1{}, .gcw_sourceFUR4wFNB1{} -->
<!--End of Currency Converter widget by FreeCurrencyRates.com -->
	  </td>
    </tr>
    <td>
	<tr align="center">
	<iframe src="https://www.agron.com.br/widget/cotacao.php" width="250px;" height="280px;" scrolling="no" frameborder="0"></iframe> 
	</td>
	</tr>
   
  </tbody>
</table>

  
					  
                  <td width="10" align="left"><br />
                    <img src="imagens/body_shadow-left.jpg" width="12" height="355" /></td>
                  <td valign="top"><?php
  $incFileName = $mxiObj->getCurrentInclude();
  if ($incFileName !== null)  {
    mxi_includes_start($incFileName);
    require(basename($incFileName)); // require the page content
    mxi_includes_end();
}
?></td>
                  </tr>
              </table></td>
              <td width="20">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background:url(imagens/footer_theme-bg-x.jpg) repeat-x bottom;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="180" valign="top" style="background:url(imagens/footer_theme-center.jpg) no-repeat bottom center;"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="26">&nbsp;</td>
          </tr>
        </table>
          <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="250" height="100"><img src="imagens/footer_logo.png" width="226" height="97" /></td>
            <td valign="bottom"><table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="120" align="center"><a href="./" class="lnk_menu-sup">HOME</a></td>
                <td width="120" align="center"><a href="index.php?pg=estoque" class="lnk_menu-sup">STOCK</a></td>
                <td width="120" align="center"><a href="index.php?pg=ficha" class="lnk_menu-sup">FINANZAS</a></td>
                <td width="120" align="center"><a href="index.php?pg=contato" class="lnk_menu-sup">CONTACTO</a></td>
                <td width="230" align="center">&nbsp;</td>
                </tr>
              <tr>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="left"><table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <td width="500"><span class="footer_nome"><br />
                    <?php echo $row_rs_footerinfo['config_nome']; ?></span><br />
                    <span class="footer_endereco"><?php echo $row_rs_footerinfo['config_endereco1']; ?> - <?php echo $row_rs_footerinfo['config_endereco2']; ?></span></td>
                <td><img src="imagens/footer-developer.png" width="50" height="42" /></td>
                </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_headerfone);

mysql_free_result($rs_headerrsocial);

mysql_free_result($rs_footerinfo);

mysql_free_result($rs_menuinfo);

mysql_free_result($rs_recentes);

mysql_free_result($rs_indexvideo);
?>
