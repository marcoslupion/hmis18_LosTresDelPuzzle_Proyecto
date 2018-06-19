<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/nuestro_css.css">
  <script src="../js/general.js"></script>

</head>

<body>
  <div class="container-fluid mx-auto encabezado">
    <h3 class="centrado">Administrar</h3>
    <p class="centrado">Usuario: </p>
    <form action="../bd/controlador_sesion.php" method="post">
    <input id="bt_logout" type="submit" class="button" value="Log out">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h3>¿Qué desea hacer?</h3>
        <ul class="list-group">
          <li class="list-group-item" id="form_boton" onclick="ventana_admin(2)">Crear usuario</li>
          <li class="list-group-item " id="tabla_boton" onclick="ventana_admin(1)">Listar usuarios</li>

        </ul>
      </div>
      <div class="col-sm-9">
        <div class="container">
          <table class="table ocultar" id="listar_usuarios">
            <thead class="thead-dark">
              <tr>
                <th>Nombre de usuario</th>
                <th>Correo electrónico</th>
                <th>Admin</th>
                <th>Activo</th>
                <th>Gestionar usuario</th>
              </tr>
            </thead>
            <tbody>
            <?php

            include '../test/controlador_get_usuarios.php';

              if($resultado->num_rows>0) {

                $contador =1;
                while($row=$resultado -> fetch_assoc()){
                  echo" <tr>
                  <td id=user$contador>".$row["user"]."</td>
                  <td id=email$contador>".$row["email"]."</td>";
                  if($row["admin"]==0){
                    echo"<td>No</td>";
                  }else{
                    echo"<td>Sí</td>";
                  }
                  if($row["activo"]==0){
                    echo"<td id=activo$contador>No</td>";
                  }else{
                    echo"<td id=activo$contador>Sí</td>";
                  }

                  echo"<td class='contenedor'>
                    <a href='../test/controlador_eliminar_usuario.php?valor=".$row["user"]."'><i class='fa fa-trash-o' style='font-size:24px' ></i></a>
                    <i class='fa fa-pencil-square-o' id='editar_datos_fafa' style='font-size:24px' onclick='ventana_admin(3,$contador)'></i>
                  </td>
                </tr>";
                $contador =$contador+1;
                }
              }



            ?>

            </tbody>
          </table>
          <form id="crear_user" class="ocultar" action="../test/controlador_crear_usuario.php" class="sign-up-htm" method="post">
              <div class="form-group ">
              <label for="exampleInputEmail1">Nombre de usuario</label>
              <input id="user_r" name="user_r" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca el nombre de usuario">
            </div>
            <div class="form-group ">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input id="email_r" name="email_r" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca el correo electrónico">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input id="pass_r" name="pass_r" type="password" class="form-control" placeholder="Introduzca la contraseña">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Repetir contraseña</label>
              <input id="pass_r2" name="pass_r2" type="password" class="form-control" placeholder="Repita la contraseña">
            </div>
            <div class="group">
            <input id="bt_submit_crear" class="btn btn-primary button" value="Sign Up" onclick="crear_usuario_admin()">
          </div>
          </form>

          <form id="editar_datos" class="ocultar" action="../test/controlador_editar.php" method="post">
            <div class="form-group ">
              <label for="exampleInputEmail1">Nombre de usuario</label>
              <input id="user_editar" type="text" class="form-control" aria-describedby="emailHelp" name="user_editar" placeholder="Introduzca el nombre de usuario" value="">
              <input id="user_rep" name="user_rep" type="text" value="">

            </div>
            <div class="form-group ">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input  id="email_editar" type="email" class="form-control" aria-describedby="emailHelp" name="email_editar" placeholder="Introduzca el correo electrónico" value="">

            </div>
            <div class="form-group">
              <label  for="exampleInputPassword1">Contraseña</label>
              <input id="pass1_editar" type="text" class="form-control" name="pass1_editar" placeholder="Introduzca la contraseña" value="">
            </div>
            <div class="form-group">
              <label  for="exampleInputPassword1">Repetir contraseña</label>
              <input id="pass2_editar" type="text" class="form-control" name="pass2_editar" placeholder="Introduzca la contraseña" value="">
            </div>
            <div class="form-group form-check">
               <label for="activo_editar" class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="activo_editar" id="activo_editar"> Activo
                 </label>
             </div>
             <input id="resultado_activo" class="ocultar" name="resultado_activo" type="text" value="">

                  <!--<button class="btn btn-primary" onclick=comprobar_editar()>Guardar cambios</button>-->
            <input class="btn btn-primary boton_general"   value="Enviar" onclick="comprobar_editar()">
            <!--<button type="" class="btn btn-primary">Cancelar cambios y volver atras</button>-->
          </form>

        </div>

      </div>
    </div>
  </div>
</body>

</html>
