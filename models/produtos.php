<?php

class produtos extends model {
	
	

	public function getCategoriasRoupas() {
		$array = array();

		$sql = "SELECT * FROM categorias_roupas";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getCategoriasCalcados() {
		$array = array();

		$sql = "SELECT * FROM categorias_calçados";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
	
		return $array;
	}

	public function getCategoriasAcessorios() {
		$array = array();

		$sql = "SELECT * FROM categorias_acessorios";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
	
		return $array;
	}

	public function getProdutosByCategoria($categoria_titulo,$limit) {
		$array = array();

		$sql = "SELECT * FROM produtos WHERE categoria = '$categoria_titulo' LIMIT $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getProduto($id_produto) {
		$array = array();

		$sql = "SELECT * FROM produtos WHERE id = '$id_produto'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getProdutos($qt = 0) {
		$array = array();

		$sql = "SELECT * FROM produtos ORDER BY rand() LIMIT $qt";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function add_to_cart($id_produto) {
		if(!empty($id_produto)) {
			if(!isset($_SESSION['carrinho']) && empty($_SESSION['carrinho'])) {
				$_SESSION['carrinho'] = array();
			}
			$_SESSION['carrinho'][] = $id_produto;
		}else {
			header("Location: ".BASE_URL."home");
		}
	}

	public function getCarrinho($produtos) {
		$array = array();

		$sql = "SELECT * FROM produtos WHERE id IN (".implode(',', $produtos).")";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}