<?php
session_start();
include_once("config/conexao.php");

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'CEP', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade =  filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$whats = filter_input(INPUT_POST, 'whats', FILTER_SANITIZE_STRING);
$im = filter_input(INPUT_POST, 'im', FILTER_SANITIZE_STRING);
$responsavel_tecnico = filter_input(INPUT_POST, 'responsavel_tecnico', FILTER_SANITIZE_STRING);
$situacao = 'aguardando';






//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_empresa = "INSERT INTO empresa (login, senha, nome, cep, endereco, bairro, cidade, estado, telefone, email, cpf, rg, whats, incricao_municipal, responsavel_tecnico, data_cadastro, situacao_aprovacao) VALUES ('$login', '$senha', '$nome', '$cep', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$email', '$cpf', '$rg', '$whats', '$im', '$responsavel_tecnico', NOW(), '$situacao')";
$resultado_usuario = mysqli_query($conn, $result_empresa);

if(mysqli_insert_id($conn)){
	header("Location: cadastro_empresa.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Empresa não foi cadastrado com sucesso</p>";
	header("Location: cadastro_empresa.php");
}
?>
