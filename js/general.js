function login_incorrecto()
{
  alert("El nombre de usuario o la contraseña son inválidos.");
}

function login_correcto()
{

}

var estado_ventana = 0; //0 = nada abierto ; 1 = listar usuarios abierto; 2 = crear usuario abierto; 3 = editar datos abierto

var listar = document.getElementById("listar_usuarios");
var crear = document.getElementById("crear_user");
var editar = document.getElementById("editar_datos");

var boton_listar = document.getElementById("tabla_boton");
var boton_crear = document.getElementById("form_boton");

function ventana_admin(num,contador) {
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

    var _usuario = document.getElementById("user"+contador).textContent;
    var _email = document.getElementById("email"+contador).textContent;
    console.log
  
    document.getElementById("user_editar").value=_usuario;
    document.getElementById("user_rep").value=_usuario;
    document.getElementById("email_editar").value=_email;
    
  }
}

function comprobar_editar(){
  var c1 = document.getElementById("pass1_editar").value;
    var c2 = document.getElementById("pass2_editar").value;
    console.log(c1+"   "+ c2)
    if(c1!=c2){
      alert("Las contraseñas no coinciden. ¡Si quieres cambiar la contraseña. tienen que coincidir!");
      return;
    }else{
      var f = document.getElementById("editar_datos").submit();
    }
}

