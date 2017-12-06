<?php 
class morador_viewController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$morador = new moradores();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}

		$dados['moradorinfo_view'] = $morador->getLista($nome);

		$this->loadTemplate('morador_view', $dados);
	}

}

?>