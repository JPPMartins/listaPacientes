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
		<h3> Lista de Pacientes </h3>
	</div>
	<div class="well">
	<div class="row" >
		<div class="col-sm-4"> <b> Nome do paciente </b> </div>
		<div class="col-sm-4"> <b> Hospital </b>  </div>
		<div class="col-sm-1" align="center"> <b> Atualizar </b>  </div>
		<div class="col-sm-1" align="center"> <b> Excluir  </b>  </div>
	</div>
	<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">
	
	<?php

	foreach ($pacientes as $paciente) {
		
	?>
		<table class="table">
				<div class="row">
					<div class="col-sm-4">
						 <?php echo $paciente->nome; ?>
					</div>
					<div class="col-sm-4">
						 <?php echo $paciente->hospital; ?>
					</div>
			  		<div class="col-sm-1" align="center">
			  			<a href="<?php echo site_url("Pacientes/form_edit/$paciente->id")?>" class="btn btn-info">
					    <span class="glyphicon glyphicon-list-alt"></span>
					  	</a>
			  		</div>
			  		<div class="col-sm-1" align="center">
			  			<a href="<?php echo site_url("Pacientes/excluir/$paciente->id")?>" class="btn btn-danger">
					    <span class="glyphicon glyphicon-remove"></span>
					  	</a>
					 </div>
			  	</div>
			  	<hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">
			  	</table> 	

<?php		
}

	?>
</div>
</div>
</body>
</html>