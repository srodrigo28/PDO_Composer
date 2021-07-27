<?php
    abstract class Connection{
        private $servDB = 'mysql:host=localhost;dbname=db_pdo';
        private $user = 'root';
        private $pass = '';

        protected function connect(){
            try{
                $conn = new PDO($this->servDB, $this->user, $this->pass);
                $conn->exec("set names utf8");
                echo "sucesso !!!";
                return $conn;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

