<?php  
	 require 'Mailer/PHPMailerAutoload.php'; // incluindo ao auto load do phpmailer

	 	if (isset ($_POST['nome']) && !empty ($_POST['nome'])) // captura o valor dos dados enviados pelo formulário e atribui a variavél
	 	{
	 		$nome = $_POST['nome'];


	 	}
	 		if (($_POST['email']) && !empty($_POST['email'])) // captura o valor dos dados enviados pelo formulário e atribui a variavél
			{
				$email = $_POST ['email'];
			}

				if (($_POST['telefone']) && !empty($_POST['telefone']))
				{
					$telefone = $_POST['telefone'];
				}
					if (($_POST['celular']) && !empty($_POST['celular']))
					{
						$celular = $_POST ['celular'];
					}
						if (($_POST['cidade']) && !empty($_POST['cidade'])) 
						{
							$cidade = $_POST ['cidade'];
						}

						if (($_POST['assunto'])&& !empty($_POST['assunto']))
						 {
							$assunto = $_POST['assunto'];
						 }

						 	if (($_POST['mensagem']) && !empty($_POST['mensagem']))
						 	{
						 		$mensagem = $_POST['mensagem'];
						 	}


		$mail = new PHPMailer; // instaca a classe phpmailer



			$mail -> isSMTP (); // define o procolo SMTP
			$mail -> Host = 'smtp.gmail.com'; // define o endereço do servidor 
			$mail-> SMTPAuth = true;  // habilita a autenciacção SMTP
			$mail -> SMTSecure = 'tls'; // define a criptografia a ser usada
			$mail -> Username = 'desenvolvimentof2@gmail.com'; // dados de uma conta ativa
			$mail -> Password = 'comp2018'; // dados de uma conta ativa
			$mail -> Port = 587; // a ser utilizada

				$mail -> setFrom ('anabon2@hotmail.com', 'Contato');
				$mail -> addAddress ('marketingf2software@gmail.com'); // destinario


					$mail -> isHTML (true); // indica o uso html no conteudo do email

						$mail -> FromName = $nome;
						$mail -> From = $email;
						$mail -> Subject = $assunto; // assunto

							$mail->Body .= "Nome: ".nl2br($_POST['nome'])."<br>";
                        	$mail->Body .= "Email: ".nl2br($_POST['email'])."<br>";
                        	$mail->Body .= "Telefone: ".nl2br($_POST['telefone'])."<br>";
                       	 	$mail->Body .= "Celular: ".nl2br($_POST['celular']). "<br>";
                        	$mail->Body .= "Cidade:" .nl2br($_POST['cidade']). "<br>";

                        		$mail->Body .= "Mensagem: ".nl2br($_POST['mensagem']);
									$mail -> AltBody = $mensagem; // texto adiconal

						// verifica a resposta do disparo do email


									if (!$mail -> send ())
									{
										echo 'Não foi possivel enviar a mensagem. <br/>';
										echo 'Erro: ' .$mail -> ErrorInfo;
									}else
									{
										echo "<script type='text/javascript'>window.alert('".$nome."! Sua mensagem foi enviada com sucesso!');</script>";
                                        echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">';
                                        exit;
							
									}


?>