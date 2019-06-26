var appMaster={preLoader:function(){imageSources=[],$("img").each(function(){var e=$(this).attr("src");imageSources.push(e)}),$(imageSources).load()&&$(".pre-loader").fadeOut("slow")},smoothScroll:function(){$("a[href*=#]:not([href=#carousel-example-generic])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top},1e3),!1}})},reviewsCarousel:function(){$(".review-filtering").slick({slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!1,autoplay:!0,autoplaySpeed:5e3})},screensCarousel:function(){$(".filtering").slick({slidesToShow:3,slidesToScroll:1,dots:!1,variableWidth:!0}),$(".js-filter-all").on("click",function(){$(".filtering").slickUnfilter(),$(".filter a").removeClass("active"),$(this).addClass("active")}),$(".js-filter-one").on("click",function(){$(".filtering").slickFilter(".one"),$(".filter a").removeClass("active"),$(this).addClass("active")}),$(".js-filter-two").on("click",function(){$(".filtering").slickFilter(".two"),$(".filter a").removeClass("active"),$(this).addClass("active")}),$(".js-filter-three").on("click",function(){$(".filtering").slickFilter(".three"),$(".filter a").removeClass("active"),$(this).addClass("active")}),$(".js-filter-four").on("click",function(){$(".filtering").slickFilter(".four"),$(".filter a").removeClass("active"),$(this).addClass("active")})},animateScript:function(){$(".scrollpoint.sp-effect1").waypoint(function(){$(this).toggleClass("active"),$(this).toggleClass("animated fadeInLeft")},{offset:"100%"}),$(".scrollpoint.sp-effect2").waypoint(function(){$(this).toggleClass("active"),$(this).toggleClass("animated fadeInRight")},{offset:"100%"}),$(".scrollpoint.sp-effect3").waypoint(function(){$(this).toggleClass("active"),$(this).toggleClass("animated fadeInDown")},{offset:"100%"}),$(".scrollpoint.sp-effect4").waypoint(function(){$(this).toggleClass("active"),$(this).toggleClass("animated fadeIn")},{offset:"100%"}),$(".scrollpoint.sp-effect5").waypoint(function(){$(this).toggleClass("active"),$(this).toggleClass("animated fadeInUp")},{offset:"100%"})},revSlider:function(){{var e=$(window).height();$(".tp-banner").revolution({delay:9e3,startwidth:1170,startheight:e,hideThumbs:10,touchenabled:!1,fullWidth:"on",hideTimerBar:"on",fullScreen:"on",onHoverStop:"off",fullScreenOffsetContainer:""})}},scrollMenu:function(){var e=50;$(window).bind("scroll",function(){$(window).scrollTop()>e?$("nav").addClass("scrolled"):$("nav").removeClass("scrolled")})},placeHold:function(){Placeholdem(document.querySelectorAll("[placeholder]"))}};$(document).ready(function(){appMaster.smoothScroll(),appMaster.reviewsCarousel(),appMaster.screensCarousel(),appMaster.animateScript(),appMaster.revSlider(),appMaster.scrollMenu(),appMaster.placeHold()});

function validar(){
	
	var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

	if(document.getElementById("nome").value == "Nome"){
		alert("Por favor, digite o seu nome!");
		document.getElementById("nome").focus();
		return false;
	}else if(document.getElementById("email").value == "Endereço de e-mail"){
		alert("Por favor, digite o seu endereço de e-mail!");
		document.getElementById("email").focus();
		return false;
	}else if(document.getElementById("telefone").value == "Telefone"){
		alert("Por favor, digite o seu telefone!");
		document.getElementById("telefone").focus();
		return false;
	}else if(document.getElementById("mensagem").value == "Digite aqui sua mensagem..."){
		alert("Por favor, descreva sua mensagem!");
		document.getElementById("mensagem").focus();
		return false;
	}else if(grecaptcha.getResponse() == ""){
		 alert("Por favor, resolva o CAPTCHA acima!");
	    return false;
	}else if(!filter.test(document.getElementById("email").value)){
	    alert('Por favor, digite o e-mail corretamente!');
	    document.getElementById("email").focus();
	    return false
    }else{
		//document.getElementById("formulario").submit();
		
		var source = Cookies.get("utm_source");
    	var medium = Cookies.get("utm_medium");
    	var campaign = Cookies.get("utm_campaign");
    	var term = Cookies.get("utm_term");
    	var content = Cookies.get("utm_content");
		
		$.ajax({
            url: "https://portal.ctinet.com.br/crm/setContato.php",
            data: $("#formulario").serialize() + "&utm_source=" + source + "&utm_medium=" + medium + "&utm_campaign=" + campaign + "&utm_term=" + term + "&utm_content=" + content,
            type: 'post',
            success: function(data) {
            	$('#alert_sucesso').fadeIn('slow');
            	$('.g-recaptcha').hide();
            	$('#btn_enviar').hide();
            	//$('#formulario')[0].reset();
            },
            error: function (response){
		 		$('#alert_falha').show('slow');
				return false;
			}
        });
		
		
	}
	
	
}
