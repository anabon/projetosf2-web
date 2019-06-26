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

mysql_select_db($database_dbsite, $dbsite);
$query_rs_slider = "SELECT t1.slider_titulo, t1.slider_detalhe, t1.slider_img FROM tb_slider AS t1 WHERE t1.slider_sit = 'Ativo' ORDER BY t1.slider_ordem ASC";
$rs_slider = mysql_query($query_rs_slider, $dbsite) or die(mysql_error());
$row_rs_slider = mysql_fetch_assoc($rs_slider);
$totalRows_rs_slider = mysql_num_rows($rs_slider);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_bannerativo = "SELECT t1.config_banner FROM tb_config AS t1";
$rs_bannerativo = mysql_query($query_rs_bannerativo, $dbsite) or die(mysql_error());
$row_rs_bannerativo = mysql_fetch_assoc($rs_bannerativo);
$totalRows_rs_bannerativo = mysql_num_rows($rs_bannerativo);

$maxRows_rs_loopauto = 6;
$pageNum_rs_loopauto = 0;
if (isset($_GET['pageNum_rs_loopauto'])) {
  $pageNum_rs_loopauto = $_GET['pageNum_rs_loopauto'];
}
$startRow_rs_loopauto = $pageNum_rs_loopauto * $maxRows_rs_loopauto;

mysql_select_db($database_dbsite, $dbsite);
$query_rs_loopauto = "SELECT t1.auto_id, t1.auto_img, t1.auto_marca,SUBSTRING_INDEX( t1.auto_modelo,' ',1) AS auto_modelo, t1.auto_cor, t1.auto_anofab, t1.auto_anomod, t1.auto_vlrsit, t1.auto_vlrvenda FROM tb_auto AS t1 ORDER BY RAND() ";
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

mysql_select_db($database_dbsite, $dbsite);
$query_rs_home = "SELECT t1.config_homesit, t1.config_home FROM tb_config AS t1";
$rs_home = mysql_query($query_rs_home, $dbsite) or die(mysql_error());
$row_rs_home = mysql_fetch_assoc($rs_home);
$totalRows_rs_home = mysql_num_rows($rs_home);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style>
	.TB_Wrapper {
		width: 680px;
		height:240px;	
		background: #EEEEEE url(trans_banner/preloader.gif) center center no-repeat;		
	}
</style>
<link rel="stylesheet" href="trans_banner/style.css" />
<script src="trans_banner/jquery.easing.1.3.min.js"></script>
<script src="trans_banner/trans-banner.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
		$('.TB_Wrapper').TransBanner({
			button_show_back: true,
			slide_transition: 4,
			button_numbers_autohide: false,
			button_numbers_horizontal: true,
			caption_padding_x : 18,
			caption_padding_y : 12,
			caption_float_mode: true
		});	
	});	

</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><?php /*START_PHP_SIRFCIT*/ if ($row_rs_bannerativo['config_banner']=="S"){ ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top">
          <div class="TB_Wrapper">
            <?php do { ?>
            <div class="Slide" data-position="20,20" data-width="500" > <img src="dados/slider/<?php echo $row_rs_slider['slider_img']; ?>" alt="<?php echo $row_rs_slider['slider_titulo']; ?>" />
              <?php /*START_PHP_SIRFCIT*/ if ($row_rs_slider['slider_detalhe']!=""){ ?>
              <div align="left"> <?php echo $row_rs_slider['slider_detalhe']; ?></div>
              <?php } /*END_PHP_SIRFCIT*/ ?>
            </div>

            <?php } while ($row_rs_slider = mysql_fetch_assoc($rs_slider)); ?>
          </div>
            <img src="imagens/slider_shadow.jpg" width="680" height="28" /></td>
        </tr>
      </table>
    <?php } /*END_PHP_SIRFCIT*/ ?></td>
  </tr>
</table>
			


<?php /*START_PHP_SIRFCIT*/ if ($row_rs_home['config_homesit']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><?php echo $row_rs_home['config_home']; ?></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><table border="0" cellspacing="0">
      <tr>
        <?php
  do { // looper horizontal versão 3
?>
           <td width="230"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="167" align="center" style="background:url(imagens/loop-bg.png) no-repeat bottom center;"><a href="index.php?pg=auto&amp;auto_id=<?php echo $row_rs_loopauto['auto_id']; ?>"><img src="dados/auto/<?php echo $row_rs_loopauto['auto_img']; ?>" width="168" height="122" border="0" /></a></td>
            </tr>
            <tr>
              <td align="center"><img src="imagens/loop-break-bottom.jpg" width="175" height="10" /></td>
            </tr>
            <tr>
              <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" class="loopauto_marca"><?php echo $row_rs_loopauto['auto_marca']; ?></td>
                  </tr>
                <tr>
                  <td align="center" class="loopauto_modelo"><?php echo $row_rs_loopauto['auto_modelo']; ?></td>
                  </tr>
                <tr>
                  <td align="center" class="loopauto_cor"><?php echo $row_rs_loopauto['auto_cor']; ?>, <?php echo $row_rs_loopauto['auto_anofab']; ?> - <?php echo $row_rs_loopauto['auto_anomod']; ?></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td align="center"><img src="imagens/loop-break-bottom.jpg" width="175" height="10" /></td>
            </tr>
            <tr>
              <td align="center" class="loopauto_preco"><?php
	       if ($row_rs_loopauto['auto_vlrsit']=="S")
          echo number_format($row_rs_loopauto['auto_vlrvenda'],2,',','.'); else
           echo "Consulte."; ?></td>
            </tr>
            <tr>
              <td align="center"><img src="imagens/loop-break-bottom.jpg" width="175" height="10" /></td>
            </tr>
          </table></td>
          <?php
    $row_rs_loopauto = mysql_fetch_assoc($rs_loopauto);
    if (!isset($nested_rs_loopauto)) {
      $nested_rs_loopauto= 1;
    }
    if (isset($row_rs_loopauto) && is_array($row_rs_loopauto) && $nested_rs_loopauto++ % 3==0) {
      echo "</tr><tr>";
    }
  } while ($row_rs_loopauto); //end horizontal looper version 3
?>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_slider);

mysql_free_result($rs_bannerativo);

mysql_free_result($rs_loopauto);

mysql_free_result($rs_home);
?>
