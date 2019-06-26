<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<title>Paginaci&oacute;n de resultados</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
include_once("config.php");



$consulta_noticias = "SELECT * FROM pacientep";
$rs_noticias = mysql_query($consulta_noticias, $con);
$num_total_registros = mysql_num_rows($rs_noticias);
//Si hay registros
if ($num_total_registros > 0) {
	//Limito la busqueda
	$TAMANO_PAGINA = 10;
        $pagina = false;

	//examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
        
	if (!$pagina) {
		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina - 1) * $TAMANO_PAGINA;
	}
	//calculo el total de paginas
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

	echo '<p>Esto es un ejemplo de paginacion con PHP recogiendo los datos de los articulos publicados en mi pagina principal.</p>';

	//pongo el nï¿½mero de registros total, el tamaï¿½o de pï¿½gina y la pï¿½gina que se muestra
	echo '<h3>Numero de articulos: '.$num_total_registros .'</h3>';
	echo '<h3>En cada pagina se muestra '.$TAMANO_PAGINA.' articulos ordenados por fecha de forma descendente.</h3>';
	echo '<h3>Mostrando la pagina '.$pagina.' de ' .$total_paginas.' paginas.</h3>';
	$consulta = "SELECT cod_alu, p_nom FROM pacientep ORDER BY fecha DESC LIMIT ".$inicio."," . $TAMANO_PAGINA;
	$rs = mysql_query($consulta, $con);
	while ($row = mysql_fetch_array($rs)) {
		?>
		<table style="border:1px  #666666; color:# 666666 ; width:800px; text-align:center;" >
  <tbody>
    <tr style="background:#6666666;">
      <td bgcolor="#CCCCCC" >Codigo</td>
      <td bgcolor="#CCCCCC">Nombre</td>
      <td bgcolor="#CCCCCC">Apellido</td>
	  <td bgcolor="#CCCCCC">Operaciones</td>
    </tr>
		
		<?
		
		echo "<tr>".
      "<td>".$row["cod_alu"]."</td>".
      "<td>".$row["p_nom"]."</td>".
	  "<td>".$row["p_ape"]."</td>".
    
      // Establecemos un hipervínculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el número de cédula en su
      // dirección a través de la variable Cedula
      "<td><a  href=nuevaconsul.php?codigo=".$row["cod_alu"]."><img src='../images/nueva_cita.png' width='25' alt='Edicion' title='AGREGAR CONSULTA NUEVA DE  ".$row["p_nom"]."'></a>
	  <a  href=modificar.php?codigo=".$row["cod_alu"]."><img src='../images/ver.png' width='25' alt='Edicion' title='CONSULTAR LOS DATOS DE ".$row["p_nom"]."'></a> <a  href=actualizar.php?codigo=".$row["cod_alu"]."><img src='../images/editar.png' width='25' alt='Edicion' title='EDITAR A  ".$row["p_nom"]."'></a>
	  <a  href=eliminar.php?codigo=".$row["cod_alu"]."><img src='../images/eliminar.png' width='25' alt='Edicion' title='ELIMINAR A  ".$row["p_nom"]."'></a>
	 </td>".
    "</tr>";?>
	
	</table>	
	<?
	}

	echo '<p>';

	if ($total_paginas > 1) {
		if ($pagina != 1)
			echo '<a href="'.$url.'?pagina='.($pagina-1).'"><img src="images/izq.gif" border="0"></a>';
		for ($i=1;$i<=$total_paginas;$i++) {
			if ($pagina == $i)
				//si muestro el ï¿½ndice de la pï¿½gina actual, no coloco enlace
				echo $pagina;
			else
				//si el ï¿½ndice no corresponde con la pï¿½gina mostrada actualmente,
				//coloco el enlace para ir a esa pï¿½gina
				echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
		}
		if ($pagina != $total_paginas)
			echo '<a href="'.$url.'?pagina='.($pagina+1).'"><img src="images/der.gif" border="0"></a>';
	}
	echo '</p>';
}
?>
</body>
</html>