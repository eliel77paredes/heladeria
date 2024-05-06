<?php

class ConexionPHP {
    private $servername = "localhost:8080";
    private $username = "root";
    private $password = "";
    private $dbname = "formularioh";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->tu_servidor, $this->username, $this->password, $this->dbname);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConexion() {
        return $this->conn;
    }
}

?>

