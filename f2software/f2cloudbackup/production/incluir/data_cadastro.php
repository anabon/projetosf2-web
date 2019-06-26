<?php
$data_cadastro = substr($data_cadastro,8,2) . "/" .
substr($data_cadastro,5,2) . "/" .
substr($data_cadastro,0,4);

$hora_cadastro = substr($hora_cadastro,0,2) . "h" .
substr($hora_cadastro,3,2) . "min";

?>
