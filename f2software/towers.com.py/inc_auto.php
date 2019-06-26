<?php require_once('Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
// Load the tNG classes
require_once('includes/tng/tNG.inc.php');
?>
<?php require_once('Connections/dbsite.php'); ?>
<?php require_once('Connections/dbsite.php'); ?>
<?php require_once('Connections/dbsite.php'); ?>
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

$auto_rs_loopauto = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_loopauto = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_loopauto = sprintf("SELECT t1.auto_id, t1.auto_img, t1.auto_nome, t1.auto_marca, t1.auto_modelo, t1.auto_cor, t1.auto_anofab, t1.auto_anomod, t1.auto_km, RIGHT(t1.auto_placa,1) AS auto_placafinal, t1.auto_portas, t1.auto_vlrsit, t1.auto_vlrvenda, t2.comb_img, t2.comb_nome, t1.auto_opc FROM tb_auto AS t1 LEFT JOIN tb_comb AS t2 ON t2.comb_id = t1.auto_comb WHERE t1.auto_sitreg = 1 AND t1.auto_sit = 'Ativo' AND t1.auto_id = %s", GetSQLValueString($auto_rs_loopauto, "int"));
$rs_loopauto = mysql_query($query_rs_loopauto, $dbsite) or die(mysql_error());
$row_rs_loopauto = mysql_fetch_assoc($rs_loopauto);
$totalRows_rs_loopauto = mysql_num_rows($rs_loopauto);

$auto_rs_imglist = "-1";
if (isset($_GET['auto_id'])) {
  $auto_rs_imglist = $_GET['auto_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_imglist = sprintf("SELECT t1.autoimg_img FROM tb_autoimg AS t1 WHERE t1.autoimg_auto = %s ORDER BY t1.autoimg_ordem ASC", GetSQLValueString($auto_rs_imglist, "int"));
$rs_imglist = mysql_query($query_rs_imglist, $dbsite) or die(mysql_error());
$row_rs_imglist = mysql_fetch_assoc($rs_imglist);
$totalRows_rs_imglist = mysql_num_rows($rs_imglist);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_configauto = "SELECT t1.config_marcadagua, t1.config_email FROM tb_config AS t1";
$rs_configauto = mysql_query($query_rs_configauto, $dbsite) or die(mysql_error());
$row_rs_configauto = mysql_fetch_assoc($rs_configauto);
$totalRows_rs_configauto = mysql_num_rows($rs_configauto);

// Show Dynamic Thumbnail
$objDynamicThumb1 = new tNG_DynamicThumbnail("", "KT_thumbnail1");
$objDynamicThumb1->setFolder("dados/auto/");
$objDynamicThumb1->setRenameRule("{rs_imglist.autoimg_img}");
$objDynamicThumb1->setResize(300, 230, false);
$objDynamicThumb1->setWatermark(true);
$objDynamicThumb1->setWatermarkAlpha(50);
$objDynamicThumb1->setWatermarkImage("dados/marcadagua.png");
$objDynamicThumb1->setWatermarkAlignment("bottom", "right");
$objDynamicThumb1->setWatermarkResize("none");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<link href="js/cloud-zoom.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script><!-- COLOCAR EM CAIXA ALTA, UPPERCASE-->
<script type="text/JavaScript" src="js/cloud-zoom.1.0.2.js"></script>
<!-- Script de envio da proposta por ajax -->
<script type="text/javascript" src="mail_ajax.js"></script>
<link rel="stylesheet" type="text/css" href="mail_style.css" />
<!-- FIm Script de envio da proposta por ajax -->
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><a href="index.php?pg=auto?auto_id=<?php echo $row_rs_loopauto['auto_id']; ?>" class="lnk_loop"> </a>
      <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:#666 2px solid;">
        <tr>
          <td class="auto_nome"><?php echo $row_rs_loopauto['auto_nome']; ?></td>
          <td align="right" class="auto_preco">
            <?php
	if ($row_rs_loopauto['auto_vlrsit']=="S")
      echo number_format($row_rs_loopauto['auto_vlrvenda'],2,',','.'); else
      echo "Consulte."; ?>
          </td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="300" height="300" align="center" valign="top"><?php if ($totalRows_rs_imglist == 0) { // Show if recordset empty ?>
  <table width="150" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td align="center"><a href="dados/auto/<?php echo $row_rs_loopauto['auto_img']; ?>" class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4"><img src="dados/auto/<?php echo $row_rs_loopauto['auto_img']; ?>" width="300" height="230" border="0" /></a></td>
      </tr>
  </table>
  <?php } // Show if recordset empty ?>
  <?php if ($totalRows_rs_imglist > 0) { // Show if recordset not empty ?>
  <table width="150" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td align="center"><a href="dados/auto/<?php echo $row_rs_imglist['autoimg_img']; ?>" class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4"><img src="<?php echo $objDynamicThumb1->Execute(); ?>" width="300" height="230" border="0" /></a></td>
      </tr>
  </table>
  <?php } // Show if recordset not empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td><table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <?php
  do { // horizontal looper version 3
?>
            <td width="80"><a href="dados/auto/<?php echo $row_rs_imglist['autoimg_img']; ?>" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo $objDynamicThumb1->Execute(); ?>' "><img src="dados/auto/<?php echo $row_rs_imglist['autoimg_img']; ?>" width="60" height="50" border="0" style="margin-right:10px;" /></a></td>
            <?php
    $row_rs_imglist = mysql_fetch_assoc($rs_imglist);
    if (!isset($nested_rs_imglist)) {
      $nested_rs_imglist= 1;
    }
    if (isset($row_rs_imglist) && is_array($row_rs_imglist) && $nested_rs_imglist++ % 4==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_imglist); //end horizontal looper version 3
?>
          </tr>
      </table>      </td>
    </tr>
  </table></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:#CCC 2px solid;">
                <tr>
                  <td width="80" align="right" bgcolor="#efefef">Modelo</td>
                  <td bgcolor="#efefef"><strong><?php echo $row_rs_loopauto['auto_modelo']; ?></strong></td>
                </tr>
                <tr>
                  <td align="right">Marca</td>
                  <td><strong><?php echo $row_rs_loopauto['auto_marca']; ?></strong></td>
                </tr>
                <tr bgcolor="#efefef">
                  <td align="right">Color</td>
                  <td><strong><?php echo $row_rs_loopauto['auto_cor']; ?></strong></td>
                </tr>
                <tr>
                  <td align="right">Combustible</td>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="40"><img src="imagens/<?php echo $row_rs_loopauto['comb_img']; ?>" /></td>
                      <td><?php echo $row_rs_loopauto['comb_nome']; ?></td>
                    </tr>
                  </table></td>
                </tr>
                <tr bgcolor="#efefef">
                  <td align="right">A&ntilde;o (fab / mod)</td>
                  <td><strong><?php echo $row_rs_loopauto['auto_anofab']; ?> / <?php echo $row_rs_loopauto['auto_anomod']; ?></strong></td>
                </tr>
                <tr>
                  <td align="right">KM</td>
                  <td><strong><?php echo $row_rs_loopauto['auto_km']; ?></strong></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#EFEFEF">Tarjeta</td>
                  <td bgcolor="#EFEFEF"><strong>XXX-XXX<?php echo $row_rs_loopauto['auto_placafinal']; ?></strong></td>
                </tr>
                <tr>
                  <td align="right">Puertos</td>
                  <td><strong><?php echo $row_rs_loopauto['auto_portas']; ?></strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="left" bgcolor="#EFEFEF"><!-- AddThis Button BEGIN -->
  <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
    <a class="addthis_button_preferred_1"></a>
    <a class="addthis_button_preferred_2"></a>
    <a class="addthis_button_preferred_3"></a>
    <a class="addthis_button_preferred_4"></a>
    <a class="addthis_button_compact"></a>
    <a class="addthis_counter addthis_bubble_style"></a>
  </div>
  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f9c033821f2de27"></script>
  <!-- AddThis Button END --></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:#CCC 1px dashed;">
                <tr>
                  <td bgcolor="#EFEFEF"><strong>Opcional:</strong></td>
                </tr>
                <tr>
                  <td valign="top"><?php echo $row_rs_loopauto['auto_opc']; ?>
                    <?php /*START_PHP_SIRFCIT*/ if ($row_rs_loopauto['auto_opc']==""){ ?>
Nenhum opcional informado.
<?php } /*END_PHP_SIRFCIT*/ ?></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:#CCC 1px dashed;">
                <tr>
                  <td class="auto_ficha">Rellene la ficha para la financiaci&oacute;n <a href="index.php?pg=ficha&amp;auto_id=<?php echo $row_rs_loopauto['auto_id']; ?>">haciendo clic aqu&iacute</a> o nos env&iacutee su propuesta.</td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><strong>Env&iacute;e su propuesta:</strong></td>
                </tr>
                <tr>
                  <td valign="top"><div id="wrap">
                    <div class="mail">
                      <div id="response"></div>
                      <form id="formail" method="post" action="">
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                          <tr>
                            <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                              <tr>
                                <td width="100" align="right" valign="top">Nombre:
                                  <input name="destinatario" type="hidden" id="destinatario" value="<?php echo $row_rs_configauto['config_email']; ?>" />
                                  <input name="assunto" type="hidden" id="assunto" value="Proposta veiculo" /></td>
                                <td><input name="nome" type="text" class="frmContato_nome" id="nome" maxlength="50" onkeyup="toUpper(this)" /></td>
                              </tr>
                              <tr>
                                <td align="right" valign="top">E-mail:</td>
                                <td><input name="email" type="text" class="frmContato_email" id="email" maxlength="50" /></td>
                              </tr>
                              <tr>
                                <td align="right" valign="top">Propuesta:</td>
                                <td><textarea name="comentario" rows="4" class="frmContato_comentario" id="comentario"></textarea></td>
                              </tr>
                              <tr>
                                <td><input name="carro" type="hidden" id="carro" value="<?php echo $row_rs_loopauto['auto_id']; ?>" /></td>
                                <td><input type="submit" id="sendmail" name="sendmail" value="Enviar propuesta" /></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>
                      </form>
                    </div>
                  </div></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php if ($totalRows_rs_loopauto == 0) { // Show if recordset empty ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="box_atencao">
        <tr>
          <td>Lo sentimos, no hay resultados en este momento.</td>
          </tr>
      </table></td>
    </tr>
  </table>
  <?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rs_loopauto);

mysql_free_result($rs_imglist);

mysql_free_result($rs_configauto);
?>
