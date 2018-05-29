<?php
use PHPUnit\Framework\TestCase;
require "../bd/modelo_registro.php";

final class Comprobar_Usuario_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_registro();
}
/**
* @test
*/
public function comprobar_usuario_no_existe(){
  $user = "JohnDoe";
  $pass = "ExPass41";
  $resultado = $this->iniciar->login($user,$pass);
  echo "$resultado";
  $this->assertEquals(1,$resultado);
}
/**
* @test
*/
public function comprobar_usuario_existe(){
  $user = "MariaSR";
  $pass = "1234asd";
    $resultado = $this->iniciar->login($user,$pass);
    $this->assertEquals(0,$resultado);
  }



}
