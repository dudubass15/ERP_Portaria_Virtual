<?php
class usuarios extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function validaLogin($email, $senha) {
		
		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {// Se a quantidade for maior que 0
			$row = $qry->fetch();
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['nome'] = $row['nome'];

			return true;
		}

		return false;
	}

	public function logout() {
		unset($_SESSION['email']); //Destroi a SESSION.
		unset($_SESSION['nome']); //Destroi a SESSION NOME.
		unset($_SESSION['id']); //Destroi a SESSION ID.
	}

	public function getLista() {
		$array = array();

		$sql = "SELECT * FROM usuarios";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getUsuariosInfo($id) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function getListaCargos() {
		$array = array();

		$sql = "SELECT * FROM cargos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($nome, $sobrenome, $cargo, $email, $senha) {
		$sql = "INSERT INTO usuarios (nome, sobrenome, cargo, email, senha) ";
		$sql.= "VALUE ('$nome', '$sobrenome', '$cargo', '$email', '$senha')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $sobrenome, $cargo, $email, $senha) {
		$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', cargo = '$cargo', email = '$email' WHERE id = $id";
		$this->db->query($sql);

		if (!empty($senha)) {
			$sql = "UPDATE usuarios SET senha = '$senha' WHERE id = $id";
			$this->db->query($sql);
		}
	}

	public function del($id) {
		$sql = "DELETE FROM usuarios WHERE id = $id";
		$this->db->query($sql);
	}	
}

?> 