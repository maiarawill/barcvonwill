<?php 

    namespace App\Models;

    use MF\Model\Model;

    class User extends Model{

        private $id;
        private $nome;
        private $email;
        private $login;
        private $senha;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $novoAtributo){
            $this->$atributo = $novoAtributo;
        }

        //salvar
        public function salvar(){
            $query = "insert into usuarios(id,nome,email,login,senha) values(:nome, :email, :login, :senha)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':nome', $this->__get('nome'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':login', $this->__get('login'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();

            return $this;
        }
        //validar


        //recuperar um usuario por email


        //autenticar

        public function autenticar(){
            $query = "select nome from usuarios where login = :login and senha = :senha ";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':login', $this->__get('login'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();

            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $usuario;
        }

    }