<?php require_once('../Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
//@@UrlFormat@@('../Connections/dbsite.php'); 

// Load the common classes
require_once('../includes/common/KT_common.php');

// Load the tNG classes
require_once('../includes/tng/tNG.inc.php');

// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("../");

// Make unified connection variable
$conn_dbsite = new KT_connection($dbsite, $database_dbsite);

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("news_usrcad", true, "numeric", "int", "", "", "Faltou ID usuario");
$formValidation->addField("news_dtcad", true, "date", "date", "", "", "Data não pode ser vazio!");
$formValidation->addField("news_titulo", true, "text", "", "", "", "Título não pode ser vazio!");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
function Trigger_ImageUpload(&$tNG) {
  $uploadObj = new tNG_ImageUpload($tNG);
  $uploadObj->setFormFieldName("news_img");
  $uploadObj->setDbFieldName("news_img");
  $uploadObj->setFolder("../dados/");
  $uploadObj->setResize("false", 300, 300);
  $uploadObj->setMaxSize(2048);
  $uploadObj->setAllowedExtensions("gif, jpg, jpe, jpeg, png");
  $uploadObj->setRename("custom");
  $uploadObj->setRenameRule("news{news_id}_{rs_upload.arquivo}.{KT_ext}");
  return $uploadObj->Execute();
}
//end Trigger_ImageUpload trigger

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

if ((isset($_POST['del_news_id'])) && ($_POST['del_news_id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_news WHERE news_id=%s",
                       GetSQLValueString($_POST['del_news_id'], "int"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($deleteSQL, $dbsite) or die(mysql_error());

  $deleteGoTo = "painel.php?pg=news";
  if (isset($_SERVER['QUERY_STRING'])) {
  //  $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
  //  $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
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
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje, DATE_FORMAT(NOW(), '%d/%m/%Y') AS hojebr FROM tb_usr ORDER BY usr_id ASC LIMIT 1";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

$news_rs_news = "-1";
if (isset($_GET['news_id'])) {
  $news_rs_news = $_GET['news_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_news = sprintf("SELECT t1.news_id, DATE_FORMAT(news_dtcad, '%%d/%%m/%%Y') AS news_dtcad, t1.news_titulo, t1.news_img, t1.news_desc, t1.news_sit FROM tb_news AS t1 WHERE t1.news_id = %s", GetSQLValueString($news_rs_news, "int"));
$rs_news = mysql_query($query_rs_news, $dbsite) or die(mysql_error());
$row_rs_news = mysql_fetch_assoc($rs_news);
$totalRows_rs_news = mysql_num_rows($rs_news);

// Make an update transaction instance
$upd_tb_news = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_news);
// Register triggers
$upd_tb_news->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_news->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_news->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=news");
$upd_tb_news->registerTrigger("AFTER", "Trigger_ImageUpload", 97);
// Add columns
$upd_tb_news->setTable("tb_news");
$upd_tb_news->addColumn("news_sit", "STRING_TYPE", "POST", "news_sit");
$upd_tb_news->addColumn("news_usrcad", "NUMERIC_TYPE", "POST", "news_usrcad");
$upd_tb_news->addColumn("news_dtcad", "DATE_TYPE", "POST", "news_dtcad");
$upd_tb_news->addColumn("news_titulo", "STRING_TYPE", "POST", "news_titulo");
$upd_tb_news->addColumn("news_img", "FILE_TYPE", "FILES", "news_img");
$upd_tb_news->addColumn("news_desc", "STRING_TYPE", "POST", "news_desc");
$upd_tb_news->setPrimaryKey("news_id", "NUMERIC_TYPE", "GET", "news_id");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_news = $tNGs->getRecordset("tb_news");
$row_rstb_news = mysql_fetch_assoc($rstb_news);
$totalRows_rstb_news = mysql_num_rows($rstb_news);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js" ></script> <!-- PLUGIN JQUERY-->
<script type="text/javascript" src="js/js_tab.js"></script> <!-- FUNCAO PARA SALTAR CAMPOS DO FORM -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script> <!-- CKEDITOR-->
<script type="text/javascript" src="uniforms/jquery.uniform.js"></script> <!-- ESTILIZA OS FORMULARIOS-->
<script type="text/javascript" charset="utf-8">
$(function(){
        $("input, textarea, select, button").uniform();
		$("#news_titulo").focus();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#news_dtcad").mask('99/99/9999');
   });
</script>
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="calendario/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="calendario/calendario.js"></script>
<link rel="stylesheet" type=text/css href="calendario/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
	  $("#news_dtcad").mask('99/99/9999');
   });
</script>
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script src="../includes/skins/style.js" type="text/javascript"></script>
<?php echo $tNGs->displayValidationRules();?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="registro" />
      <input name="pg" type="hidden" id="pg" value="newscad" />
    </form></td>
    <td width="50"><form id="frm" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="news" />
    </form></td>
    <td width="50">&nbsp;</td>
    <td width="50"><?php if ($totalRows_rs_news > 0) { // Show if recordset not empty ?>
        <?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_newsdel']=="S"){ ?>
          <form id="frmDel" name="frmDel" method="post" action="">
            <input name="del_news_id" type="hidden" id="del_news_id" value="<?php echo $row_rs_news['news_id']; ?>" />
            <input type="submit" value="borrar" />
          </form>
          <?php } /*END_PHP_SIRFCIT*/ ?>
        <?php } // Show if recordset not empty ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">EDITAR NOT&Iacute;CIA</td>
    <td width="250" class="body_titulo2"><form action="painel.php" method="get" name="frmBusca" id="frmBusca">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><input name="pg" type="hidden" id="pg" value="newsbusca">
            <input name="txtbusca" type="text" class="frmBusca_input" id="txtbusca" maxlength="20"></td>
          <td width="10">&nbsp;</td>
          <td width="55"><input type="submit" value="buscar"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_newsedit']!="S"){ ?>
  <table width="100%" border="0" cellspacing="10" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0" class="sem_permissao">
        <tr>
          <td>USTED NO PUEDE PERMISIÓN PARA ESTE CONTENIDO!</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<?php if ($totalRows_rs_news == 0) { // Show if recordset empty ?>
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
  <?php if ($totalRows_rs_news > 0) { // Show if recordset not empty ?>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_newsedit']=="S"){ ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td>&nbsp;
            <?php
	echo $tNGs->getErrorMsg();
?>
            <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
              <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
                <tr>
                  <td class="KT_th"><img src="../dados/<?php echo $row_rs_news['news_img']; ?>" width="100" height="75" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="150" class="KT_th"><label for="news_sit">Situaci&oacute;  n:</label></td>
                  <td><select name="news_sit" id="news_sit">
                    <option value="Ativo" <?php if (!(strcmp("Ativo", $row_rs_news['news_sit']))) {echo "selected=\"selected\"";} ?>>Activo</option>
                    <option value="Desativado" <?php if (!(strcmp("Desativado", $row_rs_news['news_sit']))) {echo "selected=\"selected\"";} ?>>Discapacitado</option>
                  </select>
                    <?php echo $tNGs->displayFieldError("tb_news", "news_sit"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="news_dtcad">Fecha de registro:</label></td>
                  <td><input name="news_dtcad" type="text" class="frmCad_100" id="news_dtcad" value="<?php echo $row_rs_news['news_dtcad']; ?>" maxlength="10" />                    <?php echo $tNGs->displayFieldError("tb_news", "news_dtcad"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="news_titulo">Título:</label></td>
                  <td><input name="news_titulo" type="text" class="frmCad_100per" id="news_titulo" value="<?php echo KT_escapeAttribute($row_rstb_news['news_titulo']); ?>" maxlength="150" />
                    <?php echo $tNGs->displayFieldHint("news_titulo");?> <?php echo $tNGs->displayFieldError("tb_news", "news_titulo"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="news_img">Foto:</label></td>
                  <td><input type="file" name="news_img" id="news_img" size="32" />
                    <?php echo $tNGs->displayFieldError("tb_news", "news_img"); ?></td>
                </tr>
                <tr>
                  <td class="KT_th"><label for="news_desc">Contenido:</label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" class="KT_th"><textarea name="news_desc" id="news_desc" cols="50" rows="5"><?php echo KT_escapeAttribute($row_rstb_news['news_desc']); ?></textarea>
                  <?php echo $tNGs->displayFieldHint("news_desc");?> <?php echo $tNGs->displayFieldError("tb_news", "news_desc"); ?>
                  <script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'news_desc',
					{
						toolbar:
							[
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
		{ name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'
                 ,'Iframe' ] },
                '/',
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
		{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
		{ name: 'colors', items : [ 'TextColor','BGColor' ] },
		{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'tools', items : [ 'About' ] }
	],
						skin : 'kama',
						filebrowserBrowseUrl : 'ckeditor/ckfinder/ckfinder.html',
	                    filebrowserImageBrowseUrl : 'ckeditor/ckfinder/ckfinder.html?type=Images',
	                    filebrowserFlashBrowseUrl : 'ckeditor/ckfinder/ckfinder.html?type=Flash',
                    	filebrowserUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	                    filebrowserImageUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	                    filebrowserFlashUploadUrl : 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
} );

			//]]>
			        </script></td>
                </tr>
                <tr class="KT_buttons">
                  <td>&nbsp;</td>
                  <td><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
                </tr>
              </table>
              <input type="hidden" name="news_usrcad" id="news_usrcad" value="<?php echo KT_escapeAttribute($row_rstb_news['news_usrcad']); ?>" />
            </form></td>
        </tr>
      </table>
      <?php } /*END_PHP_SIRFCIT*/ ?>
    <?php } // Show if recordset not empty ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_news);
?>
