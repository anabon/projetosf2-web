<?php
		$sql_mov = "SELECT DISTINCT `descriccion` FROM `productos` ORDER BY `descriccion` ASC ";
		$result_mov = mysql_query($sql_mov);
		$options_mov = '';
		while ($row_mov = mysql_fetch_array($result_mov))
			{	$options_mov = $options_mov.'<option value="'.$row_mov['descriccion'].'">'.$row_mov['descriccion'].'</option>'; }
	?> 
    
    
 
<?php

	

$sql_prd = "SELECT DISTINCT `descriccion` FROM `productos` ORDER BY `descriccion` ASC "; 
	      $result_prd = mysql_query($sql_prd); 
	      $options_prd = ''; 
	    while ($row_prd = mysql_fetch_array($result_prd))
		{	$options_prd = $options_prd.'<option value="'.$row_prd['descriccion'].'">'.$row_prd['descriccion'].'</option>'; }



$sql_marca = "SELECT DISTINCT `marca` FROM `productos` ORDER BY `marca` ASC "; 
	      $result_marca = mysql_query($sql_marca); 
	      $options_marca = ''; 
	    while ($row_marca = mysql_fetch_array($result_marca))
		{	$options_marca = $options_marca.'<option value="'.$row_marca['marca'].'">'.$row_marca['marca'].'</option>'; }
		

?>
<?php
		$sql_mov = "SELECT DISTINCT `nombre` FROM `provedor` ORDER BY `nombre` ASC ";
		$result_mov = mysql_query($sql_mov);
		$options_prov = '';
		while ($row_mov = mysql_fetch_array($result_mov))
			{	$options_prov = $options_prov.'<option value="'.$row_mov['nombre'].'">'.$row_mov['nombre'].'</option>'; }
	?> 

<?php
		$sql_mov = "SELECT DISTINCT `precio_l` FROM `productos` ORDER BY `precio_l` ASC ";
		$result_mov = mysql_query($sql_mov);
		$preciol = '';
		while ($row_mov = mysql_fetch_array($result_mov))
			{	$preciol = $preciol.'<option value="'.$row_mov['precio_l'].'">'.$row_mov['precio_l'].'</option>'; }
	?> 

<?php
		$sql_mov = "SELECT DISTINCT `nombre` FROM `administrador` ORDER BY `nombre` ASC ";
		$result_mov = mysql_query($sql_mov);
		$options_admin = '';
		while ($row_mov = mysql_fetch_array($result_mov))
			{	$options_admin = $options_admin.'<option value="'.$row_mov['nombre'].'">'.$row_mov['nombre'].'</option>'; }
			
			
			$sql_prd = "SELECT DISTINCT `cedula` FROM `administrador` ORDER BY `cedula` ASC "; 
	      $result_prd = mysql_query($sql_prd); 
	      $options_admi = ''; 
	    while ($row_prd = mysql_fetch_array($result_prd))
		{	$options_admi = $options_admi.'<option value="'.$row_prd['cedula'].'">'.$row_prd['cedula'].'</option>'; }
	?> 
    




