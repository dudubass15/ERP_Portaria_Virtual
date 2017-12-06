<?php
class ocorrencias extends model {

	public function getLista($condominio) {
		$array = array();

		$sql = "SELECT * FROM ocorrencia ";

		if (!empty($condominio)) {
			$sql.= "WHERE condominio LIKE '%$condominio%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {

			$array = $qry->fetchAll();
		}

		return $array;
	}

}

?>