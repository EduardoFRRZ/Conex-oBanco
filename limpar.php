<?php

	include_once("conexao.php");

	$pessoa = "truncate pessoa";
	$resultado = mysqli_query($mysqli,$pessoa);

	$redirect = "http://localhost:8080/Estudando_Banco/";
 	header("location:$redirect");