<?php

//Configuraçoes:

$contador = "reg.txt" ; //caminho para gravação
define ("adi", 1); //quantidade a ser adicionada

//fim confg

$id = fopen ($contador, "r+");
$conteudo = fread ($id, filesize ($contador));
fclose($id);
clearstatcache();

$conteudo += adi;

$id = fopen ($contador, "r+");
fwrite ($id, $conteudo, strlen($conteudo) + 5);
fclose ($id);
clearstatcache();
//echo ($conteudo);


?>