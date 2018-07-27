<?php 

class paciente_model extends CI_Model {

	var $nome;
	var $hospital;

	public function inserir() {

		$this->nome = $this->input->post("nome");
		$this->hospital = $this->input->post("hospital");
		$this->db->insert("pacientes", $this);	
	}

	public function obterDados() {

		return $this->db->get("pacientes")->result();
	}

	public function deletar($codigoPaciente){

		$this->db->where("id", $codigoPaciente);
		$this->db->delete("pacientes");
	}

	public function buscaPaciente($idUser){

		$this->db->where("id", $idUser);
		return $this->db->get("pacientes")-> row();
	}

	public function update(){

		$this->nome = $this->input->post("nome");
		$this->hospital = $this->input->post("hospital");
		$id_recebido = $this ->input->post("id");
		$this->db->where("id", $id_recebido);
		$this->db->update("pacientes", $this);

	}

}

?>