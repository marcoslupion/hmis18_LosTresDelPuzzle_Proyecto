<script src="../js/general.js"></script>
<?php
include 'modelo_registro.php';

$user=$_POST["user_r"];
$pass=$_POST["pass_r"];
$email=$_POST["email_r"];

$modelo_registro = new modelo_registro();

$resultado = $modelo_registro->comprobar_usuario($user);
if($resultado==0){

  echo"<label>El usuario ya existe, vuelva a registrarse con un nombre de usuario diferente </br>";
  echo"<button class='btn btn-primary' value='Volver a inicio' onclick='volver_a_inicio()'>Volver a inicio de sesion</Button>";
}else{
  $modelo_registro->crear_usuario($user,$pass,$email);
  echo"<label>El usuario ha sido creado con exito, vuelve a inicio para iniciar sesión</br>";
  echo"<button class='btn btn-primary' value='Volver a inicio' onclick='volver_a_inicio()'>Volver a inicio de sesion</Button>";
}

?>
