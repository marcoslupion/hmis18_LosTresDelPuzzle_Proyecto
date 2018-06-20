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
  }
}
?>
