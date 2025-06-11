<?php
//quien puso su archivo aqui de clinica lo movi en la D: clinica
    class DB{
        private $url='mysql:host=localhost;dbname=VENTASSENATIDB';
        private $user='root';
        private $password='admin123';

        public function conectar(){
            $cn=new PDO($this->url, $this->user, $this->password);
            return $cn;
        }
    }
?>
