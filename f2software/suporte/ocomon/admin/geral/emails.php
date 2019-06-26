<?php 

 /*                        Copyright 2005 Flávio Ribeiro

         This file is part of OCOMON.

         OCOMON is free software; you can redistribute it and/or modify
         it under the terms of the GNU General Public License as published by
         the Free Software Foundation; either version 2 of the License, or
         (at your option) any later version.

         OCOMON is distributed in the hope that it will be useful,
         but WITHOUT ANY WARRANTY; without even the implied warranty of
         MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
         GNU General Public License for more details.

         You should have received a copy of the GNU General Public License
         along with Foobar; if not, write to the Free Software
         Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
  */session_start();

	include ("../../includes/include_geral.inc.php");
	include ("../../includes/include_geral_II.inc.php");

	$_SESSION['s_page_admin'] = $_SERVER['PHP_SELF'];

	print "<HTML>";
	print "<BODY bgcolor=".BODY_COLOR.">";

	$auth = new auth;
	$auth->testa_user($_SESSION['s_usuario'],$_SESSION['s_nivel'],$_SESSION['s_nivel_desc'],1);

	print "<BR><B>".TRANS('SUBTTL_EMAIL').":</B><BR>";
	
	if (!isset($_GET['local_id'])){
		$query = "SELECT * from contatos_email order by contact_email";
		$resultado = mysql_query($query);
	}else{
		$query = "SELECT * from contatos_email where contact_local = ".$_GET['local_id']." order by contact_email";
		$resultado = mysql_query($query);
	}

	if ((!isset($_GET['action'])) and !isset($_POST['submit'])){

        print "<TD align='right'><a href='emails.php?action=incluir&local_id=".$_GET['local_id']."'>".TRANS('TXT_INCLUDE_EMAIL').".</a></TD><BR>";
        if (mysql_numrows($resultado) == 0)
        {
            echo mensagem(TRANS('MSG_NOT_EMAIL_IN_SYSTEM'));
        }
        else
        {
                $linhas = mysql_numrows($resultado);
                print "<td class='line'>";
                print "".TRANS('THERE_IS_ARE')." <b>".$linhas."</b> ".TRANS('TXT_EMAIL_CAD_IN_SYSTEM').".<br>";
                print "<TABLE border='0' cellpadding='5' cellspacing='0'  width='50%'>";
                print "<TR class='header'><td class='line'>".TRANS('COL_EMAIL')."</TD><td class='line'><b>".TRANS('COL_EDIT')."</b></TD><td class='line'><b>".TRANS('COL_DEL')."</b></TD>";
                $j=2;
                while ($row=mysql_fetch_array($resultado))
                {
                        if ($j % 2)
                        {
				$trClass = "lin_par";
                        }
                        else
                        {
				$trClass = "lin_impar";
                        }
                        $j++;

			print "<tr class=".$trClass." id='linhax".$j."' onMouseOver=\"destaca('linhax".$j."','".$_SESSION['s_colorDestaca']."');\" onMouseOut=\"libera('linhax".$j."','".$_SESSION['s_colorLinPar']."','".$_SESSION['s_colorLinImpar']."');\"  onMouseDown=\"marca('linhax".$j."','".$_SESSION['s_colorMarca']."');\">";
						print "<td class='line'>".$row['contact_email']."</TD>";
			print "<td class='line'><a onClick=\"redirect('emails.php?action=alter&cod=".$row['contact_id']."')\"><img height='16' width='16' src='".ICONS_PATH."edit.png' title='".TRANS('HNT_EDIT')."'></a></TD>";
			print "<td class='line'><a onClick=\"confirma('".TRANS('MSG_EXCLUDE_REG_IN_SYSTEM')."','emails.php?action=excluir&cod=".$row['contact_id']."&local_id=".$_GET['local_id']."')\"><img height='16' width='16' src='".ICONS_PATH."drop.png' title='".TRANS('HNT_DEL')."'></a></TD>";
			print "</TR>";
		       }
                print "</TABLE>";
	}

	} else
	if ((isset($_GET['action'])  && $_GET['action']=="incluir") && (!isset($_POST['submit']))) {
		
		
		print "<B>".TRANS('SUBTTL_CAD_EMAIL').":<br><a href='emails.php?local_id=".$_GET['local_id']."'>".TRANS('TXT_LIST_GENERAL')."</a>  <br>";
		print "<form name='incluir' method='post' action='".$_SERVER['PHP_SELF']."' id='idDesc'>";
		
		print "<input type='hidden' name='local_id' value='".$_GET['local_id']."'>";
		
		print "<TABLE border='0' cellpadding='5' cellspacing='0' width='50%'>";
		print "<tr>";
		print "<td width='10%'bgcolor=".TD_COLOR.">".TRANS('COL_EMAIL')."</td><td class='line'><input type='text' class='text' name='descricao'></td>";
		print "</tr>";

		print "<tr><td class='line'><input type='submit' class='button' name='submit' value='".TRANS('BT_INCLUDE')."'></td>";

		print "<td class='line'><input type='reset'  class='button' name='reset' value='".TRANS('BT_CANCEL')."' onclick=\"javascript:history.back()\"></td></tr>";

		print "</table>";
		print "</form>";
	} else

	if ((isset($_GET['action'])  && $_GET['action']=="alter") && (!isset($_POST['submit']))) {
		$qry = "SELECT * from contatos_email where contact_id = ".$_GET['cod']."";
		$exec = mysql_query($qry);
		$rowAlter = mysql_fetch_array($exec);

		print "<B>".TRANS('TXT_ALTER_EMAIL_NETWORK').":<br>";
		print "<form name='alter' method='post' action='".$_SERVER['PHP_SELF']."' onSubmit='return valida()' >";
		print "<TABLE border='0' cellpadding='1' cellspacing='0' width='50%'>";
		print "<tr>";
		print "<td bgcolor=".TD_COLOR."><b>".TRANS('COL_EMAIL')."</b></td><td class='line'><input type='text' class='text' name='descricao' id='idDesc' value='".$rowAlter['dom_desc']."'>";

		print " <input type='hidden' name='cod' value='".$_GET['cod']."'></td>";
		print "</tr>";

		print "<tr><td class='line'><input type='submit'  class='button' name='submit' value='".TRANS('BT_ALTER')."'></td>";
		print "<td class='line'><input type='reset'  class='button' name='reset' value='".TRANS('BT_CANCEL')."' onclick=\"javascript:history.back()\"></td></tr>";

		print "</table>";
		print "</form>";
	} else

	if (isset($_GET['action'])  && $_GET['action']=="excluir"){

			$qry = "DELETE FROM contatos_email where contact_id = ".$_GET['cod']."";
			$exec = mysql_query($qry) or die (TRANS('MSG_ERR_DEL_REG'));
			if($exec){
				print "<script>mensagem('".TRANS('MSG_COR_DEL_REG')."'); window.opener.location.reload(); window.location.href='emails.php?local_id=".$_GET['local_id']."'; </script>";
			}else{
				print "<script>mensagem('".TRANS('MSG_ERR_DEL_REG')."'); window.opener.location.reload(); window.location.href='emails.php?local_id=".$_GET['local_id']."'; </script>";
			}
		
	} else

	if ($_POST['submit']== TRANS('BT_INCLUDE')) {
		if (!empty($_POST['descricao'])){
			$qry = "select * from contatos_email where contact_email = '".$_POST['descricao']."'";
			$exec= mysql_query($qry);
			$achou = mysql_numrows($exec);
			if ($achou){

				print "<script>mensagem('".TRANS('MSG_EMAIL_CAD_SYSTEM')."'); history.go(-2)(); </script>";

			} else {

				$qry = "INSERT INTO contatos_email (contact_local, contact_email) values (".$_POST['local_id'].", '".noHtml($_POST['descricao'])."')";
				$exec = mysql_query($qry) or die (TRANS('MSG_ERR_INCLUDE_REG'). $qry);

				print "<script>mensagem('".TRANS('MSG_DATA_INCLUDE_OK')."'); window.opener.location.reload(); redirect('emails.php?local_id=".$_POST['local_id']."');</script>";
				}
		} else {
				print "<script>mensagem('".TRANS('MSG_EMPTY_DATA')."'); redirect('emails.php');</script>";
		}

	} else

	if ($_POST['submit'] = TRANS('BT_ALTER')){
		if ((!empty($_POST['descricao']))){

			$qry = "UPDATE contatos_email set contact_email='".noHtml($_POST['descricao'])."' where contact_id=".$_POST['cod']."";
			$exec= mysql_query($qry) or die(TRANS('MSG_NOT_ALTER_REG'). $qry);

			print "<script>mensagem('".TRANS('MSG_DATA_ALTER_OK')."'); window.opener.location.reload(); history.go(-2)(); </script>";

		} else {

			print "<script>mensagem('".TRANS('MSG_EMPTY_DATA')."'); history.go(-2)(); </script>";

		}
	}

print "</body>";
?>
<script type="text/javascript">
<!--
	function valida(){
		var ok = validaForm('idDesc','','Descrição',1);
		return ok;
	}
-->
</script>
<?php 
print "</html>";

?>