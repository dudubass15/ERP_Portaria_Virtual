<?php
class sindicoController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$sindico = new sindico();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}
		
		$dados['lista_sindico'] = $sindico->getLista($nome);

		$this->loadTemplate('sindico', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$sobrenome = addslashes($_POST['sobrenome']);
			$apartamento = addslashes($_POST['apartamento']);
			$condominio = addslashes($_POST['condominio']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);
			$observacao = addslashes($_POST['observacao']);
			
			$sindico = new sindico();
			$sindico->add($nome, $sobrenome, $apartamento, $condominio, $telefone, $email, $observacao);

			header('Location: '.URL.'/sindico');
		}

		$this->loadTemplate('sindico_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$sindico = new sindico();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$sobrenome = addslashes($_POST['sobrenome']);
			$apartamento = addslashes($_POST['apartamento']);
			$condominio = addslashes($_POST['condominio']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);
			$observacao = addslashes($_POST['observacao']);
			
			$sindico = new sindico();
			$sindico->edit($id, $nome, $sobrenome, $apartamento, $condominio, $telefone, $email, $observacao);

			header('Location: '.URL.'/sindico');
		}

		$dados['sindico_info'] = $sindico->getSindicoInfo($id);

		$this->loadTemplate('sindico_edit', $dados);
	}

	public function del($id) {
		$sindico = new sindico();
		$sindico->del($id);

		header('Location: '.URL.'/sindico');
	}

}

?>