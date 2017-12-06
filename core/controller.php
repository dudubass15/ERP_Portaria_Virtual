<?php
class controller {

	public function loadView($viewName, $viewData = array()) {
		extract($viewData); // Transforma a chave do array em variavel.
		include 'views/'.$viewName.'.php';	
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}
	
	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData); // Transforma a chave do array em variavel.
		include 'views/'.$viewName.'.php';
	}

}

?>