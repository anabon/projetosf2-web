<?php
session_start();
include_once("config/conexao.php");
$msg = $_SESSION['login'];
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
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <!--<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">-->
      <link rel="stylesheet" type="text/css" href="css/materialize">
      <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
       <!-- Adicionando JQuery -->
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
            <style>
              .intro-text{
                padding: 100px;
                }
              h3 {
            font-size: 24px;
              }
 
            </style>

            <!---------------------iniciar combox materialize-------------------------------------->

      <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
 
       <script>
          window.onload=function()
          {
            $(document).ready(function() 
            {
              $('select').material_select();
           });
          }

</script>

            <!----------- mascaras ---------------->

 <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
 <script>
   $('.cpf').mask('000.000.000-00');
   $('.rg').mask('00.000.000-00');
   $('.hora').mask('00:00:00');
 </script>


                <!-------- fim mascar----------->

  <!---- menu novo ---------------------------->

      <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
      <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
    <!-------------fim inicialização combox---------------------------------->



            <!------- estilo menu---------------->

<style>
              .nav-bar {
    width: 100%;
}
.nav-container {
    overflow: hidden;
    margin: 2.95% auto;
}

.nav-menu {
  display: none;
}
nav.nav-bar ul {
  list-style: none;
}
.nav-list {
  margin: 0 auto;
  width: 100%;
  padding: 0;
}
.nav-list li {
  float: left;
  width:12.5%;
}
.nav-list li a {
  display: block;
  color: #f9f9f9;
  text-shadow: 1px 1px 3px rgba(150, 150, 150, 1);
  padding: 30px 30px;
  font-size: 1.5em;
  text-align: center;
  text-decoration: none;
  -webkit-transition:all 0.2s linear;
   -moz-transition:all 0.2s linear;
     -o-transition:all 0.2s linear;
        transition:all 0.2s linear;
}
.nav-list li a:hover {
  -webkit-filter: brightness(1.3);
  padding-top: 80px ;
}

@media screen and (max-width: 480px) {
.nav-container, .container {
    background:#4f6f8f
}
.nav-menu{
    color: #fff;
    float: left;
    display: block;
    padding: 10px 10px;
    cursor: pointer;
}
.nav-list{
    float: left; 
    width: 100%;
    height: 0;
}
.nav-open {
    height:auto
}
.nav-list li {
    width:100%
}
.nav-list li a {
    text-align: left;
}
.nav-list li a:hover {
    padding-left: 36%;
    padding-top: 30px;

}
@media screen and (min-width: 481px) and (max-width: 768px) {
  .nav-container,.container {
    margin: 8% auto;
  }
  .nav-list li {
    float: left;
    width: 50%;
  }
  .nav-list li a:hover{
    padding-right: 40%;
    padding-top: 30px ;

  }
}





</style>            

<!-------fim estilo menu---------------->
  </head>


  </head>
   
   <body style="background: #C0C0C0;">
   <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    
 <nav style="color: #fff;background: #00BFFF; width: 100%;height: 140px;line-height: 56px;">
    <?php

$servidor = "localhost"; 
        $usuario = "root"; 
        $senha = ""; 
        $banco = "care"; 
        $conexao = mysql_connect($servidor,$usuario,$senha);  
        mysql_select_db($dbname); 


          $res = mysql_query("SELECT ID_empresa, cpf FROM empresa WHERE cpf = '$msg'"); 
            while($empresa=mysql_fetch_array($res))
              {
                $cod_empresa = $empresa['ID_empresa'];
              }



    
    //Receber o número da página
    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    //Setar a quantidade de itens por pagina
    $qnt_result_pg = 1;
    
    //calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
    
    $result_promocoes = "SELECT * FROM perfil_empresa WHERE cod_empresa = '$cod_empresa' LIMIT $inicio, $qnt_result_pg";
        if($result_promocoes === FALSE) { 
   die(mysqli_error());
}
    $resultado_promocoes = mysqli_query($conn, $result_promocoes);
  echo "<div style='width:300px; heigth:auto; overflow:hidden; background-color:#00BFFF; solid #CBFFC6; float right; margin-top -10px'>";
    while($row_promocoes = mysqli_fetch_assoc($resultado_promocoes)){
      echo "<h5 style = 'margin-top: 10px'>Seja bem vindo:".$row_promocoes['nome_fantasia'];
      
    }
    echo "</div>";
      ?>

   
   
    <img src="img/logo.png" style="float: right; margin-top: -75px">

  </nav>


 <nav class="nav-bar" style="background: rgba(0,0,0,0.5); height: 150px;">
    <div class="nav-container"> 
        <a id="nav-menu" class="nav-menu">☰ Menu</a>
        <ul class="nav-list " id="nav">
          <ion-icon name="contact"></ion-icon>
            <li> <a href="inicial.php" id="tile1"><i  class="icon ion-ios7-person-outline"></i>Perfil</a></li>
            <li> <a href="cadastro_servicos.php" id="tile2"><i class="icon ion-settings"></i>Serviços</a></li>
            <li> <a href="cadastro_funcionario.php" id="tile3"><i  class="icon ion-ribbon-b"></i>Funcionários</a></li>
            <li> <a href="agenda.php" id="tile4"><i class="icon ion-calendar"></i></i>Agenda</a></li>
            <li> <a href="cliente.php" id="tile5"><i class="ion-ios7-people-outline"></i> Clientes</a></li>
            <li> <a href="promocoes.php" id="tile6"><i class="icon ion-speakerphone"></i>Promoções</a></li>
            <li> <a href="#" id="tile7"><i class="icon ion-briefcase"></i>Adm</a></li>
            <li> <a href="#" id="tile8"><i class="icon ion-printer"></i>Relatorios</a></li>
        </ul>
    </div>
</nav>
   

      <div class = "row" style="width: 1020">
         <ul id = "dropdown" class = "dropdown-content">
      </ul>
        <a class = "btn dropdown-button" href = "#" data-activates = "dropdown">Aniveriante do dia:
         <i class = "mdi-navigation-arrow-drop-down right"></i></a>

          <form method="POST" action="cadastro_funcionarios.php" enctype="multipart/form-data">
          <div class = "row" style="background: #fff; margin-top: 5%; font-family: arial ">
           
            <div id="main">
              <?php
                  
               #data e hora atual
            date_default_timezone_set('America/Sao_Paulo');
             $date = date ("Y-m-d");
              $hora = date("H:i:s");
         
               if ($hora>= '12:00:00' && $hora < '18:00:00')
                {
                 echo "<h3>Boa tarde</h3><br/> ";
               }elseif ($hora >= '00:00:00' && $horario_agendado < '12:00:00')
               {
                echo"<h3>Bom Dia</h3><br/>";
               }else{
                echo"<h3>Boa noite</h3><br/>";
               }
               echo "<h6 style= 'color: #fff'> Hojé é dia:".date('d/m/Y')."</h6> <br/>";
               echo "<h6 style= 'color: #fff'> Aniversariantes do dia <i class='ion-icon name='timezone_transitions_get()'></ion-icon></i></h6>";
               ?>

  
                    
            </div>
            </div>

              <div align="center" class="container aniversariantes" style="background: #ffff">

                <h3>Aniversáriantes do dia!!!</h3>

          
                      <table class = "responsive-table">
         <thead>
            <tr>
               <th>Nome</th>
               <th>Telefone</th>
               <th>Email</th>
               
            </tr>
         </thead>
         <tbody>
            <tr>
                    <?php

        $servidor = "localhost"; 
        $usuario = "root"; 
        $senha = ""; 
        $banco = "care"; 
        $conexao = mysql_connect($servidor,$usuario,$senha);  
        mysql_select_db($dbname); 

  
          $res = mysql_query("SELECT ID_empresa, cpf FROM empresa WHERE cpf = '$msg'"); 
            while($empresa=mysql_fetch_array($res))
              {
                $cod_empresa = $empresa['ID_empresa'];
              }
               #listar usuarios
              $result_agenda = "SELECT * FROM  agenda WHERE cod_empresa = '$cod_empresa'";
                if($result_agenda === FALSE) 
                { 
                   die(mysqli_error());
                }
                  $resultado_agenda = mysqli_query($conn, $result_agenda);
            while($row_agenda = mysqli_fetch_assoc($resultado_agenda))
            {
            
                  $cod_empresa_servico = $row_agenda['cod_empresa'];
                  $cod_servico = $row_agenda['cod_servico'];
                  $cod_profissional = $row_agenda['cod_profissional'];
                  $horario_agendado = $row_agenda['horario_agendado'];
                  $tempo_servico = $row_agenda['tempo_servico'];
                  $cod_cliente = $row_agenda['cod_cliente'];
                  $data_agendamento = $row_agenda['data_agendado'];
           

                  $result_usuario = "SELECT *FROM usuario WHERE ID = '$cod_cliente'  AND    DATA_NASCIMENTO = '$date'";
                  if ($result_usuario === FALSE) 
                  {
                    die(mysqli_error());
                  }

                  $resultado_usuario = mysqli_query($conn, $result_usuario);
                  while ($row_usuario = mysqli_fetch_assoc($resultado_usuario))
                  {

                    $nome_usuario = $row_usuario['NOME_USUARIO'];
                    $telefone_usuario = $row_usuario['TELEFONE_USUARIO'];
                    $email_usuario = $row_usuario['EMAIL_USUARIO'];

  
                ?>
               <td><?php echo $nome_usuario?></td>
               <td><?php echo $telefone_usuario?></td>
               <td><?php echo $email_usuario?></td>
 </tr>
  <?php
        }
                } #listar usuario 
                ?>    
        </tbody>
       </table>

                   </div>
                 
                
          
                
              </div>
             </div>
        

            

<style type="text/css">
 /* divi lateral*/     
#main{
  position:absolute;
  margin-top: 5px;
  padding:10px;
  background: #00BFFF;

}
#main > div{
  float:right;
  margin:10px;
}

#main > h3 
{
  color: #fff;
  font-size: 45px;
  font-family: brush script mt;
}

.aniversariantes h3
{
  color: #00BFFF;
}
  
</style>

      

        </form>
    
   

        
    </body>   