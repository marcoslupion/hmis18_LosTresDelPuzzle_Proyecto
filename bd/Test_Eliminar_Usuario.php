<?php
use PHPUnit\Framework\TestCase;
require "modelo_get_usuarios.php";

final class Obtener_Usuarios_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_eliminar_usuario();
}
/**
*
*/
public function eliminar_usuario(){

  $valor = "John Doe";
  $resultado = $this->iniciar->eliminar_usuario($valor);

  $this->assertEquals(0,$resultado);
}




}
