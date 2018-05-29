<?php
use PHPUnit\Framework\TestCase;
require "modelo_login.php";

final class Iniciar_Sesion_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_login();
}
/**
* @test
*/
public function iniciar_sesion_correcto_admin(){
  $user = "JohnDoe";
  $pass = "ExPass41";
  $resultado = $this->iniciar->login($user,$pass);
  echo "$resultado";
  $this->assertEquals(2,$resultado);
}
/**
* @test
*/
public function iniciar_sesion_correcto_no_admin(){
  $user = "MariaSR";
  $pass = "1234asd";
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



}
