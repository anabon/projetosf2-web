<?php require_once('../Connections/dbsite.php'); ?>
<?php
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
$formValidation->addField("config_url", false, "text", "url", "", "", "");
$formValidation->addField("config_email", false, "text", "email", "", "", "");
$tNGs->prepareValidation($formValidation);
// End trigger
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
$query_rs_perm_usr = sprintf("SELECT t1.usr_id, t2.perfil_config FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo'", GetSQLValueString($usuario_rs_perm_usr, "text"));
$rs_perm_usr = mysql_query($query_rs_perm_usr, $dbsite) or die(mysql_error());
$row_rs_perm_usr = mysql_fetch_assoc($rs_perm_usr);
$totalRows_rs_perm_usr = mysql_num_rows($rs_perm_usr);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_upload = "SELECT DATE_FORMAT(NOW(), '%Y%m%d%H%i%S') AS arquivo, DATE_FORMAT(NOW(), '%Y-%m-%d') AS hoje FROM tb_usr";
$rs_upload = mysql_query($query_rs_upload, $dbsite) or die(mysql_error());
$row_rs_upload = mysql_fetch_assoc($rs_upload);
$totalRows_rs_upload = mysql_num_rows($rs_upload);

mysql_select_db($database_dbsite, $dbsite);
$query_rs_config = "SELECT t1.* FROM tb_config AS t1";
$rs_config = mysql_query($query_rs_config, $dbsite) or die(mysql_error());
$row_rs_config = mysql_fetch_assoc($rs_config);
$totalRows_rs_config = mysql_num_rows($rs_config);

// Make an update transaction instance
$upd_tb_config = new tNG_update($conn_dbsite);
$tNGs->addTransaction($upd_tb_config);
// Register triggers
$upd_tb_config->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Update1");
$upd_tb_config->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$upd_tb_config->registerTrigger("END", "Trigger_Default_Redirect", 99, "painel.php?pg=config");
// Add columns
$upd_tb_config->setTable("tb_config");
$upd_tb_config->addColumn("config_nome", "STRING_TYPE", "POST", "config_nome");
$upd_tb_config->addColumn("config_url", "STRING_TYPE", "POST", "config_url");
$upd_tb_config->addColumn("config_email", "STRING_TYPE", "POST", "config_email");
$upd_tb_config->addColumn("config_endereco1", "STRING_TYPE", "POST", "config_endereco1");
$upd_tb_config->addColumn("config_endereco2", "STRING_TYPE", "POST", "config_endereco2");
$upd_tb_config->addColumn("config_banner", "STRING_TYPE", "POST", "config_banner");
$upd_tb_config->addColumn("config_mapasit", "STRING_TYPE", "POST", "config_mapasit");
$upd_tb_config->addColumn("config_mapacod", "STRING_TYPE", "POST", "config_mapacod");
$upd_tb_config->addColumn("config_homesit", "STRING_TYPE", "POST", "config_homesit");
$upd_tb_config->addColumn("config_home", "STRING_TYPE", "POST", "config_home");
$upd_tb_config->addColumn("config_fichaok", "STRING_TYPE", "POST", "config_fichaok");
$upd_tb_config->setPrimaryKey("config_id", "NUMERIC_TYPE", "VALUE", "1");

// Execute all the registered transactions
$tNGs->executeTransactions();

// Get the transaction recordset
$rstb_config = $tNGs->getRecordset("tb_config");
$row_rstb_config = mysql_fetch_assoc($rstb_config);
$totalRows_rstb_config = mysql_num_rows($rstb_config);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $("#config_fone1").mask('(99) 9999-9999');
      $("#config_fone2").mask('(99) 9999-9999');
	  $("#config_fone3").mask('(99) 9999-9999');
   });
</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="../includes/common/js/base.js" type="text/javascript"></script>
<script src="../includes/common/js/utility.js" type="text/javascript"></script>
<script src="../includes/skins/style.js" type="text/javascript"></script>
<?php echo $tNGs->displayValidationRules();?>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="10" cellpadding="5" style="border-bottom:#666 2px solid;">
  <tr>
    <td class="body_titulo2">CONFIGURACI&Oacute;N DEL SITIO WEB</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_config']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_config']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;
        <?php
	echo $tNGs->getErrorMsg();
?>
        <form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>" enctype="multipart/form-data">
          <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td><input type="submit" name="KT_Update1" id="KT_Update1" value="Guardar registro" /></td>
            </tr>
          </table>
          <div id="TabbedPanels1" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">Par&aacute;metros</li>
              <li class="TabbedPanelsTab" tabindex="0">Home Page</li>
              <li class="TabbedPanelsTab" tabindex="0">Archivo del blog</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent">
                <table width="700" cellpadding="5" cellspacing="0" class="KT_tngtable">
                  <tr>
                    <td width="150" class="KT_th"><label for="config_nome">Nombre del sitio:</label></td>
                    <td><input name="config_nome" type="text" class="frmCad_100per" id="config_nome" value="<?php echo KT_escapeAttribute($row_rstb_config['config_nome']); ?>" size="32" />
                      <?php echo $tNGs->displayFieldHint("config_nome");?> <?php echo $tNGs->displayFieldError("tb_config", "config_nome"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_url">URL:</label></td>
                    <td><input name="config_url" type="text" class="frmCad_100per" id="config_url" value="<?php echo KT_escapeAttribute($row_rstb_config['config_url']); ?>" size="32" />
                      <?php echo $tNGs->displayFieldHint("config_url");?> <?php echo $tNGs->displayFieldError("tb_config", "config_url"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_email">E-mail:</label></td>
                    <td><input name="config_email" type="text" class="frmCad_100per" id="config_email" value="<?php echo KT_escapeAttribute($row_rstb_config['config_email']); ?>" size="32" />
                      <?php echo $tNGs->displayFieldHint("config_email");?> <?php echo $tNGs->displayFieldError("tb_config", "config_email"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_endereco1">Direcci&oacute;n de l&iacute;nea 1:</label></td>
                    <td><input name="config_endereco1" type="text" class="frmCad_100per" id="config_endereco1" value="<?php echo KT_escapeAttribute($row_rstb_config['config_endereco1']); ?>" size="32" />
                      <?php echo $tNGs->displayFieldHint("config_endereco1");?> <?php echo $tNGs->displayFieldError("tb_config", "config_endereco1"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_endereco2">Direcci&oacute;n de l&iacute;nea 1:</label></td>
                    <td><input name="config_endereco2" type="text" class="frmCad_100per" id="config_endereco2" value="<?php echo KT_escapeAttribute($row_rstb_config['config_endereco2']); ?>" size="32" />
                      <?php echo $tNGs->displayFieldHint("config_endereco2");?> <?php echo $tNGs->displayFieldError("tb_config", "config_endereco2"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_banner">Ver Banner:</label></td>
                    <td><select name="config_banner" id="config_banner">
                      <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_config['config_banner'])))) {echo "SELECTED";} ?>>S</option>
                      <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_config['config_banner'])))) {echo "SELECTED";} ?>>N</option>
                    </select>
                      <?php echo $tNGs->displayFieldError("tb_config", "config_banner"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_mapasit">Ver Mapa:</label></td>
                    <td><select name="config_mapasit" id="config_mapasit">
                      <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_config['config_mapasit'])))) {echo "SELECTED";} ?>>S</option>
                      <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_config['config_mapasit'])))) {echo "SELECTED";} ?>>N</option>
                    </select>
                      <?php echo $tNGs->displayFieldError("tb_config", "config_mapasit"); ?></td>
                  </tr>
                  <tr>
                    <td class="KT_th"><label for="config_mapacod">Script do Mapa:</label></td>
                    <td><textarea name="config_mapacod" cols="50" rows="5" class="frmCad_area" id="config_mapacod"><?php echo KT_escapeAttribute($row_rstb_config['config_mapacod']); ?></textarea>
                      <?php echo $tNGs->displayFieldHint("config_mapacod");?> <?php echo $tNGs->displayFieldError("tb_config", "config_mapacod"); ?></td>
                  </tr>
                </table>
              </div>
              <div class="TabbedPanelsContent">
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="150">Ver Home Page:</td>
                    <td><select name="config_homesit" id="config_homesit">
                      <option value="S" <?php if (!(strcmp("S", KT_escapeAttribute($row_rstb_config['config_homesit'])))) {echo "SELECTED";} ?>>S</option>
                      <option value="N" <?php if (!(strcmp("N", KT_escapeAttribute($row_rstb_config['config_homesit'])))) {echo "SELECTED";} ?>>N</option>
                    </select>
                      <?php echo $tNGs->displayFieldError("tb_config", "config_homesit"); ?></td>
                  </tr>
                  <tr>
                    <td colspan="2"><textarea name="config_home" id="config_home" cols="50" rows="5"><?php echo KT_escapeAttribute($row_rstb_config['config_home']); ?></textarea>
                      <?php echo $tNGs->displayFieldHint("config_home");?> <?php echo $tNGs->displayFieldError("tb_config", "config_home"); ?><span class="KT_th">
                        <script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'config_home',
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
			        </script>
                      </span></td>
                  </tr>
                </table>
              </div>
              <div class="TabbedPanelsContent">
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="150" colspan="2"><textarea name="config_fichaok" id="config_fichaok" cols="50" rows="5"><?php echo KT_escapeAttribute($row_rstb_config['config_fichaok']); ?></textarea>
                      <span class="KT_th">
                      <script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'config_fichaok',
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
			          </script>
                    </span>                    <?php echo $tNGs->displayFieldHint("config_fichaok");?> <?php echo $tNGs->displayFieldError("tb_config", "config_fichaok"); ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </form>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
  </script>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_config);
?>
