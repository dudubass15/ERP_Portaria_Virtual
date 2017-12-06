<?php
class prestador extends model {

	public function getLista($razao) {
		$array = array();

		$sql = "SELECT * FROM prestadores ";

		if (!empty($razao)) {
			$sql.= "WHERE razao LIKE '%$razao%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getPrestadorInfo($id) {
		$array = array();

		$sql = "SELECT * FROM prestadores WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($razao, $fantasia, $cnpj, $telefone, $email, $endereco, $referencia, $observacao) {

		$sql = "INSERT INTO prestadores (razao, fantasia, cnpj, telefone, email, endereco, referencia, observacao)";
		$sql.= "VALUE ('$razao', '$fantasia', '$cnpj', '$telefone', '$email', '$endereco', '$referencia', '$observacao')";
		$this->db->query($sql);
	}

	public function edit($id, $razao, $fantasia, $cnpj, $telefone, $email, $endereco, $referencia, $observacao) {

		$sql = "UPDATE prestadores SET razao = '$razao', fantasia = '$fantasia', cnpj = '$cnpj', telefone = '$telefone', email = '$email', endereco = '$endereco', referencia = '$referencia', observacao = '$observacao' WHERE id = $id";
		$this->db->query($sql);

		}

		public function del($id) {
		$sql = "DELETE FROM prestadores WHERE id = $id";
		$this->db->query($sql);

	}
	
}

?>