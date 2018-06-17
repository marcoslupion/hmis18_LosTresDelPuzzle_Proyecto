<?php
use PHPUnit\Framework\TestCase;



if(!class_exists('modelo_registro')){
  require "modelo_registro.php";
}

if(!class_exists('modelo_usuario')){
  require "modelo_usuario.php";
}
if(!class_exists('modelo_eliminar_usuario')){
  require "modelo_eliminar_usuario.php";
}
if(!class_exists('modelo_get_usuarios')){
  require "modelo_get_usuarios.php";
}



final class Modificar_Usuario_Test extends TestCase
{
	private $iniciar;
/**
* @before
*/
public function inicializar(){
   $this->iniciar=new modelo_registro();
   $this->iniciar->crear_usuario("prueba","contrasenia","email");
   $this->iniciar=new modelo_usuario();
}

/**
* @after
*/
public function deshacer_cambios(){
  $this->iniciar=new modelo_eliminar_usuario();
  $this->iniciar->eliminar_usuario("prueba");
  $this->iniciar->eliminar_usuario("nuevo");
}
/**
* @test
*/
public function modificar_correo(){
  $usuario = "prueba";
  $correo = "nuevo";
  $activo = "1";
  $this->iniciar->modificar_correo($usuario,$correo,$activo);

  $this->iniciar=new modelo_get_usuarios();
  $resultado = $this->iniciar->usuario($usuario);
  $params = $resultado->fetch_assoc();
  $correo = $params["email"];
  $activo = $params["activo"];
  $this->assertEquals("nuevo",$correo);
  $this->assertEquals("1",$activo);
}

/**
* @test
*/
public function modificar_contrasenia(){
  $usuario = "prueba";
  $correo = "nuevo";
  $contrasenia = "cont";
  $activo = "1";
  $this->iniciar->modificar_contrasenia($usuario,$correo,$contrasenia,$activo);

  $this->iniciar=new modelo_get_usuarios();
  $resultado = $this->iniciar->usuario($usuario);
  $params = $resultado->fetch_assoc();
  $correo = $params["email"];
  $activo = $params["activo"];
  $pass = $params["pass"];
  $this->assertEquals("cont",$pass);

}


/**
* @test
*/
public function modificar_usuario(){
  $usuario = "nuevo";
  $correo = "nuevo";
  $antiguo = "prueba";
  $activo = "1";
  $this->iniciar->modificar_usuario($usuario,$correo,$antiguo,$activo);

  $this->iniciar=new modelo_get_usuarios();
  $resultado = $this->iniciar->usuario($usuario);
  $params = $resultado->fetch_assoc();
  $correo = $params["email"];
  $activo = $params["activo"];
  $nuevo = $params["user"];
  $this->assertEquals("nuevo",$nuevo);

}
/**
* @test
*/
public function modificar_usuario_contrasenia(){
  $usuario = "nuevo";
  $correo = "adios";
  $antiguo = "prueba";
  $activo = "1";
  $contrasenia = "contrasenia1";
  $this->iniciar->modificar_usuario_contrasenia($usuario,$antiguo,$correo,$contrasenia,$activo);

  $this->iniciar=new modelo_get_usuarios();
  $resultado = $this->iniciar->usuario($usuario);
  $params = $resultado->fetch_assoc();
  $correo = $params["email"];
  $activo = $params["activo"];
  $nuevo = $params["user"];
  $pass = $params["pass"];
  $this->assertEquals("contrasenia1",$pass);

}


}
