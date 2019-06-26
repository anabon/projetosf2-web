<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Documento sin t&iacute;tulo</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

<?php
 function valoracion($imc) {
 if ($imc >= 18.5 and $imc <= 24.99) {
   $valoracion = 'NORMAL';
 } elseif ($imc >= 25 and $imc <= 29.99) {
  $valoracion = 'PREOBESO';
 } elseif ($imc >= 30) {
  $valoracion = 'OBESO';
 } elseif ($imc < 18.5) { $valoracion = 'INFRAPESO'; }
 return $valoracion;
 }
  
 function imc($peso, $altura) { return $peso/($altura * $altura); }
 
 function resultado ($peso, $altura, $imc){
  $html = '<h3>IMC</h3>'; 
  $html.= '<table>';
  $html.= '<tr><th><b>Peso</b></th><th>';
  $html.= $peso.'</th><th>Kg</th></tr>';
  $html.= '<tr><td><b>Altura</b></td>';
  $html.= '<td>'.$altura.'</td><td>Mt</td></tr>';
  $html.= '<tr><td><b>IMC</b></td>';
  $html.= '<td>'.number_format($imc, 2).'</td><td>kg/m<sup>2</sup></td></tr>';
  $html.= '<tr><td><b>Valoración</b></td><td>'.valoracion($imc);
  $html.= '</td><td></td></tr></table>';
  return $html.'<br />';
 }
 
 if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
     $peso = $_POST['peso'];
     $altura = $_POST['altura'];  
     $html = resultado($peso, $altura, imc($peso, $altura));
     echo $html;
 } else { 
  ?>
  <form action='' method='post' >
  <fieldset>
   <legend>Índice de masa corporal</legend>
   <p>
   <label for='peso'>Peso</label>
   <input min='1' max='500' name='peso' type='number' value='1' /> Kg
   </p>
   <p>
   <label for='altura'>Altura</label>
   <input min='1.0' max='3.0' maxname='altura' type='number' value='1' /> mts
   </p>
   <p><input type='submit' value='Calcular' /></p>
  </fieldset>
  </form>
  <?
 }
?>
</body>
</html>
