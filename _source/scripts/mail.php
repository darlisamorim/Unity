<?php
/*
 * Selecionei meu fuso horário
 * Documentação oficial para buscar o fuso horário -> https://www.php.net/manual/pt_BR/timezones.php
 */
date_default_timezone_set('America/Sao_Paulo');

/*
 * Importei abaixo as classes do PHPMailer
 * Lembrando elas devem estar no topo do seu script e não dentro da função
 */
require_once('../PHPMailer/PHPMailer.php');
require_once('../PHPMailer/SMTP.php');
require_once('../PHPMailer/Exception.php');

// Nesse arquivo estão os parametros de configuração de envio.
require_once('settings.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Validações e seleção dos campos do formulário
$name = isset($_POST['name']) ? $_POST['name'] : 'Não Informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não Informado';
$file = isset($_FILES['attachment']) ? $_FILES['attachment'] : 'Não Informado';
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Não Informado';
$message = isset($_POST['message']) ? $_POST['message'] : 'Não Informado';

// Variaveis para facilitar
$hour = date('H:i:s');																										// Define a hora
$date = date('d/m/Y');																										// Define a data
$user = MAIL_SENDER;																											// Define o remetente do e-mail ex: Atenciosamente, Darlis A. Amorim
$redirect = MAIL_REDIRECT;																								// Variavel de redirecionamento
$redirectTemp = 3000;																											// Tempo de redirecionamento em segundos

// Start do PHPMailer
$mail = new PHPMailer(true);

// Server Settings
if (isset($name, $email, $file, $subject, $message)) {
	// $mail->SMTPDebug = SMTP::DEBUG_SERVER;		 														// Debug de envio ( PHPMailer )
	$mail->isSMTP();														 														// Método de envio ( SMTP )
	$mail->Host = MAIL_HOST;																								// Servidor de e-mail
	$mail->SMTPAuth = true;																									// Enable SMTP authentication
	$mail->Username = MAIL_USER;								 														// E-mail de envio usuário ( SMTP )
	$mail->Password = MAIL_PASS;								 														// Senha do e-mail usuário ( SMTP )
	$mail->Port = MAIL_PORT;										 														// Porta de envio SSL = 465 / TLS = 587 / SSL & TLS ( POP3S ) = 993
	$mail->SMTPSecure = MAIL_MODE;							 														// Encriptação de envio ( tls / ssl ). O padrão normal do PHPMailer ( PHPMailer::ENCRYPTION_SMTPS )

	// Recipients
	$mail->setFrom('comercial@fugaproanime.click', 'Equipe | Fuga');
	$mail->addAddress('comercial@fugaproanime.click', 'Equipe | Fuga');			// Add a recipient
	$mail->addAddress($email, 'Equipe | Fuga');															// Name is optional

	// Attachments
 	$mail->AddAttachment($file['tmp_name'], $file['name']);								// Parametro de anexo do formulário

	// Content
	$mail->isHTML(true);																									// Define o formato do e-mail para HTML
	// $mail->Subject = 'Equipe | Fuga';																			// Assunto do e-mail
	$mail->Subject = $subject;																						// Assunto do e-mail usando a variavel do formulário ( $subject )
	$mail->CharSet = 'UTF-8';																							// Unicode padrão ( UTF-8 )
	$mail->Body = "
		Olá <b style='text-transform: capitalize;'>{$name}</b>!
		<br>
		Muito obrigado pelo contato.

		<br><br>
		Data/Hora: <b>{$date}</b> as <b>{$hour}</b>
		<br><br>

		Atenciosamente:
		<br>
		<b>${user}</b>
	";																																		// Corpo da mensagem em <b>HTML</b>
	$mail->AltBody = "Olá {$name}! Muito obrigado pelo contato.";					// Corpo da mensagem em texto simples para correio de e-mail simples sem formatação em HTML';


	// Verificação, validação e redirecionamento de e-mail após disparo
	if ($mail->send()) {
		echo '<div class="wrapper">
						<div class="wrapper-box wrapper-block">
							E-mail enviado com sucesso!
						</div>
					</div>' .
					"<script>
         		setTimeout(function() {
            	window.location.href = '$redirect';
	        	}, '$redirectTemp');
    			</script>";
		// Sem redirecionamento -> ( echo '<div class="wrapper"><div class="wrapper-box wrapper-block">E-mail enviado com sucesso!</div></div>'; )
	} else {
			echo '<div class="wrapper">
							<div class="wrapper-box wrapper-block">
								E-mail não enviado.
							</div>
						</div>';
	} // Se houver algum erro basta adicionar o parametro ( {$mail->ErrorInfo} ) dentro do corpo da mensagem.
} else {
		echo '<div class="wrapper">
						<div class="wrapper-box wrapper-block">
							E-mail não enviado: Informar o Nome e o E-mail
							</div>
					</div>';
}  // Se houver algum erro basta adicionar o parametro ( {$mail->ErrorInfo} ) dentro do corpo da mensagem.
