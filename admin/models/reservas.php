<?php
class reservas extends model {

	public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM reservas ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getReservasInfo($id) {
		$array = array();

		$sql = "SELECT * FROM reservas WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($apartamento, $nome, $responsaveis, $local, $condominio, $data, $telefone, $convidados) {

		$sql = "INSERT INTO reservas (apartamento, nome, responsaveis, local, condominio, data, telefone, convidados)";
		$sql.= "VALUE ('$apartamento', '$nome', '$responsaveis', '$local', '$condominio', '$data', '$telefone', '$convidados')";
		$this->db->query($sql);
	}

	public function edit($id, $apartamento, $nome, $responsaveis, $local, $condominio, $data, $telefone, $convidados) {

		$sql= "UPDATE reservas SET apartamento = '$apartamento', nome = '$nome', responsaveis = '$responsaveis', local = '$local', condominio = '$condominio', data = '$data', telefone = '$telefone', convidados = '$convidados' WHERE id = $id";
		$this->db->query($sql);

		}

		public function del($id) {
		$sql = "DELETE FROM reservas WHERE id = $id";
		$this->db->query($sql);

	}
	
}

?>