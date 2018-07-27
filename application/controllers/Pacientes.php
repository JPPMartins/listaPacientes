<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Pacientes extends CI_Controller {

		public function __construct(){
		parent ::__construct();
		$this->load->model("paciente_model");
		$this->load->view("cabecalho/cabecalho");

		$user = $this->session->userdata("usuarios");
		
			if(empty($user)){

				redirect(site_url('Login'));

			}
		}

		public function index(){

			$resultado = $this->paciente_model->obterDados();
			$vetor['pacientes'] = $resultado;
			$this->load->view("paciente/listar-paciente" , $vetor);
		}

		public function adicionar() {

			$this->load->view("paciente/novo-paciente");

		}

		public function salvar(){

			$this->paciente_model->inserir();
			echo "<script> alert('Cadastro efetuado com Sucesso!');</script>";
			redirect(site_url('Pacientes'));
		}

	
		public function excluir($codigo){

			$this->paciente_model->deletar($codigo);
			redirect(site_url('Pacientes'));

		}

		public function form_edit($codigo){

			$vetor['pacientes'] = $this->paciente_model->buscaPaciente($codigo);
			$this->load->view("paciente/form_edit", $vetor);
			
		}

		public function atualizar(){

			$this->paciente_model->update();
			redirect(site_url('Pacientes'));

		}

	}

?>