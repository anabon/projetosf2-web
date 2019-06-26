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
	include ("../../includes/classes/paging.class.php");

	$_SESSION['s_page_admin'] = $_SERVER['PHP_SELF'];

	print "<HTML>";
	print "<BODY bgcolor=".BODY_COLOR.">";

	$auth = new auth;
	$auth->testa_user($_SESSION['s_usuario'],$_SESSION['s_nivel'],$_SESSION['s_nivel_desc'],1);

	$PAGE = new paging("PRINCIPAL");
	$PAGE->setRegPerPage($_SESSION['s_page_size']);
	
		if (isset($_POST['search'])){
			$search = $_POST['search'];

		} else
			$search = "";

		$query = $QRY['locais'];

		if (isset($_GET['cod'])) {
			$query.= "WHERE l.loc_id = ".$_GET['cod']." ";
		} else
		if (isset($_POST['search'])) {
			$query.= " WHERE lower(l.local) like lower(('%".noHtml($_POST['search'])."%')) ";
		}
		$query .="ORDER  BY reit_nome, LOCAL";
		$resultado = mysql_query($query) or die(TRANS('MSG_ERR_QRY_CONS'));
		$registros = mysql_num_rows($resultado);
		
		if (isset($_GET['LIMIT']))
			$PAGE->setLimit($_GET['LIMIT']);
		$PAGE->setSQL($query,(isset($_GET['FULL'])?$_GET['FULL']:0));

	print "<FORM method='POST' action='".$_SERVER['PHP_SELF']."' onSubmit=\"return valida()\">";
	print "<TABLE border='0' align='left' width='100%' bgcolor=".BODY_COLOR.">";
			
	if ((!isset($_GET['action'])) && !isset($_POST['submit'])) {
	
		$PAGE->execSQL();
		
	

		if (mysql_num_rows($resultado) == 0)
		{
			if (isset($_POST['search'])) {
				print "<tr>".//<td>".TRANS('FIELD_SEARCH')."</td>".
					"<td colspan='4'><input type='text' class='text' name='search' id='idSearch' value='".$search."'>&nbsp;".
					"<input type='submit' name='BT_SEARCH' class='button' value='".TRANS('BT_FILTER')."'>".
					"</td></tr>";

					print "<script>foco('idSearch');</script>";
			}

			print "<tr><td>";
			print mensagem(TRANS('MSG_NO_RECORDS'));
			print "</tr></td>";
		} else {
			$cor=TD_COLOR;
			$cor1=TD_COLOR;
			print "<tr><td colspan='8' class='line'>";
			print "<B>".TRANS('FOUND')." <font color=red>".$PAGE->NUMBER_REGS."</font> ".TRANS('RECORDS_IN_SYSTEM').". ".TRANS('SHOWING_PAGE')." ".$PAGE->PAGE." (".$PAGE->NUMBER_REGS_PAGE." ".TRANS('RECORDS').")</B></TD></tr>";

			print "<tr><td>";
			print "<TABLE border='0' cellpadding='5' cellspacing='0' align='center' width='100%'>";

			print "<tr>".//<td>".TRANS('FIELD_SEARCH')."</td>".
					"<td colspan='4'><input type='text' class='text' name='search' id='idSearch' value='".$search."'>&nbsp;".
					"<input type='submit' name='BT_SEARCH' class='button' value='".TRANS('BT_FILTER')."'>".
				"</td></tr>";
				if (isset($_POST['search'])) {
					print "<script>foco('idSearch');</script>";
				}

			print "<TR class='header'><td class='line'><b>".TRANS('OCO_LOCAL')."</b></TD><td class='line'><b>".TRANS('OCO_TELEFONE')."</b></TD><td class='line'><b>".TRANS('COL_EMAIL')."</b></TD>";

					$j=2;
						
			while ($row = mysql_fetch_array($PAGE->RESULT_SQL))
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
				if ($row['loc_status'] == 0) $lstatus =TRANS('INACTIVE');else $lstatus = TRANS('ACTIVE');
				print "<tr class=".$trClass." id='linhax".$j."' onMouseOver=\"destaca('linhax".$j."','".$_SESSION['s_colorDestaca']."');\" onMouseOut=\"libera('linhax".$j."','".$_SESSION['s_colorLinPar']."','".$_SESSION['s_colorLinImpar']."');\"  onMouseDown=\"marca('linhax".$j."','".$_SESSION['s_colorMarca']."');\">";
				print "<td class='line'>".$row['local']."</td>";
				
				print "<td class='line'>"; 
						
						print "<SELECT class='select' name='telefone'\">";
					
						$sqlCont="select contact_id,contact_tel from contatos_tel where contact_local = '".$row['loc_id']."'order by contact_tel";
						$commitCont = mysql_query($sqlCont);	
						while ($rowCont = mysql_fetch_array($commitCont))
						{
								print "<option value=".$rowCont['contact_id'].">".$rowCont['contact_tel']."</option>";
						}
						
						print "</select>";
				print "</td>";
				
				print "<td class='line'>"; 
				
						print "<SELECT class='select' name='email'\">";
					
						$sqlCont="select contact_id,contact_email from contatos_email where contact_local = '".$row['loc_id']."'order by contact_email";
						$commitCont = mysql_query($sqlCont);	
						while ($rowCont = mysql_fetch_array($commitCont))
						{
								print "<option value=".$rowCont['contact_id'].">".$rowCont['contact_email']."</option>";
						}
						
						print "</select>";
				print "</td>";
			print "</TR>";
			}
               		print "</TABLE>";
               		print "</td></tr>";
			print "<tr><td colspan='8'>";
				$PAGE->showOutputPages();
			print "</td></tr>";
         	}
	}

print "</table>";
print "</form>";
print "</body>";
print "</html>";
