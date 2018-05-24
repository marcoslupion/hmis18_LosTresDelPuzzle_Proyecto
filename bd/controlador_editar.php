<?php
include 'modelo_editar.php';
include 'modelo_eliminar_usuario.php';
include 'modelo_usuario.php';
//error_reporting(0);
$usuario = $_POST["user_editar"];
$usuario_anterior = $_POST["user_rep"];
$correo = $_POST["email_editar"];
$contrasenia = $_POST["pass1_editar"];
$contrasenia2=$_POST["pass2_editar"];

  $activo = $_POST["resultado_activo"];

  echo"$activo";
if($usuario !=$usuario_anterior){
    #NO SE COMPRUEBA SI EL USUARIO AL QUE SE LE QUIERE CAMBIAR AL NOMBRE ESTA DISPONIBLE, YA QUE NO PUEDE HABER 2 USUARIOS IGUALES
  
    //AHORA SE VA A HACER QUE SE ACTUALICE EL USUARIO, CONCRETAMENTE EL NOMBRE JUNTO CON TODOS LOS DEMAS DATOS 
    if($contrasenia=="" || $contrasenia2==""){
      $insertar = new modelo_usuario();
      $insertar->modificar_usuario($usuario,$correo,$usuario_anterior,$activo);
  
    }else{
      //si la contraseña es igual y se cambia 
      $insertar = new modelo_usuario();
      $insertar->modificar_usuario_contrasenia($usuario,$usuario_anterior,$correo,$contrasenia,$activo);
    }

}else{
  //se tiene que modificar el usuario que ya existe
  // si la contraseña no se ha cambiado
  if($contrasenia=="" || $contrasenia2==""){
    $insertar = new modelo_usuario();
    $insertar->modificar_correo($usuario,$correo,$activo);

  }else{
    //si la contraseña es igual y se cambia 
    $insertar = new modelo_usuario();
    $insertar->modificar_contrasenia($usuario,$correo,$contrasenia,$activo);
  }
 
}

//$resultado = $editar->editar($usuario,$correo,$contrasenia);

?>
<script type="text/javascript">
  document.location.assign('../vistas/ventana_administrador.php');
</script>