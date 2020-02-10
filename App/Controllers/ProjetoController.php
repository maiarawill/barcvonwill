<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class ProjetoController extends Action {
    
    public function cadastrar(){
        $projeto = Container::getModel('Projeto');

        $projeto->__set('titulo', $_POST['titulo']);
		$projeto->__set('descricao', $_POST['descricao']);
        $projeto->__set('tipo', $_POST['tipo']);
        
		$retorno = $projeto->cadastrar();
        
        $this->index();
    }

    public function index(){
        $projeto = Container::getModel('Projeto');

        $projetos = $projeto->index();

        $this->view->dados = $projetos;

        $this->render('index');
        
    }

}