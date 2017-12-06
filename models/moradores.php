<?php
class moradores extends model {

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

	public function getListaMorador() {
		$array = array();

		$sql = "SELECT m.id_condominio, c.ramal AS ramal, c.nome AS nome
				FROM morador m
				INNER JOIN condominio c ON c.id = m.id_condominio ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

}

?>