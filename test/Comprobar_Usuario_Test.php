<?php
use PHPUnit\Framework\TestCase;

if(!class_exists('modelo_eliminar_usuario')){
  require "modelo_eliminar_usuario.php";
}

if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}

if(!class_exists('modelo_usuario')){
  require "modelo_usuario.php";
}
/**
** Test que comprueba el modelo registro
**
**/
final class Comprobar_Usuario_Test extends TestCase
{
	private $iniciar;
  private $borrar_user;
  private $usuario;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_registro();
   $this->iniciar->crear_usuario("prueba","contrasenia","email");
   $this->borrar_user=new modelo_eliminar_usuario();
   $this->usuario=new modelo_usuario();
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
  * @test
  */
  public function comporobar_usuario_activo(){
    $user = "prueba";
    $result = $this->usuario->comprobar_usuario($user);

    while($resultado = $result->fetch_assoc()){
      $this->assertEquals(0,$resultado["activo"]);
    }
  }
/**
* @after
*/
public function borrar_user(){
  $this->borrar_user->eliminar_usuario("prueba");
}

}
