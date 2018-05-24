<script src="../js/general.js"></script>
<?php
include 'modelo_login.php';
@session_start();
$user=$_POST["user"];
$pass=$_POST["pass"];
$modelo_login = new modelo_login();
$resultado = $modelo_login->login($user,$pass);
$_POST["resultado"]=$resultado;
if($resultado==0)
{
  $script = "<script>login_incorrecto(); document.location.assign('../');</script>";
  echo $script;
}
else if($resultado==1)
{
  $_SESSION["no_admin"]=1;
  $_SESSION["usuario"]=$user;
  $script = "<script>document.location.assign('../vistas/usuario_registrado.php');</script>";
  echo $script;
}
else
{
  $_SESSION["admin"]=1;
  $_SESSION["usuario"]=$user;
  $script = "<script>document.location.assign('../vistas/ventana_administrador.php');</script>";
  echo $script;
}
?>
