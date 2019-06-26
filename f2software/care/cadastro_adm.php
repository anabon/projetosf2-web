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
            <style>
              .intro-text{
                padding: 100px;
                }
              h3 {
            font-size: 24px;
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
    
   <nav style="color: #fff;background: #00BFFF; width: 100%;height: 140px;line-height: 56px;">
    <img src="img/logo.png">
  </nav>
      <div class = "row">
         <form method="POST" action="cadastro.php">
          <div class = "row" style="background: #fff; margin-top: 5%; font-family: arial ">

            <div class = "row" style="background: #fff;">

               <div class = "input-field col s6">
                  <i class = "material-icons prefix">account_circle</i>
                  <label style="font-size: 20px">Login</label> <br/>
                  <input placeholder = "Escolha seu login" name="login" id = "name"
                     type = "text" class = "active validate" required />
                  <label for = "name"></label>
               </div>
               
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">network_locked</i>
                  <label style="font-size: 20px">Senha</label> <br/>
                  <input placeholder = "Senha" name="senha" id = "name"
                     type = "text" class = "active validate" required />
                  <label for = "name"></label>
               </div>
            </div>
            
            <div class = "row">
               <div class = "input-field col s12">
                <label style="font-size: 20px">Nome Responsável</label> <br/>
                  <input placeholder = "Nome" name="nome" id = "nome" type = "text"
                     class = "validate">
                 
               </div>
            </div>
            
            <div class = "row">

                <div class = "input-field col s6">
                <label style="font-size: 20px">Telefone</label> <br/>
                  <input placeholder = "telefone" name="telefone" id = "telefone"
                     type = "text" class = "active validate" required />
               </div>
                <div class = "input-field col s6">
                <label style="font-size: 20px">Email</label> <br/>
                  <input placeholder = "email" name="email"  id = "email"
                     type = "text" class = "active validate" required />
               </div>
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