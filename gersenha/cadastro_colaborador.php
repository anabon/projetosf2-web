<?php

  include_once "conexao.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-------- bootstrap----->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!------ fim bootstrap---------->
	<title></title>
</head>
<body>
	<!---------nav-------------------------------------->
<nav style="height: 90px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="img/logof2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Inicio<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a  class="nav-link " href="#">Cadastro Colaborador</a>
      </li>

      <li class="nav-item">
      	<a class="nav-link" href="gerar_senha.html">Gerar Senha</a>
      </li>

      <li class="nav-item">
      	<a  class="nav-link" href="#">Cadastro Clientes</a>
      	
      </li>

      <li class="nav-item"><a class="nav-link" href="#">Relátorio Site</a>
      </li>
 
    </ul>
</div>
</nav>

<!-----------fim nav----------------------------------------->

	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-6">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Nome">
	</div>
	<div class="form-group col-md-6">
    <label for="inputName">Sobrenome</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Sobrenome">
	</div>
  </div>

  <div class="form-row">
  	<div class="form-group col-md-6">
  		<label>Whatsap</label>
  		<input class="form-control" placeholder="N° Whatsap" type="phone" name="">
  	</div>

  	<div class="form-group col-md-6">
      <label for="inputEstado">Função</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>Suporte</option>
        <option>Representante</option>
        <option>Parceiro</option>
        <option>Financeiro</option>
        <option>Administrador</option>
        <option>Diretoria</option>
    </select>
    </div>
 </div>

	<div class="form-row">

	 <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>	

    <div class="form-group col-md-5">
      <label for="inputCity">Rua</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Rua">
    </div>

    <div class="form-group col-md-5">
      <label for="inputCity">Bairro</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Bairro">
    </div>
</div>

	<div class="form-row">
		<div class="form-group col-md-12">
			<label>Pais</label>
			<input class="form-control" type="text" name="">
		</div>
	</div>
   <div class="form-inline">
   	  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Administrador</label>
     <button type="submit" class="btn btn-primary">Entrar</button>
  </div>
   	
   </div>
 
</form>



</body>
</html>