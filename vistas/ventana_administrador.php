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
                <th>Activo</th>
                <th>Gestionar usuario</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>blas_martin</td>
                <td>blas_martin@ual.prueba.com</td>
                <td>no</td>
                <td class="contenedor">
                  <i class="fa fa-trash-o" style="font-size:24px"></i>
                  <i class="fa fa-pencil-square-o" id="editar_datos_fafa" style="font-size:24px" onclick="ventana_admin(3)"></i>
                </td>
              </tr>
            </tbody>
          </table>
          <form id="crear_user" class="ocultar">
            <div class="form-group ">
              <label for="exampleInputEmail1">Nombre de usuario</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca el nombre de usuario">
            </div>
            <div class="form-group ">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca el correo electrónico">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" placeholder="Introduzca la contraseña">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Repetir contraseña</label>
              <input type="password" class="form-control" placeholder="Repita la contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Añadir usuario</button>
          </form>
          <form id="editar_datos" class="ocultar">
            <div class="form-group ">
              <label for="exampleInputEmail1">Nombre de usuario</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca el nombre de usuario" value="">

            </div>
            <div class="form-group ">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Introduzca el correo electrónico" value="">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="text" class="form-control" placeholder="Introduzca la contraseña" value="gsgdf">
            </div>


            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <button type="" class="btn btn-primary">Cancelar cambios y volver atras</button>
          </form>

        </div>

      </div>
    </div>
  </div>
</body>

</html>
