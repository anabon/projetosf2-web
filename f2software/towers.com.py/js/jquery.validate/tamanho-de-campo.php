<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validando pelo tamanho do campo (CPF ou CNPJ)</title>
<script type="text/javascript" src="http://www.shiguenori.com/jquery/jquery-1.3.1.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>

<script type="text/javascript">
// adiciona metodo ao validate para verificar tamanho
jQuery.validator.addMethod("verificaTamanho", function(value, element) {
 return value.length == 11 || value.length == 14;
}, jQuery.format("Informe 11 ou 14 digitos"));

// QUANDO O DOCUMENTO ESTIVER PRONTO
$(document).ready(function(){
   // CONFIGURA A VALIDACAO DO FORMULARIO
   $("#meuForm").validate({
      rules: {
         titulo: { required:true },
			cpf_cnpj: {
				required:true,
				verificaTamanho:true,
				cpf:function(element) {
					if($("#cpf_cnpj").val().length==11){ return true; }
				},
				cnpj:function(element) {
					if($("#cpf_cnpj").val().length==14){ return true; }
				}
			}
      },
      messages: {
         titulo: { required:'Informe o título' },
			cpf_cnpj: {required: 'Informe o número do documento', verificaTamanho:'O documento precisa ter 11 ou 14 digitos', cpf:'Informe um CPF válido', cnpj:'Informe um CNPJ válido'}
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
   <label>Título</label>
   <input id="titulo" name="titulo" type="text" value="" />
   <div class="clear"></div>

   <label>CPF ou CNPJ</label>
   <input id="cpf_cnpj" name="cpf_cnpj" type="text" value="" maxlength="14" />
   <div class="clear"></div>

   <label>&nbsp;</label>
   <input type="submit" value="Enviar" class="bt" />
</form>


</body>
</html>