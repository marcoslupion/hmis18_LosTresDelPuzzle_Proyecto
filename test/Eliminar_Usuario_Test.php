<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}
if(!class_exists('modelo_eliminar_usuario')){
  require "modelo_eliminar_usuario.php";
}


final class Eliminar_Usuario_Test extends TestCase
{
	private $iniciar;
  private $crear_user;
/**
* @before
*/
public function inicializar(){
   $this->crear_user=new modelo_registro();
   $this->crear_user->crear_usuario("user","pass","email");
   $this->iniciar=new modelo_eliminar_usuario();


}
/**
* @test
*/
public function eliminar_usuario(){
  $resultado = $this->iniciar->eliminar_usuario("user");
  $res = $this->crear_user->comprobar_usuario("user");

  $this->assertEquals(1,$res);
}
}
