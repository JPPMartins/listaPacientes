
<?php 

class usuario_model extends CI_Model {

	var $email;
	var $senha;

	public function inserir() {

		$this->email = $this->input->post("email");
		$this->senha = $this->input->post("senha");

		$this->db->insert("usuarios", $this);

		
	}

	
}

?>