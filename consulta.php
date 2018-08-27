<?php
	
	include("conexao.php");
	$consulta = "select * from pessoa";
	$con = $mysqli->query($consulta) or die($mysqli->error);
	
?>