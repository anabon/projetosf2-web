<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validando um campo com valor maior</title>
<script type="text/javascript" src="http://www.shiguenori.com/jquery/jquery-1.3.1.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>

<script type="text/javascript">

jQuery.validator.addMethod("maiorQue", function(value, element, param) {
   return value <= $(param).val() ? false : true;
}, "Este valor precisa ser maior"); // Mensagem padrão 

jQuery.validator.addMethod("menorQue", function(value, element, param) {
   return value >= $(param).val() ? false : true;
}, "Este valor precisa ser menor"); // Mensagem padrão 

// QUANDO O DOCUMENTO ESTIVER PRONTO
$(document).ready(function(){
   // CONFIGURA A VALIDACAO DO FORMULARIO
   $("#meuForm").validate({
      rules: {
         hora_inicial: { required:true },
			hora_final: { required:true, maiorQue:'#hora_inicial' }
      },
      messages: {
         hora_inicial: { required:'Informe a hora inicial' },
			hora_final: {required: 'Informe a hora final', maiorQue:'Informe um valor superior ao campo anterior' }
      }
      ,submitHandler:function(form) {
         alert('ok');
      }
   });
});

</script>
</head>

<body>

<form id="meuForm" action="">
   <label>Hora inicial</label><br />
   <input id="hora_inicial" name="hora_inicial" type="text" value="" maxlength="5" />
   <div class="clear"></div>

   <label>Hora final</label><br />
   <input name="hora_final" type="text" value="" maxlength="5" />
   <div class="clear"></div>

   <input type="submit" value="Enviar" class="bt" />
</form>

Este formulário irá dar alerta quando o valor informado no segundo campo for maior que o primeiro.<br />
Observem que eu defini uma ID para a hora inicial e a especifiquei no 'maiorQue' do segundo campo.<br />
<br />
No caso de horas aconselho utilizar uma máscara para que os valores do input fiquem sempre no formato 00:00 (um plugin que faz isso é o jquery.maskedinput)<br />
<br />
Lembrem-se: estes métodos 'maiorQue' e 'menorQue' dependem do jQuery e jQuery.validate. Fiquem a vontade para inserir estes métodos no final do arquivo do jQuery.validate




</body>
</html>