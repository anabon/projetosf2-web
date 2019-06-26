// JavaScript Document
 function retiraAcento(obj)
 {
   palavra = String.fromCharCode(event.keyCode);
  
  var caracteresInvalidos = 'àèìòùâêîôûäëïöüáéíóúãõÀÈÌÒÙÂÊÎÔÛÄËÏÖÜÁÉÍÓÚÃÕ';
  var caracteresValidos =   'aeiouaeiouaeiouaeiouaoAEIOUAEIOUAEIOUAEIOUAO';
  var acento = "´`^¨~";
  if(acento.indexOf(palavra)!= -1)
  {
    window.event.keyCode = 0;
  }
 
 if (caracteresInvalidos.indexOf(palavra) == -1) 
  {
       if (caracteresValidos.indexOf(palavra) != -1) {
         window.event.keyCode = 0;
         obj.value = obj.value + palavra;
       }
  } 
  else 
  {
           window.event.keyCode = 0;
           nova = caracteresValidos.charAt(caracteresInvalidos.indexOf(palavra));
           obj.value =  obj.value + nova;
  }
  
 }