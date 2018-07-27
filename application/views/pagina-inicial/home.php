<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title> Processo seletivo </title>
</head>

<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
	    <div class="navbar-header">
	    <a class="navbar-brand" href="#"> Processo Seletivo</a>
	    </div>
	</div>
</nav> <br>
<br> <br>
<div class="container">
<form name="login" action="<?php echo site_url("Login/entrar") ?>" method="POST" enctype="">
	<div class="row">
			<div class="col-sm-4"> &nbsp; </div>
			<div class="col-sm-4">
				<div class="well">
				<h4 align="center"> <p> Aplicativo para Listar Pacientes </p> </h4> 
				<p align="center"> <img src="<?php echo base_url("imagens/dados_gestao.png") ?>" width="300" height="180"></p>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="col-sm-4"> &nbsp; </div>
		<div class="col-sm-4">
			<div class="well">
				<h4><label> E-mail: </label></h4>
				<input type="text" name="email" placeholder="Digite o E-mail..." class="form-control">
				<h4><label> Senha:</label></h4> 
				<input type="password" name="senha" placeholder="Digite a Senha..." class="form-control">
				<br>
				<p align="center"> <input type="submit" value="Acessar" class="btn btn-info">
				<input type="reset" value="Limpar" class="btn btn-info"> </p>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-sm-4"> &nbsp; </div>
			<div class="col-sm-4">
				<div class="well">
				<h5 align="center"> <a href="<?php echo site_url("Usuario")?>">  Ainda não possui cadastro? <br> Cadastre-se Já! </a></h5> 
				</div>
			</div>
	</div>
	</form>

</body>
</html>