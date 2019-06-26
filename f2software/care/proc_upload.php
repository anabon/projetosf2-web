<?php
session_start();
include_once("config/conexao.php");

$msg = $_SESSION['login'];;

$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "care";

$nome_fantasia = filter_input(INPUT_POST, 'nome_fantasia', FILTER_SANITIZE_STRING);



#selecionar id_empresa
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "care"; 
$conexao = mysql_connect($servidor,$usuario,$senha);  
mysql_select_db($dbname); 


$res = mysql_query("SELECT ID_empresa, cpf FROM empresa WHERE cpf = '$msg'"); 
#$escrever = mysql_fetch_array($res);
while($empresa=mysql_fetch_array($res)){
$cod_empresa = $empresa['ID_empresa'];
 

}
 
if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        mysql_connect($host,$username,$password) or die("Impossível Conectar"); 
 
        @mysql_select_db($db) or die("Impossível Conectar"); 
 
mysql_query("INSERT INTO perfil_empresa (logo, nome_fantasia, cod_empresa) VALUES ('$mysqlImg', '$nome_fantasia', '$cod_empresa')") or die("O sistema não foi capaz de executar a query"); 
 
        unlink($nomeFinal);
         
        #header("location:exibir.php");
    }
} 
else { 
    echo"Você não realizou o upload de forma satisfatória."; 
} 
 
?>