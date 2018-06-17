<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "../bd/modelo_get_usuarios.php";
}

final class Obtener_Usuarios_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_get_usuarios();
}
/**
* @test
*/
public function devolver_usuarios(){
 
  $resultado = $this->iniciar->usuarios();
 
  $this->assertEquals(4, $resultado->num_rows);
}




}
