<?php
class usuariosController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$usuario = new usuarios();
		$dados['lista_usuarios'] = $usuario->getLista();

		$dados['lista_cargos'] = array(
			'1' => 'Operador',
			'2' => 'TI',
			'3' => 'Administrativo',
			'4' => 'Vendas'
		);

		$this->loadTemplate('usuarios', $dados);
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
			$cargo = addslashes($_POST['cargo']);
			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);

			$usuario->add($nome, $sobrenome, $cargo, $email, $senha);

			header('Location: '.URL.'/usuarios');

		} else {

			//$dados['error'] = "Por favor insira um nome !";
		}

		// Abaixo cargos para cadastro de usuários direto no view ...

		$dados['lista_cargos'] = array(
			'1' => 'Operador',
			'2' => 'TI',
			'3' => 'Administrativo',
			'4' => 'Vendas'
		);

		// Fim do array lista_cargos ...

		$this->loadTemplate('usuarios_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$sobrenome = addslashes($_POST['sobrenome']);
			$cargo = addslashes($_POST['cargo']);
			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);

			$usuario->edit($id, $nome, $sobrenome, $cargo, $email, $senha);

			header('Location: '.URL.'/usuarios');

		} else {

			//$dados['error'] = "Por favor insira um nome !";
		}

		$dados['usuarios_info'] = $usuario->getUsuariosInfo($id);

		$dados['lista_cargos'] = array(
			'1' => 'Operador',
			'2' => 'TI',
			'3' => 'Administrativo',
			'4' => 'Vendas'
		);

		$this->loadTemplate('usuarios_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$usuario->del($id);

		header('Location: '.URL.'/usuarios');
	}
}

?>