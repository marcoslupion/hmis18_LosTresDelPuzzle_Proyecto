<script src="../js/general.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/nuestro_css.css">
<?php
// @codeCoverageIgnoreStart
include 'modelo_login.php';
@session_start();
$user=$_POST["user"];
$pass=$_POST["pass"];
$modelo_login = new modelo_login();
$resultado = $modelo_login->login($user,$pass);
$_POST["resultado"]=$resultado;
if($resultado==0)
{
  echo"<p id='incorrectos'>Datos incorrectos<p>";
  echo"</br>";
  echo"<button class='btn btn-primary' value='Volver a inicio' onclick='volver_a_inicio()'>Volver a inicio de sesion</Button>";
 // $script = "<script>login_incorrecto(); document.location.assign('../');</script>";
  //echo $script;
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
// @codeCoverageIgnoreEnd
?>
