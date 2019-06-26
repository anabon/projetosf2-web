 $(document).ready(function(){
	$("#sendmail").click(function(){
		var valid = '';
		var isr = ' é Obrigatório.';
		var name = $("#nome").val();
		var mail = $("#email").val();
		var carro = $("#carro").val();
		var destinatario = $("#destinatario").val();
		var subject = $("#assunto").val();
		var text = $("#comentario").val();
		if (name.length<1) {
			valid += '<br />Nome'+isr;
		}
		if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += '<br />E-mail'+isr;
		}
		if (!destinatario.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += '<br />E-mail'+isr;
		}
		if (subject.length<1) {
			valid += '<br />Assunto'+isr;
		}
		if (text.length<1) {
			valid += '<br />Proposta'+isr;
		}
		if (carro.length<1) {
			valid += '<br />Veiculo'+isr;
		}
		if (valid!='') {
			$("#response").fadeIn("slow");
			$("#response").html("Error:"+valid);
		}
		else {
			var datastr ='&nome=' + name + '&email=' + mail + '&assunto=' + subject + '&destinatario=' + destinatario + '&carro=' + carro+ '&comentario=' + text;
			$("#response").css("display", "block");
			$("#response").html("Enviando e-mail, aguarde .... ");
			$("#response").fadeIn("slow");
			setTimeout("send('"+datastr+"')",2000);
		}
		return false;
	});
});
function send(datastr){
	$.ajax({	
		type: "POST",
		url: "mail.php",
		data: datastr,
		cache: false,
		success: function(html){
		$("#response").fadeIn("slow");
		$("#response").html(html);
		setTimeout('$("#response").fadeOut("slow")',2000);
		document.getElementById('formail').reset();
	}
	});
}
