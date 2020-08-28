<?php 
    class database{

        private $host = "localhost";
        private $user = "root"; 
        private $pass = "";
        private $db = "almacen";

        public function getConnection(){
            $dbc = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8;", $this->user,$this->pass);
            return $dbc;
        }
    }
?>