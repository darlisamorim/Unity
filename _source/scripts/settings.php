<?php

/*
 * SETTINGS DE E-MAIL
 * Consulte parametros com seu serviço de hospedagem
 */
define('MAIL_HOST', 'smtp.hostinger.com'); // Servidor de e-mail
define('MAIL_USER', 'eu@darlisalvesamorim.com'); // E-mail de envio usuário ( SMTP )
define('MAIL_SMTP', 'eu@darlisalvesamorim.com'); // E-mail de autenticação. Geralmente é igual ao ( MAIL_USER ).
define('MAIL_PASS', 'SUA_SENHA'); // Senha do e-mail usuário ( SMTP )
define('MAIL_PORT', '465'); // Porta de envio SSL = 465 / TLS = 587 / SSL & TLS ( POP3S ) = 993
define('MAIL_SENDER', 'Darlis A. Amorim | Unity Form PHPMailer'); // Nome do remetente de e-mail
define('MAIL_MODE', 'ssl'); // Encriptação de envio ( tls / ssl ). O padrão normal do PHPMailer ( PHPMailer::ENCRYPTION_SMTPS )
define('MAIL_TESTER', ''); // E-mail de disparo teste

/*
 * Link de redirecionamento após disparo
 */
define('MAIL_REDIRECT', 'URL_DE_REDIRECIONAMENTO'); // URL de redirecionamento ex: ( https://www.darlisalvesamorim.com )

?>
