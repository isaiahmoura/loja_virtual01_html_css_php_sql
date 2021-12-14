<?php

class categoriasController extends controller {

	public function __construct() {
	}

	public function index($categoria_titulo = '') {
		
		if(empty($categoria_titulo)) {
			header("Location: ".BASE_URL."home");
		}

		$data = array();
		$u = new usuarios();
		$p = new produtos();

		if(isset($_SESSION['node']) && !empty($_SESSION['node'])) {
			$uid = $_SESSION['node'];
			$data['user_data'] = $u->get_ser_data($uid);
		}

		$data['getCategoriasRoupas'] = $p->getCategoriasRoupas();
		$data['getCategoriasCalcados'] = $p->getCategoriasCalcados();
		$data['getProdutosByCategoria'] = $p->getProdutosByCategoria($categoria_titulo,4);

		$this->loadTemplate('ver_categoria', $data);
	}

	public function ver($id) {

	}
}