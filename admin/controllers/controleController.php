<?php 
class controleController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) {
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$controle = new controle();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}

		$dados['lista_controle'] = $controle->getLista($nome);

		$this->loadTemplate('controle', $dados);

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

			$controle = new controle();
			$controle = add($nome, $apartamento, $condominio, $quantidade, $email, $observacoes);

			header('Location: '.URL); // Redireciona para a página inicial do painel administrativo. //
		}

		$this->loadTemplate('controle_add', $dados); // chama o view.
	
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$controle = new controle();

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

			$controle = new controle();// instanciando a classe model chaveiro.
			$controle->edit($id, $nome, $apartamento, $condominio, $quantidade, $email, $observacoes); // passa parametros do formulario para o metodo salvar() da classe model.
			
			header('Location: '.URL.'/controle'); // redireciona para http://localhost/tattica
		}

		$dados['controle_info'] = $controle->getControleInfo($id);

		$this->loadTemplate('controle_edit', $dados);

	}

	public function del($id) {
		$controle = new controle();
		$controle->del($id);

		header('Location: '.URL.'/controle');
	}
}


?>