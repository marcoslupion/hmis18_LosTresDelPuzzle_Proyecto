<?php

class conexion
{
  protected $conn;
  public function __construct()
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hmis";
    // Crear conexion
    $this->conn = new mysqli($servername, $username, $password, $dbname);
    // Comprobar conexion
    if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
  }
}
?>
