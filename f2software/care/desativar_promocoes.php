<?php
session_start();
include_once("config/conexao.php");

$msg = $_SESSION['login'];

//Acessando valores dentro de uma sessão:
#echo $_SESSION['login'];
#echo $_SESSION['nome_login'];

#selecionar id_empresa
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "care"; 
$conexao = mysql_connect($servidor,$usuario,$senha);  
mysql_select_db($dbname); 


$res = mysql_query("SELECT ID_empresa, cpf FROM empresa WHERE cpf = '$msg'"); 

while($empresa=mysql_fetch_array($res))
{

	$cod_empresa = $empresa['ID_empresa'];

 

}

# fim result id empresa


#pegar valores do formulário desativar_promocao

$promocao = filter_input(INPUT_POST, 'promocao', FILTER_SANITIZE_STRING);
$desativar = filter_input(INPUT_POST, 'desativar', FILTER_SANITIZE_STRING);
echo $desativar;


$ativo = 'nao';


#fim resgate de valores





 #insere dados na tabela promoçoes

$result_promocao = "UPDATE prmocoes set ativo ='$ativo' WHERE id_promocao ='$promocao' AND cod_empresa = '$cod_empresa'";

$result_promocao = mysqli_query($conn, $result_promocao);

if(mysqli_insert_id($conn)){
	#header("Location: controlar_promocoes.php");
}else{
	#$_SESSION['msg'] = "<p style='color:red;'>Promoção não cadastrada</p>";
	#header("Location: controlar_promocoes.php");
}
?>
