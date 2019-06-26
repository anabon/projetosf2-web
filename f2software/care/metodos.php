<?php
header("Content-type: text/html;charset=utf-8");
setlocale(LC_ALL,'pt_BR.UTF8');
mb_internal_encoding('UTF8');
mb_regex_encoding('UTF8');

ini_set('memory_limit', '-1');




class Metodos {

	public function retornaUltimoRegistroTabela($usuario, $conn) {
		$cd = 0;
		try {
			$sql = "select id from ". $usuario ." order by id desc limit 1";

			$query = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($query)) {
				$cd = $row['id'];
			}

		} catch(SQLException $e2) {
			echo $e2;
		}

		return $cd;
	}

	public function salvaImagem($conn, $json, $cod) {
		try {
			$flag['code'] = 0;
			$blobData = base64_decode($json->{'imagem64'});
			$stmt = $conn->prepare("update tag set imagem = ? where id = ".$cod." and login = '{$json->{'login'}}'");
			$stmt->bind_param('s',  $blobData);
			$stmt->execute();

			if ($stmt->execute()) {
				echo "Imagem salva!";
			} else {
				echo "Sem sucesso - ";
			}

			$stmt->close();
			$conn->close();
		} catch (Exception $e) {
			echo "Erro =--> ".$e;
		}

	}

	function recuperaImagem($conn, $cod, $setor) {
		if(mysqli_connect_error($conn)) {
			echo "Failed to Connect to Database ".mysqli_connect_error();
		}
		$img = "";
		try {
			$sql = "select foto from usuario where id = ".$cod." and setor = '".$setor."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$img = base64_encode($row['foto']);
		} catch (Exception $e) {
			echo $e;
		}
		mysqli_close($conn);
		return $img;
	}

	function array_encode($array, $mysqli){ // Convert Array for DB storage json compressed in BLOB
		$result = gzcompress(json_encode($array));
		if ($mysqli) {
			mysqli_real_escape_string($mysqli,$result);
		}
		return $result;
	}

	public function editaTAG($conn, $json) {
		if(mysqli_connect_error($conn)) {
			echo "Failed to Connect to Database ".mysqli_connect_error();
		}

		try {
			$flag['code'] = 0;
			$sql = "update tag set tag = '{$json->{'tag'}}', equipamento = '{$json->{'equipamento'}}', descricao = '{$json->{'descricao'}}', obs = '{$json->{'obs'}}' where id = {$json->{'id'}} and setor = '{$json->{'setor'}}'";

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
	}



	public function cadastraManutencao($conn, $json) {
		try {
			$sql = "insert into manutencoes (tag_id, tipo_manutencao, obs, login, data_manutencao, custo, setor)
			values
			('{$json->{'tag_id'}}',
			'{$json->{'tipo_manutencao'}}',
			'{$json->{'obs'}}',
			'{$json->{'login'}}',
			'{$json->{'data_manutencao'}}',
			{$json->{'custo'}},
			'{$json->{'setor'}}')";

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

			$this->incrementaTotalManutencoes($conn, $json);

		} catch (Exception $e) {
			echo $e;
		}
	}

	public function incrementaTotalManutencoes($conn, $json) {
		try {
			$sql = "update tag set total_manutencoes = (total_manutencoes + 1) where id = {$json->{'tag_id'}} and setor = '{$json->{'setor'}}'";
			echo $sql;
			//try {
				if (mysqli_query($conn, $sql)) {
					$flag['code'] = 1;
					echo "New record created successfully";
				} else {
					echo "Sem sucesso - ";
					mysqli_close($conn);
				}
			/*} catch(Exception $e1) {
				echo $e1;
			}*/

		} catch (Exception $e) {
			echo $e;
			mysql_error();
		}
		//$conn->close();

    }

	public function retornaCustoTotal($conn, $id) {

		$sql = "select sum(custo) from manutencoes where tag_id = ".$id;

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

	}


	///////////////////// para gra´ficos

	public function retornaNumeroManutencoesPorPeriodo($conn, $id, $ano) {
		$mes = 1;

		for ($i = 0; $i <= 11; $i++)  {

			if ($mes < 10) {
				$sql = "SELECT count(id) from manutencoes where data_manutencao between '".$ano."-0".$mes."-01 00:00:00' and '".$ano."-0".($mes + 1)."-01 00:00:00' and tag_id = ".$id;
			} else {
				$sql = "SELECT count(id) from manutencoes where data_manutencao between '".$ano."-".$mes."-01 00:00:00' and '".$ano."-".($mes + 1)."-01 00:00:00' and tag_id = ".$id;
				if ($mes == 12) {
					$sql = "SELECT count(id) from manutencoes where data_manutencao between '".$ano."-".$mes."-01 00:00:00' and '".$ano."-01-01 00:00:00' and tag_id = ".$id;
				}
			}

			$query = mysqli_query($conn, $sql);

			if($query) {
				while($row = mysqli_fetch_array($query)) {
				$data[] = $row;
				/*echo $row[$i]." -";
				$i++;*/
			}

			} else {
				echo('Not Found ');
			}

			$mes++;
		}
		print(json_encode($data)."<p>");
		mysqli_close($conn);


	}


	public function retornaFrequenciaManutencaoTipo($conn, $id, $ano) {
		
		$sql = "select extract(MONTH from data_manutencao) as mes, count(manutencoes.data_manutencao) as recorrencia, tipo_manutencao as tipo from manutencoes where manutencoes.data_manutencao between '".$ano."-01-01' and '".($ano+1)."-01-01' and tipo_manutencao not like '-' and tag_id = ".$id." group by tipo_manutencao, extract(MONTH from data_manutencao)";
		
		$query = mysqli_query($conn, $sql);

		if($query) {
			while($row = mysqli_fetch_array($query)) {
			$data[] = $row;
		}

		} else {
			echo('Not Found ');
		}
		
		print(json_encode($data));
		mysqli_close($conn);


	}
}
?>
