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
    public function modificar_correo($usuario,$correo,$activo)
    {
      $sql = "update usuario  set email = '$correo', activo='$activo' where user='$usuario';";
      $result = $this->conn->query($sql);
      
      return $result;
    }
    public function modificar_contrasenia($usuario,$correo,$contrasenia,$activo)
    {
      $sql = "update usuario  set email = '$correo' , pass = '$contrasenia', activo='$activo' where user='$usuario';";
      $result = $this->conn->query($sql);
      
      return $result;
    }
    public function modificar_usuario($usuario,$correo,$antiguo,$activo)
    {
      $sql = "update usuario  set user = '$usuario',email = '$correo', activo='$activo' where user='$antiguo';";
      $result = $this->conn->query($sql);
      
      return $result;
    }
    public function modificar_usuario_contrasenia($usuario,$antiguo,$correo,$contrasenia,$activo)
    {
      $sql = "update usuario  set user='$usuario',email = '$correo' , pass = '$contrasenia', activo='$activo' where user='$antiguo';";
      $result = $this->conn->query($sql);
      
      return $result;
    }
}


?>
