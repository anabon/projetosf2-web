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

              .imagem {
                position: relative;
                      }
                .capa {
                display: none;
                      }

                .imagem:hover .capa {
                display: block;
                                    }

                .capa {
                background: rgba(0, 0, 0, 0.4);
                width: 300px;
                height: 300px;
                position: absolute;
                  top: 0;
                    }
 
            </style>

  </head>
   
   <body style="background: #C0C0C0">
    <nav style="color: #fff;background: #00BFFF; width: 100%;height: 140px;line-height: 56px;">
    <img src="img/logo.png">
    </nav>


     <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                  <div class="imagem">
                  <a href="cadastro_adm.php"><img src="img/cadastro.png" title="Cadastro ADM" style="width: 300px; height: 200px"></a>
                    <div class="capa">
                     <h1 style="font-size: 30px">Cadastro novo úsuario ADM</h1>
                 </div>
               </div>
               </div>
               
             <div class = "row" style="background: #fff;">
               <div class = "input-field col s6">
                <div class="imagem">
                  <img src="img/empresa_bloqueada.png" style="width: 300px; height: 200px"><div class="capa">
                     <h1 style="font-size: 30px">Empresas Bloqueadas</h1>
                 </div>
               </div>
            </div>
          </div>


            <div class="row">
              <div class="input-field col s6">
                <div class="imagem">
                  <img src="img/aguardando.png" style="width: 300px; height: 300px"><div class="capa">
                     <h1 style="font-size: 30px">Aguardando Avalição</h1>
                 </div>
               </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
              <div class="imagem">
                  <img src="img/cadastro_aprovado.jpg" style="width: 300px; height: 300px"><div class="capa">
                     <h1 style="font-size: 30px">Cadastro Aprovado</h1>
                 </div>
               </div>
                
              </div>
              
            </div>
          </div>
   </body>   