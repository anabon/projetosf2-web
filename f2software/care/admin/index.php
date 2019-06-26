 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Care - Seu app de beleza & bem estar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
	<div class="logo" align="center">
	<img src="img/logo.png">
	</div>

	    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h2>Acesse com sua conta de super administrador</h2>
            <form method="POST"  action="login_vai.php">
            <p>Login</p>
            <input type="text" name="login" placeholder="Digite seu login" id="login">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Digite sua senha" id="senha">
            <input type="submit" name="entrar" value="Entrar" id="entrar">
              
            </form>
        </div>
        <footer style="margin: top">
        	<img src="img/logof2.png">
        </footer>
</body>
</html>