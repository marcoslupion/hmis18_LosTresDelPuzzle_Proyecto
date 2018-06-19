<?php
if(!class_exists('conexion')){
  include 'modelo_conexion.php';
}
class modelo_login extends conexion
{
    public function login($user,$pass)
    {
      $sql = "select user,pass,admin from usuario where user='$user' and pass='$pass'";
      $result = $this->conn->query($sql);
      while($usuario = $result->fetch_assoc())
      {
        if($usuario["admin"]==false)
          return 1;
        else
          return 2;
      }
      return 0;
    }
}


?>
