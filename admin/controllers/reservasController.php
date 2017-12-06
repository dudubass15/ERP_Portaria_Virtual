<?php
class reservasController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$reservas = new reservas();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}

		$dados['lista_reservas'] = $reservas->getLista($nome);

		$this->loadTemplate('reservas', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['apartamento']) && !empty($_POST['apartamento'])) {
			$apartamento = addslashes($_POST['apartamento']);
			$nome = addslashes($_POST['nome']);
			$responsaveis = addslashes($_POST['responsaveis']);
			$local = addslashes($_POST['local']);
			$condominio = addslashes($_POST['condominio']);
			$data = addslashes($_POST['data']);
			$telefone = addslashes($_POST['telefone']);
			$convidados = addslashes($_POST['convidados']);

			$reservas = new reservas();
			$reservas->add($apartamento, $nome, $responsaveis, $local, $condominio, $data, $telefone, $convidados);

			header('Location: '.URL.'/reservas');

			}

		$this->loadTemplate('reservas_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$reservas = new reservas();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['apartamento']) && !empty($_POST['apartamento'])) {

			$apartamento = addslashes($_POST['apartamento']);
			$nome = addslashes($_POST['nome']);
			$responsaveis = addslashes($_POST['responsaveis']);
			$local = addslashes($_POST['local']);
			$condominio = addslashes($_POST['condominio']);
			$data = addslashes($_POST['data']);
			$telefone = addslashes($_POST['telefone']);
			$convidados = addslashes($_POST['convidados']);

			$reservas = new reservas();
			$reservas->edit($id, $apartamento, $nome, $responsaveis, $local, $condominio, $data, $telefone, $convidados);

			header('Location: '.URL.'/reservas');
		}

		$dados['reservas_info'] = $reservas->getReservasInfo($id);

		$this->loadTemplate('reservas_edit', $dados);
	}

	public function del($id) {
		$reservas = new reservas();
		$reservas->del($id);

		header('Location: '.URL.'/reservas');
	}

}

?>