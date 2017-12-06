<?php
class chaveiroController extends controller {


	public function __construct() {// metodo que inicia com classe quando chamada.
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() { // metodo padrão do controller.
		$dados = array();

		if (isset($_POST['nome']) && !empty($_POST['nome'])) { // se o existir $_POST['email'] e não estiver vazia.
			$nome = addslashes($_POST['nome']);
			$apartamento = addslashes($_POST['apartamento']);
			$condominio = addslashes($_POST['condominio']);
			$quantidade = addslashes($_POST['quantidade']);
			$email = addslashes($_POST['email']);
			$observacoes = addslashes($_POST['observacoes']);

			$chaveiro = new chaveiros();// instanciando a classe model chaveiro.
			$chaveiro->salvar($nome, $apartamento, $condominio, $quantidade, $email, $observacoes); // passa parametros do formulario para o metodo salvar() da classe model.
			
			header('Location: '.URL); // redireciona para http://localhost/tattica
		}


		$this->loadTemplate('chaveiro', $dados); // chama o view.
	}
}

?>