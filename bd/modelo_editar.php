<?php
if(!class_exists('conexion')){
  include 'modelo_conexion.php';
}
class modelo_editar extends conexion
{
    public function editar($valor)
    {
      $sql = "delete from  usuario where user = '$valor'";
      $result = $this->conn->query($sql);
      
      return 0;
    }
}


?>
