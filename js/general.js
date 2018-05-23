//****
//****
//LOGIN
//****
//****
var login_button=document.getElementById("bt_login");
var usuario;
var contraseña;
login_button.onclick= function(e)
{
  usuario = document.getElementById("user");
  contraseña = document.getElementById("pass");

  var formulario = document.getElementById("form");
  var correcto=true;
  if(contraseña.value==""){
    falta_contraseña();
    correcto=false;
  }
  if(usuario.value==""){
    falta_usuario();
    correcto=false;
  }
  if(correcto){
    formulario.submit();
  }
}


function login_incorrecto()
{
  alert("El nombre de usuario o la contraseña son inválidos.");
}

function falta_usuario(){
  document.getElementById("no_user").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}

function falta_contraseña(){
  document.getElementById("no_pass").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}

//****
//****
//REGISTRO
//****
//****
var registro_button=document.getElementById("bt_registro");
var usuario_r;
var contraseña_r1;
var contraseña_r2;
var email_r;

registro_button.onclick= function(e)
{
  usuario_r = document.getElementById("user_r");
  contraseña_r1 = document.getElementById("pass_r");
  contraseña_r2 = document.getElementById("pass_r2");
  email_r = document.getElementById("email_r");

  var formulario = document.getElementById("form_r");
  var correcto=true;
  if(usuario_r.value==""){
    falta_usuario_r();
    correcto=false;
  }
  if(contraseña_r1.value==""){
    falta_contraseña_r1();
    correcto=false;
  }
  if(contraseña_r2.value==""){
    falta_contraseña_r2();
    correcto=false;
  }
  if(contraseña_r1.value != contraseña_r2.value){
    contraseña_no_coincide();
    correcto=false;
  }
  if(email_r.value==""){
    falta_email();
    correcto=false;
  }
  if(correcto){
    formulario.submit();
  }
}

function falta_usuario_r(){
  document.getElementById("no_user_r").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}

function falta_contraseña_r1(){
  document.getElementById("no_pass_r1").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}

function falta_contraseña_r2(){
  document.getElementById("no_pass_r2").innerHTML="<label class='error'>Este campo es obligatorio<br></label>";
}

function contraseña_no_coincide(){
  document.getElementById("no_pass_r2").innerHTML+="<label class='error'>Las contraseñas no coinciden</label>";
}

function falta_email(){
  document.getElementById("no_email").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}

function usuario_ya_existe(){
  alert("Este usuario ya está registrado");
}

function usuario_creado(){
  alert("El usuario ha sido creado con éxito. Debe esperar a que un administrador le dé de alta.");
}

//****
//****
//MARCOS
//****
//****
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
