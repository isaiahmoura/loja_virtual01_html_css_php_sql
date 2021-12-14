<?php

class carrinhoController extends controller {

	public function __construct() {
	}

	public function index() {
		$data = array();
		$u = new usuarios();
		$p = new produtos();
		

		if(isset($_SESSION['node']) && !empty($_SESSION['node'])) {
			$uid = $_SESSION['node'];
			$data['user_data'] = $u->get_ser_data($uid);

			if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
				$produtos = array();
				$produtos = $_SESSION['carrinho'];

				$data['getCarrinho'] = $p->getCarrinho($produtos);

			}else {
				header("Location: ".BASE_URL."home");
			}
		}else {
			header("Location: ".BASE_URL."login");
		}

		$this->loadTemplate('carrinho', $data);
	}
}