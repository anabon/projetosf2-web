<?php
session_start();
include_once("config/conexao.php");

$msg = $_SESSION['login'];

//Acessando valores dentro de uma sessão:
#echo $_SESSION['login'];
#echo $_SESSION['nome_login'];

#pegar valores do formulário cadastro_funcionario

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input (INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$horario_abertura = filter_input(INPUT_POST, 'horario_abertura', FILTER_SANITIZE_STRING);
$horario_final = filter_input(INPUT_POST, 'horario_final', FILTER_SANITIZE_STRING);
$delivery = filter_input(INPUT_POST, 'delivery', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$servico = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);

#fim resgate de valores


#selecionar id_empresa
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "care"; 
$conexao = mysql_connect($servidor,$usuario,$senha);  
mysql_select_db($dbname); 


$res = mysql_query("SELECT ID_empresa, cpf FROM empresa WHERE cpf = '$msg'"); 
#$escrever = mysql_fetch_array($res);
while($empresa=mysql_fetch_array($res))
{

	$cod_empresa = $empresa['ID_empresa'];
 

}

# fim result id empresa



 #insere dados na tabela funcionarios

if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        mysql_connect($host,$username,$password) or die("Impossível Conectar"); 
 
        @mysql_select_db($db) or die("Impossível Conectar"); 
 
mysql_query("INSERT INTO funcionarios (logo, nome_funcionario cod_empresa) VALUES ('$mysqlImg', '$nome', '$cod_empresa')") or die("O sistema não foi capaz de executar a query"); 
 
        unlink($nomeFinal);
         
        #header("location:exibir.php");
    }
} 
else { 
    echo"Você não realizou o upload de forma satisfatória."; 
} 
 
?>









