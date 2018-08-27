<?php
	include("consulta.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Conecxao com Banco</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div class="form">
			<form method="POST" action="inserir.php">
				
				</br></br>

				<label>Id</label>
				</br>
				<input type="text" name="id">

				</br></br>

				<label>Nome</label>
				</br>
				<input type="text" name="nome">

				</br></br>

				<label>Idade</label>
				</br>
				<input type="text" name="idade">

				</br></br>

				<label>Altura</label>
				</br>
				<input type="text" name="altura">

				</br></br>

				<input type="submit" value="Enviar">

			</form>
		</div>
		
		<table border="1">
			
			<tr>
				<td>Código</td>
				<td>Nome</td>
				<td>Idade</td>
				<td>Altura</td>
			</tr>
			
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
			<td><?php echo $dado["id"]; ?></td>
			<td><?php echo $dado["nome"]; ?></td>
			<td><?php echo $dado["idade"]; ?></td>
			<td><?php echo $dado["altura"]; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>