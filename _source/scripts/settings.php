<?php

/*
 * SETTINGS DE E-MAIL
 * Consulte parametros com seu serviço de hospedagem
 */
define('MAIL_HOST', 'smtp.mailtrap.io'); // Servidor de e-mail
define('MAIL_USER', '1e54b81d728796'); // E-mail de envio usuário ( SMTP )
define('MAIL_SMTP', '1e54b81d728796'); // E-mail de autenticação. Geralmente é igual ao ( MAIL_USER ).
define('MAIL_PASS', 'afc53cdf30dcac'); // Senha do e-mail usuário ( SMTP )
define('MAIL_PORT', '465'); // Porta de envio SSL = 465 / TLS = 587 / SSL & TLS ( POP3S ) = 993
define('MAIL_SENDER', 'Darlis A. Amorim | Unity Form PHPMailer'); // Nome do remetente de e-mail
define('MAIL_MODE', 'tls'); // Encriptação de envio ( tls / ssl ). O padrão normal do PHPMailer ( PHPMailer::ENCRYPTION_SMTPS )
define('MAIL_TESTER', ''); // E-mail de disparo teste

/*
 * Link e Tempo de redirecionamento após disparo
 */
define('MAIL_REDIRECT', 'URL_DE_REDIRECIONAMENTO'); // URL de redirecionamento ex: ( https://www.darlisalvesamorim.com )
define('MAIL_REDIRECT_TEMP', '3000'); // Tempo para acontecer o redirecionamento ex: ( 3000 ) = 3 Segundos 

?>
