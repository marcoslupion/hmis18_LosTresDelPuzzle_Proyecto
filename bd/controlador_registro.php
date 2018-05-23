<script src="../js/general.js"></script>
<?php
include 'modelo_registro.php';

$user=$_POST["user_r"];
$pass=$_POST["pass_r"];
$email=$_POST["email_r"];
$modelo_registro = new modelo_registro();

$resultado = $modelo_registro->comprobar_usuario($user);
if($resultado==0){
  echo "<script>usuario_ya_existe();document.location.assign('../');</script>";
}else{
  $modelo_registro->crear_usuario($user,$pass,$email);
  echo "<script>usuario_creado();document.location.assign('../');</script>";
}

?>
