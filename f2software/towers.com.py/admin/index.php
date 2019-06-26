<?php require_once('../Connections/dbsite.php'); ?>
<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nome'])) {
  $loginUsername=$_POST['nome'];
  $password=$_POST['senha'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "painel.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_dbsite, $dbsite);
  
  $LoginRS__query=sprintf("SELECT usr_login, usr_senha FROM tb_usr WHERE usr_login=%s AND usr_senha=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $dbsite) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="800" style="background:url(imagens/pg_login_bg-x.jpg) repeat-x top;"><table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="800" valign="top" style="background:url(imagens/pg_login_bg-center.jpg) no-repeat top center;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="120">&nbsp;</td>
          </tr>
          <tr>
            <td height="220" align="center" valign="top" class="pg_login_titulo"><p>ADMINISTRACION DE CONTENIDO</p>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center">&nbsp;</td>
                </tr>
              </table></td>
          </tr>
        </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><form id="frmLogin" name="frmLogin" method="POST" action="<?php echo $loginFormAction; ?>">
                <table width="550" border="0" align="center" cellpadding="2" cellspacing="0">
                  <tr>
                    <td><span class="pg_login_rotulo">Su nombre:</span></td>
                    <td>&nbsp;</td>
                    <td><span class="pg_login_rotulo">Su contrasena:</span></td>
                    </tr>
                  <tr>
                    <td><input name="nome" type="text" class="pg_login_usuario" id="nome" maxlength="30" /></td>
                    <td width="20">&nbsp;</td>
                    <td><input name="senha" type="password" class="pg_login_senha" id="senha" maxlength="30" /></td>
                  </tr>
                </table>
                <table width="580" border="0" align="center" cellpadding="10" cellspacing="0">
                  <tr>
                    <td align="center"><input type="submit" class="pg_login_submit" value="Entrar" /></td>
                  </tr>
                </table>
              </form></td>
            </tr>
          </table>
          <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="150">&nbsp;</td>
            </tr>
            <tr>
      
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>