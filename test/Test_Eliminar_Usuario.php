<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "../bd/modelo_registro.php";
}
if(!class_exists('modelo_eliminar_usuario')){
  require "../bd/modelo_eliminar_usuario.php";
}


final class Eliminar_Usuario_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){

   $this->iniciar=new modelo_eliminar_usuario();
 

}
/**
* @test
*/
public function eliminar_usuario(){
  //creamos un usuario para despues eliminarlo
 $insert = new modelo_registro();
 $var = $insert->crear_usuario("user","pass","email");
 $res = $insert->comprobar_usuario("user");
//res tiene que ser 0 para que el usuario exista
$this->assertEquals(0,$res);
  $resultado = $this->iniciar->eliminar_usuario("user");

  $res = $insert->comprobar_usuario("user");
 //res ahora tiene que ser 1 ver que no esta el objeto
  $this->assertEquals(1,$res);
}




}
