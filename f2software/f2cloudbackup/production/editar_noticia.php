<!DOCTYPE html>

<meta http-equiv="Content-Language" content="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Painel Administrativo</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Painel Administrastivo</span></a>
            </div>

                       <div class="clearfix"></div>

            <!-- informações rápidas de perfil de menu -->
            <div class="profile clearfix">
             
              <div class="profile_info">
                <span>Bem Vindo!!!</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           <!-- /menu profile quick info -->

            <br />

            <!-- menu da barra lateral -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Inicio</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i> Notícias <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Visualizar Notícias</a></li>
                      <li><a href="editar_notocia.php">Editar Notícias</a></li>
                      <li><a href="form.php">Adicionar Nóticias</a></li>
                                        </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cadastro.html">Cadastrar Novo Usuario</a></li>
                    
                    </ul>
                  </li>
                 
                  
                 
                </ul>
              </div>
              <div class="menu_section">
               
                <ul class="nav side-menu">
                 
           
             
                  </li>                  
                
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
            <!-- /botões de rodapé do menu -->
            <div class="sidebar-footer hidden-small">
         
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../index.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

         <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <li><a href="../../index.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
				</ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <?php
//sessao do usuario
$_SESSION['id_usuario'] = "1";


?>
<h1>Editar notícias</h1>
<?php
//inclui arquivom de conexão
include "../../config/conectar.php";
include "incluir/menuh.php";//menu de navegacao
//seta a variavel ande dela ser ativada
$PHP_SELF = isset($PHP_SELF) ?  $PHP_SELF : "";
// define o número de registros exibidos por página
$num_por_pagina = 25;
// descubra o número da página que será exibida
// se o numero da página não for informado, definir como 1
$pagina = isset($_GET['pagina']) ?  $_GET['pagina'] : $pagina = "1";
// bloco 4 - construa uma cláusula SQL "SELECT" que nos retorne somente os registros desejados
// define o número do primeiro registro da página. Faça a continha na calculadora que você entenderá.
$primeiro_registro = ($pagina*$num_por_pagina) - $num_por_pagina;
/*
*consulta apenas os registros da página em questão utilizando como auxílio a definição LIMIT.
* monta consulta em SQL
* seleciona as ultimas 15 noticias ordenadas
* decrescente por data
* obs.: seleciona somente as noticias que foram
* liberadas pelo webmaster
*/
$sql = "SELECT id,titulo,data_cadastro, hora_cadastro, nome,autor_id,ver FROM $tabela_noticias
        WHERE autor_id = {$_SESSION['id_usuario']}
        ORDER BY id DESC LIMIT $primeiro_registro, $num_por_pagina";
//executa e trata a consulta
$resultado = mysql_query($sql) or die ("<p class='cor_alerta'><strong>Não foi possível realizar a consulta</strong></p>");

//recebe a mensagem de erro ou sucesso
isset($_GET['msgm'])=="" ? $msgm = $_GET['msgm'] ="&nbsp;" : $msgm = $_GET['msgm'];
isset($_GET['erro'])=="" ? $erro = $_GET['erro'] ="&nbsp;" : $erro = $_GET['erro'];

// Abre tabela HTML
?>
<form method='post' name='editnews' action="alterar_noticia.php">
<table>
<tr class='corfundo'>
<th >Título</th>
<th >Data</th>
<th >Disponível</th>
<th >Autor</th>
<th>
<input type='checkbox' name='master_box' title="Marcar todas" name='master_box' onclick="javascript:ckeck_uncheck_all()" /> </a>
</th>
</tr>
<?php
// Efetua o loop no banco de dados e exibe os registros na tela
while (list($id,$titulo,$data_cadastro, $hora_cadastro,$nome, $autor_id,$ver) = mysql_fetch_array($resultado)) {
//formatar data de cadastro
include "incluir/data_cadastro.php";
if($autor_id == $_SESSION["id_usuario"]){
// verifica se quais textos o usuario postou e imprime
//Formata os dados do campo ver
switch ($ver){
case 'N':
$disponivel = 'Não';
break;
case 'S':
$disponivel = 'Sim';
break;
}
echo "<tr>
<td><a href='mostrar_noticia.php?id=$id'>" . stripslashes($titulo) . "</a></td>
<td class='centro'> $data_cadastro </td>
<td class='centro'>" .$disponivel. "</td>
<td class='centro'>" .$nome. " </td>
<td class='centro'><input name='noticias_selecionadas[]' value='$id' type='checkbox' /> </td>
</tr>\n";

    }
   }// fim do while
// Fecha tabela
?>
<tr> <td colspan='7' align='right'>
<?php $msgm !="" ? print "<p class='cor_alerta_positivo'>".urldecode($msgm)."</p>" : print "<p class='cor_alerta'>".urldecode($erro)."</p>";
?>
</td></tr>
<tr class='direita'>
<td colspan='7'>
Opções:
<select name='acao'>
<option value=''>-- Escolha sua alternativa --</option>
<option title='Marque essa opção para editar a notícia selecionada' value='alterar'>Alterar</option>
<option title='Marque essa opção para deletar a notícia selecionada' value='deletar'>Deletar</option>
</select>
<input type='submit' name='submeter' value='OK' class="botao" Onclick='return alterar();' /> </td>
</tr>
</table>
</form>
<?php
//construindo e exibindo um painel de navegabilidade entre as páginas
$consulta = "SELECT COUNT(*) FROM $tabela_noticias where autor_id = {$_SESSION['id_usuario']}";
$conferir = mysql_query($consulta);
list($total_usuarios) = mysql_fetch_array($conferir);
// definindo o total de paginas
$total_paginas = $total_usuarios/$num_por_pagina;
$prev = $pagina - 1; // voltar
$next = $pagina + 1; //avancar
// se página maior que 1 (um), então temos link para a página anterior
if ($pagina > 1) {
$prev_link = "<a href=\"$PHP_SELF?dir=$dir&amp;pg=$pag&amp;pagina=$prev\">Anterior</a>";
} else { // senão não há link para a página anterior
$prev_link = " ";
}
// se número total de páginas for maior que a página corrente, então temos link para a próxima página
if ($total_paginas > $pagina) {
$next_link = "<a href=\"$PHP_SELF?dir=$dir&amp;pg=$pag&amp;pagina=$next\">Próxima";
} else { // senão não há link para a próxima página
$next_link = " ";
}
/* vamos arredondar para o alto o número de páginas que serão necessárias para exibir todos os registros.
* Por exemplo, se temos 20 registros e mostramos 6 por página, nossa variável $total_paginas será igual a 20/6,
* que resultará em 3.33. Para exibir os 2 registros restantes dos 18 mostrados nas primeiras 3 páginas (0.33),
* será necessária a quarta página. Logo, sempre devemos arredondar uma fração de número real para um inteiro de
* cima e isto é feito com a função ceil().*/
$total_paginas = ceil($total_paginas);
$painel = "";
for ($x = 1; $x <= $total_paginas; $x++) {
  if ($x == $pagina) { // se estivermos na página corrente, não exibir o link para visualização desta página
    $painel .= " [$x] ";
  } else {
    $painel .= " <a href='$PHP_SELF?dir=$dir&amp;pg=$pag&amp;pagina=$x'>[$x]</a>";
  }
}

// exibir painel na tela
echo "<p>&nbsp;</p><p class='centro'>$prev_link | $painel | $next_link</p>";
?>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        < <!-- footer content -->
        <footer>
          <div class="pull-right">
            F2 Software- Soluções em tecnologia <a href="https://www.f2software.com.br">F2 Software</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>