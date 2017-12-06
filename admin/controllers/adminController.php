<?php
class adminController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/admin/login');
		}
	}

	public function index() {
		$dados = array();
		$this->loadTemplate('home', $dados);
	}

}

?>