<?php
use PHPUnit\Framework\TestCase;
require "../bd/modelo_login.php";

final class Iniciar_Sesion_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){
    $iniciar=new modelo_login();
}
/**
* @test
*/
public function iniciar_sesion_correcto_admin(){
  $resultado = $iniciar->login($user,$pass);
  $this->assertEquals(2,$resultado);
}
/**
* @test
*/
public function iniciar_sesion_correcto_no_admin(){
    $resultado = $iniciar->login($user,$pass);
    $this->assertEquals(1,$resultado);
  }
/**
* @test
*/
public function iniciar_sesion_incorrecto(){
    $resultado = $iniciar->login($user,$pass);
    $this->assertEquals(0,$resultado);
  }



}
