<?php
class core {

	public function run() {
		global $config;

		if ($config['versao'] == 'dsv') { // Valida o Ambiente atual.
			$url = explode("index.php", $_SERVER['PHP_SELF']); // Pega o que foi acesado pelo usuário sem o index.php
			$url = end($url); // Pega o fim da URL.
		} 

		if ($config['versao'] == 'prd') { // Valida o Ambiente atual.
			$url = '/'.(isset($_GET['q'])?$_GET['q']:''); // pega a url que foi acessada via GET.
		}

		$params = array();

		if (!empty($url) && $url != '/') { //valida se URL está vazia e diferente de barra.
			$url = explode('/', $url); // Tirando a barra da URL.
			array_shift($url);
			
			$currentController = $url[0].'Controller'; // Passa o Controller atual.
			array_shift($url); // Remove a primeira chave do array.

			if (isset($url[0]) && !empty($url[0])) { // Valida se foi digitado uma Action depois do Controller.
				$currentAction = $url[0]; // Passa a Action atual.
				array_shift($url); // Remove a primeira chave do array.
			} else {
				$currentAction = 'index'; // Padrão da Action 'index'.
			}

			if (count($url) > 0) { // Valida se a URL tem paramentros depois da Action.
				$params = $url;
			}

		} else { // Caso o usuário não acessa nada.
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		
		$c = new $currentController(); // Instancia a classe Controller.
		call_user_func_array(array($c, $currentAction), $params); // Carrega o Controller com as Actions e os params.
	}

}
?>