<?php
class usuarios extends model {

	public function logado() {
		if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
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

			return true;
		}

		return false;
	}

	public function logout() {
		unset($_SESSION['email']); //Destroi a SESSION.
	}
}

?> 