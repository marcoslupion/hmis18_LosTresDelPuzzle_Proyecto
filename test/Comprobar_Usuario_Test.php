<?php
use PHPUnit\Framework\TestCase;

if(!class_exists('modelo_eliminar_usuario')){
  require "modelo_eliminar_usuario.php";
}

if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}

/**
** Test que comprueba el modelo registro
**
**/
final class Comprobar_Usuario_Test extends TestCase
{
	private $iniciar;
  private $borrar_user;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_registro();
   $this->iniciar->crear_usuario("prueba","contrasenia","email");
   $this->borrar_user=new modelo_eliminar_usuario();
}
/**
* @test
*/
public function comprobar_usuario_no_existe(){
  $user = "asdfasdf";
  $resultado = $this->iniciar->comprobar_usuario($user);
  $this->assertEquals(1,$resultado);
}
/**
* @test
*/
public function comprobar_usuario_existe(){
  $user = "prueba";
  $resultado = $this->iniciar->comprobar_usuario($user);
  $this->assertEquals(0,$resultado);
  }
/**
* @after
*/
public function borrar_user(){
  $this->borrar_user->eliminar_usuario("prueba");
}

}
