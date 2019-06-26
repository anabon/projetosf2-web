<?php
	header("Content-type: text/html;charset=utf-8");
	include('conexao.php');

	$conn = mysqli_connect($servername, $username, $password, $database) or die('Unable to connect');
	mysqli_query($conn, "SET NAMES 'utf8'");
	if(mysqli_connect_error($conn)) {
		echo "Failed to Connect to Database ".mysqli_connect_error();
	}

	//$name = $_POST['Query'];

	$sql = "select * from pessoa where id = ".$_GET['id'];

	$query = mysqli_query($conn, $sql);
	$i = 0;
	if($query) {
		while($row = mysqli_fetch_array($query)) {
			$data[] = $row;
			/*echo $row[$i]." -";
			$i++;*/
		}
		print(json_encode($data));
	} else {
		echo('Not Found ');
	}
	mysqli_close($conn);

?>
