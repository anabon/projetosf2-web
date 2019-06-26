<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	$Mailer = new PHPMailer (); //chamando a classe
	$Mailer -> IsSMTP();//definindo servidor SMTP
	$Mailer -> isHTML(true); // Enviar email HTML
	$Mailer -> Charset = 'UTF-8';//recebe codificação utf8

	//configurações
	$Mailer -> SMTPauth = true;
	$Mailer -> SMTSecure = 'ssl';

	//dados email saida

	$Mailer -> host = 'smtp-mail.outlook.com'; //nome do servidor SMTP
	$Mailer -> Port = '587'; // porta de entrada e saida
	$Mailer -> Username = 'desenvolvimento-f2@outlook.com'; // usuario
	$Mailer -> Password = 'comp2018'; // senha

	//email remetente
	$Mailer -> from = 'desenvolvimento-f2@outlook.com';

	//Nome remetente

	$Mailer -> FromName = 'Ana';

	//Assunto da mensagem
	$Mailer -> Subject = 'Titulo  - Recuperar Senha ';

	//contúdo mensagem

	$Mailer -> Body = 'Contéudo do E-mail';

	//corpo da mensagem de texto

	$Mailer -> AltBody = 'Contúedo do email em texto';

	//Destinatario
	$Mailer ->AddAddress('desenvolvimentof2@gmail.com');

	if ($Mailer -> Send ())
	 {
	 	echo "Email enviado com sucesso!";
	 }else{
	 	echo "Erro no envio do email : " .$Mailer->ErrorInfo();
	 }


?>