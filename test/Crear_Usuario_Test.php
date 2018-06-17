<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "../bd/modelo_registro.php";
}

if(!class_exists('modelo_eliminar_usuario')){
  require "../bd/modelo_eliminar_usuario.php";
}


final class Crear_Usuario_Test extends TestCase
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
public function crear_nuevo_usuario_no_admin(){
  $a = "nuevo";
  $b = "cont";
  $c = "ema";
  $resultado = $this->iniciar->crear_usuario($a,$b,$c);

  $resultado = $this->iniciar->comprobar_usuario_admin($a);

  $this->assertEquals(0,$resultado);

  $this->iniciar=new modelo_eliminar_usuario();
  $resultado = $this->iniciar->eliminar_usuario($a);
  
}
/**
* @test
*/
public function crear_nuevo_usuario_admin(){
  $a = "nuevo";
  $b = "cont";
  $c = "ema";
  $resultado = $this->iniciar->crear_usuario_admin($a,$b,$c);

  $resultado = $this->iniciar->comprobar_usuario_admin($a);

  $this->assertEquals(1,$resultado);

  $this->iniciar=new modelo_eliminar_usuario();
  $resultado = $this->iniciar->eliminar_usuario($a);
  
}



}
