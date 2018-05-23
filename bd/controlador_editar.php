<?php
include 'modelo_editar.php';
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$contrasenia = $_POST["contrasenia"];



$editar = new modelo_editar();

$resultado = $editar->editar($usuario,$correo,$contrasenia);

?>
<script type="text/javascript">
  document.location.assign('../vistas/ventana_administrador.php');
</script>