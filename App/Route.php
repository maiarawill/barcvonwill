<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobreNos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);
		

		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'LoginController',
			'action' => 'autenticar'
		);


		$routes['cadastrar'] = array(
			'route' => '/addProjeto',
			'controller' => 'ProjetoController',
			'action' => 'cadastrar'
		);

		$routes['recuperarProjetos'] = array(
			'route' => '/projetos',
			'controller' => 'ProjetoController',
			'action' => 'index'
		);

		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'LoginController',
			'action' => 'sair'
		);

		$routes['cadastraradmin'] = array(
			'route' => '/cdadm',
			'controller' => 'LoginController',
			'action' => 'cadastrar'
		);

		$routes['listarProjetos'] = array(
			'route' => '/listar',
			'controller' => 'ProjetoController',
			'action' => 'index'
		);



		$routes['administration'] = array(
			'route' => '/adm',
			'controller' => 'LoginController',
			'action' => 'index'
		);

		$this->setRoutes($routes);
	}

}

?>