<?php 
	$host= 'localhost';
	 $usuario = 'root';
	 $senhabd= '';
     $bd= 'towers';
	 
 
    $userbd = $bd;

	//conectando com o localhost - mysql
	$conexao = mysqli_connect($host, $usuario, $senhabd, $bd );
	if (!$conexao)
		die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_connect_error());

			//conectando com a tabela do banco de dados
	$banco = mysqli_select_db($conexao, $bd);
	if (!$banco)
		die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());
 
 
	$sql = ("SELECT id_veiculo, n_registro, PlacaVeiculo, anofabricao, anomodelo, condicao, Kilometragem, valorvista, exterior, interior, tipoveiculo, portas, motor, marca, observacao, valorvista, modelo, caminho_img FROM veiculo WHERE tipoveiculo = 'COCHES' AND destacar = 'SIM'");
 
  $resource = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
  $res = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>TOWERS MULTIMARCAS</title>
	

	<!-- jQuery (required) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

	<!-- Syntax highlighting -->
	<link rel="stylesheet" href="demos/prettify/prettify.css" media="screen">
	<script src="demos/prettify/prettify.js"></script>

	<!-- Anything Slider optional plugins -->
	<script src="js/jquery.easing.1.2.js"></script>
	<!-- http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js -->
	<script src="js/swfobject.js"></script>

	<!-- Demo stuff -->
	<link rel="stylesheet" href="demos/css/page.css" media="screen">
	<script src="demos/js/jquery.jatt.min.js"></script>

	<!-- AnythingSlider -->
	<link rel="stylesheet" href="css/anythingslider.css">
	<script src="js/jquery.anythingslider.js"></script>

	<!-- AnythingSlider video extension; optional, but needed to control video pause/play -->
	<script src="js/jquery.anythingslider.video.js"></script>

	<!-- Ideally, add the stylesheet(s) you are going to use here,
	 otherwise they are loaded and appended to the <head> automatically and will over-ride the IE stylesheet below -->
	<link rel="stylesheet" href="css/theme-metallic.css">
	<link rel="stylesheet" href="css/theme-minimalist-round.css">
	<link rel="stylesheet" href="css/theme-minimalist-square.css">
	<link rel="stylesheet" href="css/theme-construction.css">
	<link rel="stylesheet" href="css/theme-cs-portfolio.css">

	<script>
		// Demo functions
		// **************
		$(function(){

			prettyPrint();

			// External Link with callback function
			$("#slide-jump").click(function(){
				$('#slider2').anythingSlider(4, function(slider){ /* alert('Now on page ' + slider.currentPage); */ });
				return false;
			});

			// External Link
			$("a.muppet").click(function(){
				$('#slider1').anythingSlider(5);
				$(document).scrollTop(0); // make the page scroll to the top so you can watch the video
				return false;
			});

			// Report Events to console & features list
			$('#slider1, #slider2').bind('before_initialize initialized swf_completed slideshow_start slideshow_stop slideshow_paused slideshow_unpaused slide_init slide_begin slide_complete', function(e, slider){
				// show object ID + event (e.g. "slider1: slide_begin")
				var txt = slider.$el[0].id + ': ' + e.type + ', now on panel #' + slider.currentPage;
				$('#status').text(txt);
				if (window.console && window.console.firebug){ console.debug(txt); } // added window.console.firebug to make this work in Opera
			});

			// Theme Selector (This is really for demo purposes only)
			var themes = ['minimalist-round','minimalist-square','metallic','construction','cs-portfolio'];
			$('#currentTheme').change(function(){
				var theme = $(this).val();
				$('#slider1').closest('div.anythingSlider')
					.removeClass( $.map(themes, function(t){ return 'anythingSlider-' + t; }).join(' ') )
					.addClass('anythingSlider-' + theme);
				$('#slider1').anythingSlider(); // update slider - needed to fix navigation tabs
			});

			// Add a slide
			var imageNumber = 1;
			$('button.add').click(function(){
				$('#slider1')
					.append('<li><img src="demos/images/slide-tele-' + (++imageNumber%2 + 1)  + '.jpg" alt="" /></li>')
					.anythingSlider(); // update the slider
			});
			$('button.remove').click(function(){
				$('#slider1 > li:not(.cloned):last').remove();
				$('#slider1').anythingSlider(); // update the slider
			});

		});

	</script>

	<script>
		// Set up Sliders
		// **************
		$(function(){

			$('#slider1').anythingSlider({
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				navigationFormatter : function(index, panel){
					return ['Slab', 'Parking Lot', 'Drive', 'Glorius Dawn', 'Bjork?', 'Traffic Circle'][index - 1];
				},
				onSlideComplete : function(slider){
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});

			$('#slider2').anythingSlider({
				mode                : 'f',   // fade mode - new in v1.8!
				resizeContents      : false, // If true, solitary images/objects in the panel will expand to fit the viewport
				navigationSize      : 3,     // Set this to the maximum number of visible navigation tabs; false to disable
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['Recipe', 'Quote', 'Image', 'Quote #2', 'Image #2'][index - 1];
				},
				onSlideBegin: function(e,slider) {
					// keep the current navigation tab in view
					slider.navWindow( slider.targetPage );
				}
			});

			// tooltips for first demo
			$.jatt();

		});
	</script>
</head>

<body id="main">

	<div id="page-wrap">



			<br><br>

			<!-- AnythingSlider #1 -->
			<ul id="slider1">
			
				<?php
					while($valor = mysqli_fetch_array($resource)){
					  
					 $id = $valor['n_registro']; 
					 
					  ?>
					  <li><img src="admin/cadastros/<?=$valor['caminho_img']; ?>" alt=""></li>
					  
					  <?php
					  
					}
					  ?>

				

				<li><img src="demos/images/slide-env-1.jpg" alt=""></li>

				<li><img src="demos/images/slide-civil-2.jpg" alt=""></li>
                  
			

				<li class="panel5">
									</li>

				<li><img src="demos/images/slide-env-2.jpg" alt=""></li>

			</ul>  <!-- END AnythingSlider #1 -->

			<br><br>

		

		<br>

    
		
	</div>

</body>

</html>
