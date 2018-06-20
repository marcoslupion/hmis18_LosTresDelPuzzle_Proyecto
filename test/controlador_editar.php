
<?php
// @codeCoverageIgnoreStart
echo "<script src='../js/general.js'></script>";
include 'modelo_eliminar_usuario.php';
include 'modelo_usuario.php';
include 'modelo_registro.php';
//error_reporting(0);
$usuario = $_POST["user_editar"];
$usuario_anterior = $_POST["user_rep"];
$correo = $_POST["email_editar"];
$contrasenia = $_POST["pass1_editar"];
$contrasenia2=$_POST["pass2_editar"];

  $activo = $_POST["resultado_activo"];


if($usuario !=$usuario_anterior){
    #NO SE COMPRUEBA SI EL USUARIO AL QUE SE LE QUIERE CAMBIAR AL NOMBRE ESTA DISPONIBLE, YA QUE NO PUEDE HABER 2 USUARIOS IGUALES

$modelo_registro = new modelo_registro();

$resultado = $modelo_registro->comprobar_usuario($usuario);
if($resultado==0){

  echo"<p id='existe'>El usuario ya existe, el nombre de usuario debe ser unico<p> </br>";
  echo"<button class='btn btn-primary' value='Volver a inicio' onclick='volver_atras()'>Volver atras</Button>";
 return;
}
    //AHORA SE VA A HACER QUE SE ACTUALICE EL USUARIO, CONCRETAMENTE EL NOMBRE JUNTO CON TODOS LOS DEMAS DATOS
    if($contrasenia=="" || $contrasenia2==""){
      $insertar = new modelo_usuario();
      $insertar->modificar_usuario($usuario,$correo,$usuario_anterior,$activo);
      echo"<p id='contrasenia_ok'>Se han guardado los datos correctamente<p> </br>";
      echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";

    }else{
      //si la contraseña es igual y se cambia
      $insertar = new modelo_usuario();
      $insertar->modificar_usuario_contrasenia($usuario,$usuario_anterior,$correo,$contrasenia,$activo);
      echo"<p id='contrasenia_ok'>Se han guardado los datos correctamente<p> </br>";
      echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";
    }

}else{
  //se tiene que modificar el usuario que ya existe
  // si la contraseña no se ha cambiado
  if($contrasenia=="" || $contrasenia2==""){
    $insertar = new modelo_usuario();
    $insertar->modificar_correo($usuario,$correo,$activo);
    echo"<p id='contrasenia_ok'>Se han guardado los datos correctamente<p> </br>";
    echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";

  }else{
    //si la contraseña es igual y se cambia
    $insertar = new modelo_usuario();
    $insertar->modificar_contrasenia($usuario,$correo,$contrasenia,$activo);
    echo"<p id='contrasenia_ok'>Se han guardado los datos correctamente<p> </br>";
    echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";

  }

}

//$resultado = $editar->editar($usuario,$correo,$contrasenia);
// @codeCoverageIgnoreEnd
?>
