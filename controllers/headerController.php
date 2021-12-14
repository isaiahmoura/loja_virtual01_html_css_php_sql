<?php

class headerController extends controller {

	public function __construct() {
	}

	public function exit() {
		session_destroy();
		header("Location: ".BASE_URL."home");
	}

	public function add_carrinho($id_produto) {
		if(!empty($id_produto)) {
			$produtos = new produtos();
			$produtos->add_to_cart($id_produto);
			header("Location: ".BASE_URL."home");
		}else {
			header("Location: ".BASE_URL."home");
		}
	}
}