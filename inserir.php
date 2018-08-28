<?php

	include_once("conexao.php");

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	//$nome = "CURTIME()"; // Pega a hora do banco
	$idade = $_POST['idade'];
	$altura = $_POST['altura'];

	$pessoa = "insert into pessoa values ('$id','$nome','$idade','$altura')";
	$resultado = mysqli_query($mysqli,$pessoa);

	//$redirect = "http://localhost:8080/Estudando_Banco/";
 	//header("location:$redirect");

?>