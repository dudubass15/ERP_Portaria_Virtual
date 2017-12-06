<?php
class ocorrenciaController extends controller {

	public function __construct() { // segurança para não acesse via URL se não tiver logado!
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}
	
	public function index() {
		$dados = array();

		$ocorrencia = new ocorrencias();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$condominio = addslashes($_POST['pesquisar']);
		} else {
			$condominio ='';
		}

		$dados['lista_ocorrencia'] = $ocorrencia->getLista($condominio);

		$this->loadTemplate('ocorrencia', $dados);
	}
}

?>