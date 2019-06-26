
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Painel Administradtivo </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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

<?php
//inclui arquivom de conexão
include "../../config/conectar.php";
// Mensagem de Erro
$msg ="";

// Se for a primeira vez ou houver erro $sem_form n  terá valor
$sem_form = "";

//recebe os dados do form e deleta a noticia
if($_POST['acao'] == "deletar"){

// Faz loop pelo array das noticias selecionadas
foreach($_POST["noticias_selecionadas"] as $noticias_selecionadas){

// deleta o usuario
echo $sql = "delete from $tabela_noticias where id = '$noticias_selecionadas'";
}

// verifica se foi excluido o usuario
$consulta = mysql_query($sql);

//se a noticia foi deletada mostra mensagem de sucesso do contrário mostra a de erro
if($consulta) {
	echo "Notícia excluída com sucesso!";
}else{
	echo "Não foi possível excluír essa notícia!";
 }
}

// verifica se o form ja foi submetido
if(isset($_POST['alterar']) == "alterar"){

// Recebe os dados do form
foreach ($_POST as $campo => $valor) { $$campo = trim(strip_tags($valor));}
$texto = htmlentities(addslashes($_POST["texto"]));

//Recebe os campos de $_FILES
$arquivo_temporario = $_FILES["ft"]["tmp_name"]; //CAMINHO TEMPORÁRIO
$nome_arquivo = preg_replace("#(\s)+#", "_",  $_FILES["ft"]["name"]); //NOME DO ARQUIVO
$tamanho_arquivo = $_FILES["ft"]["size"];  //TAMANHO DO ARQUIVO
$tipo_arquivo = $_FILES["ft"]["type"];  //TIPO DO ARQUIVO

//Pega a variável autor_id e transforma numa sessao
$autor_id = $_SESSION["id_usuario"];

/*
Vamos checar algum erro nos campos, enviados pelos campos do formulário
*/

// verifica se o usuario digitou o titulo
if($titulo == "") {
	$msg .= "<li><p class='cor_alerta'>Você não digitou o título!</p></li>";

}
// verifica o resumo
if($resumo !=""){
$ver_resumo = strlen($resumo);
if($ver_resumo < 20 or $ver_resumo > 256) {
    $msg .= "<li><p class='cor_alerta'> O resumo deve ter mais de 20 e menos de 256 caracteres!</p></li>";
}
}else{
$msg .= "<li><p class='cor_alerta'> Você não digitou o resumo!</p></li>";
}
// verifica o texto
if($texto !=""){
$ver_texto = strlen($texto);
if($ver_texto < 200) {
    $msg .= "<li><p class='cor_alerta'> O texto deve ter mais de 200 caracteres!</p></li>";
}
}else{
$msg .= "<li><p class='cor_alerta'> Você não digitou o texto!</p></li>";
}

//Se o usuario selecionar outro arquivo
$sql = "SELECT foto, legenda FROM $tabela_noticias WHERE id = '$noticias_selecionadas'";
$resultado = mysql_query($sql) or die (mysql_error());

// para mostrar os resultados
$linha = mysql_fetch_array($resultado);

// verificando se o usuario inseriu a imagem
if($arquivo_temporario!="" || $nome_arquivo!="" || $tamanho_arquivo!="" || $tipo_arquivo!=""){

//Se o usuario selecionar outar ft deleta a foto antiga
$deleta  = "fotos/{$linha['foto']}";

// Excluindo arquivo
is_file($deleta) ? $deleta_foto = unlink($deleta) : false ;

//verifica o tamanho da foto
if($tamanho_arquivo > 5120000) {
$msg .= "<li class='cor_alerta'>O arquivo deve ter no maximo 5MB!</li>";
}

// Verifica as extenções permitidas. Neste caso JPG, JPEG, PNG e GIF.
if (substr($_FILES['ft']['type'],-3) != "jpg" && substr($_FILES['ft']['type'],-3) != "JPG" && substr($_FILES['ft']['type'],-4) != "jpeg" && substr($_FILES['ft']['type'],-4) != "JPEG" && substr($_FILES['ft']['type'],-3) != "gif" && substr($_FILES['ft']['type'],-3) != "GIF" && substr($_FILES['ft']['type'],-3) != "png" && substr($_FILES['ft']['type'],-3) != "PNG") {
$msg .= "<li class='cor_alerta'>Formatos aceitos, somente: JPG, JPEG, PNG e GIF.</li>";
}

// renomear os arquivos
$diretorio = "fotos/"; // pasta que armazenará os arquivos.
if(!move_uploaded_file($arquivo_temporario, $diretorio . $nome_arquivo)) {

$msg .= "<li><p class='cor_alerta'>O arquivo não pode ser enviado!</p></li>";
 }

 // verifica se o usuario digitou a legenda
if($legenda == "") {
	$msg .= "<li><p class='cor_alerta'> Você não digitou a legenda! </p></li>";
}

}else{

// Se o usuario n inseriu outra ft reenvia os dados antigos
$nome_arquivo = $linha['foto'];
$legenda = $linha['legenda'];
}

//se a msagem for diferente de zero mostra os erros
if($msg !=""){
echo "<h3>Ocorreram os seguintes erros: </h3> <ul><h5> $msg </h5> </ul><br />";
}else{

//insere dados no banco
$sql= "UPDATE $tabela_noticias  SET titulo = '$titulo', resumo = '$resumo', texto= '$texto', destaque = '$destaque',
legenda = '$legenda',foto = '$nome_arquivo',ver='$ver', data_cadastro = NOW(), hora_cadastro = NOW() WHERE id = ".$_POST["noticias_selecionadas"];

//Inserindo os dados
$consulta = mysql_query($sql);

//se a noticia foi inserida mostra mensagem de sucesso do contrário mostra a de erro
if($consulta) {
echo "Notícia alterada com sucesso!";
}else{
	echo "Não foi possível alterar os dados dessa notícia!";
}
// se tudo der certo $sem_form = 1 e n mostrará o form
$sem_form = 1;
 }
}

// mostrar for em cada caso exceto envio bem sucedido
if($sem_form != 1){

// Faz loop pelo array das noticias selecionadas
if(isset($_POST['alterar']) != "alterar"){
foreach($_POST["noticias_selecionadas"] as $noticias_selecionadas)
{
$noticias_selecionadas;
 }
}

//Seleciona as linha autor_id e id no banco de dados
$sql = "SELECT * FROM $tabela_noticias WHERE id = '$noticias_selecionadas'";
$resultado = mysql_query($sql) or die ("<p class='cor_alerta'>Não foi possível realizar a consulta</p>");

//Se o resultado for zero imprime a mensagem de erro do contrario faz o loop...
if (mysql_num_rows($resultado) == 0) die("<p class='cor_alerta'> Nenhum registro encontrado</p>");

// fazendo um loop para mostrar os resultados
while ($linha=mysql_fetch_array($resultado)){

//Formata os dados do destaque
switch($linha['destaque']){
case 'S':
$destaque = 'Sim';
$valor = "S";
break;
case 'N':
$destaque = 'Não';
$valor = "N";
break;
}

//Formata os dados do destaque
switch ($linha['ver']){
case 'S':
$ver = 'Sim';
$vale = "S";
break;
case 'N':
$ver = 'Não';
$vale = "N";
break;
}

//imprime form
echo $msg = <<< EOFORM

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
             <div class="profile_info">
                <span>Bem Vindo!!!</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
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
                      <li><a href="editar_noticia.php">Editar Notícias</a></li>
                      <li><a href="form.html">Adicionar Nóticias</a></li>
                                        </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Cadastrar Novo Usuario</a></li>
                      <li><a href="media_gallery.html">Editar Usuario</a></li>
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

            <!-- /menu footer buttons -->
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
                   <li><a href="../index.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
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
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Incluir<small>Editar Noticias</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" name="adicionar" action="" enctype="multipart/form-data"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
					

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Título <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="titulo" type ""text value = "{$linha['titulo']}" id="titulo" maxlength="200" title='Digite um título com até 200 caracteres' required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
					  <label class="control-label col-md-3 col-sm-3 col-xs-12" For="Ver">Dísponivel</label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<select name="ver" title='Marque sim para noticia' class="form-control col-md-7 col-xs-12">
						<option selected="selected" value="$vale"> $ver </option>
                         <option  value="S"> Sim </option>
                         <option  value="N"> Não</option>
						 </select>
						 </div>
					     </div>
					     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Destaque<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="destaque" title="Marque sim para que a página seja exibida em destaque na página inicial " required="required" class="form-control col-md-7 col-xs-12">
						  <option selected="selected" value="$valor"> $destaque </option>
						  <option value="S">Sim</option>
						  <option value="N"> Não</option>
						  </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="resumo" class="control-label col-md-3 col-sm-3 col-xs-12">Resumo<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<textarea name="resumo" rows="5" cols="70" class="form-control col-md-7 col-xs-12" title='Digite um resumo com até 255 caracteres.'>{$linha['resumo']}</textarea>
                        </div>
						</div>
			
			            <div class="form-group">
                        <label for="texto" class="control-label col-md-3 col-sm-3 col-xs-12">Texto da notícia<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<textarea name="texto" id="texto" class="form-control col-md-7 col-xs-12" rows="8" cols="70" title='Digite um texto com mais de 200 caracteres!'>{$linha['texto']}</textarea>
                        </div>
						</div>
						</div>
						
						<div class="form-group">
						<label for="legenda" class="control-label col-md-3 col-sm-3 col-xs-12">Legenda<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						
						<input name="legenda" type="text" id="legenda"value="$legenda" maxlength="80" size="40" title="A legenda deve conter no máximo  255 caracteres." onfocus="style.background='#CCD9FF'" onblur="style.background='tranparent'"class="form-control col-md-7 col-xs-12" />
                        </div>
						</div>
						</div>
						
						
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					      
                        <td><input name="ft" type="file" id="ft" /> <span class="texto" title="A imagem não pode ultrapassar 50MB"/> <strong>Foto atual:</strong> fotos/{$linha[foto]}</td>
				
                        </div>
                      </div>
					  <div class="ln_solid"></div>
					  <div class="form-group">
					  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <input type='hidden' name='noticias_selecionadas' value="{$linha['id']}" />
					  
					  <input type="submit" name="adicionar" value="Alterar Nóticia" class="botao"/>

                    </form>
                  </div>
                </div>
              </div>
            </div>



            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            F2 Software - Soluções Tecnologicas <a href="https://www.f2software.com.br">F2 Software</a>
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
</form>
EOFORM;
}
}
?>