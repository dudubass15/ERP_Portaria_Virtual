<?php
class reservaController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		if (isset($_POST['apartamento']) && !empty($_POST['apartamento'])) {

			$apartamento = addslashes($_POST['apartamento']);
			$nome = addslashes($_POST['nome']);
			$responsaveis = addslashes($_POST['responsaveis']);
			$local = addslashes($_POST['local']);
			$condominio = addslashes($_POST['condominio']);
			$data = addslashes($_POST['data']);
			$telefone = addslashes($_POST['telefone']);
			$convidados = addslashes($_POST['convidados']);

			$reserva = new reservas();
			$reserva->salvar($apartamento, $nome, $responsaveis, $local, $condominio, $data, $telefone, $convidados);

			header('Location: '.URL);

			}

		$this->loadTemplate('reservas', $dados);
	}

}

?>