<?phpsession_start(); // sempre na primeira linha do codigo
$_SESSION['altor'] = "PauloRJ";echo '<a href="teste1.php">Chamar variavel em outra página</a>'; //perceba que nao foi setado nenhuma variavel na url da página, pelo fato de ser
 $_SESSION?>