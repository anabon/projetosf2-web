 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Care - Seu app de beleza & bem estar</title>
	<meta charset="utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 
	<link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery.js" type="text/javascript"></script>
<script src="jquery.maskedinput.js" type="text/javascript"></script>
    <!--------- função mascará cpf/cnpj ----------------------------->

   <script type="text/javascript">
       function MascaraCpfCnpj(campo,teclapres) {
    var tecla = teclapres.keyCode;

    if ((tecla < 48 || tecla > 57) && (tecla < 96 || tecla > 105) && tecla != 46 && tecla != 8 && tecla != 9) {
        return false;
    }

    var vr = campo.value;
    vr = vr.replace( /\//g, "" );
    vr = vr.replace( /-/g, "" );
    vr = vr.replace( /\./g, "" );
    var tam = vr.length;

    if ( tam <= 2 ) {
        campo.value = vr;
    }
    if ( (tam > 2) && (tam <= 5) ) {
        campo.value = vr.substr( 0, tam - 2 ) + '-' + vr.substr( tam - 2, tam );
    }
    if ( (tam >= 6) && (tam <= 8) ) {
        campo.value = vr.substr( 0, tam - 5 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
    }
    if ( (tam >= 9) && (tam <= 11) ) {
        campo.value = vr.substr( 0, tam - 8 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
    }
    if ( (tam == 12) ) {
        campo.value = vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
    }
    if ( (tam > 12) && (tam <= 14) ) {
        campo.value = vr.substr( 0, tam - 12 ) + '.' + vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
    }
    if (tam > 13){     
        if (tecla != 8){
            return false
        }
    }
}
   </script>
  

    <!----------fim da função mascrá cpf/cnpj ----------------------->
</head>
<body>
<body>
	<div class="logo" align="center">
	<img src="img/logo.png">
	</div>

	    <div class="login-box" >
    <img src="img/avatar.png" class="avatar">
        <h2>Acesse sua conta</h2>
            <form method="POST"  action="login_vai.php">
            <p>Login</p>
  <div class="col-sm-4 col-xs-12">
    <div class="form-field" data-type="textbox" data-show-properties="" data-field-name="CpfCnjpj">
        <input type="text" class="form-control" name="login" id="login" onkeydown="return MascaraCpfCnpj(this,event)" onkeyup="return MascaraCpfCnpj(this,event)"placeholder="Digite o CPF / CNPJ">                                            
    </div>
</div>
         
            <input type="password" name="senha" placeholder="Digite sua senha" id="senha">
            <input type="submit" name="entrar" value="Entrar" id="entrar">
            <a href="cadastro_empresa.php">Ainda não sou cliente</a>    
            </form>
        </div>
        <footer style="margin: top">
        	<img src="img/logof2.png">
        </footer>
</body>
</html>