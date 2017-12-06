<?php
class chaveiros extends model {

	public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM chaveiro ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getChaveirosInfo($id) {
		$array = array();

		$sql = "SELECT * FROM chaveiro WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($nome, $apartamento, $condominio, $quantidade, $email, $observacoes) {

		$sql = "INSERT INTO chaveiro (nome, apartamento, condominio, quantidade, email, data, observacoes)";
		$sql.= "VALUE ('$nome', '$apartamento', '$condominio', '$quantidade', '$email', NOW(), '$observacoes')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $apartamento, $condominio, $quantidade, $email, $observacoes) {

		$sql= "UPDATE chaveiro SET nome = '$nome', apartamento = '$apartamento', condominio = '$condominio', ";
		$sql.= "quantidade = '$quantidade', email = '$email', observacoes = '$observacoes' WHERE id = $id";
		$this->db->query($sql);

		}

		public function del($id) {
		$sql = "DELETE FROM chaveiro WHERE id = $id";
		$this->db->query($sql);

	}
	
}

?>