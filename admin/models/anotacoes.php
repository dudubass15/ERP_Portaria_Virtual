<?php
class anotacoes extends model {

	public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM anotacao ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getAnotacoesInfo($id) {
		$array = array();

		$sql = "SELECT * FROM anotacao WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($nome, $data, $horario, $titulo, $mensagem) {

		$sql = "INSERT INTO anotacao (nome, data, horario, titulo, mensagem)";
		$sql.= "VALUE ('$nome', NOW(), '$data', '$horario', '$titulo', '$mensagem')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $data, $horario, $titulo, $mensagem) {

		$sql= "UPDATE anotacao SET nome = '$nome', data = '$data', horario ='$horario', ";
		$sql.= "titulo = '$titulo', mensagem = '$mensagem' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM anotacao WHERE id = $id";
		$this->db->query($sql);
	}
}

?>