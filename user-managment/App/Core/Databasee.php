<?php
namespace App\Core;

class Databasee {
    private $conn;

    public function __construct() {
        $this->conn = new \mysqli("localhost", "root", "", "user_db");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>