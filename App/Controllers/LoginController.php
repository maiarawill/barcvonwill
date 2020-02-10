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
		$usuario->__set('senha', md5($_POST['senha']));
		$retorno = $usuario->autenticar();
		if(empty($retorno)){
			header('location: /');
		}else{
			session_start();
			$_SESSION['nome'] = $retorno['nome'];
			$_SESSION['loginOK'] = 'OLOGINESTAOK';
			$this->render('panel');
		}


	}

	public function sair(){
		session_start();
		session_destroy();
		header('location: /');
	}

	public function cadastrar(){
        $usuario = Container::getModel('User');

        $usuario->__set('nome', $_POST['nome']);
		$usuario->__set('senha', md5($_POST['senha']));
		$usuario->__set('login', $_POST['login']);
        $usuario->__set('email', $_POST['email']);
        
		$retorno = $usuario->cadastrar();
        
		$this->render('index');
    }

}


?>