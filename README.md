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
  - Arquivo incluido( main.js )
- [PHP](https://www.php.net/)
  - Scripts de disparo e autenticação


Extras:
  * Bibliotecas:
    * [PHPMailer](https://github.com/PHPMailer/PHPMailer)
    * [NORMALIZE.CSS](https://necolas.github.io/normalize.css/)


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

A Primeira coisa que você precisa saber é que além desse README.md, também estou deixando todo o código marcado com comentários dessa forma lendo deste conteúdo você não terá problemas em utilizar este repositório ( Unity ).

Vamos começar do inicio dentro da pasta ( _source/scripts/**settings.php** ) você encontrará o arquivo de configuração:
```
* As configurações desse arquivo irão fazer seus e-mails dispararem com anexo ou não! Lembrando que você consegue essas informações de configurações com seu provedor de **Hospedagem* e/ou **E-mail**.

define('MAIL_HOST', 'smtp.hostinger.com'); // Servidor de e-mail
define('MAIL_USER', 'eu@darlisalvesamorim.com'); // E-mail de envio usuário ( SMTP )
define('MAIL_SMTP', 'eu@darlisalvesamorim.com'); // E-mail de autenticação. Geralmente é igual ao ( MAIL_USER ).
define('MAIL_PASS', 'SUA_SENHA'); // Senha do e-mail usuário ( SMTP )
define('MAIL_PORT', '465'); // Porta de envio SSL = 465 / TLS = 587 / SSL & TLS ( POP3S ) = 993
define('MAIL_SENDER', 'Darlis A. Amorim | Unity Form PHPMailer'); // Nome do remetente de e-mail
define('MAIL_MODE', 'ssl'); // Encriptação de envio ( tls / ssl ). O padrão normal do PHPMailer ( PHPMailer::ENCRYPTION_SMTPS )
define('MAIL_TESTER', ''); // E-mail de disparo teste

* Note que este arquivo define as configuração do PHPMailer e cada linha contém um comentário. Além disso vou deixar pré-configurado com minhas credenciais ( Excluindo é claro minha senha de e-mail ), agora você só precisa substituir as minhas credenciais pelas suas.
```

Algo muito importante para falar é que 

Em nosso exemplo veja como ficará quando você modificar as Tags do site note que pegamos o mesmo trecho do arquivo **seo.php**:
```
* Exemplo:

<meta itemprop="name" content="ProGame | O Melhor Site de Games" />
<meta itemprop="description" content="Você encontra o download de todos os melhores jogos de graça" />
<meta itemprop="url" content="https://www.progame.com/" />
<meta itemprop="image" content="https://www.progame.com/_storage/images/default.svg" />
```
Desde de que você tenha atenção irá conseguir modificar e ajustar os arquivos para alimenta-los a partir do refatoramento e assim terá um site ou página otimizado.

[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ Dicas e avisos #LEIA!

* Uma vez que terminou o seu projeto recomendo fortemente que você unifique todos os arquivos em CSS para um só. Você pode utilizar o **composer** nele existe um repositório muito bom para compilar arquivos CSS, JS etc... Vá no **packages** e procure por **matthiasmullie/minify**, claro isso é uma maneira existem outras.

* Mais uma coisa a respeito de compilar seus arquivos e unifica-los dentro das páginas **header.php** e **footer.php** existe uma ordem a qual os arquivos está sendo executados na página quando for compilar siga essa ordem para não ter problemas com seu CSS, JS e etc...

* Eu utilizei uma nomenclatura **{SITE_NAME}**, **{SITE_URL}** etc ... Seria ótimo você utilizar o **PHP** e definir constantes com os valores das Tags dessa forma você evitaria a reescrita de código ou textos. Algumas dessas **nomenclatura** são de URL e para alguns casos você terá que substituir para a url da sua página para seu script funcionar. 

* Eu estou alguns arquivos estão desativados ou pendentes no projeto, pois eu não achei ou não tive tempo para escreve-los/coloca-los fique a vontade para implementar.

* Eu estou utilizando um **Reset.css** próprio, porém caso queira utilizar o normalize basta desabilitar o meu ou excluir de qualquer forma todos os arquivos foram pra você neste projeto.

* **RSS** e **SITEMAP**, vou criar um **RELEASE** com esses dois arquivos, porém o certo seria adiciona-los somente quando você já tiver implementado um loop com comunicação com banco de dados assim você puxa os valores dinamicamente e ficará muito mais fácil a escrita manualmente é muito trabalhoso, porém vou criar a base eles e deixar como bônus na próxima **RELEASE** ai vocês só precisaram implementar.
