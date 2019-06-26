
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Keywords" content="ERP, Sistema de Gestão, Emissão de NFe, Emissão de SAT, Emissão  de Nfce, Lojas Virtuais, Desenvolvimento de sites">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Soluções em Sistemas de Gerenciamento , Sistemas para emissãos fiscais, Ecommecer e Sistemas web">
    <meta name="author" content="Ana Bon">


    <title>F2 Software - Transformando Ideias em Négocios</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
   
    <link href="css/estilos.css" rel="stylesheet">
       <?php
        include ("contador.php");

        //capturar ip de visitante
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
          {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
          } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } else {
            $ip = $_SERVER['REMOTE_ADDR'];
          }

              echo $ip;
    ?>

    <script language="javascript">
var LIP_LowPrecision = false; // false = pede permissão ao navegador, maior precisão | true = não pede permissão, menor precisão
v
ar area = document.getElementById("geoarea");


function LocalizaIP_done(ip_data){
  if (!ip_data['error'])// esta linha é um exemplo, você deve alterá-la pelo seu código de manipulação de geolocalização
    alert('IP Geolocation: '+ip_data['city']+'-'+ip_data['state']+'-'+ip_data['country']+' (lat:'+ip_data['latitude']+',long:'+ip_data['longitude']+')');
  document.getElementById('city').value = ip_data.city;
  document.getElementById("geoarea").innerHTML = "Latitude: " + posicao.coords.latitude + "<br /> Longitude: " + posicao.coords.longitude;
}</script>
<script src="https://www.localizaip.com/api/geolocation.js.php?domain=f2software.com.br&token=ZGVzZW52b2x2aW1lbnRvLWYyQG91dGxvb2suY29tfDkwNjg1NjQz"></script>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "f2software";
$conn = mysqli_connect($servidor, $usuario, $senha) or die ("Conexão com o banco falhou");
$cidade = "<script>document.write(city)</script>";
echo "$cidade";

      



?>

</head>


<body>


    <!-- Navigation -->
       <div style="background-color:#006400">
    <nav class="navbar navbar-inverse navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <span class="navbar-brand" style="font-size:13px; color:#F5FFFA">F2 Software - Transformando Ideías em NEGÓCIO.&nbsp;&nbsp;|&nbsp;&nbsp;<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;17 33014766</span>
            </div>
           
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right" style="font-size:12px; font-weight:400;  ">
               
                <li><a href="index.php">INÍCIO</a></li>
                <li><a href="empresa.html">A EMPRESA</a></li>
                <li><a href="solucoes.html">SOLUÇÕES</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FALE CONOSCO<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="contato.html">Contato</a></li>
                  <li><a href="artigos">Trabalhe Conosco</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            
            
            <!-- /.navbar-collapse -->
        </div>        
    </nav>
    </div>
<!-- logo e lnks do topo -->
<div class="container">
<div class="row">

      <div class="col-lg-2">
        <div class="divLogo"><a href="index.php"><img src="imagens/logof2.png"></a></div>
      </div>
        
        <div class="col-lg-2">
         <a href="http://www.f2software.com.br/f2cloudbackup/" target="_blank" style="text-decoration: none; color:#228B22">
        <div class="divLinksAreaRestrita1"><img src="imagens/icon_backup.png" align="left"> 
         CLOUD BACKUP<br><span style="font-size:10px; color:#228B22; font-weight:500">ACESSO RESTRITO</span></div></a>
      </div>

        <div class="col-lg-2">
         <a href="http://www.f2software.com.br/suporte/" target="_blank" style="text-decoration: none; color:#228B22">
        <div class="divLinksAreaRestrita"><img src="imagens/icon_manutencao.png" align="left">
             MANUTENÇÃO E SUPORTE<br><span style="font-size:10px; color:#228B22; font-weight:500">ACESSO RESTRITO</span></div></a>
      </div>
 
 
        <div class="col-lg-2">
         <a href="tmj/index_tmj.html" target="_blank" style="text-decoration: none; color:#228B22">
        <div class="divLinksAreaRestrita"><img src="imagens/icon_suporteRemoto.png" align="left">
             SUPORTE REMOTO<br><span style="font-size:10px; color:#228B22; font-weight:500">GRATUITO</span></div></a>
      </div>

       <div class="col-lg-2">
         <a href="http://www.f2software.com.br/ebook/samples/magazine/" target="_blank" style="text-decoration: none; color:#228B22">
        <div class="divLinksAreaRestrita"><img src="imagens/icon_revista.png" align="left">
             NOTICIAS E PROMOÇOES<br><span style="font-size:10px; color:#228B22; font-weight:500">NEW</span></div></a>
      </div>
</div> 
</div>
</div>
<!-- conteudo abaixo do topo -->

﻿<link href="css/estilos.css" rel="stylesheet">




<style type="text/css">
* {
	margin:0;
	padding:0;
	
}

.banner { position: relative; overflow: auto; }

    .banner li { list-style: none; }
	
        .banner ul li {
			 float: left;
			 min-height:500px;    }
		 
		 .banner .dots {
		position: absolute;
		left: 46%;
		right: 0;
		bottom: 10px;
		
		max-width:100%;
	}
		.banner .dots li {
			display: inline-block;
			*display: inline;
			zoom: 1;

			width: 10px;
			height: 10px;
			line-height: 10px;
			margin: 0 4px;

			text-indent: -999em;
			*text-indent: 0;

			border: 2px solid #fff;
			border-radius: 6px;

			cursor: pointer;
			opacity: .4;

			-webkit-transition: background .5s, opacity .5s;
			-moz-transition: background .5s, opacity .5s;
			transition: background .5s, opacity .5s;
		}
			.banner .dots li.active {
				background: #fff;
				opacity: 1;
			}
			
.slideDiv {
	padding-left:15%;
	padding-right:15%;
	padding-bottom:10%;
	padding-top:15%;
	
	
}

.slideTitulo {
		font-family: 'Roboto', sans-serif;
		font-size:36px;
		color:#006400;
		font-weight:900;
		letter-spacing:-1px;
}
.slideSubTitulo {
		font-family: 'Roboto', arial-bold;
		font-size:20px;
		color:#ffff;
		font-weight:300;
		letter-spacing:-1px;
		text-transform:uppercase;
}	

@media screen and (max-width: 960px) {

.slideDiv {
	padding-left:10%;
	padding-right:10%;
	padding-bottom:10%;
	padding-top:35%;
}
	
	 .banner .dots {
		left: 36%;
	}
}
	
</style>
<div>


  <div class="banner" style="margin:0; padding:0">
	<ul>
		
        
        <li style="background-image:url(imagens/cloud.jpg); background-position:center center; background-repeat:repeat;">
     	 <div class="slideDiv" align="center">
         <div>
<span class="slideTitulo">F2 CLOUD BACKUP</span><br>
     	     <span class="slideSubTitulo" style="text-transform:uppercase">Soluções  de backup e armazenamento de dados em nuvem.
           </span></div></div>
        </li>
      
        
        <li style="background-image:url(imagens/automacao.jpg); background-position:center center; background-repeat:repeat;">
     	 <div class="slideDiv" align="center">
         <div>
<span class="slideTitulo">Transformando Idéias em Negocios</span><br>
     	     <span class="slideSubTitulo">SOLUÇÕES COMPLETAS PARA AUTOMATIZAR SEU NEGÓCIO E AUMENTAR SUAS VENDAS.</span></div></div>
        </li>
        
   
 	 <li style="background-image:url(imagens/desenvolve-site.jpeg); background-position:center center; background-repeat:repeat;">
     	 <div class="slideDiv" align="center">
         <div>
<span class="slideTitulo">DESENVOLVIMENTO DE SITES E APLICATIVOS WEB</span><br>
     	     <span class="slideSubTitulo">Apresentando proposta e soluções inovadoras<br>para alavancar seus négocios.</span></div></div>
        </li>
        
         	 
        
        <li style="background-image:url(imagens/nfe.png); background-position:center center; background-repeat:repeat;">
     	 <div class="slideDiv" align="center">
         <div>
<span class="slideTitulo">Programa emissor NFe - CFe - SAT</span>
     	     <br><span class="slideSubTitulo">Uma maneira segura para você cumprir com suas obrigações fiscais.</br></span></div></div>
        </li>
        
         <li style="background-image:url(imagens/gestao-documentos.jpg); background-position:center center; background-repeat:repeat;">
     	 <div class="slideDiv" align="center">
         <div>
<span class="slideTitulo">GED</span><br>
     	     <span class="slideSubTitulo">Crie, Capture e armazene, em um sistema rápido e seguro</span></div></div>
        </li>

        
        <li style="background-image:url(imagens/slide_locacao1.jpg); background-position:center center; background-repeat:repeat;">
     	 <div class="slideDiv" align="center">
         <div>
<span class="slideTitulo">App-Box</span><br>
     	     <span class="slideSubTitulo">Assinatura de aplicativo e hadware.</span></div></div>
        </li>
   
     <li style = "background-image:url(imagens/parceiros1.jpg); background-position:center center; background-repeat: repeat;"> 
        <div class="slideDiv" align="center">
            <div>
             <span class="slideTitulo" >Seja o nosso parceiro</span><br>
              <span class="slideSubTitulo"> Faça parte desse time campeão. </span></div></div>
            </li>
	</ul>
</div>
</div>
    
<!-- /.carousel -->
<div class="container-fluid" style="background-color:#eee; padding-bottom:15px">

<div class="container">
<div class="row">
<div class="col-lg-12" align="center" style="padding-top:25px; padding-bottom:0px;">
<span style="font-weight:bold; font-size:36px; letter-spacing:-1px; color:#006400; text-transform:uppercase">
Soluções para todas empresas, a qualquer hora.</span>
</div>
</div>
</div> 


<div class="container">
<div style="margin-top:10px">
	 <div class="col-lg-2" style="padding: 10px" align="center" >
  <a href="principais_caracteristicas.html"><img src="imagens/caracteristica.jpg" class="img-circle img-responsive" style="padding-left: 20px; padding-right: 20px; padding-bottom: 10px"></a>
  <span class="inicialSolucoes"> Principais Caracteristicas </span>
   
 </div>
    
	<div class="col-lg-2" style="padding:10px" align="center">
	<a href="automacaocomercial.html"><img src="imagens/auto-comercial.PNG" class="img-circle img-responsive" style="padding-left:20px; padding-right:20px; padding-bottom:10px"></a>
	<span class="inicialSolucoes">
	Solução em <br> automação comercial</br> </span>
	</div>
    
	<div class="col-lg-2" style="padding:10px" align="center">
	<a href="solucoesweb.html"><img src="imagens/solucao-em- aplicativos-web.jpg" class="img-circle img-responsive" style="padding-left:20px; padding-right:20px; padding-bottom:10px"></a>
	<span class="inicialSolucoes">
	Soluções em aplicativos web</span>
	</div>      

	<div class="col-lg-2" style="padding:10px" align="center">
	<a href="ged.html"> <img src="imagens/gestor-eletronico.jpg" class="img-circle img-responsive" style="padding-left:20px; padding-right:20px; padding-bottom:10px"></a>
	<span class="inicialSolucoes">GED</span>
		</div>
    
	<div class="col-lg-2" style="padding:10px" align="center">
	<a href="parceiros.html"><img src="imagens/parceiros.jpg" class="img-circle img-responsive" style="padding-left:20px; padding-right:20px; padding-bottom:10px"></a>
	<span class="inicialSolucoes">
	Seja um de nossos parceiros</span>
	</div>
    
	<div class="col-lg-2" style="padding:10px" align="center">
	<a href="appbox.html"><img src="imagens/app-box/logo.jpg" class="img-circle img-responsive" style="padding-left:20px; padding-right:20px; padding-bottom:10px"></a>
	<span class="inicialSolucoes">
	App Box</span>
	</div> 


</div>
</div>

<!-- clientes -->
    
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  
<div class="container">
<div class="row">
<div class="col-lg-12" align="center" style="padding-top:45px; padding-bottom:30px;">
<span style="font-weight:bold; font-size:32px; letter-spacing:-1px; color:#006400;">
CONHEÇA AS VANTAGENS E BENEFICIOS EM TER NA SUA EMPRESA UM SISTEMA DE GESTÃO</span><br>

<span style="font-weight:300; font-size:18px; color:#006400; text-transform:uppercase">

 Tenha uma visão consolidada de diversos canais de vendas !!!</br>.

</span>

</div>
</div>
</div> 

<div class="container" style="padding-top:0px; padding-bottom:15px">


<div style="padding-left:7%; padding-right:7%;" align="center">	
<div class="responsive" align="center" style="pading: 0px 20px 20px 20px; height:300px">

    <div align="center"><img src="imagens/clientes/img-01.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-02.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-03.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-04.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-05.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-06.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-07.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-08.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-09.jpg"/></div>
    <div align="center"><img src="imagens/clientes/img-10.jpg"/></div>
       
  </div>
  </div>
  </div>
  <script type="text/javascript" src="slick/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="slick/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.js"></script>

  <script type="text/javascript">
$('.responsive').slick({
  arrows: true,
  dots: false,
  infinite: true,
  centerMode: true,
  speed: 1500,
  slidesToShow: 4,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 500,
  responsive: [
    
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>


 

    <!-- mapa -->

<div style="background-color:#006400; padding:15px" align="center"><span style="font-weight:bold; font-size:28px; letter-spacing:-1px; color:#FFF;">NOSSO ESCRITORIO</span></div>
<div><iframe src="https://www.google.com/maps/embed?pb=!1m20!1m12!1m3!1d5273.727651218713!2d-49.386282642181634!3d-20.82812905004774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m5!3e6!4m2!1s0x94bdad2e8140b52b%3A0x3b23034ab54e7987!2sF2SOFTWARE+SOLUCOES+EM+TECNOLOGIA+-+Jardim+Caparroz%2C+S%C3%A3o+Jos%C3%A9+do+Rio+Preto+-+SP!4m0!5e0!3m2!1spt-BR!2sbr!4v1539632507214AIzaSyBzqGXz-2VU0anRWph0KrZ5aUG59ajIh7o " width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


 <!--whasapp-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="apiwhats.php" Style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>
<!--fimwhasapp-->
<!-- rodape -->


  
<div class="container-fuid" style="background-color:#111; padding-top:20px;">
<div class="container">
<div class="row">


<div class="col-lg-4" style="padding-bottom:20px">

<span class="textoPadrao12" style="color:#006400; text-align:right">
Visite-nos nas redes sociais:&nbsp;&nbsp;&nbsp;&nbsp;
</span>

<a href="https://pt-br.facebook.com/F2SOTWARE/" target="_blank">
<img src="imagens/icon_facebook.png" width="23" height="22"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="https://www.instagram.com/bios_computadores/" target="_blank">
<img src="imagens/icon_instagram.png" width="24" height="22"></a> </div>


<div class="col-lg-4" style="padding-bottom:20px">

<span class="textoPadrao12" style="color:#ffff; text-align:right">
Copyright &copy; 2018 F2 Software - Transformando Ideias em Negocios <br>Todos os direitos reservados.
</span>

</div>


<div class="col-lg-4"  style="padding-bottom:20px">
<div class="linhaRodapeDivisao">
<span class="textoPadrao12" style="color:#999">
<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;Avenida Romeu Strazzi, 304 - CEP 15084-010 <br/>- São José do Rio Preto-SP<br>
<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;&nbsp;Telefone/Fax: (17) 3022-9831 ou 3301-4766<br>
<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;E-mail: marketingf2software@gmail.com</span>
</div></div>
</div>
</div>
</div>
         
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/unslider.min.js"></script>
<script>
$(function() {
   $('.banner').unslider({
				fluid: true,
				dots: true,
				keys: true,
				speed: 400,
				delay: 4000
			});
});
</script>

<script src="js/jquery.nicescroll.min.js"></script>
    <script>
    $(document).ready(function () {
    $("html").niceScroll();
});
     </script>
    
  </body>
</html>

