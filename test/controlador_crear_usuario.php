
<?php
// @codeCoverageIgnoreStart
echo "<script src='../js/general.js'></script>";
include 'modelo_registro.php';

$user=$_POST["user_r"];
$pass=$_POST["pass_r"];
$email=$_POST["email_r"];
$pass2=$_POST["pass_r2"];
$modelo_registro = new modelo_registro();
if($user==""| $pass==""| $pass2==""| $email==""){
  echo"<p id='falta_datos'>Debe introducir todos los datos en el formulario<p>";
  echo"</br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";
}else{


$resultado = $modelo_registro->comprobar_usuario($user);
if($pass!=$_POST["pass_r2"]){
  echo"<p id='no_coinciden'>Las contraseñas no coinciden<p>";
  echo"</br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";
}else{


if($resultado==0){

  echo"<p id='user_Existe'>El usuario ya existe<p>";
  echo"</br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";
}else{
  $modelo_registro->crear_usuario_admin($user,$pass,$email);
  echo"<p id='creado'>El usuario ha sido creado con exito<p>";
  echo"</br>";
  echo"<button class='btn btn-primary' value='Volver atras' onclick='volver_atras()'>Volver atras</Button>";
}

}
}
// @codeCoverageIgnoreEnd
?>
