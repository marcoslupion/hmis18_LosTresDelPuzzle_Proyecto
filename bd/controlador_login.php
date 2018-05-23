<script src="../js/general.js"></script>
<?php
include 'modelo_login.php';

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
  $script = "<script></script>";
  echo $script;
}
else
{
  $script = "<script>document.location.assign('../vistas/ventana_administrador.html');</script>";
  echo $script;
}
?>
