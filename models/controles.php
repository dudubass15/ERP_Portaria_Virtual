<?php
class controles extends model {

	public function salvar($nome, $apartamento, $condominio, $quantidade, $email, $observacoes) {
		$sql = "INSERT INTO controle (nome, apartamento, condominio, quantidade, email, data, observacoes) ";
		$sql.= "VALUE ('$nome', '$apartamento', '$condominio', '$quantidade', '$email', NOW(), '$observacoes')";
		$this->db->query($sql);
	}
}

?>