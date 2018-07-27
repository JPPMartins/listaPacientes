<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {

		public function index() {

			$this->load->view("pagina-inicial/home");

		}

		public function entrar() {

			$email = $this->input->post("email");
			$senha = $this->input->post("senha");

			$this->db->where("email", $email);
			$this->db->where("senha", $senha);
			$query = $this->db->get("usuarios");

			if($query->num_rows() == 1) {

				$usuarios = $query->row();
				$this->session->set_userdata("usuarios", $usuarios->id);

				redirect(site_url('Pacientes'));
			} else {
				
				redirect(site_url('Login'));
			}

		}

		public function sair() {

			$this->session->set_userdata("usuarios", "");
			redirect(site_url('Login'));
		}
	}

?>