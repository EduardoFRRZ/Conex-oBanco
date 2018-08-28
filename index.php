<?php
	include("consulta.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Conecxao com Banco</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body background="img/fundo.jpg">

		<h1 align="center">CONEXÃO COM O MYSQL</h1>

		<div class="container">	

			<div class="row">
				<div class="col">

					<div class="form">
						<form method="POST" action="inserir.php">
								
							</br></br>

							<label>Id</label>
							</br>
							<input class="form-control" type="text" name="id">

							</br></br>

							<label>Nome</label>
							</br>
							<input class="form-control" type="text" name="nome">

							</br></br>

							<label>Idade</label>
							</br>
							<input class="form-control" type="text" name="idade">

							</br></br>

							<label>Altura</label>
							</br>
							<input class="form-control" type="text" name="altura">

							</br></br>

							<input class="btn btn-primary btn-lg" type="submit" value="Enviar">
							<input class="btn btn-danger btn-lg" type="submit" value="Limpar tabela">

						</form>
					</div>
				</div>

				<div class="col">

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
				</div>
			</div>	
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>