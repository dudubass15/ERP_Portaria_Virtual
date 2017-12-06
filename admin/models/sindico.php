<?php
class sindico extends model {

	public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM sindico ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getSindicoInfo($id) {
		$array = array();

		$sql = "SELECT * FROM sindico WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($nome, $sobrenome, $apartamento, $condominio, $telefone, $email, $observacao) {

		$sql = "INSERT INTO sindico (nome, sobrenome, apartamento, condominio, telefone, email, observacao)";
		$sql.= "VALUE ('$nome', '$sobrenome', '$apartamento', '$condominio', '$telefone', '$email', '$observacao')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $sobrenome, $apartamento, $condominio, $telefone, $email, $observacao) {

		$sql= "UPDATE sindico SET nome = '$nome', sobrenome = '$sobrenome', apartamento = '$apartamento', condominio = '$condominio', telefone = '$telefone', email = '$email', observacao = '$observacao' WHERE id = $id";
		$this->db->query($sql);

		}

		public function del($id) {
		$sql = "DELETE FROM sindico WHERE id = $id";
		$this->db->query($sql);

	}
	
}

?>