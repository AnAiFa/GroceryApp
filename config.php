<?php

    class Database {
        private $dsn = "mysql:host=localhost;dbname=id12818630_grotech";
        private $dbuser = "id12818630_root";
        private $dbpass = "grotech2020";
        
        public $conn;
        
        public function __construct(){
            try {
                $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
                echo "Connected successfully to database";
            }catch (PDOException $e) {
                echo "Error : ".$e->getMessage();
            }
            
            return $this->conn;
        }
    }
    
    $ob = new Database;
    