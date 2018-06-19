<?php
if(!class_exists('conexion')){
  include 'modelo_conexion.php';
}
class modelo_eliminar_usuario extends conexion
{
    public function eliminar_usuario($valor)
    {
      $sql = "delete from  usuario where user = '$valor'";
      $result = $this->conn->query($sql);
      
      return 0;
    }
}


?>
