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


#pegar valores do formulário cadastro_promocoes

$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
$valor_promocional = filter_input(INPUT_POST, 'valor_promocional', FILTER_SANITIZE_STRING);
$nome_promocao = filter_input(INPUT_POST, 'nome_promocao', FILTER_SANITIZE_STRING);
$data_inicio = filter_input(INPUT_POST, 'data_inicio', FILTER_SANITIZE_STRING);
$data_final = filter_input(INPUT_POST, 'data_final', FILTER_SANITIZE_STRING);


$ativo = 'sim';


#fim resgate de valores





 #insere dados na tabela promoçoes


$result_promocao = "INSERT INTO prmocoes (servico, data_inicial, data_final, valor_promocional,  	nome_promocao, cod_empresa, ativo) VALUES ('$servico', '$data_inicio', '$data_final', '$valor_promocional', '$nome_promocao', '$cod_empresa', '$ativo')";
$result_promocao = mysqli_query($conn, $result_promocao);

if(mysqli_insert_id($conn)){
	header("Location: cadastrar_promocoes.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Promoção não cadastrada</p>";
	header("Location: cadastrar_promocoes.php");
}
?>
