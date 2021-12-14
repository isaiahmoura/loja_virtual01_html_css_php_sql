<?php

class ver_produtoController extends controller {

	public function __construct() {
	}

	public function index($id_produto) {
		$data = array();
		$u = new usuarios();
		$p = new produtos();
		
		if(isset($_SESSION['node']) && !empty($_SESSION['node'])) {
			$uid = $_SESSION['node'];
			$data['user_data'] = $u->get_ser_data($uid);
		}

		$data['getProduto'] = $p->getProduto($id_produto);

		$this->loadTemplate('ver_produto', $data);
	}
}