<?php
if(!class_exists('conexion')){
  include 'modelo_conexion.php';
}
class modelo_get_usuarios extends conexion
{
    public function usuarios()
    {
      $sql = "select * from  usuario ";
      $result = $this->conn->query($sql);
      
      return $result;
    }
  
}


?>
