<?php

class categorias extends model {
	
	
	public function getCategorias() {
		$array = array();

		$sql = "SELECT * FROM categorias";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


}