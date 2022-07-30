<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Darlis A. Amorim | Unity Form PHPMailer</title>
	<meta name="description" content="Greenn Plus | Evento Sechat" />

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="_storage/css/reset.css">
	<link rel="stylesheet" href="_storage/css/style.css">
	<link rel="stylesheet" href="_storage/css/queries.css">
	<link rel="shortcut icon" href="_storage/images/favicon.svg">

</head>

	<body>

		<main class="main container__flex">
			<form name="unity" class="form" action="_source/scripts/mail.php" method="POST" enctype="multipart/form-data">
				<fieldset>

					<legend>
						<mark>Unity</mark> Form <b>PHPMailer</b>
					</legend>

					<!-- 
						required
					-->

					<label for="name">
						<span>Nome:</span>
						<input type="text" name="name" placeholder="Digite seu nome!" required>
					</label>

					<label for="email">
						<span>E-mail:</span>
						<input type="email" name="email" placeholder="Digite seu e-mail!">
					</label>

					<label for="file">
						<span>Anexe:</span>
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="attachment">
					</label>

					<label for="subject">
						<span>Assunto:</span>
						<input type="text" name="subject" placeholder="Sobre o que deseja falar?">
					</label>

					<label for="message">
						<span>Mensagem:</span>
						<textarea name="message" rows="4" cols="50" placeholder="Digite sua mensagem!"></textarea>
					</label>

					<label for="buttons">
						<button type="reset" name="reset">Reescrever Mensagem</button>
						<button type="submit" name="send">Enviar Mensagem</button>
					</label>

					<!-- <label for="debug">
						
					</label> -->

				</fieldset>
				<!-- Fim Fieldset -->

			</form>
			<!-- FIM FORM -->
		</main>
		<!-- Fim Main.container__flex -->

		<!-- All Scripts -->
		<script src="_storage/js/jquery.js"></script>
		<script src="_storage/js/main.js"></script>
		
	</body>
</html>
