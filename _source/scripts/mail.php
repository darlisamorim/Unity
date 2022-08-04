<?php
// Esse echo puxa os estilos CSS que contém as formatações de HTML do formulário entre elas os alertas.
echo "<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href='../../_storage/css/reset.css'>
		<link rel='stylesheet' href='../../_storage/css/style.css'>
		<link rel='stylesheet' href='../../_storage/css/queries.css'>
		<link rel='shortcut icon' href='../../_storage/images/favicon.svg'>
	</head>";

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

// Validação e seleção dos campos do formulário
$name = isset($_POST['name']) ? $_POST['name'] : 'Não Informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não Informado';
$file = isset($_FILES['attachment']) ? $_FILES['attachment'] : 'Não Informado';
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Não Informado';
$message = isset($_POST['message']) ? $_POST['message'] : 'Não Informado';

// Variaveis para facilitar
$hour = date('H:i:s');																										// Define a hora
$date = date('d/m/Y');																										// Define a data
$user = MAIL_SENDER;
$mails = MAIL_USER;																										// Define o remetente do e-mail ex: Atenciosamente, Darlis A. Amorim
$redirect = MAIL_REDIRECT;																									// Variavel de redirecionamento
$redirectTemp = MAIL_REDIRECT_TEMP;																										// Tempo de redirecionamento em segundos

// Start do PHPMailer
$mail = new PHPMailer(true);

// Server Settings
if (isset($name, $email, $file, $subject, $message)) {

	// $mail->SMTPDebug = SMTP::DEBUG_SERVER;		 																		// Debug de envio ( PHPMailer )
	$mail->isSMTP();														 												// Método de envio ( SMTP )
	$mail->Host = MAIL_HOST;																								// Servidor de e-mail
	$mail->SMTPAuth = true;																									// Enable SMTP authentication
	$mail->Username = MAIL_USER;								 															// E-mail de envio usuário ( SMTP )
	$mail->Password = MAIL_PASS;								 															// Senha do e-mail usuário ( SMTP )
	$mail->Port = MAIL_PORT;										 														// Porta de envio SSL = 465 / TLS = 587 / SSL & TLS ( POP3S ) = 993
	$mail->SMTPSecure = MAIL_MODE;							 																// Encriptação de envio ( tls / ssl ). O padrão normal do PHPMailer ( PHPMailer::ENCRYPTION_SMTPS )

	// Recipients
	$mail->setFrom($mails, $user);																							// O setFrom em algumas situações precisará ser igual ao e-mail User/SMTP da hospedagem
	$mail->addAddress($mails, $user);																						// Adicionar um destinatário
	$mail->addAddress($email, $user);																						// Nome do destinatário ( Opcional )

	// Recipients Interiors 
	// $mail->setFrom('eu@darlisalvesamorim.com', 'Darlis A. Amorim | Unity Form PHPMailer');								// O setFrom em algumas situações precisará ser igual ao e-mail User/SMTP da hospedagem
	// $mail->addAddress('eu@darlisalvesamorim.com', 'Darlis A. Amorim | Unity Form PHPMailer');							// Adicionar um destinatário
	// $mail->addAddress($email, 'Darlis A. Amorim | Unity Form PHPMailer');												// Nome do destinatário ( Opcional )

	// Attachments
 	$mail->AddAttachment($file['tmp_name'], $file['name']);																	// Parametro de anexo do formulário

	// Content
	$mail->isHTML(true);																									// Define o formato do e-mail para HTML
	// $mail->Subject = 'Darlis A. Amorim | Unity Form PHPMailer';															// Assunto do e-mail
	$mail->Subject = $subject;																								// Assunto do e-mail usando a variavel do formulário ( $subject )
	$mail->CharSet = 'UTF-8';																								// Unicode padrão ( UTF-8 )
	$mail->Body = "
		Olá <b style='text-transform: capitalize;'>{$name}</b> Tudo bem ? Recebemos sua mensagem: 

		<br><br>
		{$message}
		<br><br>
		
		Data/Hora: <b>{$date}</b> / <b>{$hour}</b>
		<br><br>
		
		Atenciosamente:
		<br>
		<b>${user}</b>.
	";																														// Corpo da mensagem em <b>HTML</b>
	$mail->AltBody = "Olá {$name}! Muito obrigado pelo contato.";															// Corpo da mensagem em texto simples para correio de e-mail simples sem formatação em HTML';


	// Verificação, disparo e redirecionamento de e-mail
	if ($mail->send()) {
		echo '<div class="warnings">
					<span>
						<b class="success">E-mail enviado com sucesso.</b>
						<br>
						<br>
						Você será redirecionado!
					</span>
				</div>' .
				"<script>
					setTimeout(function() {
            		window.location.href = '$redirect';
	        		}, '$redirectTemp');
    			</script>
		";
		// Sem redirecionamento -> (
		// echo '<div class="warnings">
		// 		<span>
		// 			<b class="success">E-mail enviado com sucesso.</b>
		// 			<br>
		// 			<br>
		// 			Você será redirecionado!
		// 		</span>			
		// 	</div>';
		// )
	} else {
			echo '<div class="warnings">
						<span>
							<b class="error">E-mail não enviado.</b>
							<br>
							<br>
							Tente novamente. Você será redirecionado!
						</span>	
					</div>';
	} // Se houver algum erro basta adicionar o parametro ( {$mail->ErrorInfo} ) dentro do corpo da mensagem.
} else {
		echo '<div class="warnings">
					<span>
						E-mail não enviado: Confira suas Informações!
					</span>
				</div>';
}  // Se houver algum erro basta adicionar o parametro ( {$mail->ErrorInfo} ) dentro do corpo da mensagem.
