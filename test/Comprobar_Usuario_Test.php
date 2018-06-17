<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}
/**
* Test que comprueba el modelo registro
*
*/
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
  $user = "asdfasdf";
  $resultado = $this->iniciar->comprobar_usuario($user);
  echo "$resultado";
  $this->assertEquals(1,$resultado);
}
/**
* @test
*/
public function comprobar_usuario_existe(){
  $user = "MariaSR";

  $resultado = $this->iniciar->comprobar_usuario($user);
    $this->assertEquals(0,$resultado);
  }



}
