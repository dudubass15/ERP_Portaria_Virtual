<?php
class reservas extends model {

	public function salvar($apartamento, $nome, $responsaveis, $local, $condominio, $data, $telefone, $convidados) {
		$sql = "INSERT INTO reservas (apartamento, nome, responsaveis, local, condominio, data, telefone, convidados) ";
		$sql.= "VALUE ('$apartamento', '$nome', '$responsaveis', '$local', '$condominio', '$data', '$telefone', '$convidados')";

		$this->db->query($sql);
	}
}

?>