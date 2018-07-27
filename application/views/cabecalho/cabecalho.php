<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title> Processo seletivo </title>
</head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">


<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	      		<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    </button>
	
		<a class="navbar-brand" href="#"> Processo seletivo </a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">

			<li> <a href="<?php echo site_url("Pacientes/adicionar")?>"> Cadastrar </a> </li>
			<li> <a href="<?php echo site_url("Pacientes")?>"> Listar Pacientes </a> </li>
			<li> <a href="<?php echo site_url("Login/sair")?>"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair </a> </li>

		</ul>
		<ul class="nav navbar-nav navbar-right">
			
		</ul>
	</div>

</nav>
<br><br><br>

</body>
</html>