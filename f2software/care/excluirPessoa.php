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

	$sql = "delete from pessoa where id = {$json->{'id'}}";

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
