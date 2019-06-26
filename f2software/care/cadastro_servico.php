<?php
session_start();
include_once("config/conexao.php");

$msg = $_SESSION['login'];

//Acessando valores dentro de uma sessão:
#echo $_SESSION['login'];
#echo $_SESSION['nome_login'];

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$valor = filter_input (INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$tempo = filter_input(INPUT_POST, 'tempo', FILTER_SANITIZE_STRING);
$taxa_delivery= filter_input(INPUT_POST, 'taxa_delivery', FILTER_SANITIZE_STRING);
$delivery = filter_input(INPUT_POST, 'delivery', FILTER_SANITIZE_STRING);
#$res = mysql_query("SELECT ID_empresa, cpf FROM empresa WHERE cpf = '$msg'"); 
$promocao = filter_input(INPUT_POST, 'promocao', FILTER_SANITIZE_STRING);

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

$result_servico = "INSERT INTO servicos (descricao_servico, valor_servico, tempo_execulcao, taxa_minima_delivery, delivery, codigo_empresa, servico_promocao) VALUES ('$descricao', '$valor', '$tempo', '$taxa_delivery', '$delivery', '$cod_empresa', '$promocao')";
$resultado_servico = mysqli_query($conn, $result_servico);

if(mysqli_insert_id($conn)){
	header("Location: cadastro_servicos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Serviço não cadastrado </p>";
	header("Location: cadastro_servicos.php");
}
?>
