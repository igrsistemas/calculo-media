<?php include "inc/functions.php"; ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Média</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->


		<style>
			body{
				margin-top: 15px;
			}
		</style>
	</head>
	<body>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-default" style="border: 0px;">
						<div class="panel-body">

<pre><?= media($dados) ?></pre>
							<form action="?" method="POST" role="form">
								<legend>Média frequencia/Nota</legend>
							
								<div class="form-group">
									<label for="">Semana 1</label>
									<input type="number" class="form-control" id="" name="semana1" maxlength="3" required>
								</div>

								<div class="form-group">
									<label for="">Semana 2</label>
									<input type="number" class="form-control" id="" name="semana2" maxlength="3" required>
								</div>

								<div class="form-group">
									<label for="">Semana 3</label>
									<input type="number" class="form-control" id="" name="semana3" maxlength="3" required>
								</div >

								<div class="form-group">
									<label for="">Semana 4</label>
									<input type="number" class="form-control" id="" name="semana4" maxlength="3" required>
								</div>
							
								
							
								<button type="submit" name="envio1" class="btn btn-primary">Receber dados</button>
							</form>
						</div>
					</div>
				</div>



				<div class="col-md-4">
					<div class="panel panel-default" style="border: 0px;">
						<div class="panel-body">

<pre><?= mediaArray($dadosArray) ?></pre>
							<form action="?" method="POST" role="form">
								<legend>Média frequencia/Nota</legend>
							
								<div class="form-group">
									<label for="">Separe os dados com uma virgula para o cauculo:</label>
									<textarea name="dados" id="" cols="30" rows="10" class="form-control"></textarea>
								</div>
								
							
								<button type="submit" name="envio2" class="btn btn-primary">Receber dados</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>
</html>