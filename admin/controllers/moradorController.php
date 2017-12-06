<?php
class moradorController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$morador = new morador();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}
		
		$dados['lista_morador'] = $morador->getLista($nome);

		$this->loadTemplate('morador', $dados);
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
			$apartamento = addslashes($_POST['apartamento']);
			$id_condominio = addslashes($_POST['condominio']);
			$telefones = addslashes($_POST['telefones']);
			$cidade = addslashes($_POST['cidade']);
			$veiculo = addslashes($_POST['veiculo']);
			$placa = addslashes($_POST['placa']);
			$cor = addslashes($_POST['cor']);
			$observacao = addslashes($_POST['observacao']);
			
			$morador = new morador();
			$morador->add($nome, $sobrenome, $apartamento, $id_condominio, $telefones, $cidade, $veiculo, $placa, $cor, $observacao);

			header('Location: '.URL.'/morador');
		}

		$this->loadTemplate('morador_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$morador = new morador();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$sobrenome = addslashes($_POST['sobrenome']);
			$apartamento = addslashes($_POST['apartamento']);
			$id_condominio = addslashes($_POST['condominio']);
			$telefones = addslashes($_POST['telefones']);
			$cidade = addslashes($_POST['cidade']);
			$veiculo = addslashes($_POST['veiculo']);
			$placa = addslashes($_POST['placa']);
			$cor = addslashes($_POST['cor']);
			$observacao = addslashes($_POST['observacao']);
			
			$morador = new morador();
			$morador->edit($id, $nome, $sobrenome, $apartamento, $id_condominio, $telefones, $cidade, $veiculo, $placa, $cor, $observacao);

			header('Location: '.URL.'/morador');
		}

		$dados['morador_info'] = $morador->getMoradorInfo($id);

		$this->loadTemplate('morador_edit', $dados);
	}

	public function del($id) {
		$morador = new morador();
		$morador->del($id);

		header('Location: '.URL.'/morador');
	}

}

?>