<?php
if(!class_exists('conexion')){
  include 'modelo_conexion.php';
}
class modelo_usuario extends conexion
{
    public function insertar($usuario)
    {
      $sql = "select * from  usuario ";
      $result = $this->conn->query($sql);
      
      return $result;
    }
    public function modificar_correo($usuario,$correo)
    {
      $sql = "update usuario  set email = $correo where user=$usuario;";
      $result = $this->conn->query($sql);
      
      return $result;
    }
    public function modificar_contrasenia($usuario,$correo,$contrasenia)
    {
      $sql = "update usuario  set email = $correo , pass = $contrasenia where user=$usuario;";
      $result = $this->conn->query($sql);
      
      return $result;
    }
}


?>
