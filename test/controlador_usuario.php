<script src="../js/general.js"></script>
<?php
include 'modelo_usuario.php';
@session_start();
$usuario=$_SESSION["usuario"];
$modelo_usuario = new modelo_usuario();
$result=$modelo_usuario->comprobar_usuario($usuario);
while($resultado = $result->fetch_assoc())
{
  if($resultado["activo"]==1)
  {

    echo "<p id='activo'>El usuario esta activo</p>";
  }else
  {
    echo "<p id='no_activo'>El usuario no esta activo</p>";
  }
}


 ?>
