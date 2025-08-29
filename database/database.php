<?php 
session_start();

class Database {

    private $_host = "localhost";
    private $_root = "root";
    private $_password = "";
    private $_database = "brew_bean";
    public $conn;

    // Connection to database 
    public function __construct() {
        $this->conn = new mysqli(
            $this->_host, 
            $this->_root, 
            $this->_password, 
            $this->_database
        );
        if ($this->conn->connect_error) {
            die("Connection Failed: " . $this->conn->connect_error);        
        }
    }

}
?>