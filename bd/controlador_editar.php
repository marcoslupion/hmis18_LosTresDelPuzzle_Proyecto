<?php
include 'modelo_editar.php';
include 'modelo_eliminar_usuario.php';
include 'modelo_usuario.php';

$usuario = $_POST["user_editar"];
$usuario_anterior = $_POST["user_rep"];
$correo = $_POST["email_editar"];
$contrasenia = $_POST["pass1_editar"];
$contrasenia2=$_POST["pass2_editar"];


$editar = new modelo_editar();

if($usuario !=$usuario_anterior){
    //se tiene que borrar el usuario anterior y crear el nuevo usuario
  

}else{
  //se tiene que modificar el usuario que ya existe
  // si la contraseña no se ha cambiado
  if($contrasenia=="" || $contrasenia2==""){
    $insertar = new modelo_usuario();
    $insertar->modificar_correo($usuario,$correo);

  }else{
    //si la contraseña es igual y se cambia 
    $insertar = new modelo_usuario();
    $insertar->modificar_contrasenia($usuario,$correo,$contrasenia);
  }
 
}

$resultado = $editar->editar($usuario,$correo,$contrasenia);

?>
<script type="text/javascript">
 // document.location.assign('../vistas/ventana_administrador.php');
</script>