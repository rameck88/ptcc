<?php
include('config/verifica_login.php');
?>
<!doctype html>
<html>
	<head>
		<title>Sistema de ensino a distância</title>
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
<body>
	<?php include "sup/cabecalho.php" ?>
	<div class="site">
		
	<?php include "sup/menu.php" ?>
	<div class="base-geral">
		<?php
			$link = isset($_GET["link"]) ? $_GET["link"] : 1;
			$pag[1] = "home.php";
			$pag[2] = "Meus_cursos.php";
			$pag[3] = "curso.php";
			$pag[4] = "aula.php";
			$pag[5] = "perfil.php";
			$pag[6] = "comentario.php";

		if(file_exists($pag[$link])) {
			include "$pag[$link]";
		}else{
			include "home.php" ;
		}
		 ?>
		
	</div>
	</div>
</body>
</html>