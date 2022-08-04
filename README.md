<h1 align='center'> Unity 👋, Contact Form 🧑🏻‍💻 </h1>

<p align='center'>
  Contact form with PHPMailer without using Composer.
</p>

<p align='center'>
  <a title="Darlis A. Amorim_ | DevTo" target="_blank" href="https://dev.to/darlisamorim"><img src="https://img.shields.io/badge/DEV.TO-%230A0A0A.svg?&style=for-the-badge&logo=dev-dot-to&logoColor=white" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | Medium" href="https://medium.com/@darlisamorim"><img src="https://img.shields.io/badge/medium-%2312100E.svg?&style=for-the-badge&logo=medium&logoColor=white" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | CodePen" href="https://codepen.io/darlisamorim"><img src="https://img.shields.io/badge/CodePen-white?style=for-the-badge&logo=codepen&logoColor=black" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | Website" href="https://www.darlisalvesamorim.com"><img src="https://img.shields.io/badge/-My%20Blog-17bf63?&style=for-the-badge&logo=blog&logoColor=black" /></a>&nbsp;&nbsp;&nbsp;
</p>


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#projeto)

## ➤ Projeto

Unity é um respositório que tem o objetivo de criar um formulário de disparo de e-mails com anexo usando o PHPMailer sem utilizar o composer. Algumas vezes eu já tive a necessidade de criar formulários ou fazer disparos de e-mails autenticados mais as vezes você simplesmente não quer instalar ou usar o composer e agora você não precisa mais!



[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#tecnologias)

## ➤ Tecnologias

- [HTML5](https://html5.org/)
  - Estrutura separada com tags pré-servidas
- [CSS3](https://www.w3.org/Style/CSS/Overview.en.html)
  - Folhas de estilo separadas
- ~~[jQuery](https://jquery.com/) Pending~~
  - Biblioteca adicionada
- ~~[Javascript](https://javascript.info/) Pending~~
  - Arquivo incluido ( main.js )
- [PHP](https://www.php.net/)
  - Scripts de disparo e autenticação


Extras:
  * Bibliotecas:
    * [PHPMailer](https://github.com/PHPMailer/PHPMailer)
    * [NormalizeCSS](https://necolas.github.io/normalize.css/)


  * Visual Studio Code
    * [VS Code](https://code.visualstudio.com/)




[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#layout)

## ➤ Layout

O Layout foi separado em camadas veja ( Pastas e Arquivos ):

  * **/_source**:
    * [/PHPMailer] **->** Contém os arquivos do repositório oficial do PHPMailer
    * [/scripts] **->** Scripts de configuração de envio
      * mail.php
      * settings.php

  * **/_storage**:
    * [/css]
      * reset.css **->** Inclui o NORMALIZE.css ao meu RESET.CSS
      * style.css

    * [/js] **->** Scripts do projeto
      * jquery.js
      * main.js

  * **raiz/**:
    * .gitignore -> Define quais arquivos não serão adicionados na hora do envio para o repositório
    * index.php **->** Responsável pelas sessões ( sections ) do site
    * README.md **->** Arquivo padrão de interpretação do git ou seja este tutorial que está lendo agora


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ Como utilizar ?

Comece deixando um Follow no meu Github e em seguida exclua os seguintes arquivos e pastas ( **.gitignore**, **README.md** e **/.git** ), pois não são necessários para o disparo de e-mails leia tudo abaixo com atenção. </br></br>

A Primeira coisa que você precisa saber é que além desse README.md, também estou deixando todo o código marcado com comentários e com mais esse conteúdo você não terá problemas em utilizar este repositório ( Unity ).

Vamos começar do início dentro da pasta ( **_source/scripts/** ) você encontrará o arquivo de configuração ( **settings.php** ):
```
* As configurações desse arquivo irão fazer seus e-mails dispararem com anexo ou não! Lembrando que as informações de configurações você consegue com seu provedor de **Hospedagem* e/ou **E-mail**.

define('MAIL_HOST', 'smtp.hostinger.com'); // Servidor de e-mail
define('MAIL_USER', 'eu@darlisalvesamorim.com'); // E-mail de envio usuário ( SMTP )
define('MAIL_SMTP', 'eu@darlisalvesamorim.com'); // E-mail de autenticação. Geralmente é igual ao ( MAIL_USER ).
define('MAIL_PASS', 'SUA_SENHA'); // Senha do e-mail usuário ( SMTP )
define('MAIL_PORT', '465'); // Porta de envio SSL = 465 / TLS = 587 / SSL & TLS ( POP3S ) = 993
define('MAIL_SENDER', 'Darlis A. Amorim | Unity Form PHPMailer'); // Nome do remetente de e-mail
define('MAIL_MODE', 'ssl'); // Encriptação de envio ( tls / ssl ). O padrão normal do PHPMailer ( PHPMailer::ENCRYPTION_SMTPS )
define('MAIL_TESTER', ''); // E-mail de disparo teste

define('MAIL_REDIRECT', 'URL_DE_REDIRECIONAMENTO'); // URL de redirecionamento ex: ( https://www.darlisalvesamorim.com )
define('MAIL_REDIRECT_TEMP', '3000'); // Tempo para acontecer o redirecionamento ex: ( 3000 ) = 3 Segundos 

* Perceba que todas as minhas credenciais já estão dentro da segunda camada de aspas simples ex: ( 'MAIL_HOST' 'CREDENCIAL' ) estou deixando assim, pois é onde você servirá suas credenciais.

* Mais abaixo vamos ter uma tópico sobre os anexo então leia com atenção tudo!
```

Agora vamos para dentro da pasta ( **_source/scripts/** ) também existe um arquivo de configuração ( **mail.php** ) ele contém toda a informação de script que faz o formulário funcionar. Quando você ira mexer nesse arquivo **mail.php** ? 

  * Para modificar o ( Recipients ), pois em alguns casos seu hospedagem/e-mail precisará do ( Recipients Interiors ) que está comentado.
  * Ao adicionar um input novo ( Novo campo ao formulário ).
  * Para personalizar o conteúdo da mensagem fica dentro da tag  $mail->Body = "Conteúdo"; e $mail->AltBody = "Conteúdo";
  * Quando for utilizar ou não o input ( **file** ) para enviar anexo.

* Uma observação a respeito desse mesmo arquivo ( **mail.php** ). Eu o fiz visando deixar o formulário o mais autosuficiente possível então provavelmente você precisará mexer muito pouco nele e quando precisar mexer você sempre verá um comentário na linha, porém quando não haver comentário de preferência não mexa.

Dentro da pasta **raiz/**, temos um arquivo **index.php** afim de simular um formulário criei e formatei alguns campos ( Nome, E-mail, Anexo, Assunto e Mensagem ), porém você poderá adiciona-los ou remove-los seguindo os passos abaixo:
```
* No nosso exemplo vamos adicionar um campo novo chamado ( SOBRENOME ). Dentro do arquivo **index.php** vamos localizar o <label for="name> e vamos copiar e colar ele assim como todo o conteúdo que o compõe. O código deverá ficar assim:

  <label for="name">
    <span>Nome:</span>
    <input type="text" name="name" placeholder="Digite seu nome!" required>
  </label>
  
  <label for="name">
    <span>Nome:</span>
    <input type="text" name="name" placeholder="Digite seu nome!" required>
  </label>

* Agora que você já colou o <label for="name> basta substituir os valores e deixar o seu como no exemplo abaixo:

  <label for="sobrenome">
    <span>Sobrenome:</span>
    <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome!" required>
  </label>

* Em seguida você ira para dentro da pasta 

```
Desde de que você tenha atenção irá conseguir modificar e ajustar os arquivos para alimenta-los a partir do refatoramento e assim terá um site ou página otimizado.

[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ Dicas e avisos #LEIA!

* 1
* 2
* 3
