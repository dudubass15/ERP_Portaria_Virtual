<?php
class condominioController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$condominio = new condominios();

		if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
			$nome = addslashes($_POST['pesquisar']);
		} else {
			$nome ='';
		}
		
		$dados['lista_condominio'] = $condominio->getLista($nome);

		$this->loadTemplate('condominio', $dados);//chama a view condominio!
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$ramal = addslashes($_POST['ramal']);
			$sindico = addslashes($_POST['sindico']);
			$cep = addslashes($_POST['cep']);
			$endereco = addslashes($_POST['endereco']);
			$cnpj = addslashes($_POST['cnpj']);
			$telefone = addslashes($_POST['telefone']);
			$zelador = addslashes($_POST['zelador']);
			$observacao = addslashes($_POST['observacao']);
			
			$condominio = new condominios();
			$condominio->add($nome, $ramal, $sindico, $cep, $endereco, $cnpj, $telefone, $zelador, $observacao);

			header('Location: '.URL.'/condominio');
		}

		$this->loadTemplate('condominio_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();
		$condominio = new condominios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$ramal = addslashes($_POST['ramal']);
			$sindico = addslashes($_POST['sindico']);
			$cep = addslashes($_POST['cep']);
			$endereco = addslashes($_POST['endereco']);
			$cnpj = addslashes($_POST['cnpj']);
			$telefone = addslashes($_POST['telefone']);
			$zelador = addslashes($_POST['zelador']);
			$observacao = addslashes($_POST['observacao']);
			
			$condominio = new condominios();
			$condominio->edit($id, $nome, $ramal, $sindico, $cep, $endereco, $cnpj, $telefone, $zelador, $observacao);

			header('Location: '.URL.'/condominio');
		}

		$dados['condominio_info'] = $condominio->getCondominioInfo($id);

		$this->loadTemplate('condominio_edit', $dados);
	}

	public function del($id) {
		$condominio = new condominios();
		$condominio->del($id);

		header('Location: '.URL.'/condominio');
	}

}

?>