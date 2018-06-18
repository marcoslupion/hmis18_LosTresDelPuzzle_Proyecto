<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Página  personal</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/nuestro_css.css">

</head>

<body>

  <?php
    include '../test/controlador_comprobar_login.php';
  ?>
  <div class="login-wrap">
    <div class="login-html">
      <div class="login-form">
      <div class="group">
        <form action="../test/controlador_sesion.php" method="post">
        <input id="bt_logout" type="submit" class="button" value="Log out">
      </form>
      </div>
      <div class="hr"></div>
      <div class="group">
        <?php
          include '../test/controlador_usuario.php';
        ?>
      </div>
    </div>
    </div>
  </div>

<script src="../js/general.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
