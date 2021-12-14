<?php

class homeController extends controller {

	public function __construct() {
	}

	public function index() {
		$data = array();
		$u = new usuarios();
		$p = new produtos();
		
		if(isset($_SESSION['node']) && !empty($_SESSION['node'])) {
			$uid = $_SESSION['node'];
			$data['user_data'] = $u->get_ser_data($uid);
		}

		$data['getProdutos'] = $p->getProdutos(4);
		$data['getCategoriasRoupas'] = $p->getCategoriasRoupas();
		$data['getCategoriasCalcados'] = $p->getCategoriasCalcados();
		$data['getCategoriasAcessorios'] = $p->getCategoriasAcessorios();

		$this->loadTemplate('home', $data);
	}
}