<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Sistema de login</title>
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
		<img src="img/img-topo-login.png">
		<?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="passusererror">
        <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>	
			<form action="config/loginaction.php" method="post">						
					<h1>login </h1>		
					<label><input type="text" name="usuario" placeholder="Login" autofocus=""></label>	
					<label><input type="password" name="senha" placeholder="Senha"></label>							
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