<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testando validate com novos módulos</title>

<script type="text/javascript" src="http://www.shiguenori.com/jquery/jquery-1.3.1.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>

<script type="text/javascript">
// QUANDO O DOCUMENTO ESTIVER PRONTO
$(document).ready(function(){
   // CONFIGURA A VALIDACAO DO FORMULARIO
   $("#meuForm").validate({
      rules: {
         titulo: {required: true},
         titulo2: { required: true, notEqual: "#titulo"},
         data_galeria: {required: true, dateBR: true},
         cnpj: {cnpj: true}
      },
      messages: {
         titulo: {required: 'Informe o título' },
         titulo2: { required: 'Informe o segundo título', notEqual: 'Informe um valor diferente' },
         data_galeria: {required: 'Informe a data', dateBR: 'Digite uma data válida'},
         cnpj: { cnpj: 'CNPJ inválido'}
      }
      ,submitHandler:function(form) {
         alert('ok');
      }
   });

   $('#result').html('jQuery Validate com novos métodos: cpf, cnpj, dateBR, dateTimeBR, notEqual');
});

</script>

<style type="text/css">
<!--
body{
   font:12px Arial, Helvetica, sans-serif;
}

label{
   display:block;
   width:100px;
   float:left;
}
input{
   display:block;
   width:150px;
   float:left;
}

#result{ margin-bottom:20px; }

.clear{
   clear:both;
   margin-bottom:5px;
}

.bt{ width:auto!important; }

label.error{ color:#FF0000; width:250px; }
-->
</style>

</head>

<body>

<div id="result"></div>

<form id="meuForm" action="">

   <label>Título</label>
   <input id="titulo" name="titulo" type="text" value="" />
   <div class="clear"></div>

   <label>Título diferente</label>
   <input id="titulo2" name="titulo2" type="text" value="" />
   <div class="clear"></div>

   <label>Data</label>
   <input id="data_galeria" name="data_galeria" type="text" value="" />
   <div class="clear"></div>

   <label>CNPJ</label>
   <input id="cnpj" name="cnpj" type="text" value="" />
   <div class="clear"></div>

   <label>&nbsp;</label>
   <input type="submit" value="Enviar" class="bt" />

</form>

</body>
</html>