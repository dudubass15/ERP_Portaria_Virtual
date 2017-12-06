<?php
session_start();
require 'config.php';

spl_autoload_register(function ($class){
	if (strpos($class, 'Controller') > -1) { // Se encontrar no fim do arquivo o texto 'Controller'.
		if (file_exists('controllers/'.$class.'.php')) { // Se arquivo existe.
			require_once 'controllers/'.$class.'.php'; // Carrega a classes da pasta Controller.
		}
	} elseif (file_exists('models/'.$class.'.php')) { // Se arquivo existe.
		require_once 'models/'.$class.'.php'; // Carrega a classes da pasta Model.
	} elseif (file_exists('core/'.$class.'.php')) { // Se arquivo existe.
		require_once 'core/'.$class.'.php'; // Carrega a classes da pasta Core.
	}
	
});

$core = new core();
$core->run();

?>