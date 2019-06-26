<?php

$aDirectories = glob("C:/TESTE/*");

foreach($aDirectories as $sDirectory)
{
 $sModified=date("Y/m/d H:i:s",filectime($sDirectory));
 $aContent[$sModified]=$sDirectory;
}

krsort($aContent,SORT_STRING);

foreach($aContent as $sModified=>$sDirectory)
{
 echo utf8_decode("<strong>Data de Modificação:</strong> {$sModified} - <strong>Diretório:</strong> {$sDirectory}<br />");
}

?>