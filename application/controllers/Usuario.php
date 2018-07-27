<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent ::__construct();
		$this->load->model("usuario_model");

	}

	public function index() {

		$this->load->view('usuario/novo-usuario');

	}

	public function salvar(){

		$this->usuario_model->inserir();
		echo "<script> alert('Cadastro efetuado com Sucesso!');</script>";
		redirect(site_url('Login'));

	}
}




?>

