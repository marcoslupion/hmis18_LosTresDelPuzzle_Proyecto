<?php
// @codeCoverageIgnoreStart
include 'modelo_get_usuarios.php';
$usuarios = new modelo_get_usuarios();
$resultado = $usuarios->usuarios();
// @codeCoverageIgnoreEnd
?>
