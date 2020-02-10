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


		$routes['administration'] = array(
			'route' => '/adm',
			'controller' => 'LoginController',
			'action' => 'index'
		);

		$this->setRoutes($routes);
	}

}

?>