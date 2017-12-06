<?php
class condominios extends model {

	public function getListaMorador($id) {
		$array = array();

		$sql = "SELECT * FROM morador WHERE id = $id ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaCondominio($nome) {
		$array = array();

		$sql = "SELECT * FROM condominio WHERE nome = '$nome' ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

}

?>