var estado_ventana = 0; //0 = nada abierto ; 1 = listar usuarios abierto; 2 = crear usuario abierto; 3 = editar datos abierto

var listar = document.getElementById("listar_usuarios");
var crear = document.getElementById("crear_user");
var editar = document.getElementById("editar_datos");

var boton_listar = document.getElementById("tabla_boton");
var boton_crear = document.getElementById("form_boton");

function ventana_admin(num) {
  var listar = document.getElementById("listar_usuarios");
  var crear = document.getElementById("crear_user");
  var editar = document.getElementById("editar_datos");

  var boton_listar = document.getElementById("tabla_boton");
  var boton_crear = document.getElementById("form_boton");

  if (num == 1) {
    if (estado_ventana == 0) {
      listar.classList.replace("ocultar", "activar");
      boton_listar.classList.add("active");
    } else if (estado_ventana == 2) {
      listar.classList.replace("ocultar", "activar");
      boton_listar.classList.add("active");
      crear.classList.replace("activar", "ocultar");
      boton_crear.classList.remove("active");
    } else {
      listar.classList.replace("ocultar", "activar");
      boton_listar.classList.add("active");
      editar.classList.replace("activar", "ocultar");
    }
    estado_ventana = 1;
  } else if (num == 2) {
    if (estado_ventana == 0) {
      crear.classList.replace("ocultar", "activar");
      boton_crear.classList.add("active");
    } else if (estado_ventana == 1) {
      listar.classList.replace("activar", "ocultar");
      boton_listar.classList.remove("active");
      crear.classList.replace("ocultar", "activar");
      boton_crear.classList.add("active");
    } else {
      crear.classList.replace("ocultar", "activar");
      boton_crear.classList.add("active");
      editar.classList.replace("activar", "ocultar");
    }
    estado_ventana = 2;
  } else if (num == 3) {
    listar.classList.replace("activar", "ocultar");
    boton_listar.classList.remove("active");
    editar.classList.add("activar");

    estado_ventana = 3;
  }
}

/*
$("editar_datos_fafa").click(ventana_admin(3));
*/