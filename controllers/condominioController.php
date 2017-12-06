<?php
class condominioController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {}

	public function listar($id, $nome) {
		$dados = array();

		$condominio = new condominios();

		$dados['morador_info'] = $condominio->getListaMorador($id);
		$dados['condominio_info'] = $condominio->getListaCondominio($nome);

		$this->loadTemplate('home', $dados);
	}

}

?>