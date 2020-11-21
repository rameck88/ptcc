<?php
define("HOST","localhost");
define("USER","root");
define("SENHA","Metallica88.");
define("DB","ead");

$conexao = mysqli_connect(HOST,USER,SENHA,DB) or die ("Não foi possivel conectar");
?>
