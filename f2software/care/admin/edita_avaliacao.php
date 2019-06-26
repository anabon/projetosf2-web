<?php
session_start();
include_once("../config/conexao.php");
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$avaliacao = filter_input(INPUT_POST, 'avaliacao', FILTER_SANITIZE_STRING);

echo "$empresa";
echo "$avaliacao";


$result_empresa = "UPDATE empresa SET situacao_aprovacao = '$avaliacao'";
$resultado_empresa = mysqli_query($conn, $result_empresa);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	#header("Location: edita_avaliacao.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	#header("Location: edita_avaliacao.php");
}

?>