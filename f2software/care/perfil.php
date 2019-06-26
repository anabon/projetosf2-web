
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
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- Adicionando JQuery -->
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
            


            <!---- menu novo ---------------------------->

      <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-2.1.0.min.js" type="text/javascript"></script>

       
            <!-------- fim menu novo ----------------->

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
   
   <body style="background: #C0C0C0;">


   <nav style="color: #fff;background: #00BFFF; width: 100%;height: 140px;line-height: 56px;">
    <img src="img/logo.png">

    <h4 style="float: right; font-family: arial">Parametrização  <br/> de serviço</h4>
   
  </nav>

 <nav class="nav-bar" style="background: rgba(0,0,0,0.5);">
    <div class="nav-container"> 
        <a id="nav-menu" class="nav-menu">☰ Menu</a>
        <ul class="nav-list " id="nav">
          <ion-icon name="contact"></ion-icon>
            <li> <a href="perfil.php" id="tile1"><i  class="icon ion-ios7-person-outline"></i>Perfil</a></li>
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
        <a class = "btn dropdown-button" href = "#" data-activates = "dropdown">Perfil
         <i class = "mdi-navigation-arrow-drop-down right"></i></a>
       </div>
       
         <form method="POST" action="proc_upload.php" enctype="multipart/form-data">
          <div class = "row" style="background: #fff; margin-top: 5%; font-family: arial ">

                
            <div class = "row">
               <div class = "input-field col s12">
                <label style="font-size: 20px;">Nome Fantasia</label> <br/>
                  <input placeholder = "Nos conta como seus cliente conhecem seu estabelecimento" name="nome_fantasia" id = "nome_fantasia" type = "text"
                     class = "validate">
                 </div>
            </div>
            <div class = "row">
              
                
               <div class=" empresa" align="right">
            
           <input type="file" name="imagem" value="Foto Perfil">
            <input type="submit" value="Cadastrar">
            <a href="#"></a>
            </div>  
            
            </div>
          </div>
        </form>
    
   
    <script type="text/javascript">
      $(document).ready(function(){
  $('#nav-menu').click(function(){
    $('ul.nav-list').addClass('open').slideToggle('200');
  });
});
    </script>
     
   </body> 
   </form>  