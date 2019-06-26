<?php
  header("Content-type: text/html;charset=utf-8");
	include('conexao.php');

    $con = mysql_connect($servername, $username, $password) or die("connection failed");
    mysql_select_db($database,$con) or die("Falha na conexão!");

    //@$id = $_REQUEST['id'];
	//$json = file_get_contents('php://input');

	$json = json_decode(file_get_contents('php://input',true)); // <---- Usei esse exemplo, mas você pode usar qualquer "raw JSON"

   // @$nome = addslashes['nome'];
	//@$cel = addslashes['cel'];


    $flag['code'] = 0;

    if($r = mysql_query("insert into tag (nome, cel) values ('{$json->{'tag'}}', '{$json->{'cel'}}')", $con)) {
        $flag['code'] = 1;
		$ar = mysql_query("select * from usuario", $con);
        echo "Sucesso - ".var_dump($ar);
		/*
		$arr = mysqli_query($con,"select * from pessoa");
		echo var_dump($arr);
		*/
    } else {
		echo "Sem sucesso - ";
	}

    print(json_encode($flag));
    mysql_close($con);

?>
