<?php
class morador extends model {

	public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM morador ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getMoradorInfo($id) {
		$array = array();

		$sql = "SELECT * FROM morador WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($nome, $sobrenome, $apartamento, $id_condominio, $telefones, $cidade, $veiculo, $placa, $cor, $observacao) {

		$sql = "INSERT INTO morador (nome, sobrenome, apartamento, id_condominio, telefones, cidade, veiculo, placa, cor, observacao)";
		$sql.= "VALUE ('$nome', '$sobrenome', '$apartamento', '$condominio', '$telefones', '$cidade', '$veiculo', '$placa', '$cor', '$observacao')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $sobrenome, $apartamento, $id_condominio, $telefones, $cidade, $veiculo, $placa, $cor, $observacao) {

		$sql= "UPDATE morador SET nome = '$nome', sobrenome = '$sobrenome', apartamento = '$apartamento', ";
		$sql.= "id_condominio = '$id_condominio', telefones = '$telefones', cidade = '$cidade', veiculo = '$veiculo', ";
		$sql.= "placa = '$placa', cor = '$cor', observacao = '$observacao' WHERE id = $id";
		$this->db->query($sql);

		}

		public function del($id) {
		$sql = "DELETE FROM morador WHERE id = $id";
		$this->db->query($sql);

	}
	
}

?>