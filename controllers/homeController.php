<?php
class homeController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}
	
	public function index() {
		$dados = array();

		$condominio = new home();

		$dados['lista_condominio'] = $condominio->getListaCondominio();

		$this->loadTemplate('home', $dados);
	}

}

?>