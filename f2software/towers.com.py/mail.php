<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
	$mail = $_POST['email'];
	$name = $_POST['nome'];
	$subject = $_POST['assunto'];
	$text = $_POST['comentario'];
	$car = $_POST['carro'];
	$destinatario = $_POST['destinatario'];
	
 $to = $destinatario;
 $message =" Remetente: ".$mail;
 $message .="\n\r Nome: ".$name;
 $message .="\n\r Veiculo: http://www.towersmultimarcas.com.py/auto/index.php?pg=auto&auto_id=".$car; //altere a URL para a do seu dominio com o caminho completo, note que nessa instalação está sem http://www.indianatorrent.com/auto/
 $message .="\n\r Proposta:\n\r ".$text;

 if(mail($to, $subject,$message)){
	echo "Proposta enviada com sucesso!";
} 
else{ 
	echo "Ocorreu um erro ao enviar a proposta. Por favor entre em contato por telefone.";
}
?>