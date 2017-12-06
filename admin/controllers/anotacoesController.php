<?php
class anotacoesController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$anotacoes = new anotacoes();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}

		$dados['lista_anotacoes'] = $anotacoes->getLista($nome);

		$this->loadTemplate('anotacoes', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {  
			$nome = addslashes($_POST['nome']);
			$data = addslashes($_POST['data']);
			$horario = addslashes($_POST['horario']);
			$titulo = addslashes($_POST['titulo']);
			$mensagem = addslashes($_POST['mensagem']);

			$anotacoes = new anotacoes();// instanciando a classe model chaveiro.
			$anotacoes->add($nome, $data, $horario, $titulo, $mensagem); // passa parametros do formulario para o metodo salvar() da classe model.
			
			header('Location: '.URL.'/anotacoes'); // redireciona para http://localhost/tattica
		}

		$this->loadTemplate('anotacoes', $dados); // chama o view.
	
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$anotacoes = new anotacoes();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) { // se o existir $_POST['email'] e não estiver vazia.
			$nome = addslashes($_POST['nome']);
			$data = addslashes($_POST['data']);
			$horario = addslashes($_POST['horario']);
			$titulo = addslashes($_POST['titulo']);
			$mensagem = addslashes($_POST['mensagem']);

			$anotacoes = new anotacoes();// instanciando a classe model chaveiro.
			$anotacoes->add($nome, $data, $horario, $titulo, $mensagem); // passa parametros do formulario para o metodo salvar() da classe model.
			
			header('Location: '.URL.'/anotacoes'); // redireciona para http://localhost/tattica
		}

		$dados['chaveiros_info'] = $anotacoes->getAnotacoesInfo($id);

		$this->loadTemplate('anotacoes_edit', $dados);

	}

	public function del($id) {
		$anotacoes = new anotacoes();
		$anotacoes->del($id);

		header('Location: '.URL.'/anotacoes');
	}

}

?>