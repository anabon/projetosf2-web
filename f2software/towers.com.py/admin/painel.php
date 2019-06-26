<?php require_once('../Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
// Require the MXI classes
require_once ('../includes/mxi/MXI.php');

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

// Include Multiple Static Pages
$mxiObj = new MXI_Includes("pg");
$mxiObj->IncludeStatic("", "inc_home.php", "", "", "");
$mxiObj->IncludeStatic("usrinfo", "inc_usrinfoedit.php", "", "", "");
$mxiObj->IncludeStatic("usrpass", "inc_usrinfopass.php", "", "", "");
$mxiObj->IncludeStatic("config", "inc_config.php", "", "", "");
$mxiObj->IncludeStatic("frota", "inc_frota.php", "", "", "");
$mxiObj->IncludeStatic("frotacad", "inc_frotacad.php", "", "", "");
$mxiObj->IncludeStatic("frotaedit", "inc_frotaedit.php", "", "", "");
$mxiObj->IncludeStatic("frotadel", "inc_frotadel.php", "", "", "");
$mxiObj->IncludeStatic("frotaimg", "inc_frotaimg.php", "", "", "");
$mxiObj->IncludeStatic("img", "inc_img.php", "", "", "");
$mxiObj->IncludeStatic("imgcad", "inc_imgcad.php", "", "", "");
$mxiObj->IncludeStatic("imgedit", "inc_imgedit.php", "", "", "");
$mxiObj->IncludeStatic("forn", "inc_forn.php", "", "", "");
$mxiObj->IncludeStatic("forncad", "inc_forncad.php", "", "", "");
$mxiObj->IncludeStatic("fornedit", "inc_fornedit.php", "", "", "");
$mxiObj->IncludeStatic("forndel", "inc_forndel.php", "", "", "");
$mxiObj->IncludeStatic("pro", "inc_pro.php", "", "", "");
$mxiObj->IncludeStatic("proedit", "inc_proedit.php", "", "", "");
$mxiObj->IncludeStatic("procad", "inc_procad.php", "", "", "");
$mxiObj->IncludeStatic("prodel", "inc_prodel.php", "", "", "");
$mxiObj->IncludeStatic("procat", "inc_procat.php", "", "", "");
$mxiObj->IncludeStatic("procatcad", "inc_procatcad.php", "", "", "");
$mxiObj->IncludeStatic("procatedit", "inc_procatedit.php", "", "", "");
$mxiObj->IncludeStatic("procatdel", "inc_procatdel.php", "", "", "");
$mxiObj->IncludeStatic("srv", "inc_srv.php", "", "", "");
$mxiObj->IncludeStatic("srvbusca", "inc_srvbusca.php", "", "", "");
$mxiObj->IncludeStatic("srvcad", "inc_srvcad.php", "", "", "");
$mxiObj->IncludeStatic("srvdel", "inc_srvdel.php", "", "", "");
$mxiObj->IncludeStatic("srv-cli", "inc_srv-cli.php", "", "", "");
$mxiObj->IncludeStatic("exc", "inc_exc.php", "", "", "");
$mxiObj->IncludeStatic("excview", "inc_excview.php", "", "", "");
$mxiObj->IncludeStatic("excbusca", "inc_excbusca.php", "", "", "");
$mxiObj->IncludeStatic("exccad", "inc_exccad.php", "", "", "");
$mxiObj->IncludeStatic("excedit", "inc_excedit.php", "", "", "");
$mxiObj->IncludeStatic("excdel", "inc_excdel.php", "", "", "");
$mxiObj->IncludeStatic("info", "inc_info.php", "", "", "");
$mxiObj->IncludeStatic("infoview", "inc_infoview.php", "", "", "");
$mxiObj->IncludeStatic("infocad", "inc_infocad.php", "", "", "");
$mxiObj->IncludeStatic("infoedit", "inc_infoedit.php", "", "", "");
$mxiObj->IncludeStatic("infodel", "inc_infodel.php", "", "", "");
$mxiObj->IncludeStatic("linkutil", "inc_linksuteis.php", "", "", "");
$mxiObj->IncludeStatic("linkutilcad", "inc_linkutilcad.php", "", "", "");
$mxiObj->IncludeStatic("linkutiledit", "inc_linkutiledit.php", "", "", "");
$mxiObj->IncludeStatic("linkutildel", "inc_linkutildel.php", "", "", "");
$mxiObj->IncludeStatic("indice", "inc_indice.php", "", "", "");
$mxiObj->IncludeStatic("indicecad", "inc_indicecad.php", "", "", "");
$mxiObj->IncludeStatic("indiceedit", "inc_indiceedit.php", "", "", "");
$mxiObj->IncludeStatic("indicedel", "inc_indicedel.php", "", "", "");
$mxiObj->IncludeStatic("slider", "inc_slider.php", "", "", "");
$mxiObj->IncludeStatic("slidercad", "inc_slidercad.php", "", "", "");
$mxiObj->IncludeStatic("slideredit", "inc_slideredit.php", "", "", "");
$mxiObj->IncludeStatic("slideredel", "inc_sliderdel.php", "", "", "");
$mxiObj->IncludeStatic("auto", "inc_auto.php", "", "", "");
$mxiObj->IncludeStatic("autocad", "inc_autocad.php", "", "", "");
$mxiObj->IncludeStatic("autoedit", "inc_autoedit.php", "", "", "");
$mxiObj->IncludeStatic("autodel", "inc_autodel.php", "", "", "");
$mxiObj->IncludeStatic("autobusca", "inc_autobusca.php", "", "", "");
$mxiObj->IncludeStatic("autoimg", "inc_autoimg.php", "", "", "");
$mxiObj->IncludeStatic("autoimgcad", "inc_autoimgcad.php", "", "", "");
$mxiObj->IncludeStatic("autoimgedit", "inc_autoimgedit.php", "", "", "");
$mxiObj->IncludeStatic("autoimgdel", "inc_autoimgdel.php", "", "", "");
$mxiObj->IncludeStatic("banco", "inc_banco.php", "", "", "");
$mxiObj->IncludeStatic("bancobusca", "inc_bancobusca.php", "", "", "");
$mxiObj->IncludeStatic("bancocad", "inc_bancocad.php", "", "", "");
$mxiObj->IncludeStatic("bancoedit", "inc_bancoedit.php", "", "", "");
$mxiObj->IncludeStatic("cli", "inc_cli.php", "", "", "");
$mxiObj->IncludeStatic("clibusca", "inc_clibusca.php", "", "", "");
$mxiObj->IncludeStatic("cliview", "inc_cliview.php", "", "", "");
$mxiObj->IncludeStatic("cliedit", "inc_cliedit.php", "", "", "");
$mxiObj->IncludeStatic("clicad", "inc_clicad.php", "", "", "");
$mxiObj->IncludeStatic("clidel", "inc_clidel.php", "", "", "");
$mxiObj->IncludeStatic("clifile", "inc_clifile.php", "", "", "");
$mxiObj->IncludeStatic("clifilecad", "inc_clifilecad.php", "", "", "");
$mxiObj->IncludeStatic("clifileedit", "inc_clifileedit.php", "", "", "");
$mxiObj->IncludeStatic("clifiledel", "inc_clifiledel.php", "", "", "");
$mxiObj->IncludeStatic("perfil", "inc_perfil.php", "", "", "");
$mxiObj->IncludeStatic("perfilcad", "inc_perfilcad.php", "", "", "");
$mxiObj->IncludeStatic("perfiledit", "inc_perfiledit.php", "", "", "");
$mxiObj->IncludeStatic("perfildel", "inc_perfildel.php", "", "", "");
$mxiObj->IncludeStatic("usr", "inc_usr.php", "", "", "");
$mxiObj->IncludeStatic("usrcad", "inc_usrcad.php", "", "", "");
$mxiObj->IncludeStatic("usredit", "inc_usredit.php", "", "", "");
$mxiObj->IncludeStatic("usrdel", "inc_usrdel.php", "", "", "");
$mxiObj->IncludeStatic("cntp", "inc_cntpagar.php", "", "", "");
$mxiObj->IncludeStatic("cntpcad", "inc_cntpcad.php", "", "", "");
$mxiObj->IncludeStatic("cntpedit", "inc_cntpedit.php", "", "", "");
$mxiObj->IncludeStatic("cntr", "inc_cntreceber.php", "", "", "");
$mxiObj->IncludeStatic("cntrcad", "inc_cntrcad.php", "", "", "");
$mxiObj->IncludeStatic("cntredit", "inc_cntredit.php", "", "", "");
$mxiObj->IncludeStatic("desp", "inc_desp.php", "", "", "");
$mxiObj->IncludeStatic("cx", "inc_cx.php", "", "", "");
$mxiObj->IncludeStatic("cxcad", "inc_cxcad.php", "", "", "");
$mxiObj->IncludeStatic("cxedit", "inc_cxedit.php", "", "", "");
$mxiObj->IncludeStatic("cxdel", "inc_cxdel.php", "", "", "");
$mxiObj->IncludeStatic("cxperiodo", "inc_cxperiodo.php", "", "", "");
$mxiObj->IncludeStatic("loja", "inc_loja.php", "", "", "");
$mxiObj->IncludeStatic("lojacad", "inc_lojacad.php", "", "", "");
$mxiObj->IncludeStatic("lojaedit", "inc_lojaedit.php", "", "", "");
$mxiObj->IncludeStatic("lojadel", "inc_lojadel.php", "", "", "");
$mxiObj->IncludeStatic("lojabusca", "inc_lojabusca.php", "", "", "");
$mxiObj->IncludeStatic("detran", "inc_detran.php", "", "", "");
$mxiObj->IncludeStatic("detrancad", "inc_detrancad.php", "", "", "");
$mxiObj->IncludeStatic("detranedit", "inc_detranedit.php", "", "", "");
$mxiObj->IncludeStatic("detrandel", "inc_detrandel.php", "", "", "");
$mxiObj->IncludeStatic("dpto", "inc_dpto.php", "", "", "");
$mxiObj->IncludeStatic("dptocad", "inc_dptocad.php", "", "", "");
$mxiObj->IncludeStatic("dptoedit", "inc_dptoedit.php", "", "", "");
$mxiObj->IncludeStatic("dptodel", "inc_dptodel.php", "", "", "");
$mxiObj->IncludeStatic("autodesp", "inc_autodesp.php", "", "", "");
$mxiObj->IncludeStatic("autodespcad", "inc_autodespcad.php", "", "", "");
$mxiObj->IncludeStatic("autodespedit", "inc_autodespedit.php", "", "", "");
$mxiObj->IncludeStatic("autodespdel", "inc_autodespdel.php", "", "", "");
$mxiObj->IncludeStatic("autodespbusca", "inc_autodespbusca.php", "", "", "");
$mxiObj->IncludeStatic("fone", "inc_fone.php", "", "", "");
$mxiObj->IncludeStatic("fonecad", "inc_fonecad.php", "", "", "");
$mxiObj->IncludeStatic("foneedit", "inc_foneedit.php", "", "", "");
$mxiObj->IncludeStatic("fonedel", "inc_fonedel.php", "", "", "");
$mxiObj->IncludeStatic("fonebusca", "inc_fonebusca.php", "", "", "");
$mxiObj->IncludeStatic("ficha", "inc_ficha.php", "", "", "");
$mxiObj->IncludeStatic("fichaedit", "inc_fichaedit.php", "", "", "");
$mxiObj->IncludeStatic("fichadel", "inc_fichadel.php", "", "", "");
$mxiObj->IncludeStatic("fichabusca", "inc_fichabusca.php", "", "", "");
$mxiObj->IncludeStatic("inc", "inc_inc.php", "", "", "");
$mxiObj->IncludeStatic("inccad", "inc_inccad.php", "", "", "");
$mxiObj->IncludeStatic("incedit", "inc_incedit.php", "", "", "");
$mxiObj->IncludeStatic("foto", "inc_foto.php", "", "", "");
$mxiObj->IncludeStatic("fotocad", "inc_fotocad.php", "", "", "");
$mxiObj->IncludeStatic("fotoedit", "inc_fotoedit.php", "", "", "");
$mxiObj->IncludeStatic("fotobusca", "inc_fotobusca.php", "", "", "");
$mxiObj->IncludeStatic("video", "inc_video.php", "", "", "");
$mxiObj->IncludeStatic("videocad", "inc_videocad.php", "", "", "");
$mxiObj->IncludeStatic("videoedit", "inc_videoedit.php", "", "", "");
$mxiObj->IncludeStatic("videobusca", "inc_videobusca.php", "", "", "");
$mxiObj->IncludeStatic("news", "inc_news.php", "", "", "");
$mxiObj->IncludeStatic("newscad", "inc_newscad.php", "", "", "");
$mxiObj->IncludeStatic("newsedit", "inc_newsedit.php", "", "", "");
$mxiObj->IncludeStatic("newsbusca", "inc_newsbusca.php", "", "", "");
$mxiObj->IncludeStatic("rsocial", "inc_rsocial.php", "", "", "");
$mxiObj->IncludeStatic("rsocialcad", "inc_rsocialcad.php", "", "", "");
$mxiObj->IncludeStatic("rsocialedit", "inc_rsocialedit.php", "", "", "");
$mxiObj->IncludeStatic("rsocialbusca", "inc_rsocialbusca.php", "", "", "");

// End Include Multiple Static Pages

$usuario_rs_login = "-1";
if (isset($_SESSION['MM_Username'])) {
  $usuario_rs_login = $_SESSION['MM_Username'];
}
mysql_select_db($database_dbsite, $dbsite);
$query_rs_login = sprintf("SELECT t1.usr_id, t1.usr_nome, t1.usr_login, t2.perfil_nome FROM tb_usr AS t1 LEFT JOIN tb_perfil AS t2 ON t2.perfil_id = t1.usr_perfil WHERE t1.usr_login = %s AND t1.usr_sit = 'Ativo' AND t1.usr_sitreg = 1", GetSQLValueString($usuario_rs_login, "text"));
$rs_login = mysql_query($query_rs_login, $dbsite) or die(mysql_error());
$row_rs_login = mysql_fetch_assoc($rs_login);
$totalRows_rs_login = mysql_num_rows($rs_login);
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $mxiObj->getTitle(); ?></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<!--Menu painel -->
<script type="text/javascript" src="menu_painel.js"></script>
<script>
$(document).ready(function(){
	$("#nav-one").dropmenu();
});
</script>
<link rel="stylesheet" id="smthemenewprint-css"  href="menu_painel.css" type="text/css" />
<!--FIM Menu painel -->
<meta name="keywords" content="<?php echo $mxiObj->getKeywords(); ?>" />
<meta name="description" content="<?php echo $mxiObj->getDescription(); ?>" />
<base href="<?php echo mxi_getBaseURL(); ?>" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" style="background:url(imagens/header_bg-x.jpg) repeat-x top #232323;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="90" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td class="body_titulo">ADMINISTRACION DE CONTENIDO</td>
          </tr>
        </table></td>
        <td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td align="right">[ <a href="<?php echo $logoutAction ?>" class="lnk_header_logout">SALIDA</a> ] , <span class="header_login_nome"><?php echo $row_rs_login['usr_nome']; ?></span></td>
          </tr>
          <tr>
            <td align="right" class="header_login_info"><?php echo $row_rs_login['usr_login']; ?> / <?php echo $row_rs_login['perfil_nome']; ?></td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left">
          <ul id="nav-one" class="dropmenu"> 
			<li>Mi cuenta
				<ul> 
					<li><a href="painel.php">Inicio</a></li>
                    <li><a href="painel.php?pg=usrpass">Cambiar mi contrasena</a></li> 
				</ul> 
            </li> 

			<li>Website
				<ul> 
					<li><a href="painel.php?pg=config">AJUSTES</a></li> 
					<li><a href="painel.php?pg=info">Paginas dinamicas</a></li>
                    <li><a href="painel.php?pg=slider">Slaides</a></li>
                    <li><a href="painel.php?pg=news">Noticias</a></li>
                    <li><a href="painel.php?pg=foto">Fotos</a></li>
                    <li><a href="painel.php?pg=video">Vídeos</a></li>
                    <li><a href="painel.php?pg=fone">Telefonos</a></li>
                    <li><a href="painel.php?pg=rsocial">Redes Sociales</a></li>
                    <li><a href="painel.php?pg=inc">Tag's SEO</a></li>
				</ul> 
			</li> 
			<li>Entradas
				<ul> 
					<li><a href="painel.php?pg=ficha">Hojas</a></li>
                    <li><a href="painel.php?pg=auto">Vehículos</a></li>
                    <li><a href="painel.php?pg=forn">Proveedores</a></li>
                    <li><a href="painel.php?pg=detran">Dinatram</a></li>
                    <li><a href="painel.php?pg=perfil">Perfiles</a></li> 
					<li><a href="painel.php?pg=usr">Usuarios</a></li>
				</ul> 
			</li>  
			</ul> 

          &nbsp;</td>
        </tr>
    </table>
      <table width="100%" border="0" cellspacing="10" cellpadding="10">
        <tr>
          <td height="450" valign="top" bgcolor="#FFFFFF">
            <?php
  $incFileName = $mxiObj->getCurrentInclude();
  if ($incFileName !== null)  {
    mxi_includes_start($incFileName);
    require(basename($incFileName)); // require the page content
    mxi_includes_end();
}
?></td>
        </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
     
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rs_login);
?>
