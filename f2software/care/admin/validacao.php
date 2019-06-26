 <?php
session_start();

?>

 <!DOCTYPE html>

 <html>
 <head>
  <head>
     <title>CARE - seu app de beleza e bem estar</title>
     <meta charset="utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <!--<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">-->
      <link rel="stylesheet" type="text/css" href="css/materialize">
      <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <link rel="stylesheet" type="text/css" href="style.css">          
    <!--- <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">-->
      </script> 

      <style>
          .label_checagem 
           {
              font-family: arial;
               font-size: 30px;
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
    <!-------------fim inicialização combox---------------------------------->
    
   </head>
   
   <body style="background: #C0C0C0">
   <nav>
     <img src="img/logo.png">
   </nav>
   <!---<form method="POST" action="edita_avaliacao.php">---->
<section style="margin-top: 10px">
<?php

    $avalicao = 'aguardando';
    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('care');
     $query = mysql_query("SELECT * FROM empresa  WHERE situacao_aprovacao = '$avalicao'") 
     or die("erro ao selecionar");
        if (mysql_num_rows($query)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }
   
?>
<!--------------------------dropdown empresa selecionada------------------------------------->
    <div class="container" style="background: #fff; width: 1200px; margin-top: 15px">
      <ul id = "dropdown" class = "dropdown-content">
      </ul>
        <a class = "btn dropdown-button" href = "#" data-activates = "dropdown">Escolha a empresa a ser avalida!!
         <i class = "mdi-navigation-arrow-drop-down right"></i></a> </br>


         <!--------------- fim dropdown empresa selecionada--------------------------->


          <!----------- combox empresa selecionada ---------------------------------->

            <div class="container" align="center">
              <?php

              $busca = mysql_query("SELECT * FROM empresa  WHERE situacao_aprovacao = '$avalicao'")
              or die(mysql_error());
                      ?>
            <select name="empresa" >
              <option value=""></option>
              <?php while($ver=mysql_fetch_row($busca)){ ?>
                  <option value="1" name="empresa"><?php echo "$ver[0]"; ?> - <?php echo "$ver[3]"; ?></option>
              

                  <?php } ?>
                </select>
              <?php
              mysql_free_result($busca); ?><br /><br />

             </div>



          <!----------------fim combox empresa selecionada -------------------------->
         <div class=" col s6 container">
          <h5>Informações checadas</h5>
        </div>
      
          
          <div class="intro-text">
         
         <div class="col s6 container">
          
          <p> 
            <input type="checkbox" id="test5" />
            <label class="label_checagem"for="test5">Receita Federal</label>
          </p>
          </div>

           <div class="col s6 container">
          <p>
          <input type="checkbox" id="test6" checked="checked" />
          <label class="label_checagem" for="test6">Prefeitura Municipal</label>
          </p>
        </div>

          <div class="col s6 container">
          <p>
         <input type="checkbox" id="test7" checked="checked" />
         <label class="label_checagem" for="test7">StretView</label>
        </p>
      </div>

       <div class="col s6 container">
     <p>
      <input type="checkbox" id="test8" checked="checked" />
      <label class="label_checagem" for="test8">Telefone</label>
    </p>
     </div>

     <div class="col s6 container">

       <div class="input-field col s12">
    <select name="avaliacao">
      <option value="" disabled selected>Situação de avaliação</option>
      <option value="1">Aguardando informações</option>
      <option value="2">Aprovada</option>
      <option value="3">Reprovada</option>
    </select>
    </div>
    </div>
     <br>
     <br>
      <div class="container col s6">
      <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Finalizar</a>

       <input type="submit" name="submit" value="Cadastrar">
            <a href="#"></a>
     <br>

     <br>

     <br>

     <br>

    </div>
  </form>
</div>


 
         </section> 
   </body>
    