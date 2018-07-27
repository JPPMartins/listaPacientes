<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title> Processo seletivo </title>
</head>

<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">

<body>
<div class="container">
	<div class="well">
		<h3> Atualizar Dados do Paciente </h3>
	</div>
	<form name="registro" action="<?php echo site_url("Pacientes/atualizar") ?>" method="POST" enctype=""> 
		<div class="well">
			<br>
			<div class="row">
				<div class="col-sm-4">
					<p><label> Nome: </label></p>
					<input type="text" name="nome" value="<?php echo $pacientes->nome ?>" class="form-control">
				</div>
				<div class="col-sm-4">
					<p><label> Hospital: </label></p>
					<input type="text" name="hospital" value="<?php echo $pacientes->hospital  ?>" class="form-control"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<input type="hidden" name="id" value="<?php echo $pacientes->id  ?>" class="form-control">
					<p> <input type="submit" name="enviar" value="Atualizar" class="btn btn-info"> </p>
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>