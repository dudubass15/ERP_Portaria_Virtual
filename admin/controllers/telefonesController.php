<?php
class telefonesController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();
		$this->loadTemplate('telefones', $dados);
	}

}

?>