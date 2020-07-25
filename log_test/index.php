<?php 
session_start();
define("LOGGED", false);
$LOGGED = false;

if(isset($_SESSION["logged"])){
	if($_SESSION["logged"] == 1){
		$LOGGED = true;
	}
}

?>

<!DOCTYPE html>
	<html>
		
		<head>
			
			<title>Perfil</title>
			
			<meta charset="utf-8">	

			<link rel="stylesheet" href="style.css">
			<link href="https://fonts.googleapis.com/css?family=Anton|Kanit|Suez+One&display=swap" rel="stylesheet">
			<script type="text/javascript" src="scripts/js/jquery-min.js"></script>

		</head>
		
		<body id="body">	
		
			<div class="container" id="wrapper">


				<main>

					<div id="login-box">
						<h2>Login</h2>
						<form id="login-form">
							<input required type="text" id="user-form-input" autocomplete="off" spellcheck="false" placeholder="Usuário">
							<input required type="text" id="pass-form-input" autocomplete="off" spellcheck="false" placeholder="Senha">
							<button type="submit">Enviar</button>
						</form>
						<a class="forgot-pass" href="#"><span>Esqueceu sua senha?</span></a>
					</div>

				</main>

					<!-- Popups -->
				<div id="message-bg"></div>
					<div id="success-login-message">
						<h1 id="login-msg">Bem vindo(a), user!</h1>
					</div>	


				<!-- <script type="text/javascript" src="scripts/js/localSystem.js"></script> -->
				<script type="text/javascript" src="scripts/js/app.js"></script>

			</div>

		</body>
		
	</html>
			