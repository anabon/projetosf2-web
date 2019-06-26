<?php
session_start();
include_once("../config/conexao.php");

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$result_empresa = "INSERT INTO cad_adm (login_adm, senha, nome, telefone, email) VALUES ('$login', '$senha', '$nome', '$telefone', '$email')";
$resultado_usuario = mysqli_query($conn, $result_empresa);


if(mysqli_insert_id($conn)){
	header("Location: cadastro_adm.php");
	
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Empresa não foi cadastrado com sucesso</p>";
	header("Location: cadastro_adm.php");
	
}
?>
