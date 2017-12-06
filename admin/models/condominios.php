<?php
class condominios extends model {

	public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM condominio ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getCondominioInfo($id) {
		$array = array();

		$sql = "SELECT * FROM condominio WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($nome, $ramal, $sindico, $cep, $endereco, $cnpj, $telefone, $zelador, $observacao) {

		$sql = "INSERT INTO condominio (nome, ramal, sindico, cep, endereco, cnpj, telefone, zelador, observacao)";
		$sql.= "VALUE ('$nome', '$ramal', '$sindico', '$cep', '$endereco', '$cnpj', '$telefone', '$zelador', '$observacao')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $ramal, $sindico, $cep, $endereco, $cnpj, $telefone, $zelador, $observacao) {

		$sql= "UPDATE condominio SET nome = '$nome', ramal = '$ramal', sindico ='$sindico', ";
		$sql.= "cep = '$cep', endereco = '$endereco', cnpj = '$cnpj', telefone = '$telefone', ";
		$sql.= "zelador = '$zelador', observacao = '$observacao' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM condominio WHERE id = $id";
		$this->db->query($sql);
	}
}

?>