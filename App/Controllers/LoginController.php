<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class LoginController extends Action {

	public function index() {

		$this->render('index');
	}

	public function autenticar(){
		
		$usuario = Container::getModel('User');

		$usuario->__set('login', $_POST['login']);
		$usuario->__set('senha', $_POST['senha']);
		$retorno = $usuario->autenticar();
		


	}

}


?>