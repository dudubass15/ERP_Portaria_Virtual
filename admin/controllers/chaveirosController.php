<?php
class chaveirosController extends controller {


	public function __construct() {// metodo que inicia com classe quando chamada.
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() { // metodo padrão do controller.
		$dados = array();

		$chaveiros = new chaveiros();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}

		$dados['lista_chaveiros'] = $chaveiros->getLista($nome);

		$this->loadTemplate('chaveiros', $dados);

	}
		
	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) { // se o existir $_POST['email'] e não estiver vazia.
			$nome = addslashes($_POST['nome']);
			$apartamento = addslashes($_POST['apartamento']);
			$condominio = addslashes($_POST['condominio']);
			$quantidade = addslashes($_POST['quantidade']);
			$email = addslashes($_POST['email']);
			$observacoes = addslashes($_POST['observacoes']);

			$chaveiros = new chaveiros();// instanciando a classe model chaveiro.
			$chaveiros->add($nome, $apartamento, $condominio, $quantidade, $email, $observacoes); // passa parametros do formulario para o metodo salvar() da classe model.
			
			header('Location: '.URL.'/chaveiros'); // redireciona para http://localhost/tattica
		}

		$this->loadTemplate('chaveiros_add', $dados); // chama o view.
	
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$chaveiros = new chaveiros();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) { // se o existir $_POST['email'] e não estiver vazia.
			$nome = addslashes($_POST['nome']);
			$apartamento = addslashes($_POST['apartamento']);
			$condominio = addslashes($_POST['condominio']);
			$quantidade = addslashes($_POST['quantidade']);
			$email = addslashes($_POST['email']);
			$observacoes = addslashes($_POST['observacoes']);

			$chaveiros = new chaveiros();// instanciando a classe model chaveiro.
			$chaveiros->edit($id, $nome, $apartamento, $condominio, $quantidade, $email, $observacoes); // passa parametros do formulario para o metodo salvar() da classe model.
			
			header('Location: '.URL.'/chaveiros'); // redireciona para http://localhost/tattica
		}

		$dados['chaveiros_info'] = $chaveiros->getChaveirosInfo($id);

		$this->loadTemplate('chaveiros_edit', $dados);

	}

	public function del($id) {
		$chaveiros = new chaveiros();
		$chaveiros->del($id);

		header('Location: '.URL.'/chaveiros');
	}

}

?>