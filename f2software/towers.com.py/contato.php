<?php
//MAGNIS - HOSPEDAGEM ILIMITADA - WWW.MAGNIS.COM.BR - HOSPEDE O SEU SITE SEM LIMITES DE ESPACO EM DISCO OU TRAFEGO MENSAL
require_once 'class.phpmailer.php';
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$comentario = $_POST['comentario'];
$destinatario = $_POST['destinatario'];
 
$mensagem = '<html><body>';
$mensagem .= '<h1 style="font-size:15px;">Contato Website</h1>';
$mensagem .= '<table style="border-color: #666; font-size:11px" cellpadding="10">';
$mensagem .= '<tr style="background: #eee;"><td><strong>Nome:</strong> </td><td>' . $nome . '</td></tr>';
$mensagem .= '<tr><td><strong>Email:</strong> </td><td>' . $email . '</td></tr>';
$mensagem .= '<tr><td><strong>Telefone:</strong> </td><td>' . $fone . '</td></tr>';
$mensagem .= '<tr style="background: #eee;"><td><strong>Mensagem:</strong> </td><td>' . nl2br($comentario) . '</td></tr>';
$mensagem .= '</table>';
$mensagem .= '</body></html>';
 
$mail = new PHPMailer();
$mail->SetFrom($email, $nome);
$mail->Subject = 'Contato Website' ;
$mail->MsgHTML($mensagem);
$mail->AddAddress($destinatario, Website);
 
if (!$mail->Send()) {
    echo 'Erro ao enviar mensagem';
} else {
    echo 'Mensagem enviada com sucesso';
}
?>