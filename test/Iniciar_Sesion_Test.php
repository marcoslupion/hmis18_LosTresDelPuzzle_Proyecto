<?php
use PHPUnit\Framework\TestCase;




if(!class_exists('modelo_login')){
  require "modelo_login.php";
}

if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}

if(!class_exists('modelo_eliminar_usuario')){
  require "modelo_eliminar_usuario.php";
}

final class Iniciar_Sesion_Test extends TestCase
{
	private $iniciar;
  private $user_nuevo;
  private $borrar_usuario;
/**
* @before
*/
public function inicializar(){
    $this->user_nuevo=new modelo_registro();
    $this->user_nuevo->crear_usuario("prueba","contrasenia","email");
    $this->iniciar=new modelo_login();
}
/**
* @test
*/
public function iniciar_sesion_correcto_admin(){
  $user = "admin";
  $pass = "admin";
  $resultado = $this->iniciar->login($user,$pass);
  $this->assertEquals(2,$resultado);
}
/**
* @test
*/
public function iniciar_sesion_correcto_no_admin(){
  $user = "prueba";
  $pass = "contrasenia";
  $resultado = $this->iniciar->login($user,$pass);
  $this->assertEquals(1,$resultado);
  }
/**
* @test
*/
public function iniciar_sesion_incorrecto(){
  $user = "juan";
  $pass = "12345";
  $resultado = $this->iniciar->login($user,$pass);
  $this->assertEquals(0,$resultado);
  }
  /**
  * @after
  */
  public function borrar(){
      $this->borrar_usuario=new modelo_eliminar_usuario();
      $this->borrar_usuario->eliminar_usuario("prueba");
      $this->iniciar=new modelo_login();
  }

}
