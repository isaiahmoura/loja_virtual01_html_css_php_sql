<?php

class loginController extends controller {

	public function __construct() {
		
	}

	public function index() {
		$data = array();
		
		$u = new usuarios();
		unset($_SESSION['erro_box']);

		if(isset($_POST['entrar'])) {
			if(!empty($_POST['email']) && !empty($_POST['senha'])) {
				$email = addslashes($_POST['email']);
				$senha = md5(addslashes($_POST['senha']));
				$u->login($email,$senha);
			}else {
				unset($_SESSION['erro_box']);
				$_SESSION['erro_box'] = 'Preencha todos os campos';
			}
			
		}

		$this->loadView('login', $data);
	}

	public function cadastro() {
		$data = array();
		
		$u = new usuarios();
		unset($_SESSION['erro_box']);

		if(isset($_POST['cadastrar'])) {
			if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha1']) 
				&& !empty($_POST['senha2'])) {
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = md5(addslashes($_POST['senha1']));
				$confirmar_senha = md5(addslashes($_POST['senha2']));
				$u->cadastro($nome,$email,$senha,$confirmar_senha);
			}else {
				unset($_SESSION['erro_box']);
				$_SESSION['erro_box'] = 'Preencha todos os campos';
			}
			
		}

		$this->loadView('cadastro', $data);
	}
}