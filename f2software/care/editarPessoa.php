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

	$sql = "update usuario set
		NOME_USUARIO  = '{$json->{'NOME_USUARIO'}}',
		ENDERECO_USUARIO  = '{$json->{'ENDERECO_USUARIO'}}',
		BAIRRO_USUARIO  = '{$json->{'BAIRRO_USUARIO'}}',
		CIDADE_USUARIO  = '{$json->{'CIDADE_USUARIO'}}',
		CPF_USUARIO = '{$json->{'CPF_USUARIO'}}',
		RG_USUARIO  = '{$json->{'RG_USUARIO'}}',
		DATA_NASCIMENTO  = '{$json->{'DATA_NASCIMENTO'}}',
		SEXO = '{$json->{'SEXO'}}',
	    LOGIN_USUARIO  = '{$json->{'LOGIN_USUARIO'}}',
		SENHA_USUARIO  = '{$json->{'SENHA_USUARIO'}}'
 		where ID = {$json->{'ID'}}";

	//echo $sql;

	try {
		if (mysqli_query($conn, $sql)) {
			$flag['code'] = 1;
			echo "New record created successfully";
		} else {
			echo "Sem sucesso - ";
			mysqli_close($conn);
		}
	} catch(Exception $e1) {
		echo $e1;
	}
} catch (Exception $e) {
	echo "Erro =--> ".$e;
}
$conn->close();
?>
