<?php
session_start();
?>

<!doctype html>
<html>
	<head>
		<title>Sistema de Cadastro</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="css/grade.css">
		<link rel="stylesheet" type="text/css" href="css/m-style.css">
		 
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
		
	</head>
<body class="base-login">
	<div class="caixa-login position-relative">
	<?php
	if(isset($_SESSION['status_cadastro'])):
    ?>
    <div class="notification is-success">
    <p>Cadastro efetuado!</p>
    <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
    </div>
     <?php
    endif;
     unset($_SESSION['status_cadastro']);
    ?>	

	<?php
    if(isset($_SESSION['usuario_existe'])):
    ?>
    <div class="notification is-info">
        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
    </div>
     <?php
    endif;
     unset($_SESSION['usuario_existe']);
    ?>	
	<form action="config/cadastrar.php" method="post">						
			<h1>login </h1>		
			<label><input type="text" name="nome" placeholder="Seu nome!" autofocus=""></label>
            <label><input type="text" name="usuario" placeholder="Login"></label>	
			<label><input type="password" name="senha" placeholder="Senha"></label>
            <label><input type="text" name="email" placeholder="email"></label>	

			<input type="submit" value="Entrar" class="btn">
		</form>
		<a href="" class="senha text-azul mt-3 d-block">Esqueci minha senha</a>
	
	<div class=" mostrasenha">
		<div class="caixa">
			<span class="sair senha">X</span>
			<h1 class="h3 mb-0 pb-1">Esqueci minha senha </h1>
			<p class="text-center pb-4">Digite seu email no campo abaixo para recuperar sua senha</p>
			<form action="" method="post">
				<label>
					<input type="text" name="" placeholder="Inserir email">
				</label>				
				</label>							
				<input type="submit" value="Enviar" class="btn">
			</form>
		</div>
	</div>
	</div>
</body>
</html>
                         