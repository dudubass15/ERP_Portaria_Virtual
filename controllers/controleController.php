<?php
class controleController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {

			$nome = addslashes($_POST['nome']);
			$apartamento = addslashes($_POST['apartamento']);
			$condominio = addslashes($_POST['condominio']);
			$quantidade = addslashes($_POST['quantidade']);
			$email = addslashes($_POST['email']);
			$observacoes = addslashes($_POST['observacoes']);

			$controle = new controles();
			$controle->salvar($nome, $apartamento, $condominio, $quantidade, $email, $observacoes);

			header('Location: '.URL);

			}

		$this->loadTemplate('controle', $dados);
	}

}

?>