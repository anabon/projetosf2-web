 <?php
session_start();
?>

 <!DOCTYPE html>
 <html>
 <head>
  <head>
      <title>CARE - seu app de beleza e bem estar</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="css/materialize.css">
       <link rel="stylesheet" type="text/css" href="style.css">
       <meta charset="utf-8">
       <!-- Adicionando JQuery -->
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

            <script src="js/valida_cpf_cnpj.js"></script>

              <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        
        <!-- Funções para validação de CPF e CNPJ -->
        <script src="js/valida_cpf_cnpj.js"></script>
        
        <!-- EXEMPLOS -->
        
        <!-- Pressionando teclas -->
        <script src="js/exemplo_1.js"></script>
        
        <!-- Após sair do campo -->
        <script src="js/exemplo_2.js"></script>     
        
        <!-- Formatando o CPF ou CNPJ -->
        <script src="js/exemplo_3.js"></script>
<!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <style>
    label {
      font-size: 15px;
    }
      
    </style>
   </head>
   
   <body style="background: #C0C0C0">
   <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    
   <nav style="color: #fff;
  background: #00BFFF;
  width: 100%;
  height: 140px;
  line-height: 56px;">
    <img src="img/logo.png">
  </nav>
      <div class = "row">
         <form method="POST" action="cadastro.php">
          <div class = "row" style="background: #fff; margin-top: 5%; font-family: arial ">

            <div class = "row" style="background: #fff;">

               <div class = "input-field col s6">
                  <i class = "material-icons prefix">account_circle</i>
                  <label style="font-size: 20px">Login</label> <br/>
                  <input placeholder = "Escolha seu login" name="login" id = "login"
                     type = "text" class = "active validate" required />
                  <label for = "name"></label>
               </div>
               
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">network_locked</i>
                  <label style="font-size: 20px">Senha</label> <br/>
                  <input placeholder = "Senha" name="senha" id = "senha"
                     type = "text" class = "active validate" required />
                  <label for = "name"></label>
               </div>
            </div>
            
            <div class = "row">
               <div class = "input-field col s12">
                <label style="font-size: 20px">Nome/Razão Social</label> <br/>
                  <input placeholder = "Nome/ Razão Social" name="nome" id = "nome" type = "text"
                     class = "validate">
                 
               </div>
            </div>
            
            <div class = "row">

                <div class = "input-field col s6">
                <label style="font-size: 20px">CEP</label> <br/>
                  <input placeholder = "CEP" name="CEP" id = "cep"
                     type = "text" class = "active validate" required />
               </div>
                <div class = "input-field col s6">
                <label style="font-size: 20px">Endereço</label> <br/>
                  <input placeholder = "CEP" name="endereco"  id = "rua"
                     type = "text" class = "active validate" required />
               </div>

               
            </div>
            
             <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">Bairro</label> <br/>
                  <input placeholder = "Bairro" name="bairro"  id = "bairro"
                     type = "text" class = "active validate" required />
                  <label for = "name"></label>
               </div>
               
             <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">Cidade</label> <br/>
                  <input placeholder = "Cidade" name="cidade"  id = "cidade"
                     type = "text" class = "active validate" required />
                  <label for = "name"></label>
               </div>
            </div>
          </div>
            
           <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">Estado</label> <br/>
                  <input placeholder = "Estado" name="estado"  id = "uf"
                     type = "text" class = "active validate" required />
               </div>
               
             <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">Telefone</label> <br/>
                  <input placeholder = "Telefone"  name="Telefone" id = "name"
                     type = "text" class = "active validate" required />
               </div>
            </div>
          </div>
          <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">Email</label> <br/>
                  <input placeholder = "Email"  name="email" id = "name"
                     type = "text" class = "active validate" required />
               </div>
               
             <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">CNPJ/CPF</label> <br/>
                  <input class="cpf_cnpj" placeholder = "CNPJ/CPF"  name="cpf" id = "name" c
                     type = "text" class = "active validate" required />
               </div>
            </div>
          </div>

          <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">IE/RG</label> <br/>
                  <input placeholder = "IE/RG" name="rg"  id = "name"
                     type = "text" class = "active validate" required />
               </div>
               
             <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <label style="font-size: 20px">Whats</label> <br/>
                  <input placeholder = "Whats"  name="whats" id = "name"
                     type = "text" class = "active validate" required />
               </div>
            </div>
          </div>

          <div class = "row" style="background: #fff;">
             <div class = "input-field col s6">
                <label style="font-size: 20px">Incrição Municipal</label> <br/>
                  <input placeholder = "Incrição Municipal" name="im"  id = "name"
                     type = "text" class = "active validate" required />
               </div>

               <div class = "input-field col s6">
                <label style="font-size: 20px">Responsável Técnico</label> <br/>
                  <input placeholder = "Responsável Técnico" name="responsavel_tecnico"  id = "name"
                     type = "text" class = "active validate" required />
               </div>

                <div class=" empresa" align="right">

           <input type="submit" name="submit" value="Cadastrar">
            <a href="#"></a>
            </div>  
               
              </form>
        
            </div>
          </div>

      
             
           </div>
           
         </form>       
      </div>
   </body>   