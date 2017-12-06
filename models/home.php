<?php
class home extends model {
	
	/*public function getLista($nome) {
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
	}*/

	public function getListaCondominio() {
		$array = array();

		$sql = "SELECT * FROM condominio ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
	
}

?>