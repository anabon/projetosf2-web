<?php
header("Content-type: text/html;charset=utf-8");
setlocale(LC_ALL,'pt_BR.UTF8');
mb_internal_encoding('UTF8');
mb_regex_encoding('UTF8');
include('conexao.php');

try {
	$conn = new mysqli($servername, $username, $password, $database) or die('Unable to connect');
	mysqli_query($conn, "SET NAMES 'utf8'");
	$json = json_decode(file_get_contents('php://input', true)); // <---- Usei esse exemplo, mas você pode usar qualquer "raw JSON"
	$flag['code'] = 0;

	$sql = "insert into usuario (NOME_USUARIO, ENDERECO_USUARIO, BAIRRO_USUARIO, CIDADE_USUARIO, CPF_USUARIO, RG_USUARIO, DATA_CADASTRO, DATA_NASCIMENTO, SEXO, FOTO, LOGIN_USUARIO, SENHA_USUARIO)
	values
	('{$json->{'NOME_USUARIO'}}',
	'{$json->{'ENDERECO_USUARIO'}}',
	'{$json->{'BAIRRO_USUARIO'}}',
	'{$json->{'CIDADE_USUARIO'}}',
	'{$json->{'CPF_USUARIO'}}',
	'{$json->{'RG_USUARIO'}}',
	'{$json->{'DATA_CADASTRO'}}',
	'{$json->{'DATA_NASCIMENTO'}}',
	'{$json->{'SEXO'}}',
	'{$json->{'FOTO'}}',
	'{$json->{'LOGIN_USUARIO'}}',
	'{$json->{'SENHA_USUARIO'}}');";

	

	//echo $sql;

	try {
		if (mysqli_query($conn, $sql)) {
			$flag['code'] = 1;
			echo "New record created successfully";
		} else {
			echo "Sem sucesso - ";
			mysqli_close($conn);
		}
	} catch(SQLException $e1) {
		echo $e1;
	}
} catch(SQLException $e2) {
	echo $e2;
}

?>
