<?php
// @codeCoverageIgnoreStart
include 'modelo_eliminar_usuario.php';
$valor =$_GET['valor'];

$eliminar = new modelo_eliminar_usuario();
$resultado = $eliminar->eliminar_usuario($valor);
// @codeCoverageIgnoreEnd
?>
<script type="text/javascript">
  document.location.assign('../vistas/ventana_administrador.php');
</script>
