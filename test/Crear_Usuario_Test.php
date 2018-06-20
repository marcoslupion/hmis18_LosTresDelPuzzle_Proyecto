<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}

if(!class_exists('modelo_login')){
  require "modelo_login.php";
}

if(!class_exists('modelo_eliminar_usuario')){
  require "modelo_eliminar_usuario.php";
}


final class Crear_Usuario_Test extends TestCase
{
  private $borrar_user;
	private $iniciar;
  private $login;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_registro();
   $this->borrar_user=new modelo_eliminar_usuario();
   $this->login=new modelo_login();
}
/**
* @test
*/
public function crear_nuevo_usuario_no_activo(){
  $a = "nuevo";
  $b = "cont";
  $c = "ema";
  $resultado = $this->iniciar->crear_usuario($a,$b,$c);

  $resultado = $this->login->login($a,$b);

  $this->assertEquals(1,$resultado);
  $this->borrar_user->eliminar_usuario("nuevo");
}
/**
* @test
*/
public function crear_nuevo_usuario_activo(){
  $a = "nuevo";
  $b = "cont";
  $c = "ema";
  $resultado = $this->iniciar->crear_usuario_admin($a,$b,$c);

  $resultado = $this->login->login($a,$b);

  $this->assertEquals(1,$resultado);
}
/**
* @after
*/
public function borrar_usuario(){
  $this->borrar_user->eliminar_usuario("nuevo");
}

}
