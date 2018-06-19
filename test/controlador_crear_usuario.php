<script src="../js/general.js"></script>
<?php
include 'modelo_registro.php';

$user=$_POST["user_r"];
$pass=$_POST["pass_r"];
$email=$_POST["email_r"];
$pass2=$_POST["pass_r2"];
$modelo_registro = new modelo_registro();
if($user==""| $pass==""| $pass2==""| $email==""){
  echo"<label>Debe introducir todos los datos en el formulario.<label></br>";
  echo"<button class='btn btn-primary' value='Volver a inicio' onclick='volver_atras()'>Volver a inicio</Button>";
}else{


$resultado = $modelo_registro->comprobar_usuario($user);
if($pass!=$_POST["pass_r2"]){
  echo"<label>Las contraseñas no coinciden<label></br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver a inicio</Button>";
}else{


if($resultado==0){

  echo"<label>El usuario ya existe<label></br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver a inicio</Button>";
}else{
  $modelo_registro->crear_usuario_admin($user,$pass,$email);
  echo"<label>El usuario ha sido creado con exito<label></br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver a inicio</Button>";
}

}
}
?>
