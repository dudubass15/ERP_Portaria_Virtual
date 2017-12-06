<?php
class prestadorController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$prestador = new prestador();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$razao = addslashes($_POST['pesquisar']);
		} else {
			$razao ='';
		}

		$dados['lista_prestador'] = $prestador->getLista($razao);

		$this->loadTemplate('prestador', $dados);
	}

	public function add() {
		$dados = array();

		if (isset($_POST['razao']) && !empty($_POST['razao'])) {
			$razao = addslashes($_POST['razao']);
			$fantasia = addslashes($_POST['fantasia']);
			$cnpj = addslashes($_POST['cnpj']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);
			$endereco = addslashes($_POST['endereco']);
			$referencia = addslashes($_POST['referencia']);
			$observacao = addslashes($_POST['observacao']);
			
			$prestador = new prestador();
			$prestador->add($razao, $fantasia, $cnpj, $telefone, $email, $endereco, $referencia, $observacao);

			header('Location: '.URL.'/prestador');
		}

		$this->loadTemplate('prestador_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$prestador = new prestador();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['razao']) && !empty($_POST['razao'])) {
			$razao = addslashes($_POST['razao']);
			$fantasia = addslashes($_POST['fantasia']);
			$cnpj = addslashes($_POST['cnpj']);
			$telefone = addslashes($_POST['telefone']);
			$email = addslashes($_POST['email']);
			$endereco = addslashes($_POST['endereco']);
			$referencia = addslashes($_POST['referencia']);
			$observacao = addslashes($_POST['observacao']);
			
			$prestador = new prestador();
			$prestador->edit($id, $razao, $fantasia, $cnpj, $telefone, $email, $endereco, $referencia, $observacao);

			header('Location: '.URL.'/prestador');
		}

		$dados['prestador_info'] = $prestador->getPrestadorInfo($id);

		$this->loadTemplate('prestador_edit', $dados);
	}

	public function del($id) {
		$prestador = new prestador();
		$prestador->del($id);

		header('Location: '.URL.'/prestador');
	}

}

?>