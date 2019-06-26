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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tb_info (info_ordem, info_titulo, info_titulomenu, info_desc, info_sit) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['info_ordem'], "int"),
                       GetSQLValueString($_POST['info_titulo'], "text"),
                       GetSQLValueString($_POST['info_titulomenu'], "text"),
                       GetSQLValueString($_POST['info_desc'], "text"),
                       GetSQLValueString($_POST['info_sit'], "text"));

  mysql_select_db($database_dbsite, $dbsite);
  $Result1 = mysql_query($insertSQL, $dbsite) or die(mysql_error());

  $insertGoTo = "painel.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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

$pagina_rs_infoedit = "-1";
if (isset($_GET['info_id'])) {
  $pagina_rs_infoedit = $_GET['info_id'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_infoedit = sprintf("SELECT t1.* FROM tb_info AS t1 WHERE t1.info_id = %s", GetSQLValueString($pagina_rs_infoedit, "int"));
$rs_infoedit = mysql_query($query_rs_infoedit, $dbsite) or die(mysql_error());
$row_rs_infoedit = mysql_fetch_assoc($rs_infoedit);
$totalRows_rs_infoedit = mysql_num_rows($rs_infoedit);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/capslock.js"> </script>
<script src="uniforms/jquery.uniform.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
      });
</script>
<link rel="stylesheet" href="uniforms/css/uniform.default.css" type="text/css" media="screen">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50"><form id="frm01" name="frm01" method="get" action="painel.php">
      <input type="submit" value="todos" />
      <input name="pg" type="hidden" id="pg" value="info" />
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
    <td class="body_titulo2">CADASTRO DE P&Aacute;GINA</td>
    <td width="250" class="body_titulo2">&nbsp;</td>
  </tr>
</table>
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_infoedit']!="S"){ ?>
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
<?php /*START_PHP_SIRFCIT*/ if ($row_rs_perm_usr['perfil_infoedit']=="S"){ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td><form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td>Situa&ccedil;&atilde;o:              </td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100"><select name="info_sit" id="info_sit">
                  <option value="Ativo" <?php if (!(strcmp("Ativo", "Ativo"))) {echo "selected=\"selected\"";} ?>>Ativo</option>
                  <option value="Desativado" <?php if (!(strcmp("Desativado", "Ativo"))) {echo "selected=\"selected\"";} ?>>Desativado</option>
                </select></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>Ordem:</td>
            <td><input name="info_ordem" type="text" class="frmCad_50" id="info_ordem" value="0001" maxlength="6" /></td>
          </tr>
          <tr>
            <td width="150">T&iacute;tulo:</td>
            <td><input name="info_titulo" type="text" class="frmCad_100per" id="info_titulo" maxlength="100" /></td>
          </tr>
          <tr>
            <td>T&iacute;tulo no Menu:</td>
            <td><input name="info_titulomenu" type="text" class="frmCad_100per" id="info_titulomenu" maxlength="100" onKeyUp="toUpper(this)" /></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="info_desc" cols="45" rows="5" class="frmCad_area" id="info_desc"><?php echo $row_rs_infoedit['info_desc']; ?></textarea>
                        <script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'info_desc',
					{
						toolbar:
							[
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
		{ name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'
                 ,'Iframe' ] },
                '/',
		{ name: 'styles', items : [ 'Styles','Format' ] },
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
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="right"><input type="submit" value="inserir registro" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form></td>
    </tr>
  </table>
  <?php } /*END_PHP_SIRFCIT*/ ?>
</body>
</html>
<?php
mysql_free_result($rs_perm_usr);

mysql_free_result($rs_upload);

mysql_free_result($rs_infoedit);
?>
