<?php

class perfilController extends controller {

	public function __construct() {
		$u = new usuarios();
		$u->loggedOn();
	}

	public function index() {
		$data = array();
		$u = new usuarios();
		
		if(isset($_SESSION['node']) && !empty($_SESSION['node'])) {
			$uid = $_SESSION['node'];
			$data['user_data'] = $u->get_ser_data($uid);
		}
		

		$this->loadTemplate('perfil', $data);
	}
}