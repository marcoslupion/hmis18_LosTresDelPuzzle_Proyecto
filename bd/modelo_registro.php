<?php
if(!class_exists('conexion')){
  include 'modelo_conexion.php';
}
class modelo_registro extends conexion
{
    public function crear_usuario($user,$pass,$email)
    {
      $sql = "insert into usuario (user,pass,email,admin,activo) values ('$user','$pass','$email',0,0)";
      $result = $this->conn->query($sql);
    }

    public function comprobar_usuario($user){
      $sql = "select * from usuario where user='$user'";
      $result = $this->conn->query($sql);
      while($usuario = $result->fetch_assoc())
      {
        return 0;
      }
      return 1;
    }
    }


?>
