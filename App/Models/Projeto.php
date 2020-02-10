<?php

    namespace App\Models;

    use MF\Model\Model;

    class Projeto extends Model{

        private $id;
        private $titulo;
        private $descricao;
        private $tipo;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $novoAtributo){
            $this->$atributo = $novoAtributo;
        }

        public function cadastrar(){

            
            $query = "insert into projetos( titulo, descricao, tipo) values( :titulo , :descricao , :tipo )";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':titulo', $this->__get('titulo'));
            $stmt->bindValue(':descricao', $this->__get('descricao'));
            $stmt->bindValue(':tipo', $this->__get('tipo'));
            $stmt->execute();

            return $this;
            

        }

        public function index(){
            $query = "select * from projetos";
            $resultado = $this->db->query($query)->FetchAll();
            return $resultado;
        }


    }