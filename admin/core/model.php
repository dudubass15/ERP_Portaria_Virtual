<?php
class model {

	protected $db;

	public function __construct() {
		global $config;

		try {
			$this->db = new PDO('mysql:dbname='.$config['dbname'].';charset=utf8;host='.$config['host'], $config['user'], $config['pass']);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
    		exit('Erro ao conectar no Banco: ' . $e->getMessage());
		}

	}
}

?>