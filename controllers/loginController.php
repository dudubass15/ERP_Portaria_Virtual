<?php
class loginController extends controller {

	public function index() {
		$dados = array();

		if (isset($_POST['email']) && !empty($_POST['email'])) { // se o existir $_POST['email'] e não estiver vazia.
			$email = $_POST['email']; // pega dados do formulário.
			$senha = $_POST['senha']; // pega dados do formulário.

			$usuario = new usuarios();
						
			if ($usuario->validaLogin($email, $senha)) {// Se a condição for verdadeira, ele entra no IF e redireciona para Home.
				header('Location: '.URL.'/home');
			}
			
		}

		$this->loadView('login', $dados);
	}

	public function logout() {

		$usuario = new usuarios();// Instancia a classe
		$usuario->logout();	// acessa o método da classe instancia.
		header('Location: '.URL);
	}

}

?>