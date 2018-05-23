<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Proyecto HMIS</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nuestro_css.css">

</head>

<body>

  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
      <label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up">
      <label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <form id="form" action="bd/controlador_login.php" class="sign-in-htm" method="post">
          <div class="php"></div>
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" type="text" class="input" name="user">
            <div id="no_user"></div>
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" type="password" class="input" data-type="password" name="pass">
            <div id="no_pass"></div>
          </div>
          <!--
          <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
          </div>
          -->
          <div class="group">
            <input id="bt_login" class="button" value="Sign In">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <a href="#forgot">Forgot Password?</a>
          </div>
        </div>
        <div class="sign-up-htm">
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <label for="pass" class="label">Repeat Password</label>
            <input id="pass" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <label for="pass" class="label">Email Address</label>
            <input id="pass" type="text" class="input">
          </div>
          <div class="group">
            <input class="button" value="Sign Up">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <label for="tab-1">Already Member?</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="js/general.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
